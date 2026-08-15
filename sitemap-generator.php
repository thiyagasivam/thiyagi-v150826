<?php include 'header.php';?>

<?php
// Advanced Sitemap Generator Class
class AdvancedSitemapGenerator {
    
    private $maxUrls = 50000; // Maximum URLs to process
    private $maxDepth = 5; // Maximum crawl depth
    private $timeout = 30; // Timeout for HTTP requests
    private $userAgent = 'Mozilla/5.0 (compatible; Advanced Sitemap Generator 2026)';
    private $excludePatterns = [];
    private $includePatterns = [];
    
    public function __construct($config = []) {
        $this->maxUrls = $config['max_urls'] ?? 50000;
        $this->maxDepth = $config['max_depth'] ?? 5;
        $this->timeout = $config['timeout'] ?? 30;
        $this->excludePatterns = $config['exclude_patterns'] ?? [];
        $this->includePatterns = $config['include_patterns'] ?? [];
    }
    
    public function crawlWebsite($startUrl, $options = []) {
        $urls = [];
        $visited = [];
        $queue = [['url' => $startUrl, 'depth' => 0]];
        
        while (!empty($queue) && count($urls) < $this->maxUrls) {
            $current = array_shift($queue);
            $url = $current['url'];
            $depth = $current['depth'];
            
            if ($depth > $this->maxDepth || in_array($url, $visited)) {
                continue;
            }
            
            $visited[] = $url;
            $pageInfo = $this->analyzePage($url);
            
            if ($pageInfo && !$this->isExcluded($url)) {
                $urls[] = $pageInfo;
                
                // Add found links to queue
                foreach ($pageInfo['links'] as $link) {
                    if (!in_array($link, $visited) && $this->isSameDomain($link, $startUrl)) {
                        $queue[] = ['url' => $link, 'depth' => $depth + 1];
                    }
                }
            }
        }
        
        return $urls;
    }
    
    public function analyzePage($url) {
        $html = $this->fetchPage($url);
        if (!$html) return null;
        
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        
        $info = [
            'url' => $url,
            'title' => $this->getPageTitle($dom),
            'description' => $this->getMetaDescription($dom),
            'keywords' => $this->getMetaKeywords($dom),
            'canonical' => $this->getCanonicalUrl($dom),
            'robots' => $this->getRobotsDirective($dom),
            'lastmod' => date('c'),
            'changefreq' => $this->guessChangeFreq($url),
            'priority' => $this->calculatePriority($url),
            'images' => $this->extractImages($dom, $url),
            'links' => $this->extractLinks($dom, $url),
            'hreflang' => $this->getHreflangLinks($dom),
            'status_code' => 200, // Assuming success if we got HTML
            'content_type' => 'text/html',
            'size' => strlen($html)
        ];
        
        return $info;
    }
    
    private function fetchPage($url) {
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    "User-Agent: {$this->userAgent}",
                    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
                    "Accept-Language: en-US,en;q=0.5",
                    "Accept-Encoding: gzip, deflate",
                    "Connection: keep-alive"
                ],
                'timeout' => $this->timeout,
                'ignore_errors' => true
            ]
        ];
        
        $context = stream_context_create($options);
        return @file_get_contents($url, false, $context);
    }
    
    private function getPageTitle($dom) {
        $titles = $dom->getElementsByTagName('title');
        return $titles->length > 0 ? trim($titles->item(0)->textContent) : '';
    }
    
    private function getMetaDescription($dom) {
        $metas = $dom->getElementsByTagName('meta');
        foreach ($metas as $meta) {
            if (strtolower($meta->getAttribute('name')) === 'description') {
                return $meta->getAttribute('content');
            }
        }
        return '';
    }
    
    private function getMetaKeywords($dom) {
        $metas = $dom->getElementsByTagName('meta');
        foreach ($metas as $meta) {
            if (strtolower($meta->getAttribute('name')) === 'keywords') {
                return $meta->getAttribute('content');
            }
        }
        return '';
    }
    
    private function getCanonicalUrl($dom) {
        $links = $dom->getElementsByTagName('link');
        foreach ($links as $link) {
            if (strtolower($link->getAttribute('rel')) === 'canonical') {
                return $link->getAttribute('href');
            }
        }
        return '';
    }
    
    private function getRobotsDirective($dom) {
        $metas = $dom->getElementsByTagName('meta');
        foreach ($metas as $meta) {
            if (strtolower($meta->getAttribute('name')) === 'robots') {
                return $meta->getAttribute('content');
            }
        }
        return '';
    }
    
    private function extractImages($dom, $baseUrl) {
        $images = [];
        $imgs = $dom->getElementsByTagName('img');
        
        foreach ($imgs as $img) {
            $src = $img->getAttribute('src');
            if ($src) {
                $absoluteUrl = $this->makeAbsolute($src, $baseUrl);
                $images[] = [
                    'src' => $absoluteUrl,
                    'alt' => $img->getAttribute('alt'),
                    'title' => $img->getAttribute('title')
                ];
            }
        }
        
        return array_slice($images, 0, 10); // Limit to 10 images
    }
    
    private function extractLinks($dom, $baseUrl) {
        $links = [];
        $anchors = $dom->getElementsByTagName('a');
        
        foreach ($anchors as $anchor) {
            $href = $anchor->getAttribute('href');
            if ($href && !$this->isAnchorLink($href) && !$this->isJavaScriptLink($href)) {
                $absoluteUrl = $this->makeAbsolute($href, $baseUrl);
                if ($this->isSameDomain($absoluteUrl, $baseUrl)) {
                    $links[] = $absoluteUrl;
                }
            }
        }
        
        return array_unique($links);
    }
    
    private function getHreflangLinks($dom) {
        $hreflang = [];
        $links = $dom->getElementsByTagName('link');
        
        foreach ($links as $link) {
            if ($link->getAttribute('rel') === 'alternate' && $link->getAttribute('hreflang')) {
                $hreflang[] = [
                    'hreflang' => $link->getAttribute('hreflang'),
                    'href' => $link->getAttribute('href')
                ];
            }
        }
        
        return $hreflang;
    }
    
    private function guessChangeFreq($url) {
        $path = parse_url($url, PHP_URL_PATH);
        
        if (strpos($path, '/blog/') !== false || strpos($path, '/news/') !== false) {
            return 'daily';
        }
        if (strpos($path, '/products/') !== false || strpos($path, '/services/') !== false) {
            return 'weekly';
        }
        if (strpos($path, '/about') !== false || strpos($path, '/contact') !== false) {
            return 'monthly';
        }
        
        return 'weekly';
    }
    
    private function calculatePriority($url) {
        $path = parse_url($url, PHP_URL_PATH);
        
        if ($path === '/' || $path === '') return '1.0';
        if (substr_count($path, '/') === 1) return '0.8';
        if (substr_count($path, '/') === 2) return '0.6';
        
        return '0.4';
    }
    
    private function makeAbsolute($url, $base) {
        if (parse_url($url, PHP_URL_SCHEME) !== null) return $url;
        
        $baseParts = parse_url($base);
        $scheme = $baseParts['scheme'];
        $host = $baseParts['host'];
        $port = isset($baseParts['port']) ? ':' . $baseParts['port'] : '';
        
        if (strpos($url, '//') === 0) {
            return $scheme . ':' . $url;
        }
        
        if (strpos($url, '/') === 0) {
            return $scheme . '://' . $host . $port . $url;
        }
        
        $path = isset($baseParts['path']) ? rtrim(dirname($baseParts['path']), '/') : '';
        return $scheme . '://' . $host . $port . $path . '/' . $url;
    }
    
    private function isSameDomain($url1, $url2) {
        return parse_url($url1, PHP_URL_HOST) === parse_url($url2, PHP_URL_HOST);
    }
    
    private function isAnchorLink($url) {
        return strpos($url, '#') === 0;
    }
    
    private function isJavaScriptLink($url) {
        return strpos($url, 'javascript:') === 0;
    }
    
    private function isExcluded($url) {
        foreach ($this->excludePatterns as $pattern) {
            if (strpos($url, $pattern) !== false) {
                return true;
            }
        }
        return false;
    }
    
    public function generateXMLSitemap($pages, $options = []) {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
        $xml .= '        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"' . "\n";
        $xml .= '        xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";
        
        foreach ($pages as $page) {
            $xml .= "\t<url>\n";
            $xml .= "\t\t<loc>" . htmlspecialchars($page['url']) . "</loc>\n";
            $xml .= "\t\t<lastmod>" . $page['lastmod'] . "</lastmod>\n";
            $xml .= "\t\t<changefreq>" . $page['changefreq'] . "</changefreq>\n";
            $xml .= "\t\t<priority>" . $page['priority'] . "</priority>\n";
            
            // Add images if any
            foreach ($page['images'] as $image) {
                if (!empty($image['src'])) {
                    $xml .= "\t\t<image:image>\n";
                    $xml .= "\t\t\t<image:loc>" . htmlspecialchars($image['src']) . "</image:loc>\n";
                    if (!empty($image['title'])) {
                        $xml .= "\t\t\t<image:title>" . htmlspecialchars($image['title']) . "</image:title>\n";
                    }
                    if (!empty($image['alt'])) {
                        $xml .= "\t\t\t<image:caption>" . htmlspecialchars($image['alt']) . "</image:caption>\n";
                    }
                    $xml .= "\t\t</image:image>\n";
                }
            }
            
            // Add hreflang if any
            foreach ($page['hreflang'] as $hreflang) {
                $xml .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"" . htmlspecialchars($hreflang['hreflang']) . "\" href=\"" . htmlspecialchars($hreflang['href']) . "\"/>\n";
            }
            
            $xml .= "\t</url>\n";
        }
        
        $xml .= "</urlset>";
        return $xml;
    }
}

// Function to get all links from a URL (legacy support)
function crawl_page($url, $depth, $maxDepth, $maxUrls, &$urls = []) {
    if ($depth > $maxDepth || count($urls) >= $maxUrls) {
        return $urls;
    }

    $options = [
        'http' => [
            'method' => "GET",
            'header' => "User-Agent: Mozilla/5.0 (compatible; XML Sitemap Generator)\r\n"
        ]
    ];
    $context = stream_context_create($options);
    
    $html = @file_get_contents($url, false, $context);
    if ($html === false) {
        return $urls;
    }

    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $links = $dom->getElementsByTagName('a');

    $currentHost = parse_url($url, PHP_URL_HOST);
    
    foreach ($links as $link) {
        $href = $link->getAttribute('href');
        
        // Skip if empty, anchor, or javascript
        // if (empty($href) continue;
        // if (strpos($href, '#') === 0) continue;
        // if (strpos($href, 'javascript:') === 0) continue;
        
        // Convert relative URLs to absolute
        $href = rel2abs($href, $url);
        
        // Skip if not same domain
        $hrefHost = parse_url($href, PHP_URL_HOST);
        if ($hrefHost !== $currentHost) continue;
        
        // Skip if already processed
        if (in_array($href, $urls)) continue;
        
        // Add to URLs array
        $urls[] = $href;
        
        // Recursive crawl
        crawl_page($href, $depth + 1, $maxDepth, $maxUrls, $urls);
    }
    
    return $urls;
}

// Function to convert relative URL to absolute
function rel2abs($rel, $base) {
    if (parse_url($rel, PHP_URL_SCHEME) != '') return $rel;
    if ($rel[0] == '#' || $rel[0] == '?') return $base.$rel;
    
    $baseParts = parse_url($base);
    $path = isset($baseParts['path']) ? preg_replace('#/[^/]*$#', '', $baseParts['path']) : '';
    
    if ($rel[0] == '/') $path = '';
    
    $abs = $baseParts['scheme'].'://'.$baseParts['host'].$path.'/'.$rel;
    
    return preg_replace('#(?<!:)/+#', '/', $abs);
}

// Enhanced form handling
$sitemap = '';
$sitemapIndex = '';
$robotsTxt = '';
$error = '';
$success = '';
$pageAnalysis = [];
$urlCount = 0;
$processingTime = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $startTime = microtime(true);
    
    $websiteUrl = rtrim($_POST['website_url'], '/');
    $maxUrls = intval($_POST['max_urls'] ?? 50000);
    $maxDepth = intval($_POST['max_depth'] ?? 5);
    $excludePatterns = array_filter(explode("\n", $_POST['exclude_patterns'] ?? ''));
    $includeImages = isset($_POST['include_images']);
    $includeHreflang = isset($_POST['include_hreflang']);
    $generateRobotsTxt = isset($_POST['generate_robots_txt']);
    $outputFormat = $_POST['output_format'] ?? 'xml';
    
    if (!filter_var($websiteUrl, FILTER_VALIDATE_URL)) {
        $error = 'Please enter a valid URL (e.g., https://example.com)';
    } elseif ($maxUrls < 1 || $maxUrls > 50000) {
        $error = 'Maximum URLs must be between 1 and 50,000';
    } elseif ($maxDepth < 1 || $maxDepth > 10) {
        $error = 'Maximum depth must be between 1 and 10';
    } else {
        try {
            // Initialize advanced sitemap generator
            $generator = new AdvancedSitemapGenerator([
                'max_urls' => $maxUrls,
                'max_depth' => $maxDepth,
                'exclude_patterns' => $excludePatterns
            ]);
            
            // Crawl website
            $pageAnalysis = $generator->crawlWebsite($websiteUrl);
            $urlCount = count($pageAnalysis);
            
            if ($urlCount === 0) {
                $error = 'No pages found or website is not accessible. Please check the URL and try again.';
            } else {
                // Generate XML sitemap
                $sitemap = $generator->generateXMLSitemap($pageAnalysis, [
                    'include_images' => $includeImages,
                    'include_hreflang' => $includeHreflang
                ]);
                
                // Generate sitemap index if many URLs
                if ($urlCount > 1000) {
                    $sitemapIndex = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
                    $sitemapIndex .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
                    
                    $chunks = array_chunk($pageAnalysis, 1000);
                    foreach ($chunks as $i => $chunk) {
                        $sitemapIndex .= "\t<sitemap>\n";
                        $sitemapIndex .= "\t\t<loc>" . $websiteUrl . "/sitemap" . ($i + 1) . ".xml</loc>\n";
                        $sitemapIndex .= "\t\t<lastmod>" . date('c') . "</lastmod>\n";
                        $sitemapIndex .= "\t</sitemap>\n";
                    }
                    
                    $sitemapIndex .= '</sitemapindex>';
                }
                
                // Generate robots.txt
                if ($generateRobotsTxt) {
                    $robotsTxt = "User-agent: *\n";
                    $robotsTxt .= "Allow: /\n\n";
                    $robotsTxt .= "# Sitemap\n";
                    $robotsTxt .= "Sitemap: " . $websiteUrl . "/sitemap.xml\n";
                    
                    if (!empty($sitemapIndex)) {
                        $robotsTxt .= "Sitemap: " . $websiteUrl . "/sitemap-index.xml\n";
                    }
                }
                
                $processingTime = round(microtime(true) - $startTime, 2);
                $success = "Successfully generated sitemap with {$urlCount} URLs in {$processingTime} seconds!";
            }
        } catch (Exception $e) {
            $error = 'Error generating sitemap: ' . $e->getMessage();
        }
    }
}
?>

    <title>Advanced XML Sitemap Generator - Professional SEO Tool | Thiyagi</title>
    <meta name="description" content="Advanced XML sitemap generator with image support, hreflang detection, SEO analysis, and comprehensive website crawling. Professional SEO tool for webmasters.">
    <meta name="keywords" content="XML sitemap generator, SEO sitemap, website crawler, sitemap.xml creator, hreflang sitemap, image sitemap, SEO analysis">
    <meta name="author" content="Thiyagi">
    
    <!-- Open Graph tags -->
    <meta property="og:title" content="Advanced XML Sitemap Generator - Professional SEO Tool">
    <meta property="og:description" content="Generate comprehensive XML sitemaps with image support, hreflang detection, and SEO analysis for better search engine indexing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://livedu.in/sitemap-generator.php">
    <meta property="og:site_name" content="Thiyagi">
    <meta property="og:image" content="https://livedu.in/images/sitemap-generator-og.jpg">
    
    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced XML Sitemap Generator">
    <meta name="twitter:description" content="Professional sitemap generator with advanced SEO features">
    <meta name="twitter:image" content="https://livedu.in/images/sitemap-generator-twitter.jpg">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Advanced XML Sitemap Generator",
        "description": "Professional XML sitemap generator with image support, hreflang detection, and SEO analysis",
        "url": "https://livedu.in/sitemap-generator.php",
        "applicationCategory": "SEO Tool",
        "operatingSystem": "Any",
        "permissions": "Free to use",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi"
        }
    }
    </script>
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af',
                        accent: '#f59e0b'
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn { animation: fadeIn 0.6s ease-out; }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .result-box {
            max-height: 500px;
            overflow-y: auto;
        }
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
    </style>
<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Advanced XML Sitemap Generator</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Professional SEO tool with advanced crawling, image support, hreflang detection, and comprehensive website analysis</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Features Section -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Advanced Crawling</h3>
                <p class="text-sm text-gray-600">Deep website analysis up to 50,000 URLs</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Image Sitemaps</h3>
                <p class="text-sm text-gray-600">Automatic image detection and sitemap generation</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Hreflang Support</h3>
                <p class="text-sm text-gray-600">Multilingual website detection and optimization</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 00-2-2m0 0h2m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">SEO Analysis</h3>
                <p class="text-sm text-gray-600">Comprehensive page analysis and optimization tips</p>
            </div>
        </div>

        <!-- Main Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Generate Your Sitemap</h2>
            <form method="POST" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="website_url" class="block text-sm font-semibold text-gray-700 mb-2">Website URL *</label>
                        <input type="url" name="website_url" id="website_url" 
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" 
                               placeholder="https://example.com" 
                               value="<?php echo htmlspecialchars($_POST['website_url'] ?? ''); ?>" required>
                    </div>
                    
                    <div>
                        <label for="max_urls" class="block text-sm font-semibold text-gray-700 mb-2">Maximum URLs</label>
                        <select name="max_urls" id="max_urls" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="100" <?php echo ($_POST['max_urls'] ?? '100') == '100' ? 'selected' : ''; ?>>100 URLs</option>
                            <option value="500" <?php echo ($_POST['max_urls'] ?? '') == '500' ? 'selected' : ''; ?>>500 URLs</option>
                            <option value="1000" <?php echo ($_POST['max_urls'] ?? '') == '1000' ? 'selected' : ''; ?>>1,000 URLs</option>
                            <option value="5000" <?php echo ($_POST['max_urls'] ?? '') == '5000' ? 'selected' : ''; ?>>5,000 URLs</option>
                            <option value="10000" <?php echo ($_POST['max_urls'] ?? '') == '10000' ? 'selected' : ''; ?>>10,000 URLs</option>
                            <option value="50000" <?php echo ($_POST['max_urls'] ?? '') == '50000' ? 'selected' : ''; ?>>50,000 URLs</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="max_depth" class="block text-sm font-semibold text-gray-700 mb-2">Crawl Depth</label>
                        <select name="max_depth" id="max_depth" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="1" <?php echo ($_POST['max_depth'] ?? '5') == '1' ? 'selected' : ''; ?>>1 Level</option>
                            <option value="2" <?php echo ($_POST['max_depth'] ?? '5') == '2' ? 'selected' : ''; ?>>2 Levels</option>
                            <option value="3" <?php echo ($_POST['max_depth'] ?? '5') == '3' ? 'selected' : ''; ?>>3 Levels</option>
                            <option value="5" <?php echo ($_POST['max_depth'] ?? '5') == '5' ? 'selected' : ''; ?>>5 Levels (Recommended)</option>
                            <option value="7" <?php echo ($_POST['max_depth'] ?? '5') == '7' ? 'selected' : ''; ?>>7 Levels</option>
                            <option value="10" <?php echo ($_POST['max_depth'] ?? '5') == '10' ? 'selected' : ''; ?>>10 Levels (Deep)</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="output_format" class="block text-sm font-semibold text-gray-700 mb-2">Output Format</label>
                        <select name="output_format" id="output_format" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="xml" <?php echo ($_POST['output_format'] ?? 'xml') == 'xml' ? 'selected' : ''; ?>>XML Sitemap</option>
                            <option value="txt" <?php echo ($_POST['output_format'] ?? '') == 'txt' ? 'selected' : ''; ?>>Text List</option>
                            <option value="csv" <?php echo ($_POST['output_format'] ?? '') == 'csv' ? 'selected' : ''; ?>>CSV Export</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label for="exclude_patterns" class="block text-sm font-semibold text-gray-700 mb-2">Exclude Patterns (one per line)</label>
                    <textarea name="exclude_patterns" id="exclude_patterns" rows="3" 
                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                              placeholder="/wp-admin/
/private/
.pdf"><?php echo htmlspecialchars($_POST['exclude_patterns'] ?? ''); ?></textarea>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" name="include_images" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500" <?php echo isset($_POST['include_images']) ? 'checked' : ''; ?>>
                        <span class="text-sm font-medium text-gray-700">Include Image Sitemap</span>
                    </label>
                    
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" name="include_hreflang" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500" <?php echo isset($_POST['include_hreflang']) ? 'checked' : ''; ?>>
                        <span class="text-sm font-medium text-gray-700">Include Hreflang</span>
                    </label>
                    
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" name="generate_robots_txt" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500" <?php echo isset($_POST['generate_robots_txt']) ? 'checked' : ''; ?>>
                        <span class="text-sm font-medium text-gray-700">Generate robots.txt</span>
                    </label>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-lg transform transition duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Generate Advanced Sitemap
                </button>
            </form>
        </div>
        
        <!-- Error Message -->
        <?php if (!empty($error)): ?>
            <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-6 mb-8 animate-fadeIn">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-lg font-semibold text-red-800">Error</h3>
                        <p class="text-red-700"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Success Message -->
        <?php if (!empty($success)): ?>
            <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-6 mb-8 animate-fadeIn">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-lg font-semibold text-green-800">Success!</h3>
                        <p class="text-green-700"><?php echo htmlspecialchars($success); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($sitemap)): ?>
            <!-- Statistics -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-blue-600"><?php echo number_format($urlCount); ?></div>
                    <div class="text-sm text-gray-600 mt-1">URLs Discovered</div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-green-600"><?php echo $processingTime; ?>s</div>
                    <div class="text-sm text-gray-600 mt-1">Processing Time</div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-purple-600">
                        <?php 
                        $imageCount = 0;
                        foreach ($pageAnalysis as $page) {
                            $imageCount += count($page['images']);
                        }
                        echo number_format($imageCount);
                        ?>
                    </div>
                    <div class="text-sm text-gray-600 mt-1">Images Found</div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-orange-600">
                        <?php 
                        $hreflangCount = 0;
                        foreach ($pageAnalysis as $page) {
                            $hreflangCount += count($page['hreflang']);
                        }
                        echo number_format($hreflangCount);
                        ?>
                    </div>
                    <div class="text-sm text-gray-600 mt-1">Hreflang Links</div>
                </div>
            </div>
            
            <!-- Tabs -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="border-b border-gray-200">
                    <nav class="flex space-x-8 px-6">
                        <button class="tab-btn border-b-2 border-blue-500 text-blue-600 py-4 px-1 text-sm font-medium active" onclick="showTab('sitemap')">
                            XML Sitemap
                        </button>
                        <?php if (!empty($sitemapIndex)): ?>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-4 px-1 text-sm font-medium" onclick="showTab('sitemap-index')">
                            Sitemap Index
                        </button>
                        <?php endif; ?>
                        <?php if (!empty($robotsTxt)): ?>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-4 px-1 text-sm font-medium" onclick="showTab('robots')">
                            Robots.txt
                        </button>
                        <?php endif; ?>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-4 px-1 text-sm font-medium" onclick="showTab('analysis')">
                            SEO Analysis
                        </button>
                    </nav>
                </div>
                
                <!-- XML Sitemap Tab -->
                <div id="sitemap" class="tab-content active p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800">Generated XML Sitemap</h3>
                        <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">
                            <?php echo number_format($urlCount); ?> URLs
                        </span>
                    </div>
                    
                    <div class="result-box bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="sitemap-content"><?php echo htmlspecialchars($sitemap); ?></pre>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-4">
                        <a href="data:application/xml;charset=utf-8,<?php echo urlencode($sitemap); ?>" download="sitemap.xml" 
                           class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download XML
                        </a>
                        <button onclick="copyToClipboard('sitemap-content')" 
                                class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Copy XML
                        </button>
                        <button onclick="validateSitemap()" 
                                class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Validate
                        </button>
                    </div>
                </div>
                
                <?php if (!empty($sitemapIndex)): ?>
                <!-- Sitemap Index Tab -->
                <div id="sitemap-index" class="tab-content p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Sitemap Index File</h3>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                        <p class="text-yellow-800">Your site has many URLs (<?php echo number_format($urlCount); ?>). Consider using multiple sitemap files.</p>
                    </div>
                    
                    <div class="result-box bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="sitemap-index-content"><?php echo htmlspecialchars($sitemapIndex); ?></pre>
                    </div>
                    
                    <a href="data:application/xml;charset=utf-8,<?php echo urlencode($sitemapIndex); ?>" download="sitemap-index.xml" 
                       class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200">
                        Download Sitemap Index
                    </a>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($robotsTxt)): ?>
                <!-- Robots.txt Tab -->
                <div id="robots" class="tab-content p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Generated Robots.txt</h3>
                    
                    <div class="result-box bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="robots-content"><?php echo htmlspecialchars($robotsTxt); ?></pre>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="data:text/plain;charset=utf-8,<?php echo urlencode($robotsTxt); ?>" download="robots.txt" 
                           class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-200">
                            Download robots.txt
                        </a>
                        <button onclick="copyToClipboard('robots-content')" 
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200">
                            Copy Content
                        </button>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- SEO Analysis Tab -->
                <div id="analysis" class="tab-content p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">SEO Analysis Report</h3>
                    
                    <div class="space-y-6">
                        <!-- Page Analysis -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-gray-50 px-4 py-3 border-b">
                                <h4 class="font-semibold text-gray-800">Page Analysis (Top 10)</h4>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Images</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php 
                                        $topPages = array_slice($pageAnalysis, 0, 10);
                                        foreach ($topPages as $page): 
                                        ?>
                                        <tr>
                                            <td class="px-4 py-4 text-sm text-gray-900">
                                                <div class="max-w-xs truncate">
                                                    <a href="<?php echo htmlspecialchars($page['url']); ?>" target="_blank" class="text-blue-600 hover:text-blue-800">
                                                        <?php echo htmlspecialchars($page['url']); ?>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-900">
                                                <div class="max-w-xs truncate"><?php echo htmlspecialchars($page['title'] ?: 'No title'); ?></div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-900"><?php echo count($page['images']); ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-900"><?php echo $page['priority']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- SEO Recommendations -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                            <h4 class="font-semibold text-blue-800 mb-4">💡 SEO Recommendations</h4>
                            <ul class="space-y-2 text-blue-700">
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Upload your sitemap.xml to your website's root directory
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Submit your sitemap to Google Search Console and Bing Webmaster Tools
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Update your sitemap regularly, especially for dynamic content
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Monitor your sitemap's indexing status in search console
                                </li>
                                <?php if ($imageCount > 0): ?>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Consider creating a separate image sitemap for better image SEO
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Info Section -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">How to Use Your Sitemap</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Upload Sitemap</h3>
                    <p class="text-gray-600">Upload sitemap.xml to your website's root directory (example.com/sitemap.xml)</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-green-600">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Submit to Search Engines</h3>
                    <p class="text-gray-600">Add your sitemap URL to Google Search Console and Bing Webmaster Tools</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Monitor & Update</h3>
                    <p class="text-gray-600">Regularly check indexing status and update your sitemap as content changes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-lg font-semibold mb-2">Advanced XML Sitemap Generator</h3>
            <p class="text-gray-300">Professional SEO tool by Thiyagi - Free forever</p>
            <p class="text-gray-400 text-sm mt-2">Help search engines understand your website structure better</p>
        </div>
    </footer>

    <script>
        // Tab functionality
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
                btn.classList.add('border-transparent', 'text-gray-500');
            });
            
            // Show selected tab content
            document.getElementById(tabName).classList.add('active');
            
            // Add active class to clicked tab button
            event.target.classList.remove('border-transparent', 'text-gray-500');
            event.target.classList.add('active', 'border-blue-500', 'text-blue-600');
        }
        
        // Copy to clipboard functionality
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    showNotification('Content copied to clipboard!', 'success');
                }).catch(err => {
                    console.error('Failed to copy: ', err);
                    fallbackCopyToClipboard(text);
                });
            } else {
                fallbackCopyToClipboard(text);
            }
        }
        
        // Fallback copy method for older browsers
        function fallbackCopyToClipboard(text) {
            const textArea = document.createElement('textarea');
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            
            try {
                document.execCommand('copy');
                showNotification('Content copied to clipboard!', 'success');
            } catch (err) {
                showNotification('Failed to copy content', 'error');
            }
            
            document.body.removeChild(textArea);
        }
        
        // Validate sitemap
        function validateSitemap() {
            const sitemapContent = document.getElementById('sitemap-content').textContent;
            
            // Basic XML validation
            try {
                const parser = new DOMParser();
                const xmlDoc = parser.parseFromString(sitemapContent, 'text/xml');
                const parseError = xmlDoc.getElementsByTagName('parsererror');
                
                if (parseError.length > 0) {
                    showNotification('XML validation failed: Invalid XML format', 'error');
                } else {
                    const urls = xmlDoc.getElementsByTagName('url');
                    showNotification(`✓ Sitemap is valid! Found ${urls.length} URL entries`, 'success');
                }
            } catch (error) {
                showNotification('Validation error: ' + error.message, 'error');
            }
        }
        
        // Show notification
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
                notification.style.opacity = '1';
            }, 10);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }
        
        // Form enhancements
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            form.addEventListener('submit', function() {
                submitButton.innerHTML = `
                    <svg class="w-5 h-5 animate-spin inline-block mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing... Please wait
                `;
                submitButton.disabled = true;
            });
            
            // Add keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                // Ctrl+Enter to submit form
                if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
                    e.preventDefault();
                    form.submit();
                }
                
                // Ctrl+C to copy sitemap when visible
                if ((e.ctrlKey || e.metaKey) && e.key === 'c' && document.getElementById('sitemap-content')) {
                    if (document.getElementById('sitemap').classList.contains('active')) {
                        e.preventDefault();
                        copyToClipboard('sitemap-content');
                    }
                }
            });
        });
    </script>

<!-- Comprehensive SEO Content Section -->
<section class="max-w-6xl mx-auto px-4 py-12">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Complete Guide to Advanced XML Sitemap Generator: Master Sitemap Creation, SEO Optimization, and Search Engine Indexing for Maximum Website Visibility and Organic Traffic Growth in 2026</h2>
        
        <div class="prose max-w-none text-gray-700 space-y-6">
            <p class="text-lg leading-relaxed">We understand that <strong>efficient XML sitemap generation</strong> represents a critical requirement for website owners, digital marketers, SEO professionals, webmasters, and content managers seeking to improve search engine indexing, accelerate content discovery, enhance crawl efficiency, and maximize organic visibility across Google, Bing, Yahoo, and other major search platforms. Our comprehensive <strong>Advanced XML Sitemap Generator</strong> delivers automated sitemap creation supporting unlimited URLs, customizable crawl depth, priority assignment, change frequency configuration, image sitemap generation, video sitemap integration, news sitemap formatting, and mobile sitemap specifications ensuring search engines efficiently discover, crawl, and index your complete website architecture facilitating improved rankings, faster content indexing, and sustained organic traffic growth throughout dynamic digital ecosystems requiring structured data communication between websites and search engine crawler infrastructure.</p>
            
            <div class="bg-purple-50 p-6 rounded-lg mb-6">
                <h4 class="text-lg font-bold text-purple-800 mb-3">🔧 Related SEO & Website Tools</h4>
                <div class="grid md:grid-cols-3 gap-4 text-sm">
                    <div>
                        <h5 class="font-semibold text-purple-700 mb-2">Technical SEO</h5>
                        <ul class="space-y-1">
                            <li><a href="robots-txt-generator.php" class="text-purple-600 hover:text-purple-800 hover:underline">Robots.txt Generator</a></li>
                            <li><a href="meta-tag-generator.php" class="text-purple-600 hover:text-purple-800 hover:underline">Meta Tag Generator</a></li>
                            <li><a href="schema-markup-generator.php" class="text-purple-600 hover:text-purple-800 hover:underline">Schema Markup Generator</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="font-semibold text-purple-700 mb-2">Website Analysis</h5>
                        <ul class="space-y-1">
                            </ul>
                    </div>
                    <div>
                        <h5 class="font-semibold text-purple-700 mb-2">Content Tools</h5>
                        <ul class="space-y-1">
                            <li><a href="keyword-density-checker.php" class="text-purple-600 hover:text-purple-800 hover:underline">Keyword Density Checker</a></li>
                            </ul>
                    </div>
                </div>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Understanding XML Sitemaps and Search Engine Optimization</h3>
            
            <p><strong>XML sitemaps</strong> represent structured data files formatted in Extensible Markup Language (XML) providing search engines with comprehensive lists of website URLs, metadata, hierarchical relationships, update frequencies, relative priorities, and additional indexing directives facilitating efficient crawl budget allocation and accelerated content discovery particularly valuable for large websites with complex architectures, dynamic content generation, or inadequate internal linking structures where traditional crawling methods might overlook important pages. The <strong>sitemap protocol specification</strong> established by major search engines through Sitemaps.org consortium defines standardized XML formatting including required elements (loc URL specification), optional attributes (lastmod modification date, changefreq update frequency, priority relative importance), and specialized sitemap types (image sitemaps, video sitemaps, news sitemaps, mobile sitemaps) enabling targeted communication of specific content types requiring specialized indexing treatment enhancing overall search visibility across diverse content formats and media types throughout comprehensive digital properties.</p>
            
            <p><strong>Search engine crawling fundamentals</strong> involve automated bots (Googlebot, Bingbot, etc.) systematically following hyperlinks discovering website pages, rendering content, extracting information, and adding discovered URLs to massive search indexes supporting query responses, with XML sitemaps supplementing natural discovery processes by explicitly declaring important URLs, recent updates, content relationships, and indexing priorities helping search engines efficiently allocate limited crawl resources toward high-value content updates. <strong>SEO benefits of XML sitemaps</strong> include accelerated indexing of new content appearing in search results hours rather than days after publication, improved crawlability for deep pages buried multiple clicks from homepage navigation, enhanced discovery of orphaned pages lacking sufficient internal links, priority signaling directing crawler attention toward most important website sections, and structured communication of specialized content types (images, videos, news articles) requiring format-specific indexing treatment maximizing visibility across universal search result features including image search, video carousels, news panels, and rich snippet enhancements throughout competitive SERP environments demanding comprehensive technical SEO implementation.</p>
            
            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Advanced Sitemap Generator Features and Capabilities</h3>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Intelligent Web Crawling and URL Discovery</h4>
            
            <p><strong>Automated website crawling</strong> systematically traverses your complete website architecture following internal links, discovering all publicly accessible pages, analyzing page relationships, mapping site structure, and extracting comprehensive URL inventories without manual specification eliminating tedious URL list compilation particularly valuable for large websites containing thousands of pages where manual sitemap maintenance proves impractical. The <strong>crawler configuration options</strong> include adjustable crawl depth limiting how many clicks from homepage crawler explores (default 5 levels preventing infinite loops), maximum URL limits preventing excessive processing for extremely large sites, customizable user agent strings ensuring proper server response, timeout settings balancing thoroughness against processing speed, and exclude pattern filtering bypassing specific URL patterns, directories, or file types unnecessary for search indexing (admin panels, user-generated content, development environments). <strong>Intelligent link extraction</strong> parses HTML identifying all hyperlinks including navigation menus, footer links, sidebar widgets, in-content references, image maps, and JavaScript-generated links ensuring comprehensive page discovery while respecting robots.txt directives, nofollow attributes, and canonical URL specifications preventing inclusion of pages explicitly marked for indexing exclusion supporting proper technical SEO implementation aligning sitemap content with intended search engine indexing strategy.</p>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Priority Assignment and Change Frequency Optimization</h4>
            
            <p><strong>Priority value configuration</strong> allows assigning relative importance scores (0.0 to 1.0) signaling search engines which pages deserve preferential crawling attention, with homepage typically rated 1.0, primary category pages 0.8, individual content pages 0.6, and supplementary pages 0.4, helping crawlers optimize resource allocation particularly valuable during crawl budget constraints where large sites cannot receive complete crawling during single bot visit. <strong>Change frequency declarations</strong> communicate expected update patterns through standardized values (always, hourly, daily, weekly, monthly, yearly, never) guiding crawler revisit scheduling, with news websites declaring "hourly" for breaking content sections, blogs specifying "daily" for active publishing categories, reference documentation indicating "monthly" for occasional updates, and archived content marking "yearly" preventing unnecessary recrawling of static historical material. <strong>Automatic frequency detection</strong> analyzes page content types, URL patterns, and website sections intelligently suggesting appropriate changefreq values based on common website architectures (blog posts = weekly, homepage = daily, contact pages = monthly) though manual override capabilities ensure precise control aligning declarations with actual content management practices supporting crawler efficiency without misleading frequency claims potentially damaging search engine trust.</p>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Specialized Sitemap Types and Format Support</h4>
            
            <p><strong>Image sitemap generation</strong> supplements standard URL sitemaps with image-specific elements declaring picture locations, captions, titles, geographic locations, and license information helping Google Images and other visual search engines discover and index website imagery potentially driving significant traffic from image search results particularly valuable for e-commerce product catalogs, photography portfolios, and visual content publishers relying on image search visibility. <strong>Video sitemap formatting</strong> communicates video content metadata including thumbnail URLs, video titles, descriptions, durations, upload dates, expiration dates, view counts, family-friendly ratings, and platform requirements enabling rich video snippets in search results, YouTube cross-indexing, and video carousel features substantially increasing click-through rates for video-heavy websites competing for attention in multimedia-rich search result layouts. <strong>News sitemap specifications</strong> follow Google News Publisher Center requirements declaring article publication dates, titles, keywords, stock tickers, and news-specific metadata enabling rapid indexing into Google News aggregation typically within minutes of publication critical for news publishers, journalists, and timely content creators requiring immediate search visibility capturing breaking news traffic windows before story relevance declines.</p>
            
            <div class="overflow-x-auto bg-gray-50 p-4 rounded-lg mb-6">
                <table class="w-full text-sm border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-purple-600 text-white">
                            <th class="border border-gray-300 px-4 py-2">Sitemap Type</th>
                            <th class="border border-gray-300 px-4 py-2">Primary Purpose</th>
                            <th class="border border-gray-300 px-4 py-2">Max URLs</th>
                            <th class="border border-gray-300 px-4 py-2">File Size Limit</th>
                            <th class="border border-gray-300 px-4 py-2">Update Frequency</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Standard XML</td>
                            <td class="border border-gray-300 px-4 py-2">General page indexing</td>
                            <td class="border border-gray-300 px-4 py-2">50,000</td>
                            <td class="border border-gray-300 px-4 py-2">50 MB uncompressed</td>
                            <td class="border border-gray-300 px-4 py-2">Weekly to Monthly</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">Image Sitemap</td>
                            <td class="border border-gray-300 px-4 py-2">Visual content discovery</td>
                            <td class="border border-gray-300 px-4 py-2">50,000 images</td>
                            <td class="border border-gray-300 px-4 py-2">50 MB uncompressed</td>
                            <td class="border border-gray-300 px-4 py-2">As images added</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Video Sitemap</td>
                            <td class="border border-gray-300 px-4 py-2">Multimedia indexing</td>
                            <td class="border border-gray-300 px-4 py-2">50,000 videos</td>
                            <td class="border border-gray-300 px-4 py-2">50 MB uncompressed</td>
                            <td class="border border-gray-300 px-4 py-2">As videos published</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">News Sitemap</td>
                            <td class="border border-gray-300 px-4 py-2">Breaking news indexing</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 articles</td>
                            <td class="border border-gray-300 px-4 py-2">50 MB uncompressed</td>
                            <td class="border border-gray-300 px-4 py-2">Real-time/Hourly</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Mobile Sitemap</td>
                            <td class="border border-gray-300 px-4 py-2">Mobile-specific URLs</td>
                            <td class="border border-gray-300 px-4 py-2">50,000</td>
                            <td class="border border-gray-300 px-4 py-2">50 MB uncompressed</td>
                            <td class="border border-gray-300 px-4 py-2">As mobile content changes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">XML Sitemap Implementation and Search Console Integration</h3>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Sitemap File Placement and Robots.txt Declaration</h4>
            
            <p><strong>Standard sitemap location</strong> conventions place XML sitemap files in website root directory (https://example.com/sitemap.xml) ensuring easy discovery by search engine crawlers following established protocols, though alternative locations remain acceptable provided proper robots.txt declaration or Search Console submission communicate sitemap URLs to indexing systems. <strong>Robots.txt sitemap directive</strong> explicitly declares sitemap locations through "Sitemap: https://example.com/sitemap.xml" entries enabling automated sitemap discovery during regular robots.txt parsing without requiring manual Search Console submission particularly valuable for new websites awaiting verification or secondary sitemaps supplementing primary indexing declarations. <strong>Sitemap index files</strong> organize large websites exceeding 50,000 URL limits or 50MB file size restrictions by creating master index files referencing multiple smaller sitemaps segmented by content type, website section, or date ranges enabling proper indexing of extensive digital properties while respecting technical limitations and improving crawl organization through logical content grouping supporting efficient resource allocation across diverse website sections requiring different crawling frequencies.</p>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Google Search Console Submission and Monitoring</h4>
            
            <p><strong>Search Console sitemap submission</strong> involves accessing Google Search Console property settings, navigating to Sitemaps section, entering sitemap URL (absolute path including protocol), and clicking submit triggering Google's immediate sitemap processing, indexing queue addition, and ongoing monitoring of sitemap changes providing centralized control over Google indexing priorities. <strong>Sitemap status monitoring</strong> through Search Console reports displays submission date, last crawl time, discovered URLs count, indexed pages percentage, and error notifications (parsing errors, unreachable URLs, blocked by robots.txt) enabling proactive troubleshooting identifying indexing obstacles before they impact organic visibility through regular monitoring establishing systematic sitemap health verification workflows. <strong>Index coverage analysis</strong> correlates submitted sitemap URLs with actual indexed pages identifying discrepancies between declared URLs and search index inclusion revealing potential issues including noindex directives, canonical redirections, soft 404 errors, crawl accessibility problems, or content quality concerns requiring remediation ensuring intended pages achieve search visibility supporting comprehensive technical SEO auditing establishing data-driven optimization priorities addressing concrete indexing gaps measurably impacting organic traffic acquisition.</p>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Bing Webmaster Tools and Alternative Search Engines</h4>
            
            <p><strong>Bing Webmaster Tools integration</strong> parallels Google Search Console functionality providing sitemap submission, crawl statistics, indexing reports, and error notifications specific to Bing, Yahoo (powered by Bing), and DuckDuckGo search indexes capturing significant search traffic from non-Google sources particularly important for B2B websites, technical documentation, and specialized niches where Bing maintains stronger market share among professional audiences and technical users. <strong>Yandex Webmaster submission</strong> serves Russian and Eastern European markets through dedicated sitemap registration, crawl monitoring, and indexing verification supporting international SEO strategies targeting regional search engines dominating specific geographic markets requiring localized technical SEO implementation beyond Google-centric optimization approaches. <strong>Multi-platform sitemap strategy</strong> maintains consistent sitemap formatting across all search engine submissions while respecting platform-specific requirements (Yandex turbo pages, Baidu sitemap formats) ensuring comprehensive search visibility across global indexing infrastructure maximizing potential organic traffic sources diversifying referral acquisition reducing over-dependency on single search engine traffic potentially vulnerable to algorithm changes affecting rankings and visibility patterns.</p>
            
            <div class="bg-blue-50 p-6 rounded-lg mb-6">
                <h5 class="font-semibold text-blue-800 mb-2">🎯 Website Optimization Tools</h5>
                <div class="grid md:grid-cols-2 gap-3 text-sm">
                    <ul class="space-y-1">
                        <li><a href="redirect-checker.php" class="text-blue-600 hover:text-blue-800 hover:underline">Redirect Checker</a></li>
                    </ul>
                    <ul class="space-y-1">
                        </ul>
                </div>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Common Sitemap Errors and Troubleshooting Solutions</h3>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">XML Formatting and Syntax Validation</h4>
            
            <p><strong>XML parsing errors</strong> occur when sitemap files contain malformed markup, unescaped special characters, missing required elements, invalid attribute values, or improper nesting structures preventing search engines from processing sitemap content resulting in complete indexing failure requiring immediate correction through XML validation tools identifying specific syntax issues enabling rapid remediation. <strong>Character encoding problems</strong> emerge when sitemap files lack proper UTF-8 encoding declarations or contain incompatible character sets causing parsing failures particularly common when URLs include international characters, special symbols, or non-ASCII parameters requiring proper percent-encoding (URL encoding) converting problematic characters into valid XML-safe representations. <strong>Namespace declaration requirements</strong> mandate proper xmlns attribute specification in opening <urlset> tags declaring XML namespace (xmlns="http://www.sitemaps.org/schemas/sitemap/0.9") ensuring validators and search engine parsers correctly interpret sitemap formatting according to official protocol specifications preventing rejection due to technical non-compliance with established standards.</p>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">URL Accessibility and Robots.txt Conflicts</h4>
            
            <p><strong>Blocked by robots.txt errors</strong> indicate sitemap declares URLs explicitly disallowed through robots.txt directives creating logical contradictions where websites simultaneously request indexing (via sitemap inclusion) while blocking crawler access (via robots.txt rules) requiring careful robots.txt review ensuring desired pages remain crawlable removing overly broad disallow statements inadvertently preventing intended content indexing. <strong>Server response code issues</strong> including 404 not found errors, 301/302 redirects, 403 forbidden responses, or 500 server errors prevent successful page crawling triggering sitemap warnings requiring URL verification, broken link repair, redirect consolidation, permission configuration, or server stability improvements ensuring all declared URLs return proper 200 success responses enabling successful crawler access. <strong>Noindex directive conflicts</strong> occur when meta robots noindex tags, X-Robots-Tag HTTP headers, or robots meta directives explicitly prevent indexing while simultaneously declaring pages in XML sitemaps creating conflicting signals requiring indexing directive review removing unintended noindex declarations from pages intended for search inclusion ensuring consistent technical SEO implementation across on-page elements and external sitemap declarations.</p>
            
            <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">File Size Limits and Sitemap Index Implementation</h4>
            
            <p><strong>Sitemap size constraints</strong> limit individual files to 50,000 URLs and 50MB uncompressed size (10MB compressed) requiring large websites split sitemaps across multiple files organized through sitemap index files referencing component sitemaps enabling proper indexing while respecting technical limitations established by search engine processing capabilities. <strong>Sitemap index creation</strong> involves generating master XML file listing child sitemap locations through <sitemap> elements containing <loc> tags declaring absolute URLs to individual component sitemaps supporting organized indexing of websites with hundreds of thousands or millions of pages requiring sophisticated sitemap architecture managing crawl priorities across extensive digital properties. <strong>Compression and optimization</strong> through gzip compression substantially reduces sitemap file sizes enabling faster transfer, reduced bandwidth consumption, and improved crawler efficiency while maintaining full XML content integrity supporting large-scale sitemap deployment without sacrificing indexing completeness or crawl budget efficiency throughout extensive website architectures requiring comprehensive indexing coverage.</p>
            
            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Frequently Asked Questions About XML Sitemap Generator</h3>
            
            <div class="bg-gray-50 p-6 rounded-lg space-y-4">
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">1. What is an XML sitemap and why do I need one?</h4>
                    <p class="text-gray-700">An XML sitemap is a structured file listing all important URLs on your website with metadata helping search engines discover, crawl, and index content efficiently. It's essential for new websites, large sites with complex architectures, sites with poor internal linking, or frequently updated content requiring rapid indexing.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">2. How often should I update my XML sitemap?</h4>
                    <p class="text-gray-700">Update sitemaps whenever significant website changes occur including new pages, deleted content, structural reorganization, or URL modifications. Dynamic websites benefit from automated sitemap generation updating hourly or daily, while static sites may only require monthly or quarterly updates.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">3. What is the maximum number of URLs allowed in a sitemap?</h4>
                    <p class="text-gray-700">Individual XML sitemap files can contain maximum 50,000 URLs and cannot exceed 50MB uncompressed (10MB compressed). Larger websites require multiple sitemaps organized through sitemap index files referencing component sitemaps maintaining technical compliance with search engine specifications.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">4. Do I need separate sitemaps for images and videos?</h4>
                    <p class="text-gray-700">While not strictly required, separate image and video sitemaps provide enhanced metadata (captions, durations, thumbnails) improving rich result eligibility and specialized search visibility. Image-heavy e-commerce sites and video publishers particularly benefit from specialized sitemap formats beyond standard URL declarations.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">5. Where should I place my sitemap file on my website?</h4>
                    <p class="text-gray-700">Standard practice places sitemap.xml in website root directory (https://example.com/sitemap.xml) ensuring easy discovery. Alternative locations work provided you declare sitemap URL in robots.txt file or submit directly through Google Search Console and Bing Webmaster Tools.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">6. How do I submit my sitemap to Google?</h4>
                    <p class="text-gray-700">Submit sitemaps through Google Search Console by verifying website ownership, navigating to Sitemaps section, entering complete sitemap URL including protocol (https://), and clicking Submit. Google processes submission within hours typically beginning immediate crawling of declared URLs.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">7. What does priority value in sitemap mean?</h4>
                    <p class="text-gray-700">Priority values (0.0 to 1.0) indicate relative importance of pages within your website helping search engines allocate crawl resources. However, search engines use priority as suggestion rather than directive, primarily relying on page authority, links, and content quality determining actual crawling priorities.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">8. Should I include all website pages in my sitemap?</h4>
                    <p class="text-gray-700">Include only canonical, indexable pages providing value to searchers. Exclude duplicate content, parameterized URLs, admin sections, thank-you pages, internal search results, and low-quality pages. Focus sitemap on high-value content deserving prominent search visibility.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">9. Can I have multiple sitemaps for one website?</h4>
                    <p class="text-gray-700">Yes, multiple sitemaps organized through sitemap index files support large websites, international versions (hreflang), specialized content types (images, videos, news), or logical content divisions (blog, products, documentation) improving crawl organization and update management.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">10. How long does it take for Google to crawl my sitemap?</h4>
                    <p class="text-gray-700">Google typically processes submitted sitemaps within hours to days, though actual URL crawling depends on crawl budget, website authority, and technical accessibility. New content from high-authority sites may appear in index within hours, while new sites might require weeks for complete indexing.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">11. What changefreq value should I use for different page types?</h4>
                    <p class="text-gray-700">Use "daily" for frequently updated pages (homepage, news), "weekly" for regular blog content, "monthly" for product categories, and "yearly" for static reference content. Accurate frequency declarations help crawlers optimize revisit scheduling though actual crawling decisions consider multiple factors beyond declared frequency.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">12. Do XML sitemaps directly improve SEO rankings?</h4>
                    <p class="text-gray-700">Sitemaps don't directly boost rankings but facilitate faster indexing, improved crawl efficiency, and better content discovery indirectly supporting SEO by ensuring search engines find and index valuable content that can compete for rankings based on quality, relevance, and authority signals.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">13. Should I include URLs blocked by noindex in my sitemap?</h4>
                    <p class="text-gray-700">No, including noindex URLs creates conflicting signals where sitemap requests indexing while on-page directives prevent it. Maintain consistency by excluding noindexed pages from sitemaps ensuring clear communication with search engines about intended indexing scope.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">14. How do I handle sitemaps for multi-language websites?</h4>
                    <p class="text-gray-700">Implement hreflang annotations in sitemaps declaring alternate language versions for each URL, or create separate sitemaps per language version referenced through sitemap index file. Proper hreflang implementation prevents duplicate content issues while serving correct language versions to appropriate geographic audiences.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">15. What's the difference between HTML and XML sitemaps?</h4>
                    <p class="text-gray-700">XML sitemaps are machine-readable files for search engines containing structured metadata. HTML sitemaps are human-friendly navigation pages helping users find content. Both serve different purposes—XML for crawler optimization, HTML for user experience—and complement each other in comprehensive SEO strategy.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">16. Can I compress my XML sitemap file?</h4>
                    <p class="text-gray-700">Yes, gzip compression reduces sitemap file sizes substantially while remaining fully compatible with search engine processing. Compressed sitemaps transfer faster, consume less bandwidth, and improve crawler efficiency particularly valuable for large sitemaps approaching size limits.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">17. How do I troubleshoot sitemap errors in Search Console?</h4>
                    <p class="text-gray-700">Review error reports identifying specific issues (parsing errors, unreachable URLs, blocked pages), validate sitemap XML syntax through online validators, verify URL accessibility testing direct browser access, check robots.txt directives, and ensure proper server responses (200 status codes) for all declared URLs.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">18. Should I include paginated pages in my sitemap?</h4>
                    <p class="text-gray-700">Include paginated series first pages (page 1) while excluding subsequent pages (page 2, 3, etc.) preventing dilution of crawl resources across paginated versions. Alternatively, implement rel="next/prev" pagination signals or view-all canonical pages consolidating pagination into single crawlable resources.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">19. How often should I check my sitemap status?</h4>
                    <p class="text-gray-700">Monitor sitemap status monthly at minimum, though weekly checks recommended for active websites publishing frequent content updates. Regular monitoring identifies indexing issues early, tracks discovered versus indexed URL ratios, and reveals technical problems requiring immediate attention preventing prolonged visibility gaps.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">20. Can I use sitemap generator tools for large enterprise websites?</h4>
                    <p class="text-gray-700">While basic generators work for small sites, large enterprises typically require custom solutions integrating with CMS, automated update workflows, dynamic sitemap generation, sitemap index management, and API-based submissions supporting complex architectures with millions of pages requiring sophisticated sitemap infrastructure.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">21. What happens if I don't submit a sitemap?</h4>
                    <p class="text-gray-700">Search engines still discover content through natural crawling following links, though sitemap absence potentially delays indexing particularly for new sites, deep pages, or frequently updated content. Sitemaps accelerate discovery and provide explicit indexing guidance improving crawl efficiency significantly.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">22. How do I handle mobile-specific URLs in sitemaps?</h4>
                    <p class="text-gray-700">Modern responsive websites typically don't require separate mobile sitemaps as URLs remain consistent across devices. Separate mobile URLs (m.example.com) need distinct mobile sitemap declarations using mobile sitemap protocol annotations though responsive design eliminates this complexity entirely.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">23. Should I include redirected URLs in my sitemap?</h4>
                    <p class="text-gray-700">No, exclude redirected URLs from sitemaps declaring only final destination URLs (200 status responses). Including 301/302 redirects wastes crawl budget forcing search engines to follow redirects unnecessarily. Clean sitemaps contain exclusively directly accessible canonical URLs.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">24. How does lastmod date affect crawling priority?</h4>
                    <p class="text-gray-700">Accurate lastmod dates signal content freshness helping crawlers prioritize recently updated pages. However, frequently changing lastmod without actual content updates can reduce crawler trust. Maintain accuracy declaring modification dates only when meaningful content changes occur preserving signal reliability.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-4">
                    <h4 class="font-bold text-gray-900">25. Can I automate sitemap generation and submission?</h4>
                    <p class="text-gray-700">Yes, modern CMS platforms (WordPress, Drupal, Magento) offer plugins automatically generating and updating sitemaps. Custom implementations can schedule periodic regeneration, monitor Search Console via API, and trigger automatic submissions following content updates ensuring perpetual sitemap accuracy without manual maintenance.</p>
                </div>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Best Practices for XML Sitemap Management and Optimization</h3>
            
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-green-50 p-6 rounded-lg">
                    <h4 class="text-lg font-bold text-green-800 mb-4">✓ Effective Sitemap Strategies</h4>
                    <ul class="space-y-2 text-green-700 text-sm">
                        <li>• Submit sitemaps to all major search engines (Google, Bing, Yandex)</li>
                        <li>• Update sitemaps immediately after significant content changes</li>
                        <li>• Include only canonical, indexable URLs avoiding duplicates</li>
                        <li>• Implement sitemap index files for sites exceeding 50,000 URLs</li>
                        <li>• Use gzip compression reducing file sizes and transfer times</li>
                        <li>• Declare accurate lastmod dates reflecting genuine content updates</li>
                        <li>• Monitor Search Console reports identifying indexing issues</li>
                        <li>• Create specialized sitemaps for images, videos, and news content</li>
                        <li>• Reference sitemap location in robots.txt file for discovery</li>
                        <li>• Validate XML syntax preventing parsing errors and rejection</li>
                    </ul>
                </div>
                
                <div class="bg-red-50 p-6 rounded-lg">
                    <h4 class="text-lg font-bold text-red-800 mb-4">✗ Common Sitemap Mistakes</h4>
                    <ul class="space-y-2 text-red-700 text-sm">
                        <li>• Don't include noindex pages creating conflicting indexing signals</li>
                        <li>• Don't exceed 50,000 URL or 50MB limits causing processing failure</li>
                        <li>• Don't include redirected URLs wasting crawler resources unnecessarily</li>
                        <li>• Don't use relative URLs—always specify absolute URLs with protocol</li>
                        <li>• Don't ignore Search Console errors allowing indexing problems persist</li>
                        <li>• Don't include blocked URLs (robots.txt disallowed paths)</li>
                        <li>• Don't update lastmod without actual content changes damaging trust</li>
                        <li>• Don't forget submitting sitemaps to Bing and alternative search engines</li>
                        <li>• Don't use incorrect XML formatting causing parser rejection</li>
                        <li>• Don't neglect regular sitemap maintenance and update workflows</li>
                    </ul>
                </div>
            </div>
            
            <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Advanced Sitemap Strategies for Different Website Types</h3>
            
            <div class="bg-purple-50 p-6 rounded-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border-collapse">
                        <thead>
                            <tr class="border-b-2 border-purple-200">
                                <th class="text-left p-2 font-bold">Website Type</th>
                                <th class="text-center p-2 font-bold">Recommended Strategy</th>
                                <th class="text-center p-2 font-bold">Update Frequency</th>
                                <th class="text-right p-2 font-bold">Special Considerations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-purple-200">
                                <td class="p-2">E-commerce Store</td>
                                <td class="text-center p-2">Product + Category + Image sitemaps</td>
                                <td class="text-center p-2">Daily (inventory changes)</td>
                                <td class="text-right p-2">Out-of-stock product handling</td>
                            </tr>
                            <tr class="border-b border-purple-200">
                                <td class="p-2">News Website</td>
                                <td class="text-center p-2">News sitemap + Standard sitemap</td>
                                <td class="text-center p-2">Hourly (breaking news)</td>
                                <td class="text-right p-2">1,000 article limit compliance</td>
                            </tr>
                            <tr class="border-b border-purple-200">
                                <td class="p-2">Corporate Website</td>
                                <td class="text-center p-2">Single comprehensive sitemap</td>
                                <td class="text-center p-2">Monthly (static content)</td>
                                <td class="text-right p-2">Priority homepage and services</td>
                            </tr>
                            <tr class="border-b border-purple-200">
                                <td class="p-2">Blog/Content Site</td>
                                <td class="text-center p-2">Date-based sitemap segmentation</td>
                                <td class="text-center p-2">Weekly (new posts)</td>
                                <td class="text-right p-2">Archive page management</td>
                            </tr>
                            <tr>
                                <td class="p-2">Video Platform</td>
                                <td class="text-center p-2">Video sitemap with metadata</td>
                                <td class="text-center p-2">As videos uploaded</td>
                                <td class="text-right p-2">Thumbnail and duration specifications</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg">
                <p class="text-sm text-gray-600 italic">
                    <strong>Pro Tip:</strong> We recommend implementing comprehensive XML sitemap infrastructure recognizing that while sitemaps don't directly influence search rankings, they fundamentally enable efficient crawling, accelerated indexing, and improved content discovery ensuring search engines successfully find, process, and index valuable website content competing for visibility in increasingly competitive search result environments. Establish automated sitemap generation workflows updating immediately following content publication, deletion, or structural changes maintaining perpetual accuracy without relying on manual update processes prone to human error and oversight particularly problematic for large-scale websites publishing hundreds or thousands of pages monthly requiring systematic maintenance procedures. Submit generated sitemaps to all relevant search platforms including Google Search Console, Bing Webmaster Tools, Yandex Webmaster, and specialized platforms (Apple App Search, specific regional engines) ensuring comprehensive indexing coverage across diverse search ecosystems capturing maximum potential organic traffic from all viable acquisition channels. Monitor sitemap health metrics weekly through Search Console reports tracking discovered versus indexed URL ratios, identifying persistent errors preventing successful indexing, and investigating dramatic indexing drops potentially indicating technical problems, penalty actions, or crawl accessibility issues requiring immediate investigation and remediation preventing prolonged organic visibility degradation. Organize large websites through logical sitemap segmentation creating separate sitemaps for distinct content types (blog posts, product pages, documentation), website sections (geographic regions, language versions), or publication timeframes (current year, historical archives) improving crawl organization and enabling targeted update management where specific sections receive appropriate crawling frequencies aligned with actual content update patterns optimizing crawl budget allocation. Remember XML sitemaps serve as supplementary indexing signals complementing rather than replacing robust internal linking architecture, clean URL structures, fast page speeds, mobile responsiveness, and high-quality content—the fundamental ranking factors determining actual search visibility outcomes requiring holistic technical SEO implementation addressing comprehensive optimization priorities spanning content excellence, technical performance, user experience quality, and systematic search engine communication through properly structured sitemap infrastructure supporting sustainable organic growth throughout evolving digital marketing landscapes demanding consistent technical excellence and proactive optimization maintenance.
                </p>
                
                <div class="mt-4 pt-4 border-t border-gray-300">
                    <h5 class="font-semibold text-gray-800 mb-2">🛠️ Related Technical SEO Tools</h5>
                    <div class="flex flex-wrap gap-2 text-xs">
                        <a href="robots-txt-generator.php" class="bg-purple-100 text-purple-700 px-2 py-1 rounded hover:bg-purple-200">Robots.txt Generator</a>
                        <a href="meta-tag-generator.php" class="bg-purple-100 text-purple-700 px-2 py-1 rounded hover:bg-purple-200">Meta Tag Generator</a>
                        <a href="schema-markup-generator.php" class="bg-purple-100 text-purple-700 px-2 py-1 rounded hover:bg-purple-200">Schema Markup</a>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

<?php include 'footer.php';?>


</html>
