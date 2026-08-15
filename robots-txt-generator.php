<?php include 'header.php';?>

<?php
/**
 * Advanced Robots.txt Generator
 * Professional robots.txt file creator with templates, validation, and SEO optimization
 */

class AdvancedRobotsGenerator {
    private $templates = [
        'default' => [
            'name' => 'Default (Allow All)',
            'description' => 'Basic robots.txt that allows all crawlers',
            'content' => "User-agent: *\nDisallow:\n\n# Sitemap\nSitemap: {sitemap_url}"
        ],
        'restrictive' => [
            'name' => 'Restrictive',
            'description' => 'Block common sensitive areas',
            'content' => "User-agent: *\nDisallow: /admin/\nDisallow: /private/\nDisallow: /tmp/\nDisallow: /cgi-bin/\nDisallow: /*.pdf$\n\n# Allow specific crawlers to access certain areas\nUser-agent: Googlebot\nAllow: /public/\n\n# Crawl-delay for all bots\nCrawl-delay: 10\n\n# Sitemap\nSitemap: {sitemap_url}"
        ],
        'ecommerce' => [
            'name' => 'E-commerce',
            'description' => 'Optimized for online stores',
            'content' => "User-agent: *\nDisallow: /cart/\nDisallow: /checkout/\nDisallow: /account/\nDisallow: /search?\nDisallow: /*?sort=\nDisallow: /*&sort=\nAllow: /\n\n# Allow important crawlers\nUser-agent: Googlebot\nUser-agent: Bingbot\nAllow: /products/\nAllow: /categories/\n\n# Block price comparison bots\nUser-agent: *bot*\nUser-agent: *crawler*\nUser-agent: *scraper*\nDisallow: /\n\nCrawl-delay: 5\n\n# Sitemap\nSitemap: {sitemap_url}\nSitemap: {sitemap_url}/products.xml"
        ],
        'blog' => [
            'name' => 'Blog/News',
            'description' => 'Optimized for content websites',
            'content' => "User-agent: *\nDisallow: /wp-admin/\nDisallow: /wp-includes/\nDisallow: /wp-content/plugins/\nDisallow: /wp-content/cache/\nDisallow: /trackback/\nDisallow: /feed/\nDisallow: /comments/\nDisallow: /category/*/*\nDisallow: */trackback/\nDisallow: */feed/\nDisallow: */comments/\nAllow: /wp-content/uploads/\n\n# Allow social media crawlers\nUser-agent: facebookexternalhit\nUser-agent: Twitterbot\nAllow: /\n\nCrawl-delay: 2\n\n# Sitemap\nSitemap: {sitemap_url}\nSitemap: {sitemap_url}/posts.xml"
        ],
        'block_all' => [
            'name' => 'Block All',
            'description' => 'Block all crawlers (maintenance mode)',
            'content' => "User-agent: *\nDisallow: /\n\n# Sitemap (for when site is back online)\n# Sitemap: {sitemap_url}"
        ]
    ];
    
    private $commonBots = [
        '*' => 'All crawlers',
        'Googlebot' => 'Google Search',
        'Bingbot' => 'Bing Search', 
        'Slurp' => 'Yahoo Search',
        'DuckDuckBot' => 'DuckDuckGo',
        'Baiduspider' => 'Baidu Search',
        'YandexBot' => 'Yandex Search',
        'facebookexternalhit' => 'Facebook Crawler',
        'Twitterbot' => 'Twitter Crawler',
        'LinkedInBot' => 'LinkedIn Crawler',
        'WhatsApp' => 'WhatsApp Preview',
        'Applebot' => 'Apple Search',
        'AhrefsBot' => 'Ahrefs SEO Bot',
        'SemrushBot' => 'Semrush SEO Bot',
        'MJ12bot' => 'Majestic SEO Bot'
    ];
    
    public function getTemplates() {
        return $this->templates;
    }
    
    public function getCommonBots() {
        return $this->commonBots;
    }
    
    public function generateRobotsTxt($data) {
        $robotsTxt = "";
        
        // Template-based generation
        if (!empty($data['template']) && isset($this->templates[$data['template']])) {
            $template = $this->templates[$data['template']]['content'];
            $robotsTxt = str_replace('{sitemap_url}', $data['sitemap_url'] ?? 'https://example.com/sitemap.xml', $template);
        } else {
            // Custom generation
            $userAgents = !empty($data['user_agents']) ? explode("\n", trim($data['user_agents'])) : ['*'];
            
            foreach ($userAgents as $userAgent) {
                $userAgent = trim($userAgent);
                if (empty($userAgent)) continue;
                
                $robotsTxt .= "User-agent: $userAgent\n";
                
                // Disallow paths
                if (!empty($data['disallow_paths'])) {
                    $disallowPaths = explode("\n", $data['disallow_paths']);
                    foreach ($disallowPaths as $path) {
                        $path = trim($path);
                        if (!empty($path)) {
                            $robotsTxt .= "Disallow: $path\n";
                        }
                    }
                } else {
                    $robotsTxt .= "Disallow:\n";
                }
                
                // Allow paths
                if (!empty($data['allow_paths'])) {
                    $allowPaths = explode("\n", $data['allow_paths']);
                    foreach ($allowPaths as $path) {
                        $path = trim($path);
                        if (!empty($path)) {
                            $robotsTxt .= "Allow: $path\n";
                        }
                    }
                }
                
                // Crawl delay
                if (!empty($data['crawl_delay'])) {
                    $robotsTxt .= "Crawl-delay: " . intval($data['crawl_delay']) . "\n";
                }
                
                $robotsTxt .= "\n";
            }
            
            // Host directive  
            if (!empty($data['host'])) {
                $robotsTxt .= "Host: " . $data['host'] . "\n\n";
            }
            
            // Sitemap URLs
            if (!empty($data['sitemap_urls'])) {
                $sitemapUrls = explode("\n", $data['sitemap_urls']);
                foreach ($sitemapUrls as $sitemapUrl) {
                    $sitemapUrl = trim($sitemapUrl);
                    if (!empty($sitemapUrl)) {
                        $robotsTxt .= "Sitemap: $sitemapUrl\n";
                    }
                }
            }
        }
        
        return trim($robotsTxt);
    }
    
    public function validateRobotsTxt($content) {
        $errors = [];
        $warnings = [];
        $lines = explode("\n", $content);
        
        $hasUserAgent = false;
        $hasSitemap = false;
        
        foreach ($lines as $lineNum => $line) {
            $line = trim($line);
            $lineNumber = $lineNum + 1;
            
            // Skip empty lines and comments
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }
            
            // Check for valid directives
            if (preg_match('/^(User-agent|Disallow|Allow|Crawl-delay|Host|Sitemap):\s*(.*)$/i', $line, $matches)) {
                $directive = strtolower($matches[1]);
                $value = trim($matches[2]);
                
                if ($directive === 'user-agent') {
                    $hasUserAgent = true;
                    if (empty($value)) {
                        $errors[] = "Line $lineNumber: User-agent cannot be empty";
                    }
                } elseif ($directive === 'sitemap') {
                    $hasSitemap = true;
                    if (!filter_var($value, FILTER_VALIDATE_URL)) {
                        $errors[] = "Line $lineNumber: Invalid sitemap URL";
                    }
                } elseif ($directive === 'crawl-delay') {
                    if (!is_numeric($value) || $value < 0) {
                        $errors[] = "Line $lineNumber: Crawl-delay must be a positive number";
                    } elseif ($value > 86400) {
                        $warnings[] = "Line $lineNumber: Crawl-delay is very high (>24 hours)";
                    }
                }
            } else {
                $errors[] = "Line $lineNumber: Invalid robots.txt directive";
            }
        }
        
        if (!$hasUserAgent) {
            $errors[] = "Missing User-agent directive";
        }
        
        if (!$hasSitemap) {
            $warnings[] = "No sitemap specified";
        }
        
        return [
            'valid' => empty($errors),
            'errors' => $errors,
            'warnings' => $warnings
        ];
    }
    
    public function analyzeRobotsTxt($content, $websiteUrl = '') {
        $analysis = [
            'total_lines' => 0,
            'user_agents' => [],
            'disallowed_paths' => [],
            'allowed_paths' => [],
            'sitemaps' => [],
            'crawl_delays' => [],
            'coverage' => 'unknown'
        ];
        
        $lines = explode("\n", $content);
        $analysis['total_lines'] = count($lines);
        
        $currentUserAgent = '';
        
        foreach ($lines as $line) {
            $line = trim($line);
            
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }
            
            if (preg_match('/^User-agent:\s*(.+)$/i', $line, $matches)) {
                $currentUserAgent = trim($matches[1]);
                if (!in_array($currentUserAgent, $analysis['user_agents'])) {
                    $analysis['user_agents'][] = $currentUserAgent;
                }
            } elseif (preg_match('/^Disallow:\s*(.*)$/i', $line, $matches)) {
                $path = trim($matches[1]);
                if ($path === '') {
                    $analysis['coverage'] = 'open';
                } else {
                    $analysis['disallowed_paths'][] = $path;
                }
            } elseif (preg_match('/^Allow:\s*(.+)$/i', $line, $matches)) {
                $analysis['allowed_paths'][] = trim($matches[1]);
            } elseif (preg_match('/^Sitemap:\s*(.+)$/i', $line, $matches)) {
                $analysis['sitemaps'][] = trim($matches[1]);
            } elseif (preg_match('/^Crawl-delay:\s*(\d+)$/i', $line, $matches)) {
                $analysis['crawl_delays'][$currentUserAgent] = intval($matches[1]);
            }
        }
        
        if (empty($analysis['disallowed_paths']) && $analysis['coverage'] !== 'open') {
            $analysis['coverage'] = 'restrictive';
        }
        
        return $analysis;
    }
}

// Initialize generator
$generator = new AdvancedRobotsGenerator();
$templates = $generator->getTemplates();
$commonBots = $generator->getCommonBots();

// Handle form submission
$robotsTxtContent = '';
$error = '';
$success = '';
$validationResult = null;
$analysisResult = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $robotsTxtContent = $generator->generateRobotsTxt($_POST);
        $validationResult = $generator->validateRobotsTxt($robotsTxtContent);
        $analysisResult = $generator->analyzeRobotsTxt($robotsTxtContent, $_POST['website_url'] ?? '');
        
        if ($validationResult['valid']) {
            $success = "Robots.txt generated successfully! Ready for deployment.";
        } else {
            $error = "Generated robots.txt has validation issues. Please review and fix.";
        }
    } catch (Exception $e) {
        $error = "Error generating robots.txt: " . $e->getMessage();
    }
}
?>

    <title>Advanced Robots.txt Generator - Professional SEO Tool | Thiyagi</title>
    <meta name="description" content="Professional robots.txt generator with templates, validation, and advanced crawler control. Create SEO-optimized robots.txt files with crawl-delay settings and comprehensive analysis.">
    <meta name="keywords" content="robots.txt generator, robots txt creator, SEO robots file, crawler control, search engine optimization, crawl delay, sitemap robots">
    <meta name="author" content="Thiyagi">
    
    <!-- Open Graph tags -->
    <meta property="og:title" content="Advanced Robots.txt Generator - Professional SEO Tool">
    <meta property="og:description" content="Create professional robots.txt files with templates, validation, and advanced crawler control features for better SEO.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://livedu.in/robots-txt-generator.php">
    <meta property="og:site_name" content="Thiyagi">
    <meta property="og:image" content="https://livedu.in/images/robots-generator-og.jpg">
    
    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced Robots.txt Generator">
    <meta name="twitter:description" content="Professional robots.txt generator with templates and validation">
    <meta name="twitter:image" content="https://livedu.in/images/robots-generator-twitter.jpg">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Advanced Robots.txt Generator",
        "description": "Professional robots.txt generator with templates, validation, and advanced crawler control",
        "url": "https://livedu.in/robots-txt-generator.php",
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
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .template-card.selected {
            border-color: #3b82f6;
            background-color: #eff6ff;
        }
    </style>
<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Advanced Robots.txt Generator</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Professional robots.txt creator with templates, validation, and advanced crawler control for better SEO performance</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Features Section -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Ready Templates</h3>
                <p class="text-sm text-gray-600">Pre-built templates for common use cases</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Validation & Analysis</h3>
                <p class="text-sm text-gray-600">Real-time validation and error checking</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Crawl Delay Control</h3>
                <p class="text-sm text-gray-600">Advanced crawler rate limiting</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Multi-Bot Support</h3>
                <p class="text-sm text-gray-600">Control multiple search engine bots</p>
            </div>
        </div>

        <!-- Template Selection -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Choose Template or Create Custom</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <?php foreach ($templates as $key => $template): ?>
                <div class="template-card border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-300 transition duration-200" onclick="selectTemplate('<?php echo $key; ?>')">
                    <h3 class="font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($template['name']); ?></h3>
                    <p class="text-sm text-gray-600"><?php echo htmlspecialchars($template['description']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Generation Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <form method="POST" class="space-y-6">
                <input type="hidden" name="template" id="selected_template" value="">
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="website_url" class="block text-sm font-semibold text-gray-700 mb-2">Website URL</label>
                        <input type="url" name="website_url" id="website_url" 
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               placeholder="https://example.com"
                               value="<?php echo htmlspecialchars($_POST['website_url'] ?? ''); ?>">
                    </div>
                    
                    <div>
                        <label for="crawl_delay" class="block text-sm font-semibold text-gray-700 mb-2">Crawl Delay (seconds)</label>
                        <select name="crawl_delay" id="crawl_delay" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">No delay</option>
                            <option value="1" <?php echo ($_POST['crawl_delay'] ?? '') == '1' ? 'selected' : ''; ?>>1 second</option>
                            <option value="5" <?php echo ($_POST['crawl_delay'] ?? '') == '5' ? 'selected' : ''; ?>>5 seconds</option>
                            <option value="10" <?php echo ($_POST['crawl_delay'] ?? '') == '10' ? 'selected' : ''; ?>>10 seconds</option>
                            <option value="30" <?php echo ($_POST['crawl_delay'] ?? '') == '30' ? 'selected' : ''; ?>>30 seconds</option>
                            <option value="60" <?php echo ($_POST['crawl_delay'] ?? '') == '60' ? 'selected' : ''; ?>>1 minute</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="user_agents" class="block text-sm font-semibold text-gray-700 mb-2">User Agents (one per line)</label>
                        <textarea name="user_agents" id="user_agents" rows="4" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                  placeholder="*
Googlebot
Bingbot"><?php echo htmlspecialchars($_POST['user_agents'] ?? '*'); ?></textarea>
                        <div class="mt-2 flex flex-wrap gap-2">
                            <?php foreach (array_slice($commonBots, 0, 6) as $bot => $name): ?>
                            <button type="button" onclick="addBot('<?php echo $bot; ?>')" class="text-xs bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded">
                                + <?php echo $name; ?>
                            </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <div>
                        <label for="host" class="block text-sm font-semibold text-gray-700 mb-2">Preferred Host (optional)</label>
                        <input type="url" name="host" id="host" 
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               placeholder="https://www.example.com"
                               value="<?php echo htmlspecialchars($_POST['host'] ?? ''); ?>">
                        <p class="text-xs text-gray-500 mt-1">Specify preferred domain for search engines</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="disallow_paths" class="block text-sm font-semibold text-gray-700 mb-2">Disallow Paths (one per line)</label>
                        <textarea name="disallow_paths" id="disallow_paths" rows="4" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                  placeholder="/admin/
/private/
/tmp/
/*.pdf$"><?php echo htmlspecialchars($_POST['disallow_paths'] ?? ''); ?></textarea>
                    </div>
                    
                    <div>
                        <label for="allow_paths" class="block text-sm font-semibold text-gray-700 mb-2">Allow Paths (one per line)</label>
                        <textarea name="allow_paths" id="allow_paths" rows="4" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                  placeholder="/public/
/api/
/css/
/js/"><?php echo htmlspecialchars($_POST['allow_paths'] ?? ''); ?></textarea>
                    </div>
                </div>
                
                <div>
                    <label for="sitemap_urls" class="block text-sm font-semibold text-gray-700 mb-2">Sitemap URLs (one per line)</label>
                    <textarea name="sitemap_urls" id="sitemap_urls" rows="3" 
                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                              placeholder="https://example.com/sitemap.xml
https://example.com/sitemap-images.xml"><?php echo htmlspecialchars($_POST['sitemap_urls'] ?? ''); ?></textarea>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-lg transform transition duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Generate Robots.txt File
                </button>
            </form>
        </div>

        <!-- Error/Success Messages -->
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

        <!-- Generated Robots.txt -->
        <?php if (!empty($robotsTxtContent)): ?>
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">Generated Robots.txt</h3>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">
                        Ready for deployment
                    </span>
                </div>
                
                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-6">
                    <nav class="flex space-x-8">
                        <button class="tab-btn border-b-2 border-blue-500 text-blue-600 py-2 px-1 text-sm font-medium active" onclick="showTab('robots-content')">
                            Robots.txt
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('validation')">
                            Validation
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('analysis')">
                            Analysis
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('deployment')">
                            Deployment
                        </button>
                    </nav>
                </div>
                
                <!-- Robots.txt Content Tab -->
                <div id="robots-content" class="tab-content active">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="robots-text"><?php echo htmlspecialchars($robotsTxtContent); ?></pre>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-4">
                        <button onclick="copyToClipboard('robots-text')" 
                                class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Copy Content
                        </button>
                        <a href="data:text/plain;charset=utf-8,<?php echo urlencode($robotsTxtContent); ?>" download="robots.txt" 
                           class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download File
                        </a>
                        <button onclick="testRobots()" 
                                class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Test Online
                        </button>
                    </div>
                </div>
                
                <!-- Validation Tab -->
                <div id="validation" class="tab-content">
                    <?php if ($validationResult): ?>
                        <div class="space-y-4">
                            <div class="<?php echo $validationResult['valid'] ? 'bg-green-50 border-green-200' : 'bg-red-50 border-red-200'; ?> border p-4 rounded-lg">
                                <h4 class="font-semibold <?php echo $validationResult['valid'] ? 'text-green-800' : 'text-red-800'; ?> mb-2">
                                    <?php echo $validationResult['valid'] ? '✓ Robots.txt is Valid' : '✗ Validation Errors Found'; ?>
                                </h4>
                                
                                <?php if (!empty($validationResult['errors'])): ?>
                                    <div class="mb-4">
                                        <h5 class="font-medium text-red-800 mb-2">Errors:</h5>
                                        <ul class="list-disc list-inside text-red-700 space-y-1">
                                            <?php foreach ($validationResult['errors'] as $error): ?>
                                                <li><?php echo htmlspecialchars($error); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($validationResult['warnings'])): ?>
                                    <div>
                                        <h5 class="font-medium text-yellow-800 mb-2">Warnings:</h5>
                                        <ul class="list-disc list-inside text-yellow-700 space-y-1">
                                            <?php foreach ($validationResult['warnings'] as $warning): ?>
                                                <li><?php echo htmlspecialchars($warning); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($validationResult['valid'] && empty($validationResult['warnings'])): ?>
                                    <p class="text-green-700">Your robots.txt file follows best practices and is ready for deployment!</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Analysis Tab -->
                <div id="analysis" class="tab-content">
                    <?php if ($analysisResult): ?>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">File Statistics</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li>Total Lines: <?php echo $analysisResult['total_lines']; ?></li>
                                        <li>User Agents: <?php echo count($analysisResult['user_agents']); ?></li>
                                        <li>Disallowed Paths: <?php echo count($analysisResult['disallowed_paths']); ?></li>
                                        <li>Allowed Paths: <?php echo count($analysisResult['allowed_paths']); ?></li>
                                        <li>Sitemaps: <?php echo count($analysisResult['sitemaps']); ?></li>
                                    </ul>
                                </div>
                                
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-blue-800 mb-2">Coverage Assessment</h4>
                                    <p class="text-blue-700 capitalize"><?php echo $analysisResult['coverage']; ?> access policy</p>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <?php if (!empty($analysisResult['user_agents'])): ?>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Targeted Crawlers</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <?php foreach (array_slice($analysisResult['user_agents'], 0, 5) as $agent): ?>
                                            <li>• <?php echo htmlspecialchars($agent); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($analysisResult['crawl_delays'])): ?>
                                <div class="bg-yellow-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-yellow-800 mb-2">Crawl Delays</h4>
                                    <ul class="space-y-1 text-sm text-yellow-700">
                                        <?php foreach ($analysisResult['crawl_delays'] as $agent => $delay): ?>
                                            <li><?php echo htmlspecialchars($agent); ?>: <?php echo $delay; ?>s</li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Deployment Tab -->
                <div id="deployment" class="tab-content">
                    <div class="space-y-6">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-4">📋 Deployment Instructions</h4>
                            <ol class="list-decimal list-inside space-y-2 text-blue-700">
                                <li>Download or copy the robots.txt content above</li>
                                <li>Upload the file to your website's root directory (example.com/robots.txt)</li>
                                <li>Ensure the file is accessible via HTTP/HTTPS</li>
                                <li>Test the file using Google's robots.txt Tester</li>
                                <li>Monitor crawl behavior in Google Search Console</li>
                            </ol>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">✅ Best Practices</h4>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li>• Keep robots.txt simple and readable</li>
                                    <li>• Test before deploying to production</li>
                                    <li>• Include sitemap URL when available</li>
                                    <li>• Use crawl-delay sparingly</li>
                                    <li>• Monitor for crawl errors</li>
                                </ul>
                            </div>
                            
                            <div class="bg-red-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-red-800 mb-2">⚠️ Common Mistakes</h4>
                                <ul class="text-sm text-red-700 space-y-1">
                                    <li>• Blocking important pages accidentally</li>
                                    <li>• Using robots.txt for security (it's public!)</li>
                                    <li>• Setting extremely high crawl delays</li>
                                    <li>• Forgetting to update after site changes</li>
                                    <li>• Not including sitemap references</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800 mb-2">🔗 Testing Tools</h4>
                            <div class="space-y-2 text-sm">
                                <a href="https://www.google.com/webmasters/tools/robots-testing-tool" target="_blank" class="block text-green-700 hover:text-green-900 underline">Google Robots.txt Tester</a>
                                <a href="https://www.bing.com/webmaster/help/how-to-verify-bingbot-2195837f" target="_blank" class="block text-green-700 hover:text-green-900 underline">Bing Robots.txt Verification</a>
                                <a href="https://technicalseo.com/tools/robots-txt/" target="_blank" class="block text-green-700 hover:text-green-900 underline">Technical SEO Robots.txt Tester</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Info Section -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Robots.txt Guide</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Create & Validate</h3>
                    <p class="text-gray-600">Generate your robots.txt file using templates or custom rules with built-in validation</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-green-600">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Deploy & Monitor</h3>
                    <p class="text-gray-600">Upload to your website root and monitor crawler behavior in search console</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Optimize & Update</h3>
                    <p class="text-gray-600">Regularly review and update your robots.txt as your website evolves</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-lg font-semibold mb-2">Advanced Robots.txt Generator</h3>
            <p class="text-gray-300">Professional crawler control tool by Thiyagi - Free forever</p>
            <p class="text-gray-400 text-sm mt-2">Control search engine crawlers and optimize your website's SEO</p>
        </div>
    </footer>

    <script>
        // Template selection
        let selectedTemplate = '';
        
        function selectTemplate(template) {
            selectedTemplate = template;
            document.getElementById('selected_template').value = template;
            
            // Update visual selection
            document.querySelectorAll('.template-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            event.target.classList.add('selected');
            
            // Optionally load template preview
            if (template && template !== 'custom') {
                showNotification('Template selected: ' + template, 'success');
            }
        }
        
        // Add bot to user agents
        function addBot(bot) {
            const textarea = document.getElementById('user_agents');
            const current = textarea.value.trim();
            const bots = current.split('\n').map(b => b.trim()).filter(b => b);
            
            if (!bots.includes(bot)) {
                bots.push(bot);
                textarea.value = bots.join('\n');
                showNotification('Added ' + bot + ' to user agents', 'success');
            } else {
                showNotification(bot + ' already in list', 'warning');
            }
        }
        
        // Tab functionality
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
            });
            
            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
                btn.classList.add('border-transparent', 'text-gray-500');
            });
            
            // Show selected tab content
            const selectedTab = document.getElementById(tabName);
            selectedTab.classList.add('active');
            selectedTab.style.display = 'block';
            
            // Add active class to clicked tab button
            event.target.classList.remove('border-transparent', 'text-gray-500');
            event.target.classList.add('active', 'border-blue-500', 'text-blue-600');
        }
        
        // Copy to clipboard
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    showNotification('Robots.txt content copied to clipboard!', 'success');
                });
            }
        }
        
        // Test robots.txt online
        function testRobots() {
            const websiteUrl = document.getElementById('website_url').value;
            if (websiteUrl) {
                window.open('https://www.google.com/webmasters/tools/robots-testing-tool?url=' + encodeURIComponent(websiteUrl), '_blank');
            } else {
                showNotification('Please enter website URL to test', 'warning');
            }
        }
        
        // Show notification
        function showNotification(message, type) {
            const notification = document.createElement('div');
            const bgColor = type === 'success' ? 'bg-green-500' : type === 'warning' ? 'bg-yellow-500' : 'bg-red-500';
            notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${bgColor} text-white`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = form.querySelector('button[type="submit"]');
            
            form.addEventListener('submit', function() {
                submitButton.innerHTML = `
                    <svg class="w-5 h-5 animate-spin inline-block mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Generating Robots.txt...
                `;
                submitButton.disabled = true;
            });
        });
    </script>

    <!-- Comprehensive SEO Content Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Complete Guide to Advanced Robots.txt Generator and SEO Optimization</h2>
            
            <div class="prose max-w-none text-gray-700 space-y-6">
                <p class="text-lg leading-relaxed">The <strong>robots.txt file</strong> serves as a fundamental cornerstone of technical SEO, functioning as the first point of contact between search engine crawlers and your website's content infrastructure. We understand that creating an optimized <strong>robots.txt generator</strong> requires comprehensive knowledge of crawler directives, search engine protocols, and website architecture strategies that collectively determine how search engines discover, crawl, and index your web pages. Our <strong>advanced robots.txt generator tool</strong> empowers webmasters, SEO professionals, and digital marketers to create precisely configured robots.txt files that maximize crawl efficiency while protecting sensitive content from unauthorized indexing.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Understanding the Robots.txt Protocol</h3>
                
                <p>The <strong>robots exclusion protocol</strong>, commonly known as robots.txt, emerged in 1994 as a voluntary standard for controlling how automated web crawlers interact with websites. This plain text file, always located at a website's root directory (www.example.com/robots.txt), contains directives that instruct search engine bots which sections of your site they should crawl and which areas remain off-limits. While search engines treat robots.txt as a strong suggestion rather than a legal requirement, reputable crawlers including <strong>Googlebot</strong>, <strong>Bingbot</strong>, and other major search engine spiders respect these directives to maintain positive relationships with site owners.</p>
                
                <p>We recognize that effective <strong>robots.txt configuration</strong> balances multiple competing priorities: encouraging search engines to discover important content, preventing duplicate content issues, protecting administrative areas from public exposure, managing server resources during high-traffic periods, and controlling which pages contribute to your site's search engine presence. Poorly configured robots.txt files create significant problems including blocked resources that prevent proper page rendering, accidentally disallowed important content leading to deindexing, increased server load from excessive bot traffic, and exposure of sensitive information through inadequate restrictions.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Essential Robots.txt Directives and Syntax</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">User-agent Directive</h4>
                
                <p>The <strong>User-agent directive</strong> specifies which crawler the subsequent rules apply to, accepting either specific bot names or the wildcard asterisk (*) to target all crawlers. Common user-agent identifiers include <strong>Googlebot</strong> for Google Search, <strong>Bingbot</strong> for Microsoft Bing, <strong>Slurp</strong> for Yahoo, <strong>DuckDuckBot</strong> for DuckDuckGo, <strong>Baiduspider</strong> for Baidu, and <strong>YandexBot</strong> for Yandex. We implement sophisticated user-agent targeting to provide different crawling permissions to different bot categories—allowing major search engines full access while restricting aggressive scrapers or competitive intelligence bots.</p>
                
                <p>Multiple user-agent blocks within a single robots.txt file enable granular control over crawler behavior. For example, we might allow <strong>Googlebot</strong> unrestricted access to product pages while blocking generic web scrapers from accessing the same content. The wildcard user-agent (*) serves as a catch-all that applies to any bot not explicitly named in a specific user-agent block, functioning as a default policy for unknown or newly emerged crawlers.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Disallow Directive</h4>
                
                <p>The <strong>Disallow directive</strong> instructs crawlers not to access specified URL paths, forming the primary mechanism for controlling bot access across your website. Disallow rules accept path patterns including exact paths (/admin/), directory wildcards (/private/*), file extension patterns (/*.pdf$), and query string patterns (/*?sessionid=). We recommend strategic disallow implementations that protect sensitive areas like administrative interfaces (/wp-admin/, /admin/), user account sections (/account/, /checkout/), internal search results pages (/search?, /?s=), session-based URLs (*?sessionid=, *&sid=), and staging/development environments (/dev/, /test/).</p>
                
                <p>Importantly, <strong>disallowing URLs in robots.txt does not prevent them from appearing in search results</strong> if other websites link to those pages. Disallow only prevents crawlers from accessing and indexing the actual content. For complete exclusion from search engine indexes, we must combine robots.txt disallow directives with meta robots tags (noindex) or x-robots-tag HTTP headers to definitively prevent indexing even when external links exist.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Allow Directive</h4>
                
                <p>The <strong>Allow directive</strong> explicitly permits crawler access to specific URL paths, proving particularly valuable when we need to create exceptions within broader disallow rules. Google and many modern search engines support allow directives, though they weren't part of the original robots exclusion standard. When both allow and disallow directives potentially apply to the same URL, most crawlers prioritize the most specific matching rule, enabling sophisticated crawling permission structures.</p>
                
                <p>We frequently employ allow directives in <strong>e-commerce configurations</strong> where administrative directories require blocking but specific subdirectories within those paths need crawler access. For example: disallowing /admin/* while allowing /admin/public-resources/ ensures search engines access promotional materials stored in admin directories without exposing administrative functionality to public indexing.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Sitemap Directive</h4>
                
                <p>The <strong>Sitemap directive</strong> informs search engines about your XML sitemap locations, providing crawlers with comprehensive lists of URLs you want indexed. While search engines can discover sitemaps through various methods (Google Search Console submission, sitemap mention in robots.txt, sitemap auto-discovery through crawling), robots.txt sitemap declarations create an authoritative reference that ensures crawlers locate your sitemaps during their initial robots.txt fetch that precedes all other crawling activity.</p>
                
                <p>Our generator supports <strong>multiple sitemap declarations</strong> within a single robots.txt file, accommodating complex website structures with separate sitemaps for different content types: main content sitemap for primary pages, product sitemap for e-commerce inventory, news sitemap for time-sensitive content, image sitemap for media libraries, and video sitemap for multimedia content. Each sitemap declaration requires a complete absolute URL (https://www.example.com/sitemap.xml) rather than relative paths, ensuring crawlers can locate sitemaps regardless of their current position within your site structure.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Crawl-delay Directive</h4>
                
                <p>The <strong>Crawl-delay directive</strong> specifies the minimum number of seconds crawlers should wait between successive requests to your server, helping manage server load during high-traffic periods or when hosting resources cannot handle aggressive crawling. However, we note that <strong>Googlebot does not support crawl-delay</strong>, requiring webmasters to use Google Search Console's crawl rate settings instead. Other major search engines including Bing and Yandex respect crawl-delay directives, making them valuable for controlling non-Google crawler behavior.</p>
                
                <p>We recommend implementing <strong>crawl-delay values between 1-10 seconds</strong> for most scenarios. Values below 1 second provide minimal benefit as crawlers already implement their own politeness policies, while delays exceeding 10 seconds may significantly slow discovery of new content and updates. Aggressive crawl-delay configurations (20+ seconds) should be reserved for severe server resource constraints or during emergency traffic management situations requiring immediate crawler throttling.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Strategic Robots.txt Templates for Different Website Types</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">E-commerce Website Configuration</h4>
                
                <p>E-commerce websites require <strong>sophisticated robots.txt strategies</strong> that balance product discovery with duplicate content prevention and customer privacy protection. We disallow shopping cart URLs, checkout processes, customer account sections, and search results pages that create infinite parameter combinations. Simultaneously, we ensure product pages, category pages, and important informational content remain fully accessible to search engine crawlers. E-commerce robots.txt configurations typically block query parameters used for sorting, filtering, and session tracking (?sort=, &filter=, *?sessionid=) while allowing product and category directory paths.</p>
                
                <p>Our <strong>e-commerce template</strong> also addresses price comparison bots and competitive intelligence scrapers that consume server resources without providing SEO value. By specifically blocking known scraper user-agents while allowing legitimate search engine crawlers, we protect competitive pricing information and inventory data from unauthorized harvesting while maintaining strong search engine visibility for genuine customer searches.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">WordPress Blog Configuration</h4>
                
                <p><strong>WordPress websites</strong> benefit from specialized robots.txt configurations that address the platform's specific directory structure and common duplicate content issues. We typically disallow the wp-admin directory (WordPress administrative interface), wp-includes directory (core WordPress files), plugin directories, theme directories (except when needed for resource loading), and cache directories. Additionally, we block common duplicate content paths including author archives, date-based archives, tag pages, trackback URLs, feed URLs, and comment feeds that create indexing inefficiencies.</p>
                
                <p>However, our <strong>WordPress template</strong> explicitly allows the wp-content/uploads directory where media files reside, ensuring search engines can access images, PDFs, and other content assets that enhance search visibility. We also permit access to specific theme files required for proper page rendering, as blocking critical CSS or JavaScript resources can prevent Google from correctly evaluating page content and mobile-friendliness signals.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Corporate Website Configuration</h4>
                
                <p>Corporate and business websites typically employ <strong>restrictive robots.txt configurations</strong> that protect confidential information, internal tools, and private document repositories from public search engine exposure. We disallow investor relations materials not intended for public indexing, employee portals and intranet resources, internal search functionality, development and staging environments, confidential document libraries, and partner/vendor portal sections. These restrictions prevent sensitive business information from appearing in public search results while maintaining appropriate visibility for marketing pages, product information, contact details, and other content intended for customer discovery.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">News and Media Website Configuration</h4>
                
                <p><strong>News websites</strong> and online publications require robots.txt configurations optimized for rapid content discovery and social media sharing while managing crawler load from frequent updates. Our news template allows unrestricted access to article pages and category archives while managing crawl budget through strategic blocking of infinite scroll implementations, reader comment systems, and complex filtering interfaces. We encourage social media crawler access (facebookexternalhit, Twitterbot, LinkedInBot) to ensure proper preview generation when articles are shared across social platforms, maximizing content distribution and reader engagement.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Advanced Robots.txt Optimization Techniques</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Crawl Budget Optimization</h4>
                
                <p><strong>Crawl budget</strong>—the number of pages search engines crawl on your site within a given timeframe—becomes increasingly critical as websites grow larger and more complex. We optimize crawl budget allocation by blocking low-value pages that consume crawler resources without providing SEO benefits. This includes filtering and sorting parameters that create duplicate content (?color=red, ?size=large), pagination pages beyond reasonable depths, calendar archives with sparse content, admin and utility pages, and pages behind login requirements. By preventing crawlers from wasting time on these low-value URLs, we ensure they focus on discovering and updating important content that drives organic search traffic.</p>
                
                <p>We implement <strong>strategic allow directives</strong> within broader disallow patterns to create crawl priority hierarchies. For example, disallowing an entire /products/ directory while specifically allowing /products/featured/ ensures crawlers prioritize high-margin featured products over the complete catalog during resource-constrained crawl sessions. This technique proves particularly valuable during seasonal campaigns or product launches requiring rapid indexing of specific content subsets.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Dynamic Robots.txt Generation</h4>
                
                <p>Static robots.txt files work well for most websites, but <strong>dynamic robots.txt generation</strong> enables sophisticated strategies that adapt to changing business needs and crawling patterns. We generate robots.txt content programmatically through server-side scripts that respond to robots.txt requests with appropriate directives based on current conditions. This allows temporary blocking during maintenance periods, time-based crawl restrictions during peak traffic hours, IP-based access control providing different rules for different crawler sources, A/B testing of robots.txt configurations, and automated responses to detected crawler abuse.</p>
                
                <p>Dynamic generation requires careful implementation to ensure search engines receive consistent, cacheable robots.txt responses. We recommend <strong>appropriate cache headers</strong> (Cache-Control, Expires) that balance fresh directive delivery with crawler efficiency, typically caching robots.txt for 24 hours to minimize server requests while allowing daily policy updates when necessary.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Regular Expression Pattern Matching</h4>
                
                <p>While the original robots exclusion protocol doesn't officially support regular expressions, many modern crawlers implement <strong>pattern matching extensions</strong> that enable sophisticated URL filtering. Google supports the wildcard asterisk (*) matching any sequence of characters and the dollar sign ($) indicating URL end matching. These patterns create powerful rules like <code>Disallow: /*.pdf$</code> blocking all PDF files, <code>Disallow: /*?sessionid=</code> blocking all URLs containing session parameters, and <code>Disallow: /*/admin/</code> blocking admin directories at any path depth.</p>
                
                <p>We caution that <strong>not all crawlers support advanced pattern matching</strong>, requiring careful testing to ensure critical blocks function across different search engines. When advanced patterns prove necessary, we combine them with simpler path-based rules providing fallback protection for crawlers lacking pattern-matching capabilities, ensuring consistent blocking even when dealing with less sophisticated bot implementations.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Common Robots.txt Mistakes and How to Avoid Them</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Blocking Critical Resources</h4>
                
                <p>One of the most damaging robots.txt errors involves <strong>accidentally blocking CSS, JavaScript, or image resources</strong> that search engines need for proper page rendering and mobile-friendliness evaluation. Google explicitly states that blocking resources prevents their rendering engine from seeing pages as users experience them, potentially leading to suboptimal mobile search performance and misidentification of page content. We ensure our generator warns users when common resource patterns appear in disallow directives, preventing unintentional resource blocking that harms search visibility.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Misunderstanding Disallow vs. Noindex</h4>
                
                <p>Many webmasters incorrectly believe that <strong>disallowing URLs in robots.txt prevents them from appearing in search results</strong>, when in reality disallow only prevents crawling, not indexing. URLs can appear in search results with limited information (just title and URL, no description) if other websites link to them, even when disallowed in robots.txt. For complete removal from search indexes, we must use meta robots noindex tags or X-Robots-Tag HTTP headers in combination with removing robots.txt blocks to allow crawlers to discover and process the noindex directives.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Case Sensitivity Issues</h4>
                
                <p>Robots.txt path matching treats URLs as <strong>case-sensitive</strong>, meaning <code>Disallow: /Admin/</code> does not block access to /admin/ or /ADMIN/. We implement lowercase path enforcement in our generator and include warnings about case sensitivity to prevent security vulnerabilities where sensitive areas remain accessible due to case variations. Best practice dictates using lowercase paths exclusively in robots.txt and ensuring website URL structures maintain consistent casing to avoid matching failures.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Syntax Errors Breaking the Entire File</h4>
                
                <p>Unlike some configuration files that partially function despite errors, <strong>robots.txt syntax mistakes can cause crawlers to ignore entire sections or the complete file</strong>. Common syntax errors include missing colons after directives, using spaces instead of proper directive formatting, attempting to use multiple disallow paths on a single line, and incorrect user-agent specifications. Our generator implements real-time syntax validation ensuring generated files follow proper robots.txt formatting standards and highlighting potential issues before deployment.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Testing and Validating Robots.txt Files</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Google Search Console Robots Testing Tool</h4>
                
                <p><strong>Google Search Console</strong> provides a dedicated robots.txt testing tool that simulates Googlebot's interpretation of your robots.txt file, allowing verification of specific URL blocking before deployment. We access this tool through the Legacy Tools and Reports section, where we can test individual URLs against our robots.txt file to confirm whether Googlebot will crawl them. The tool highlights syntax errors and warns about potentially problematic directives, providing immediate feedback on configuration accuracy.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Third-party Validation Services</h4>
                
                <p>Numerous <strong>online robots.txt validators</strong> offer independent verification of syntax correctness and directive interpretation across different search engines. These services typically provide detailed reports identifying syntax errors, warning about deprecated directives, checking for common configuration mistakes, and simulating how different crawlers will interpret your rules. We recommend validating robots.txt files through multiple services before production deployment to ensure broad compatibility across the search engine ecosystem.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Server Log Analysis</h4>
                
                <p><strong>Analyzing server logs</strong> provides empirical evidence of how search engine crawlers actually interact with your website after robots.txt implementation. We examine crawler access patterns to verify that blocked sections receive no requests from compliant crawlers, identify rogue bots ignoring robots.txt directives, detect unexpected crawler access to supposedly blocked resources, and confirm that allowed areas receive appropriate crawler attention. Server log analysis transforms robots.txt from theoretical configuration to validated reality, ensuring directives achieve their intended effects.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Security Implications of Robots.txt Configuration</h3>
                
                <p>While robots.txt serves as a crawler communication mechanism, we emphasize that <strong>it provides zero security protection</strong> against malicious actors. The robots.txt file itself is publicly accessible, meaning any disallowed paths effectively become a roadmap to sensitive areas that administrators want hidden. Malicious bots, hackers, and competitors can read robots.txt to identify admin panels, private documents, and sensitive directories, then ignore the disallow directives and access those resources directly if proper authentication isn't implemented.</p>
                
                <p>We strongly recommend <strong>never relying on robots.txt alone for security</strong>. Critical protections require proper authentication mechanisms (password protection, login systems), server-level access controls (.htaccess, nginx configurations), IP whitelisting for administrative interfaces, encryption for sensitive data transmission, and regular security audits identifying vulnerable endpoints. Robots.txt should be viewed as a polite request to well-behaved crawlers, not a security barrier protecting sensitive resources from unauthorized access.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Mobile and Separate Mobile Domain Considerations</h3>
                
                <p>Websites operating <strong>separate mobile domains</strong> (m.example.com) require careful robots.txt coordination between desktop and mobile versions. We ensure mobile robots.txt files don't accidentally block resources needed for proper rendering on mobile devices while maintaining consistent crawling permissions across both versions. Google's mobile-first indexing means Googlebot primarily crawls mobile versions, making mobile robots.txt configuration critically important for maintaining search visibility.</p>
                
                <p>For <strong>responsive websites</strong> serving the same URLs to all devices, a single robots.txt file controls crawler access across all platforms. We optimize these configurations to ensure mobile-specific resources (responsive images, mobile stylesheets, touch interaction scripts) remain accessible to crawlers evaluating mobile-friendliness and page experience signals.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">International and Multilingual Website Configuration</h3>
                
                <p><strong>International websites</strong> using subdirectories (/en/, /fr/, /de/) or subdomains (en.example.com, fr.example.com) for different languages require robots.txt strategies that maintain consistent crawling policies across all language versions. We typically implement a single comprehensive robots.txt at the root domain that applies broadly, supplemented by language-specific robots.txt files when certain regions require unique crawler restrictions or permissions.</p>
                
                <p>Websites using <strong>hreflang tags</strong> for international targeting should ensure all language versions remain accessible to search engine crawlers. Accidentally blocking language variants prevents search engines from discovering hreflang relationships and properly directing users to appropriate regional content, undermining international SEO strategies and reducing organic visibility in target markets.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Using Our Advanced Robots.txt Generator Effectively</h3>
                
                <p>Our <strong>advanced robots.txt generator</strong> combines professional templates with custom configuration capabilities, enabling both quick setup for common scenarios and detailed customization for unique requirements. We provide pre-configured templates for major website categories (e-commerce, blogs, corporate sites, news portals) that implement industry best practices while allowing modification to match specific needs. The custom configuration interface supports manual user-agent specification, flexible allow/disallow path definitions, multiple sitemap declarations, crawl-delay settings, and real-time syntax validation ensuring error-free output.</p>
                
                <p>We recommend <strong>starting with appropriate templates</strong> as foundational configurations, then refining them based on website-specific requirements identified through server log analysis, Google Search Console insights, and SEO audits. Regular robots.txt reviews (quarterly or after major website changes) ensure configurations remain aligned with evolving content structures and search engine guidelines.</p>
            </div>
        </div>

        <!-- Comprehensive Comparison Table -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Robots.txt Directive Comparison</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Directive</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Function</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Syntax Example</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Support Level</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Best Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-medium">User-agent</td>
                            <td class="border border-gray-300 px-4 py-3">Specifies target crawler</td>
                            <td class="border border-gray-300 px-4 py-3"><code>User-agent: Googlebot</code></td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Universal</td>
                            <td class="border border-gray-300 px-4 py-3">Targeting specific search engines</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-medium">Disallow</td>
                            <td class="border border-gray-300 px-4 py-3">Blocks crawler access to paths</td>
                            <td class="border border-gray-300 px-4 py-3"><code>Disallow: /admin/</code></td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Universal</td>
                            <td class="border border-gray-300 px-4 py-3">Protecting sensitive directories</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-medium">Allow</td>
                            <td class="border border-gray-300 px-4 py-3">Explicitly permits crawler access</td>
                            <td class="border border-gray-300 px-4 py-3"><code>Allow: /public/</code></td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600 font-semibold">Google, Bing</td>
                            <td class="border border-gray-300 px-4 py-3">Creating exceptions in disallow rules</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-medium">Sitemap</td>
                            <td class="border border-gray-300 px-4 py-3">Declares XML sitemap location</td>
                            <td class="border border-gray-300 px-4 py-3"><code>Sitemap: https://example.com/sitemap.xml</code></td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Universal</td>
                            <td class="border border-gray-300 px-4 py-3">Guiding crawlers to important content</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-medium">Crawl-delay</td>
                            <td class="border border-gray-300 px-4 py-3">Sets minimum request interval (seconds)</td>
                            <td class="border border-gray-300 px-4 py-3"><code>Crawl-delay: 5</code></td>
                            <td class="border border-gray-300 px-4 py-3 text-orange-600 font-semibold">Bing, Yandex (Not Google)</td>
                            <td class="border border-gray-300 px-4 py-3">Managing server load from crawlers</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-medium">Wildcard *</td>
                            <td class="border border-gray-300 px-4 py-3">Matches any character sequence</td>
                            <td class="border border-gray-300 px-4 py-3"><code>Disallow: /*.pdf$</code></td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600 font-semibold">Google, Bing</td>
                            <td class="border border-gray-300 px-4 py-3">Pattern-based URL blocking</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-medium">End anchor $</td>
                            <td class="border border-gray-300 px-4 py-3">Matches URL end position</td>
                            <td class="border border-gray-300 px-4 py-3"><code>Disallow: /*.pdf$</code></td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600 font-semibold">Google, Bing</td>
                            <td class="border border-gray-300 px-4 py-3">Precise file extension blocking</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="text-sm text-gray-600 mt-4">*Support levels: Universal (all major crawlers), Limited (some major crawlers), Deprecated (no longer recommended)</p>
        </div>

        <!-- 25 Comprehensive FAQs -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">25 Frequently Asked Questions About Robots.txt</h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">1. What is a robots.txt file and why do I need one?</h3>
                    <p class="text-gray-700">A robots.txt file is a text document located at your website's root that instructs search engine crawlers which pages or sections they can and cannot access. You need one to manage crawler access, protect sensitive areas, optimize crawl budget, prevent duplicate content indexing, and control how search engines interact with your site structure.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">2. Where should I place my robots.txt file?</h3>
                    <p class="text-gray-700">The robots.txt file must be located at your domain's root directory (https://www.example.com/robots.txt). Search engines only check this specific location. Placing it in subdirectories or different paths will prevent crawlers from finding and following your directives.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">3. Does robots.txt actually block search engines?</h3>
                    <p class="text-gray-700">Robots.txt functions as a polite request rather than a security mechanism. Reputable search engines (Google, Bing, Yahoo) respect robots.txt directives, but malicious bots can ignore them. Robots.txt prevents crawling but not necessarily indexing—URLs can still appear in search results if other sites link to them.</p>
                </div>

                <div class="border-l-4 border-red-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">4. What's the difference between Disallow and Noindex?</h3>
                    <p class="text-gray-700">Disallow (in robots.txt) prevents crawlers from accessing URLs but doesn't guarantee removal from search results. Noindex (meta tag or HTTP header) instructs search engines not to include pages in their indexes. For complete removal, use noindex tags while allowing crawler access to process those tags.</p>
                </div>

                <div class="border-l-4 border-yellow-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">5. Can I use robots.txt to remove pages from Google search results?</h3>
                    <p class="text-gray-700">No, robots.txt alone cannot remove pages from search results. To remove indexed pages, you must first allow crawler access (remove robots.txt blocks), add noindex tags to those pages, and submit removal requests through Google Search Console. Robots.txt blocking prevents the noindex discovery needed for removal.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">6. Should I block CSS and JavaScript files in robots.txt?</h3>
                    <p class="text-gray-700">No, blocking CSS, JavaScript, or image resources prevents search engines from properly rendering your pages, potentially harming mobile search rankings and content understanding. Google explicitly warns against blocking resources needed for page rendering and mobile-friendliness evaluation.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">7. How do I create a robots.txt file?</h3>
                    <p class="text-gray-700">Create a plain text file named "robots.txt" using any text editor (Notepad, TextEdit, etc.), add your directives following proper syntax, save with UTF-8 encoding, and upload to your website's root directory. Our generator simplifies this process by creating properly formatted files based on your specifications.</p>
                </div>

                <div class="border-l-4 border-teal-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">8. What does "User-agent: *" mean?</h3>
                    <p class="text-gray-700">The asterisk wildcard (*) in "User-agent: *" means the following directives apply to all web crawlers and bots. It serves as a catch-all rule for any crawler not specifically named in its own User-agent block, providing default behavior for unknown or generic bots.</p>
                </div>

                <div class="border-l-4 border-orange-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">9. Is robots.txt case-sensitive?</h3>
                    <p class="text-gray-700">Yes, robots.txt path matching is case-sensitive. "Disallow: /Admin/" does not block "/admin/" or "/ADMIN/". Always use consistent casing (typically lowercase) in your directives and URL structures to avoid unintended access to supposedly blocked areas.</p>
                </div>

                <div class="border-l-4 border-cyan-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">10. Does every website need a robots.txt file?</h3>
                    <p class="text-gray-700">While not strictly required, virtually all websites benefit from robots.txt files. Even sites allowing complete crawler access should include basic robots.txt with sitemap declarations. Absence of robots.txt generates unnecessary 404 errors as crawlers automatically check for it before accessing other content.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">11. How do I test my robots.txt file?</h3>
                    <p class="text-gray-700">Use Google Search Console's robots.txt Tester tool to validate syntax and test specific URLs against your directives. Additionally, third-party validators and server log analysis confirm how crawlers actually interpret your configuration. Always test before deploying to production.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">12. Can I have multiple robots.txt files on my website?</h3>
                    <p class="text-gray-700">Search engines only recognize robots.txt files at the domain root. Subdirectories cannot have their own robots.txt files that crawlers will respect. For subdomain-specific rules (blog.example.com), place separate robots.txt files at each subdomain's root.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">13. What is crawl budget and how does robots.txt affect it?</h3>
                    <p class="text-gray-700">Crawl budget is the number of pages search engines crawl on your site within a given timeframe. Robots.txt optimizes crawl budget by blocking low-value pages (filters, duplicates, admin areas), allowing crawlers to focus resources on important content that deserves indexing priority.</p>
                </div>

                <div class="border-l-4 border-red-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">14. Should I block my admin panel in robots.txt?</h3>
                    <p class="text-gray-700">Blocking admin panels in robots.txt prevents crawler access but reveals their existence to anyone reading your robots.txt file. Implement proper authentication (passwords, IP restrictions) rather than relying on robots.txt security. Robots.txt blocking provides convenience, not protection.</p>
                </div>

                <div class="border-l-4 border-yellow-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">15. Does Google respect crawl-delay directives?</h3>
                    <p class="text-gray-700">No, Googlebot does not support the Crawl-delay directive. Use Google Search Console's crawl rate settings to manage Googlebot crawl speed. Other search engines (Bing, Yandex) do respect Crawl-delay, making it useful for controlling non-Google crawler behavior.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">16. Can robots.txt improve my SEO rankings?</h3>
                    <p class="text-gray-700">Robots.txt doesn't directly improve rankings but optimizes crawl efficiency, allowing search engines to discover and index important content faster. Proper configuration prevents duplicate content issues, protects crawl budget, and ensures crawlers focus on pages that should drive organic traffic.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">17. How do I block specific crawlers or bots?</h3>
                    <p class="text-gray-700">Create a User-agent block targeting the specific bot name followed by Disallow directives. For example: "User-agent: BadBot" followed by "Disallow: /" blocks all access from that bot. Remember that malicious bots may ignore robots.txt directives regardless of configuration.</p>
                </div>

                <div class="border-l-4 border-teal-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">18. What happens if my robots.txt file has syntax errors?</h3>
                    <p class="text-gray-700">Syntax errors can cause crawlers to ignore affected sections or the entire file. Common errors include missing colons, improper spacing, incorrect directive names, and invalid user-agent specifications. Use validation tools to check syntax before deployment to prevent unintended crawler behavior.</p>
                </div>

                <div class="border-l-4 border-orange-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">19. Should I include my sitemap in robots.txt?</h3>
                    <p class="text-gray-700">Yes, declaring sitemaps in robots.txt helps search engines discover them during initial robots.txt fetch, before any other crawling occurs. This ensures faster discovery of your content structure. Include absolute URLs to all relevant sitemaps (main content, products, news, images, videos).</p>
                </div>

                <div class="border-l-4 border-cyan-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">20. Can I use wildcards and regular expressions in robots.txt?</h3>
                    <p class="text-gray-700">Google and Bing support limited wildcard patterns: asterisk (*) matching any character sequence and dollar sign ($) matching URL ends. Full regular expression support is not standard. Example: "Disallow: /*.pdf$" blocks all PDF files across your entire site structure.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">21. How often should I update my robots.txt file?</h3>
                    <p class="text-gray-700">Review robots.txt quarterly and after major website changes (migrations, new sections, URL structure modifications). Monitor Google Search Console for crawl errors and analyze server logs to identify necessary adjustments. Update whenever launching new content areas requiring specific crawler treatment.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">22. What's the maximum size for a robots.txt file?</h3>
                    <p class="text-gray-700">Google processes robots.txt files up to 500 kilobytes. Files exceeding this limit are truncated, potentially losing important directives. For large sites requiring extensive rules, prioritize critical directives early in the file and consider server-level solutions for complex blocking needs.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">23. Should I block duplicate content with robots.txt?</h3>
                    <p class="text-gray-700">Blocking duplicate content in robots.txt prevents crawling but not indexing if external links exist. Better solutions include canonical tags, 301 redirects, or noindex tags that allow crawling while preventing indexing. Use robots.txt for duplicate content only when other methods aren't feasible.</p>
                </div>

                <div class="border-l-4 border-red-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24. Can robots.txt affect my Google PageSpeed score?</h3>
                    <p class="text-gray-700">Improperly configured robots.txt that blocks CSS, JavaScript, or image resources can severely impact PageSpeed scores by preventing Google from rendering pages correctly. Ensure all resources needed for proper page display remain accessible to search engine crawlers.</p>
                </div>

                <div class="border-l-4 border-yellow-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">25. How do I allow all crawlers complete access to my site?</h3>
                    <p class="text-gray-700">Create a minimal robots.txt file with "User-agent: *" followed by "Disallow:" (blank disallow allows everything). Include sitemap declarations to guide crawlers. Even sites allowing full access benefit from robots.txt with sitemap references rather than having no file at all.</p>
                </div>
            </div>
        </div>

        <!-- Key Takeaways Section -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Essential Robots.txt Best Practices</h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold text-blue-900 mb-4">Critical Do's</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1">✓</span>
                            <span><strong>Always place robots.txt at your domain root</strong> - Only this location is recognized by search engines</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1">✓</span>
                            <span><strong>Include sitemap declarations</strong> - Guide crawlers to your most important content</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1">✓</span>
                            <span><strong>Test before deployment</strong> - Use Google Search Console and validators to verify syntax</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1">✓</span>
                            <span><strong>Allow CSS/JavaScript resources</strong> - Enable proper page rendering for search engines</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1">✓</span>
                            <span><strong>Review regularly</strong> - Update after major website changes or quarterly</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold text-blue-900 mb-4">Critical Don'ts</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1">✗</span>
                            <span><strong>Don't rely on robots.txt for security</strong> - Use proper authentication instead</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1">✗</span>
                            <span><strong>Don't block pages you want deindexed</strong> - Use noindex tags while allowing crawling</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1">✗</span>
                            <span><strong>Don't assume case-insensitive matching</strong> - Paths are case-sensitive</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1">✗</span>
                            <span><strong>Don't block critical resources</strong> - CSS, JS, and images need crawler access</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1">✗</span>
                            <span><strong>Don't forget syntax validation</strong> - Errors can break entire configurations</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>
