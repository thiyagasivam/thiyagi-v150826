<?php
// Advanced URL parsing and analysis class
class UrlAnalyzer {
    
    // Parse URL components with enhanced analysis
    public static function parseUrl($url) {
        $components = parse_url($url);
        
        if ($components === false) {
            throw new Exception('Invalid URL format');
        }
        
        // Set default values for all possible components
        $defaults = [
            'scheme' => '',
            'host' => '',
            'port' => '',
            'user' => '',
            'pass' => '',
            'path' => '',
            'query' => '',
            'fragment' => ''
        ];
        
        $components = array_merge($defaults, (array)$components);
        
        // Parse query string if it exists
        $queryParams = [];
        if (!empty($components['query'])) {
            parse_str($components['query'], $queryParams);
        }
        
        return [
            'components' => $components,
            'queryParams' => $queryParams,
            'analysis' => self::analyzeUrl($url, $components)
        ];
    }
    
    // Analyze URL for additional insights
    public static function analyzeUrl($url, $components) {
        $analysis = [
            'url_length' => strlen($url),
            'is_secure' => strtolower($components['scheme']) === 'https',
            'has_subdomain' => self::hasSubdomain($components['host']),
            'domain_info' => self::getDomainInfo($components['host']),
            'path_analysis' => self::analyzePath($components['path']),
            'query_count' => 0,
            'is_clean_url' => empty($components['query']),
            'is_root' => empty($components['path']) || $components['path'] === '/',
            'url_type' => self::detectUrlType($components),
            'technology_hints' => self::detectTechnology($url),
        ];
        
        if (!empty($components['query'])) {
            parse_str($components['query'], $queryParams);
            $analysis['query_count'] = count($queryParams);
        }
        
        return $analysis;
    }
    
    // Check if URL has subdomain
    private static function hasSubdomain($host) {
        if (empty($host)) return false;
        
        $parts = explode('.', $host);
        return count($parts) > 2 && !filter_var($host, FILTER_VALIDATE_IP);
    }
    
    // Get domain information
    private static function getDomainInfo($host) {
        if (empty($host)) {
            return ['domain' => '', 'subdomain' => '', 'tld' => ''];
        }
        
        if (filter_var($host, FILTER_VALIDATE_IP)) {
            return ['domain' => $host, 'subdomain' => '', 'tld' => 'IP Address'];
        }
        
        $parts = explode('.', $host);
        $count = count($parts);
        
        if ($count < 2) {
            return ['domain' => $host, 'subdomain' => '', 'tld' => ''];
        }
        
        $tld = end($parts);
        $domain = $parts[$count - 2] . '.' . $tld;
        $subdomain = $count > 2 ? implode('.', array_slice($parts, 0, $count - 2)) : '';
        
        return [
            'domain' => $domain,
            'subdomain' => $subdomain,
            'tld' => $tld
        ];
    }
    
    // Analyze URL path
    private static function analyzePath($path) {
        if (empty($path) || $path === '/') {
            return ['segments' => [], 'depth' => 0, 'has_file' => false, 'extension' => ''];
        }
        
        $segments = array_filter(explode('/', trim($path, '/')));
        $lastSegment = end($segments);
        $hasFile = strpos($lastSegment, '.') !== false;
        $extension = $hasFile ? pathinfo($lastSegment, PATHINFO_EXTENSION) : '';
        
        return [
            'segments' => $segments,
            'depth' => count($segments),
            'has_file' => $hasFile,
            'extension' => $extension
        ];
    }
    
    // Detect URL type
    private static function detectUrlType($components) {
        $path = $components['path'];
        $host = $components['host'];
        
        // API detection
        if (strpos($path, '/api/') !== false || strpos($host, 'api.') === 0) {
            return 'API Endpoint';
        }
        
        // Admin detection
        if (strpos($path, '/admin/') !== false || strpos($path, '/wp-admin/') !== false) {
            return 'Admin Panel';
        }
        
        // File detection
        if (preg_match('/\.(pdf|doc|docx|jpg|png|gif|mp4|zip|exe)$/i', $path)) {
            return 'File Download';
        }
        
        // CDN detection
        if (preg_match('/(cdn\.|static\.|assets\.)/', $host)) {
            return 'CDN Resource';
        }
        
        return 'Web Page';
    }
    
    // Detect technology hints from URL
    private static function detectTechnology($url) {
        $hints = [];
        
        // WordPress
        if (strpos($url, '/wp-') !== false || strpos($url, 'wordpress') !== false) {
            $hints[] = 'WordPress';
        }
        
        // PHP
        if (strpos($url, '.php') !== false) {
            $hints[] = 'PHP';
        }
        
        // ASP.NET
        if (strpos($url, '.aspx') !== false || strpos($url, '.asp') !== false) {
            $hints[] = 'ASP.NET';
        }
        
        // JSP
        if (strpos($url, '.jsp') !== false) {
            $hints[] = 'Java JSP';
        }
        
        // Node.js patterns
        if (preg_match('/\/(api|node)\//', $url)) {
            $hints[] = 'Node.js';
        }
        
        return $hints;
    }
    
    // Validate and normalize URL
    public static function validateUrl($url) {
        // Remove whitespace
        $url = trim($url);
        
        // Add scheme if missing
        if (!preg_match('/^https?:\/\//i', $url)) {
            $url = 'http://' . $url;
        }
        
        // Validate URL
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception('Invalid URL format');
        }
        
        return $url;
    }
    
    // Generate SEO-friendly URL suggestions
    public static function generateSeoSuggestions($components, $analysis) {
        $suggestions = [];
        
        if (!$analysis['is_secure'] && $components['scheme'] === 'http') {
            $suggestions[] = [
                'type' => 'security',
                'title' => 'Use HTTPS',
                'message' => 'Consider using HTTPS for better security and SEO ranking.'
            ];
        }
        
        if ($analysis['url_length'] > 2048) {
            $suggestions[] = [
                'type' => 'performance',
                'title' => 'URL Too Long',
                'message' => 'URLs longer than 2048 characters may cause issues in some browsers.'
            ];
        }
        
        if ($analysis['path_analysis']['depth'] > 5) {
            $suggestions[] = [
                'type' => 'seo',
                'title' => 'Deep URL Structure',
                'message' => 'Consider flattening URL structure for better SEO and user experience.'
            ];
        }
        
        if (!$analysis['is_clean_url'] && $analysis['query_count'] > 3) {
            $suggestions[] = [
                'type' => 'usability',
                'title' => 'Complex Query String',
                'message' => 'Consider using cleaner URLs without excessive query parameters.'
            ];
        }
        
        return $suggestions;
    }
}

// Handle form submission
$url = '';
$result = null;
$error = '';
$action = $_POST['action'] ?? 'parse';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $url = trim($_POST['url'] ?? '');
        
        if (empty($url)) {
            throw new Exception('Please enter a URL to analyze');
        }
        
        $url = UrlAnalyzer::validateUrl($url);
        $result = UrlAnalyzer::parseUrl($url);
        $result['suggestions'] = UrlAnalyzer::generateSeoSuggestions($result['components'], $result['analysis']);
        $result['original_url'] = $url;
        
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

    <title>URL Parser & Analyzer 2026 - Advanced URL Component Breakdown Tool</title>
    <meta name="description" content="Professional URL parser and analyzer tool for 2026. Parse, analyze, and breakdown URLs with detailed component extraction, SEO analysis, and security insights for developers and marketers.">
    <meta name="keywords" content="URL parser 2026, URL analyzer tool, parse URL components, URL breakdown, domain extractor, SEO URL analysis, web development tools">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/url-parser">
    <meta property="og:title" content="URL Parser & Analyzer 2026 - Advanced URL Component Breakdown Tool">
    <meta property="og:description" content="Professional URL parser with detailed analysis, SEO insights, and component breakdown. Essential tool for developers and marketers.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/url-parser">
    <meta property="twitter:title" content="URL Parser & Analyzer 2026 - Advanced URL Component Breakdown Tool">
    <meta property="twitter:description" content="Professional URL parser with SEO analysis and detailed component breakdown.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "URL Parser & Analyzer 2026",
        "description": "Advanced URL parsing and analysis tool for developers with detailed component breakdown and SEO insights",
        "url": "https://www.thiyagi.com/url-parser",
        "applicationCategory": "DeveloperApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>
    
    <style>
        .url-component {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .url-component::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.6), transparent);
            transition: left 0.6s;
        }
        .url-component:hover::before {
            left: 100%;
        }
        .url-component:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .analysis-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }
        .parse-animation {
            animation: parseEffect 0.8s ease-in-out;
        }
        @keyframes parseEffect {
            0% { opacity: 0; transform: scale(0.9); }
            50% { opacity: 1; transform: scale(1.02); }
            100% { opacity: 1; transform: scale(1); }
        }
        .suggestion-badge {
            animation: fadeInUp 0.5s ease-out;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
<body class="bg-gray-50">
    <!-- Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-200 px-4 py-3">
        <div class="max-w-6xl mx-auto">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Developer Tools</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">URL Parser</li>
            </ol>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">🔍 URL Parser & Analyzer 2026</h1>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto">Advanced URL parsing and analysis tool with detailed component breakdown, SEO insights, and security analysis for developers, marketers, and web professionals.</p>
        </header>

        <!-- Main Parser Interface -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="analysis-card text-white p-8">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <span class="mr-3">🎯</span> URL Analysis Tool
                </h2>
                
                <form method="POST" id="urlForm">
                    <div class="mb-6">
                        <label for="url" class="block text-white font-semibold mb-3 text-lg">🌐 Enter URL to Analyze:</label>
                        <div class="relative">
                            <input type="url" name="url" id="url" 
                                   class="w-full px-6 py-4 text-lg border-2 border-white border-opacity-30 rounded-lg bg-white bg-opacity-20 text-white placeholder-white placeholder-opacity-70 focus:ring-2 focus:ring-white focus:border-white transition-all" 
                                   placeholder="https://example.com/path?query=string#fragment" 
                                   value="<?= htmlspecialchars($url) ?>" required>
                            <div class="absolute bottom-2 right-2 text-white text-opacity-70 text-xs">
                                <span id="urlLength"><?= strlen($url) ?></span> characters
                            </div>
                        </div>
                        <p class="text-white text-opacity-80 text-sm mt-2">💡 Enter any HTTP/HTTPS URL for comprehensive analysis and component breakdown</p>
                    </div>
                    
                    <div class="flex flex-wrap gap-4 mb-6">
                        <button type="button" onclick="loadSampleUrl()" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-medium py-2 px-4 rounded-lg transition-all">
                            📋 Load Sample
                        </button>
                        <button type="button" onclick="clearUrl()" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-medium py-2 px-4 rounded-lg transition-all">
                            🗑️ Clear
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="bg-white hover:bg-gray-100 text-purple-600 font-bold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                            🔍 Parse & Analyze URL
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php if (!empty($error)): ?>
        <!-- Error Display -->
        <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg mb-8">
            <div class="flex items-center">
                <span class="text-red-500 text-2xl mr-3">❌</span>
                <div>
                    <h3 class="text-red-800 font-semibold">Analysis Error</h3>
                    <p class="text-red-700 mt-1"><?= htmlspecialchars($error) ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($result): ?>
        <!-- Analysis Results -->
        <div class="space-y-8 parse-animation">
            <!-- Original URL Display -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-purple-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">📋</span> Original URL
                    </h2>
                </div>
                <div class="p-8">
                    <div class="bg-gray-100 p-6 rounded-lg border-2 border-gray-200 relative">
                        <code class="text-blue-600 break-all font-mono text-lg"><?= htmlspecialchars($result['original_url']) ?></code>
                        <button onclick="copyToClipboard('<?= htmlspecialchars($result['original_url']) ?>', this)" 
                                class="absolute top-2 right-2 bg-blue-600 hover:bg-blue-700 text-white text-xs px-3 py-1 rounded transition-colors">
                            Copy
                        </button>
                    </div>
                    
                    <!-- Quick Stats -->
                    <div class="grid md:grid-cols-4 gap-4 mt-6">
                        <div class="text-center bg-blue-50 p-4 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600"><?= $result['analysis']['url_length'] ?></div>
                            <div class="text-sm text-blue-800">Characters</div>
                        </div>
                        <div class="text-center bg-<?= $result['analysis']['is_secure'] ? 'green' : 'red' ?>-50 p-4 rounded-lg">
                            <div class="text-2xl font-bold text-<?= $result['analysis']['is_secure'] ? 'green' : 'red' ?>-600">
                                <?= $result['analysis']['is_secure'] ? '🔒' : '🔓' ?>
                            </div>
                            <div class="text-sm text-<?= $result['analysis']['is_secure'] ? 'green' : 'red' ?>-800">
                                <?= $result['analysis']['is_secure'] ? 'Secure' : 'Not Secure' ?>
                            </div>
                        </div>
                        <div class="text-center bg-purple-50 p-4 rounded-lg">
                            <div class="text-2xl font-bold text-purple-600"><?= $result['analysis']['query_count'] ?></div>
                            <div class="text-sm text-purple-800">Query Params</div>
                        </div>
                        <div class="text-center bg-indigo-50 p-4 rounded-lg">
                            <div class="text-2xl font-bold text-indigo-600"><?= $result['analysis']['path_analysis']['depth'] ?></div>
                            <div class="text-sm text-indigo-800">Path Depth</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- URL Components -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 to-teal-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">🔧</span> URL Components
                    </h2>
                </div>
                <div class="p-8">
                    <div class="grid gap-4">
                        <?php foreach ($result['components'] as $component => $value): ?>
                            <?php if (!empty($value)): ?>
                            <div class="url-component bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center flex-1">
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full mr-4 min-w-max">
                                            <?= ucfirst($component) ?>
                                        </span>
                                        <code class="font-mono text-gray-800 break-all flex-1"><?= htmlspecialchars($value) ?></code>
                                    </div>
                                    <button onclick="copyToClipboard('<?= htmlspecialchars($value) ?>', this)" 
                                            class="ml-4 bg-gray-200 hover:bg-gray-300 text-gray-700 text-xs px-3 py-1 rounded transition-colors">
                                        Copy
                                    </button>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Query Parameters -->
            <?php if (!empty($result['queryParams'])): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-orange-500 to-red-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">🔗</span> Query Parameters (<?= count($result['queryParams']) ?>)
                    </h2>
                </div>
                <div class="p-8">
                    <div class="grid gap-3">
                        <?php foreach ($result['queryParams'] as $param => $value): ?>
                        <div class="url-component bg-orange-50 p-4 rounded-lg border-l-4 border-orange-500">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center flex-1">
                                    <span class="font-semibold text-orange-800 mr-3 min-w-max"><?= htmlspecialchars($param) ?>:</span>
                                    <code class="font-mono text-gray-800 break-all flex-1"><?= htmlspecialchars($value) ?></code>
                                </div>
                                <button onclick="copyToClipboard('<?= htmlspecialchars($param . '=' . $value) ?>', this)" 
                                        class="ml-4 bg-orange-200 hover:bg-orange-300 text-orange-700 text-xs px-3 py-1 rounded transition-colors">
                                    Copy
                                </button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <!-- Advanced Analysis -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">📊</span> Advanced Analysis
                    </h2>
                </div>
                <div class="p-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Domain Information -->
                        <div>
                            <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <span class="mr-2">🌐</span> Domain Information
                            </h3>
                            <div class="space-y-3">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <span class="text-sm text-gray-600">Domain:</span>
                                    <div class="font-mono text-gray-800"><?= htmlspecialchars($result['analysis']['domain_info']['domain']) ?></div>
                                </div>
                                <?php if (!empty($result['analysis']['domain_info']['subdomain'])): ?>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <span class="text-sm text-gray-600">Subdomain:</span>
                                    <div class="font-mono text-gray-800"><?= htmlspecialchars($result['analysis']['domain_info']['subdomain']) ?></div>
                                </div>
                                <?php endif; ?>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <span class="text-sm text-gray-600">TLD:</span>
                                    <div class="font-mono text-gray-800"><?= htmlspecialchars($result['analysis']['domain_info']['tld']) ?></div>
                                </div>
                            </div>
                        </div>

                        <!-- URL Properties -->
                        <div>
                            <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <span class="mr-2">⚙️</span> URL Properties
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg">
                                    <span class="text-gray-700">URL Type:</span>
                                    <span class="font-semibold text-purple-600"><?= htmlspecialchars($result['analysis']['url_type']) ?></span>
                                </div>
                                <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg">
                                    <span class="text-gray-700">Clean URL:</span>
                                    <span class="font-semibold text-<?= $result['analysis']['is_clean_url'] ? 'green' : 'orange' ?>-600">
                                        <?= $result['analysis']['is_clean_url'] ? 'Yes' : 'No' ?>
                                    </span>
                                </div>
                                <div class="flex items-center justify-between bg-gray-50 p-4 rounded-lg">
                                    <span class="text-gray-700">Root URL:</span>
                                    <span class="font-semibold text-<?= $result['analysis']['is_root'] ? 'green' : 'blue' ?>-600">
                                        <?= $result['analysis']['is_root'] ? 'Yes' : 'No' ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technology Detection -->
                    <?php if (!empty($result['analysis']['technology_hints'])): ?>
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="mr-2">🛠️</span> Technology Detection
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($result['analysis']['technology_hints'] as $tech): ?>
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                    <?= htmlspecialchars($tech) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Path Analysis -->
                    <?php if (!empty($result['analysis']['path_analysis']['segments'])): ?>
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h3 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="mr-2">📁</span> Path Segments
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($result['analysis']['path_analysis']['segments'] as $index => $segment): ?>
                                <div class="bg-indigo-100 text-indigo-800 px-3 py-2 rounded-lg text-sm">
                                    <span class="text-xs text-indigo-600"><?= $index + 1 ?>.</span>
                                    <code><?= htmlspecialchars($segment) ?></code>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- SEO Suggestions -->
            <?php if (!empty($result['suggestions'])): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-yellow-500 to-orange-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">💡</span> SEO & Optimization Suggestions
                    </h2>
                </div>
                <div class="p-8">
                    <div class="space-y-4">
                        <?php foreach ($result['suggestions'] as $suggestion): ?>
                        <div class="suggestion-badge border-l-4 border-<?= $suggestion['type'] === 'security' ? 'red' : ($suggestion['type'] === 'seo' ? 'green' : 'blue') ?>-500 bg-<?= $suggestion['type'] === 'security' ? 'red' : ($suggestion['type'] === 'seo' ? 'green' : 'blue') ?>-50 p-6 rounded-lg">
                            <div class="flex items-start">
                                <span class="text-2xl mr-3">
                                    <?= $suggestion['type'] === 'security' ? '🔒' : ($suggestion['type'] === 'seo' ? '📈' : '⚡') ?>
                                </span>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-2"><?= htmlspecialchars($suggestion['title']) ?></h4>
                                    <p class="text-gray-700 text-sm"><?= htmlspecialchars($suggestion['message']) ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🚀 Advanced URL Parser Features</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-4xl mb-4">🔍</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Deep Analysis</h3>
                        <p class="text-gray-600 text-sm">Comprehensive URL component breakdown and analysis</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">📊</div>
                        <h3 class="font-semibold text-gray-800 mb-2">SEO Insights</h3>
                        <p class="text-gray-600 text-sm">SEO optimization suggestions and best practices</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🛠️</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Technology Detection</h3>
                        <p class="text-gray-600 text-sm">Identify technologies and frameworks from URLs</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🔒</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Security Analysis</h3>
                        <p class="text-gray-600 text-sm">Security assessment and recommendations</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- URL Structure Guide -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">📚 URL Structure Guide</h2>
            </div>
            <div class="p-8">
                <div class="mb-8">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <code class="text-lg font-mono">
                            <span class="text-red-600">https://</span><span class="text-blue-600">subdomain.example.com</span><span class="text-green-600">:8080</span><span class="text-purple-600">/path/to/page</span><span class="text-orange-600">?param=value</span><span class="text-pink-600">#section</span>
                        </code>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-4">URL Components</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-red-500 rounded mr-3"></div>
                                <span class="font-medium">Scheme:</span>
                                <span class="ml-2 text-gray-600">Protocol (http, https, ftp)</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-blue-500 rounded mr-3"></div>
                                <span class="font-medium">Host:</span>
                                <span class="ml-2 text-gray-600">Domain name or IP address</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-green-500 rounded mr-3"></div>
                                <span class="font-medium">Port:</span>
                                <span class="ml-2 text-gray-600">Server port number</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-purple-500 rounded mr-3"></div>
                                <span class="font-medium">Path:</span>
                                <span class="ml-2 text-gray-600">Resource location</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-orange-500 rounded mr-3"></div>
                                <span class="font-medium">Query:</span>
                                <span class="ml-2 text-gray-600">Parameters and values</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-4 h-4 bg-pink-500 rounded mr-3"></div>
                                <span class="font-medium">Fragment:</span>
                                <span class="ml-2 text-gray-600">Page anchor/section</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-4">Best Practices</h3>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                Use HTTPS for security
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                Keep URLs short and descriptive
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                Use hyphens for word separation
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                Avoid excessive query parameters
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                Use lowercase letters
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                Make URLs human-readable
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // URL length counter
        document.getElementById('url').addEventListener('input', function() {
            document.getElementById('urlLength').textContent = this.value.length;
        });

        // Copy to clipboard function
        function copyToClipboard(text, button) {
            navigator.clipboard.writeText(text).then(() => {
                const originalText = button.textContent;
                button.textContent = '✓ Copied!';
                button.classList.add('parse-animation');
                setTimeout(() => {
                    button.textContent = originalText;
                    button.classList.remove('parse-animation');
                }, 2000);
            });
        }

        // Load sample URL
        function loadSampleUrl() {
            const samples = [
                'https://api.example.com:8080/v1/users?limit=10&offset=0&sort=name#results',
                'https://www.example.com/blog/2026/url-parsing-guide?utm_source=google&utm_medium=search',
                'https://cdn.example.com/assets/images/logo.png?v=1.2.3',
                'https://shop.example.com/products/category/electronics?brand=apple&price_min=100&price_max=500#reviews'
            ];
            const randomSample = samples[Math.floor(Math.random() * samples.length)];
            document.getElementById('url').value = randomSample;
            document.getElementById('urlLength').textContent = randomSample.length;
        }

        // Clear URL
        function clearUrl() {
            document.getElementById('url').value = '';
            document.getElementById('urlLength').textContent = '0';
        }

        // Form animation on submit
        document.getElementById('urlForm').addEventListener('submit', function() {
            const button = this.querySelector('button[type="submit"]');
            button.classList.add('parse-animation');
        });

        // Auto-scroll to results after parsing
        <?php if ($result): ?>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const resultsSection = document.querySelector('.parse-animation');
                if (resultsSection) {
                    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 300);
        });
        <?php endif; ?>
    </script>
</body>
<?php include 'footer.php';?>
</html>
