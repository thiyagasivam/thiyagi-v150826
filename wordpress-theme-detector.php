<?php include 'header.php';?>
<?php
/**
 * Enhanced WordPress Theme Detector Tool 2026
 */

// Enhanced function to detect WordPress theme with additional details
function detectWordPressTheme($url) {
    // Initialize cURL for better handling
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_USERAGENT, 'WordPress Theme Detector 2026');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($html === false || $httpCode !== 200) {
        return [
            'success' => false,
            'error' => 'Unable to fetch website content. Please check the URL and try again.'
        ];
    }

    $result = [
        'success' => true,
        'theme_name' => 'Unknown',
        'theme_folder' => null,
        'is_wordpress' => false,
        'theme_version' => null,
        'theme_author' => null,
        'parent_theme' => null,
        'additional_info' => []
    ];

    // Check if it's a WordPress site
    if (strpos($html, 'wp-content') !== false || strpos($html, 'wordpress') !== false) {
        $result['is_wordpress'] = true;
    }

    // Search for theme folder in wp-content/themes/
    $themePattern = '/wp-content\/themes\/([^\/\?\s"\']+)/i';
    preg_match_all($themePattern, $html, $matches);
    
    if (!empty($matches[1])) {
        $themes = array_unique($matches[1]);
        $result['theme_folder'] = $themes[0]; // Primary theme
        $result['theme_name'] = ucwords(str_replace(['-', '_'], ' ', $themes[0]));
        
        if (count($themes) > 1) {
            $result['additional_info']['multiple_themes'] = $themes;
        }
    }

    // Try to get theme version and author from generator meta tag
    $generatorPattern = '/<meta[^>]*name=["\']generator["\'][^>]*content=["\']([^"\']*)["\'][^>]*>/i';
    if (preg_match($generatorPattern, $html, $genMatches)) {
        $result['additional_info']['generator'] = $genMatches[1];
    }

    // Check for popular theme frameworks
    $frameworks = [
        'Genesis' => '/genesis/i',
        'Divi' => '/divi|elegant.*themes/i',
        'Avada' => '/avada/i',
        'Elementor' => '/elementor/i',
        'Astra' => '/astra/i',
        'GeneratePress' => '/generatepress/i',
        'OceanWP' => '/oceanwp/i',
        'Storefront' => '/storefront/i',
        'Twenty Twenty' => '/twentytwenty/i'
    ];

    foreach ($frameworks as $framework => $pattern) {
        if (preg_match($pattern, $html)) {
            $result['additional_info']['framework'] = $framework;
            break;
        }
    }

    // Check for page builders
    $pageBuilders = [
        'Elementor' => '/elementor/i',
        'Visual Composer' => '/wpbakery|visual.*composer/i',
        'Beaver Builder' => '/beaver.*builder/i',
        'Divi Builder' => '/divi.*builder/i',
        'Gutenberg' => '/wp-block|blocks/i'
    ];

    $result['additional_info']['page_builders'] = [];
    foreach ($pageBuilders as $builder => $pattern) {
        if (preg_match($pattern, $html)) {
            $result['additional_info']['page_builders'][] = $builder;
        }
    }

    return $result;
}

// Handle form submission
$websiteUrl = '';
$result = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $websiteUrl = trim($_POST['website_url'] ?? '');
    
    if (empty($websiteUrl)) {
        $error = 'Please enter a website URL.';
    } elseif (!filter_var($websiteUrl, FILTER_VALIDATE_URL)) {
        $error = 'Invalid URL format. Please enter a valid website URL (e.g., https://example.com).';
    } else {
        // Add protocol if missing
        if (!preg_match('/^https?:\/\//', $websiteUrl)) {
            $websiteUrl = 'https://' . $websiteUrl;
        }
        
        $result = detectWordPressTheme($websiteUrl);
        if (!$result['success']) {
            $error = $result['error'];
            $result = null;
        }
    }
}
?>

    <title>WordPress Theme Detector 2026 - Identify Website Themes & Plugins Instantly</title>
    <meta name="description" content="Detect WordPress themes, plugins, and page builders used on any website instantly. Professional theme identification tool for developers, designers, and marketers in 2026.">
    <meta name="keywords" content="WordPress theme detector, theme identifier, website theme checker, WordPress detector, theme finder 2026, plugin detector, page builder identifier">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/wordpress-theme-detector">
    <meta property="og:title" content="WordPress Theme Detector 2026 - Identify Themes & Plugins">
    <meta property="og:description" content="Detect WordPress themes, plugins, and page builders used on any website instantly. Professional development tool for 2026.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/wordpress-theme-detector">
    <meta property="twitter:title" content="WordPress Theme Detector 2026 - Identify Themes & Plugins">
    <meta property="twitter:description" content="Detect WordPress themes, plugins, and page builders instantly. Professional tool for developers.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "WordPress Theme Detector 2026",
        "description": "Professional WordPress theme detection tool to identify themes, plugins, and page builders used on any website",
        "url": "https://www.thiyagi.com/wordpress-theme-detector",
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
        .detection-card {
            transition: all 0.3s ease;
        }
        .detection-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .loading-spinner {
            display: none;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #3498db;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
            margin-right: 8px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .feature-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
    </style>
<body class="bg-gray-50">
    <!-- Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-200 px-4 py-3">
        <div class="max-w-6xl mx-auto">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Web Tools</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">WordPress Theme Detector</li>
            </ol>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">🎨 WordPress Theme Detector 2026</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Identify WordPress themes, plugins, and page builders used on any website instantly. Professional detection tool for developers, designers, and marketers.</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-lg overflow-hidden mb-8" id="detectorForm">
            <div class="p-8">
                <div class="mb-6">
                    <label for="website_url" class="block text-gray-700 font-semibold mb-3 text-lg">🌐 Enter Website URL to Analyze:</label>
                    <div class="relative">
                        <input type="url" 
                               name="website_url" 
                               id="website_url" 
                               class="w-full px-4 py-4 text-lg border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                               placeholder="https://example.com or example.com" 
                               value="<?= htmlspecialchars($websiteUrl) ?>"
                               required>
                        <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                            <span class="text-gray-400">🔍</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-2">💡 Enter any WordPress website URL to detect its theme, plugins, and page builders</p>
                </div>
                
                <div class="flex justify-between items-center">
                    <button type="submit" 
                            class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg"
                            id="detectBtn">
                        <span class="loading-spinner" id="loadingSpinner"></span>
                        <span id="btnText">🔍 Detect Theme & Plugins</span>
                    </button>
                    <button type="button" 
                            onclick="clearForm()" 
                            class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        🗑️ Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($error)): ?>
        <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg mb-8">
            <div class="flex items-center">
                <span class="text-red-500 text-2xl mr-3">❌</span>
                <div>
                    <h3 class="text-red-800 font-semibold">Detection Error</h3>
                    <p class="text-red-700 mt-1"><?= htmlspecialchars($error) ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($result && $result['success']): ?>
        <div class="grid gap-8 mb-8">
            <!-- Main Detection Results -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden detection-card">
                <div class="bg-gradient-to-r from-green-500 to-blue-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">🎯</span> Detection Results for <?= parse_url($websiteUrl, PHP_URL_HOST) ?>
                    </h2>
                </div>
                
                <div class="p-8">
                    <?php if ($result['is_wordpress']): ?>
                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- WordPress Status -->
                            <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                                <h3 class="text-lg font-semibold text-green-800 mb-3 flex items-center">
                                    <span class="mr-2">✅</span> WordPress Detected
                                </h3>
                                <p class="text-green-700">This website is powered by WordPress!</p>
                            </div>
                            
                            <!-- Theme Information -->
                            <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                                <h3 class="text-lg font-semibold text-blue-800 mb-3 flex items-center">
                                    <span class="mr-2">🎨</span> Theme Details
                                </h3>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="font-medium text-gray-700">Theme Name:</span>
                                        <span class="text-blue-800 font-bold"><?= htmlspecialchars($result['theme_name']) ?></span>
                                    </div>
                                    <?php if ($result['theme_folder']): ?>
                                    <div class="flex justify-between">
                                        <span class="font-medium text-gray-700">Theme Folder:</span>
                                        <code class="bg-gray-200 px-2 py-1 rounded text-sm"><?= htmlspecialchars($result['theme_folder']) ?></code>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <?php if (!empty($result['additional_info'])): ?>
                        <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Framework Detection -->
                            <?php if (!empty($result['additional_info']['framework'])): ?>
                            <div class="bg-purple-50 p-6 rounded-lg border border-purple-200">
                                <h4 class="font-semibold text-purple-800 mb-3 flex items-center">
                                    <span class="mr-2">⚡</span> Theme Framework
                                </h4>
                                <span class="inline-block bg-purple-200 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                                    <?= htmlspecialchars($result['additional_info']['framework']) ?>
                                </span>
                            </div>
                            <?php endif; ?>

                            <!-- Page Builders -->
                            <?php if (!empty($result['additional_info']['page_builders'])): ?>
                            <div class="bg-orange-50 p-6 rounded-lg border border-orange-200">
                                <h4 class="font-semibold text-orange-800 mb-3 flex items-center">
                                    <span class="mr-2">🔧</span> Page Builders
                                </h4>
                                <div class="space-y-2">
                                    <?php foreach ($result['additional_info']['page_builders'] as $builder): ?>
                                    <span class="inline-block bg-orange-200 text-orange-800 px-3 py-1 rounded-full text-sm font-medium mr-2 mb-2">
                                        <?= htmlspecialchars($builder) ?>
                                    </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <!-- Generator Info -->
                            <?php if (!empty($result['additional_info']['generator'])): ?>
                            <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                                <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                    <span class="mr-2">ℹ️</span> Generator Info
                                </h4>
                                <code class="text-sm text-gray-700 break-all"><?= htmlspecialchars($result['additional_info']['generator']) ?></code>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                    <?php else: ?>
                        <div class="text-center py-8">
                            <span class="text-6xl mb-4 block">❌</span>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">WordPress Not Detected</h3>
                            <p class="text-gray-600">This website doesn't appear to be using WordPress, or the theme information is not accessible.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 justify-center">
                <button onclick="shareResults()" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                    📱 Share Results
                </button>
                <button onclick="analyzeAnother()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                    🔄 Analyze Another Site
                </button>
                <button onclick="copyResults()" class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                    📋 Copy Results
                </button>
            </div>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🚀 What Our Detector Finds</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="feature-icon">🎨</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Theme Name</h3>
                        <p class="text-gray-600 text-sm">Identifies the active WordPress theme</p>
                    </div>
                    <div class="text-center">
                        <div class="feature-icon">🔧</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Page Builders</h3>
                        <p class="text-gray-600 text-sm">Detects Elementor, Divi, Visual Composer, etc.</p>
                    </div>
                    <div class="text-center">
                        <div class="feature-icon">⚡</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Frameworks</h3>
                        <p class="text-gray-600 text-sm">Identifies Genesis, Astra, OceanWP, etc.</p>
                    </div>
                    <div class="text-center">
                        <div class="feature-icon">📊</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Tech Stack</h3>
                        <p class="text-gray-600 text-sm">Shows WordPress version and setup details</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- How It Works Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🔍 How WordPress Theme Detection Works</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">1️⃣</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Enter Website URL</h3>
                        <p class="text-gray-600 text-sm">Simply paste the WordPress website URL you want to analyze</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">2️⃣</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Analyze Source Code</h3>
                        <p class="text-gray-600 text-sm">Our tool scans the HTML source for WordPress signatures and theme files</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">3️⃣</span>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Get Detailed Results</h3>
                        <p class="text-gray-600 text-sm">Receive comprehensive information about theme, plugins, and page builders</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Themes Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-green-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🏆 Popular WordPress Themes We Detect</h2>
            </div>
            <div class="p-8">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <?php
                    $popularThemes = [
                        'Astra', 'Divi', 'OceanWP', 'GeneratePress', 'Avada', 'Storefront',
                        'Twenty Twenty-Five', 'Elementor Hello', 'Kadence', 'Neve',
                        'Sydney', 'Hestia', 'Customify', 'Zakra'
                    ];
                    foreach ($popularThemes as $theme): ?>
                    <div class="bg-gray-50 text-center py-3 px-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors">
                        <span class="text-sm font-medium text-gray-700"><?= $theme ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-purple-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">❓ Frequently Asked Questions</h2>
            </div>
            <div class="p-8">
                <div class="space-y-6">
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Can I detect themes on any WordPress website?</h4>
                        <p class="text-gray-700 text-sm">A: Yes, our tool can detect themes on most WordPress websites. However, some sites may have security measures that hide theme information.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Does this tool work with custom WordPress themes?</h4>
                        <p class="text-gray-700 text-sm">A: Yes, it can detect custom themes too. The tool identifies theme folder names and analyzes the website's structure to provide theme information.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Can I see what plugins a website is using?</h4>
                        <p class="text-gray-700 text-sm">A: Our tool primarily focuses on themes and page builders. Some plugins may be detected if they leave visible traces in the HTML source code.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Is this tool free to use?</h4>
                        <p class="text-gray-700 text-sm">A: Yes, our WordPress Theme Detector is completely free to use with no registration required. Analyze unlimited websites!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Form submission with loading state
        document.getElementById('detectorForm').addEventListener('submit', function() {
            const btn = document.getElementById('detectBtn');
            const spinner = document.getElementById('loadingSpinner');
            const btnText = document.getElementById('btnText');
            
            spinner.style.display = 'inline-block';
            btnText.textContent = 'Analyzing Website...';
            btn.disabled = true;
        });

        // Clear form function
        function clearForm() {
            document.getElementById('website_url').value = '';
            document.getElementById('website_url').focus();
        }

        // Share results function
        function shareResults() {
            const url = '<?= $websiteUrl ?>';
            const theme = '<?= $result && $result['success'] ? $result['theme_name'] : 'Unknown' ?>';
            
            if (navigator.share) {
                navigator.share({
                    title: 'WordPress Theme Detection Results',
                    text: `I detected that ${url} uses the "${theme}" WordPress theme!`,
                    url: window.location.href
                });
            } else {
                const shareText = `I detected that ${url} uses the "${theme}" WordPress theme! Check it out: ${window.location.href}`;
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(shareText);
                    alert('Results copied to clipboard!');
                } else {
                    prompt('Copy this text to share:', shareText);
                }
            }
        }

        // Analyze another site
        function analyzeAnother() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            document.getElementById('website_url').value = '';
            document.getElementById('website_url').focus();
        }

        // Copy results function
        function copyResults() {
            const url = '<?= $websiteUrl ?>';
            const theme = '<?= $result && $result['success'] ? $result['theme_name'] : 'Unknown' ?>';
            const framework = '<?= $result && !empty($result['additional_info']['framework']) ? $result['additional_info']['framework'] : 'None detected' ?>';
            const pageBuilders = '<?= $result && !empty($result['additional_info']['page_builders']) ? implode(', ', $result['additional_info']['page_builders']) : 'None detected' ?>';
            
            const resultText = `WordPress Theme Detection Results for ${url}:
Theme: ${theme}
Framework: ${framework}
Page Builders: ${pageBuilders}
Detected by: WordPress Theme Detector 2026 - ${window.location.href}`;

            if (navigator.clipboard) {
                navigator.clipboard.writeText(resultText);
                alert('Results copied to clipboard!');
            } else {
                prompt('Copy this text:', resultText);
            }
        }

        // Auto-scroll to results after detection
        <?php if ($result): ?>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const resultsSection = document.querySelector('.grid.gap-8.mb-8');
                if (resultsSection) {
                    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 300);
        });
        <?php endif; ?>

        // Enhanced URL input handling
        document.getElementById('website_url').addEventListener('input', function(e) {
            let value = e.target.value.trim();
            if (value && !value.startsWith('http://') && !value.startsWith('https://')) {
                // Show hint for protocol
                e.target.style.borderColor = '#10B981';
            } else {
                e.target.style.borderColor = '#D1D5DB';
            }
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
