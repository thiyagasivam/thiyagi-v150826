<?php include 'header.php';?>


<?php
/**
 * Advanced Redirect Checker
 * Professional redirect analysis tool with performance metrics and comprehensive reporting
 */

class AdvancedRedirectChecker {
    private $maxRedirects = 10;
    private $timeout = 30;
    private $userAgent = 'AdvancedRedirectChecker/1.0 (SEO Analysis Tool)';
    
    public function checkRedirect($url, $options = []) {
        $startTime = microtime(true);
        $redirectChain = [];
        $currentUrl = $url;
        $redirectCount = 0;
        $totalTime = 0;
        $errors = [];
        $sslInfo = [];
        
        while ($redirectCount < $this->maxRedirects) {
            $stepStartTime = microtime(true);
            $redirectInfo = $this->analyzeUrl($currentUrl);
            $stepTime = microtime(true) - $stepStartTime;
            
            if (isset($redirectInfo['error'])) {
                $errors[] = $redirectInfo['error'];
                break;
            }
            
            $redirectChain[] = array_merge($redirectInfo, [
                'step' => $redirectCount + 1,
                'response_time' => round($stepTime * 1000, 2) // Convert to milliseconds
            ]);
            
            if ($redirectInfo['ssl_info']) {
                $sslInfo = $redirectInfo['ssl_info'];
            }
            
            // If not a redirect, break the chain
            if ($redirectInfo['status_code'] < 300 || $redirectInfo['status_code'] >= 400) {
                break;
            }
            
            // If no location header, break the chain  
            if (empty($redirectInfo['location'])) {
                break;
            }
            
            $currentUrl = $redirectInfo['location'];
            $redirectCount++;
            
            // Prevent infinite loops
            $urls = array_column($redirectChain, 'url');
            if (in_array($currentUrl, $urls)) {
                $errors[] = 'Infinite redirect loop detected';
                break;
            }
        }
        
        $totalTime = microtime(true) - $startTime;
        
        return [
            'original_url' => $url,
            'final_url' => $currentUrl,
            'redirect_chain' => $redirectChain,
            'redirect_count' => count($redirectChain) - 1,
            'total_time' => round($totalTime * 1000, 2),
            'errors' => $errors,
            'ssl_info' => $sslInfo,
            'analysis' => $this->analyzeChain($redirectChain)
        ];
    }
    
    private function analyzeUrl($url) {
        $ch = curl_init();
        
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_HEADER => true,
            CURLOPT_NOBODY => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_MAXREDIRS => 0,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_USERAGENT => $this->userAgent,
            CURLOPT_CERTINFO => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0
        ]);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            $error = 'CURL Error: ' . curl_error($ch);
            curl_close($ch);
            return ['error' => $error];
        }
        
        $info = curl_getinfo($ch);
        $headers = $this->parseHeaders($response);
        
        curl_close($ch);
        
        return [
            'url' => $url,
            'status_code' => $info['http_code'],
            'status_text' => $this->getStatusText($info['http_code']),
            'location' => $headers['location'] ?? '',
            'content_type' => $info['content_type'] ?? '',
            'response_time' => round($info['total_time'] * 1000, 2),
            'size' => $info['download_content_length'] ?? 0,
            'headers' => $headers,
            'ssl_info' => $this->extractSslInfo($info),
            'server_info' => [
                'server' => $headers['server'] ?? 'Unknown',
                'powered_by' => $headers['x-powered-by'] ?? '',
                'cache_control' => $headers['cache-control'] ?? '',
                'expires' => $headers['expires'] ?? ''
            ]
        ];
    }
    
    private function parseHeaders($response) {
        $headers = [];
        $headerLines = explode("\r\n", substr($response, 0, strpos($response, "\r\n\r\n")));
        
        foreach ($headerLines as $line) {
            if (strpos($line, ':') !== false) {
                list($key, $value) = explode(':', $line, 2);
                $headers[strtolower(trim($key))] = trim($value);
            }
        }
        
        return $headers;
    }
    
    private function extractSslInfo($info) {
        if (empty($info['certinfo'])) {
            return null;
        }
        
        $cert = $info['certinfo'][0] ?? [];
        return [
            'subject' => $cert['Subject'] ?? '',
            'issuer' => $cert['Issuer'] ?? '',
            'valid_from' => $cert['Start date'] ?? '',
            'valid_to' => $cert['Expire date'] ?? '',
            'signature_algorithm' => $cert['Signature Algorithm'] ?? ''
        ];
    }
    
    private function getStatusText($code) {
        $statusTexts = [
            200 => 'OK',
            201 => 'Created', 
            202 => 'Accepted',
            204 => 'No Content',
            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',
            307 => 'Temporary Redirect',
            308 => 'Permanent Redirect',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            410 => 'Gone',
            418 => "I'm a teapot",
            429 => 'Too Many Requests',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout'
        ];
        
        return $statusTexts[$code] ?? 'Unknown Status';
    }
    
    private function analyzeChain($chain) {
        if (empty($chain)) {
            return [];
        }
        
        $analysis = [
            'seo_impact' => 'good',
            'performance_impact' => 'good',
            'issues' => [],
            'recommendations' => []
        ];
        
        $redirectCount = count($chain) - 1;
        
        // SEO Analysis
        if ($redirectCount > 3) {
            $analysis['seo_impact'] = 'bad';
            $analysis['issues'][] = 'Too many redirects in chain (>3)';
            $analysis['recommendations'][] = 'Reduce redirect chain length for better SEO';
        } elseif ($redirectCount > 1) {
            $analysis['seo_impact'] = 'warning';
            $analysis['issues'][] = 'Multiple redirects detected';
            $analysis['recommendations'][] = 'Consider direct redirects when possible';
        }
        
        // Performance Analysis
        $totalTime = array_sum(array_column($chain, 'response_time'));
        if ($totalTime > 3000) {
            $analysis['performance_impact'] = 'bad';
            $analysis['issues'][] = 'High response time (>3s)';
            $analysis['recommendations'][] = 'Optimize server response times';
        } elseif ($totalTime > 1500) {
            $analysis['performance_impact'] = 'warning';
            $analysis['issues'][] = 'Moderate response time (>1.5s)';
        }
        
        // Check for mixed redirects
        $redirectCodes = array_column($chain, 'status_code');
        $redirectCodes = array_filter($redirectCodes, function($code) {
            return $code >= 300 && $code < 400;
        });
        
        if (count(array_unique($redirectCodes)) > 1) {
            $analysis['issues'][] = 'Mixed redirect types detected';
            $analysis['recommendations'][] = 'Use consistent redirect types (301 or 302)';
        }
        
        // Check for HTTPS upgrade
        $urls = array_column($chain, 'url');
        $hasHttps = false;
        $hasHttp = false;
        
        foreach ($urls as $url) {
            if (strpos($url, 'https://') === 0) {
                $hasHttps = true;
            } elseif (strpos($url, 'http://') === 0) {
                $hasHttp = true;
            }
        }
        
        if ($hasHttp && $hasHttps) {
            $analysis['recommendations'][] = 'Good: HTTP to HTTPS redirect detected';
        } elseif ($hasHttp && !$hasHttps) {
            $analysis['issues'][] = 'No HTTPS redirect detected';
            $analysis['recommendations'][] = 'Consider implementing HTTPS redirects for security';
        }
        
        return $analysis;
    }
    
    public function checkBulkUrls($urls) {
        $results = [];
        foreach ($urls as $url) {
            $url = trim($url);
            if (!empty($url) && filter_var($url, FILTER_VALIDATE_URL)) {
                $results[] = $this->checkRedirect($url);
            }
        }
        return $results;
    }
}

// Initialize checker
$checker = new AdvancedRedirectChecker();

// Handle form submission
$result = null;
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['bulk_check'])) {
        // Bulk URL checking
        $urls = array_filter(array_map('trim', explode("\n", $_POST['bulk_urls'] ?? '')));
        if (!empty($urls)) {
            $result = ['bulk_results' => $checker->checkBulkUrls($urls)];
            $success = "Analyzed " . count($urls) . " URLs successfully!";
        } else {
            $error = "Please enter at least one URL for bulk checking.";
        }
    } else {
        // Single URL checking
        $url = trim($_POST['url'] ?? '');
        if (!empty($url)) {
            if (filter_var($url, FILTER_VALIDATE_URL)) {
                $result = $checker->checkRedirect($url);
                $success = "Redirect analysis completed successfully!";
            } else {
                $error = "Please enter a valid URL (e.g., https://example.com).";
            }
        } else {
            $error = "Please enter a URL to check.";
        }
    }
}
?>
    <title>Redirect Checker Tool (2026) - Free URL Redirection Tester</title>
<meta name="description" content="Check HTTP redirects, status codes, and URL chains in real-time. Free online tool to analyze 301, 302 redirects with full path visualization - no installation needed.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .status-301 { color: #3b82f6; }
        .status-302 { color: #10b981; }
        .status-307 { color: #f59e0b; }
        .status-308 { color: #8b5cf6; }
        .status-other { color: #ef4444; }
        .redirect-chain {
            counter-reset: step;
        }
        .redirect-step::before {
            counter-increment: step;
            content: counter(step);
            display: inline-block;
            width: 24px;
            height: 24px;
            background: #3b82f6;
            color: white;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px;
            line-height: 24px;
        }
    </style>

<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                    Advanced Redirect Checker
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Professional redirect analysis tool with performance metrics, SEO insights, and comprehensive chain analysis
                </p>
            </div>

            <!-- Input Forms Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Single URL Checker -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 p-6 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Single URL Analysis</h3>
                    </div>
                    
                    <form method="POST" class="space-y-4">
                        <div>
                            <label for="url" class="block text-sm font-medium text-gray-700 mb-2">Enter URL to Analyze</label>
                            <input type="url" 
                                   id="url" 
                                   name="url" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                                   placeholder="https://example.com"
                                   value="<?php echo htmlspecialchars($_POST['url'] ?? ''); ?>">
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Analyze Redirects
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Bulk URL Checker -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 p-6 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Bulk URL Analysis</h3>
                    </div>
                    
                    <form method="POST" class="space-y-4">
                        <div>
                            <label for="bulk_urls" class="block text-sm font-medium text-gray-700 mb-2">Enter URLs (one per line)</label>
                            <textarea name="bulk_urls" 
                                      id="bulk_urls"
                                      rows="5" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-colors" 
                                      placeholder="https://example1.com&#10;https://example2.com&#10;https://example3.com"><?php echo htmlspecialchars($_POST['bulk_urls'] ?? ''); ?></textarea>
                        </div>
                        
                        <button type="submit" 
                                name="bulk_check"
                                value="1"
                                class="w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                                Analyze Multiple URLs
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Status Messages -->
            <?php if (!empty($error)): ?>
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 rounded-lg p-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <p class="text-red-700 font-medium"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 rounded-lg p-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-green-700 font-medium"><?php echo htmlspecialchars($success); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Results Section -->
            <?php if ($result): ?>
                <?php if (isset($result['bulk_results'])): ?>
                    <!-- Bulk Results -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 p-6 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Bulk Analysis Results
                        </h2>
                        
                        <div class="space-y-6">
                            <?php foreach ($result['bulk_results'] as $index => $bulkResult): ?>
                                <div class="border border-gray-200 rounded-xl p-4">
                                    <h3 class="font-semibold text-lg mb-3">URL #<?php echo $index + 1; ?>: <?php echo htmlspecialchars($bulkResult['original_url']); ?></h3>
                                    
                                    <?php if (!empty($bulkResult['errors'])): ?>
                                        <div class="bg-red-50 border border-red-200 rounded-lg p-3 mb-3">
                                            <p class="text-red-700 font-medium">Errors:</p>
                                            <ul class="text-red-600 text-sm mt-1">
                                                <?php foreach ($bulkResult['errors'] as $error): ?>
                                                    <li>• <?php echo htmlspecialchars($error); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php else: ?>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-3">
                                            <div class="bg-blue-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-blue-600"><?php echo $bulkResult['redirect_count']; ?></div>
                                                <div class="text-sm text-blue-700">Redirects</div>
                                            </div>
                                            <div class="bg-green-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-green-600"><?php echo $bulkResult['total_time']; ?>ms</div>
                                                <div class="text-sm text-green-700">Total Time</div>
                                            </div>
                                            <div class="bg-purple-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-purple-600"><?php echo end($bulkResult['redirect_chain'])['status_code']; ?></div>
                                                <div class="text-sm text-purple-700">Final Status</div>
                                            </div>
                                            <div class="bg-orange-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-orange-600 capitalize"><?php echo $bulkResult['analysis']['seo_impact'] ?? 'N/A'; ?></div>
                                                <div class="text-sm text-orange-700">SEO Impact</div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Single Result Display -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 overflow-hidden mb-8">
                        <!-- Result Header -->
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 px-6 py-4">
                            <h2 class="text-2xl font-bold text-white flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Redirect Analysis Results
                            </h2>
                        </div>

                        <?php if (!empty($result['errors'])): ?>
                            <!-- Error Display -->
                            <div class="p-6">
                                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                    <div class="flex items-center mb-2">
                                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                        </svg>
                                        <h3 class="text-lg font-semibold text-red-700">Analysis Errors</h3>
                                    </div>
                                    <ul class="text-red-600">
                                        <?php foreach ($result['errors'] as $error): ?>
                                            <li>• <?php echo htmlspecialchars($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- Tab Navigation -->
                            <div class="border-b border-gray-200">
                                <nav class="flex space-x-8 px-6">
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-blue-600 border-blue-500" data-tab="overview">
                                        Overview
                                    </button>
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300" data-tab="chain">
                                        Redirect Chain
                                    </button>
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300" data-tab="performance">
                                        Performance
                                    </button>
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300" data-tab="seo">
                                        SEO Analysis
                                    </button>
                                </nav>
                            </div>

                            <!-- Tab Content -->
                            <div class="p-6">
                                <!-- Overview Tab -->
                                <div class="tab-content" id="overview">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                                        <div class="bg-blue-50 rounded-xl p-4 text-center">
                                            <div class="text-3xl font-bold text-blue-600"><?php echo $result['redirect_count']; ?></div>
                                            <div class="text-sm text-blue-700 mt-1">Redirects</div>
                                        </div>
                                        <div class="bg-green-50 rounded-xl p-4 text-center">
                                            <div class="text-3xl font-bold text-green-600"><?php echo $result['total_time']; ?>ms</div>
                                            <div class="text-sm text-green-700 mt-1">Total Time</div>
                                        </div>
                                        <div class="bg-purple-50 rounded-xl p-4 text-center">
                                            <div class="text-3xl font-bold text-purple-600"><?php echo end($result['redirect_chain'])['status_code']; ?></div>
                                            <div class="text-sm text-purple-700 mt-1">Final Status</div>
                                        </div>
                                        <div class="bg-orange-50 rounded-xl p-4 text-center">
                                            <div class="text-2xl font-bold text-orange-600 capitalize"><?php echo $result['analysis']['seo_impact']; ?></div>
                                            <div class="text-sm text-orange-700 mt-1">SEO Impact</div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <h4 class="font-semibold text-gray-800 mb-2">URL Journey</h4>
                                        <div class="text-sm">
                                            <p class="mb-1"><span class="font-medium">Original:</span> <?php echo htmlspecialchars($result['original_url']); ?></p>
                                            <p><span class="font-medium">Final:</span> <?php echo htmlspecialchars($result['final_url']); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Redirect Chain Tab -->
                                <div class="tab-content hidden" id="chain">
                                    <div class="space-y-4">
                                        <?php foreach ($result['redirect_chain'] as $index => $step): ?>
                                            <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-4 border-l-4 <?php echo ($step['status_code'] >= 300 && $step['status_code'] < 400) ? 'border-orange-500' : 'border-green-500'; ?>">
                                                <div class="flex items-center justify-between mb-3">
                                                    <div class="flex items-center">
                                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mr-3">
                                                            Step <?php echo $step['step']; ?>
                                                        </span>
                                                        <span class="text-lg font-semibold"><?php echo $step['status_code']; ?> <?php echo htmlspecialchars($step['status_text']); ?></span>
                                                    </div>
                                                    <span class="text-sm text-gray-500"><?php echo $step['response_time']; ?>ms</span>
                                                </div>
                                                
                                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 text-sm">
                                                    <div>
                                                        <span class="font-medium text-gray-700">URL:</span>
                                                        <p class="text-blue-600 break-all mt-1"><?php echo htmlspecialchars($step['url']); ?></p>
                                                    </div>
                                                    <?php if (!empty($step['location'])): ?>
                                                    <div>
                                                        <span class="font-medium text-gray-700">Redirects to:</span>
                                                        <p class="text-green-600 break-all mt-1"><?php echo htmlspecialchars($step['location']); ?></p>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <?php if (!empty($step['server_info']['server'])): ?>
                                                <div class="mt-3 pt-3 border-t border-gray-200 text-xs text-gray-600">
                                                    <span class="font-medium">Server:</span> <?php echo htmlspecialchars($step['server_info']['server']); ?>
                                                    <?php if (!empty($step['content_type'])): ?>
                                                        | <span class="font-medium">Content-Type:</span> <?php echo htmlspecialchars($step['content_type']); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- Performance Tab -->
                                <div class="tab-content hidden" id="performance">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                                Response Times
                                            </h4>
                                            <div class="space-y-3">
                                                <?php foreach ($result['redirect_chain'] as $step): ?>
                                                    <div class="flex justify-between items-center">
                                                        <span class="text-sm text-gray-600">Step <?php echo $step['step']; ?></span>
                                                        <span class="font-semibold text-blue-700"><?php echo $step['response_time']; ?>ms</span>
                                                    </div>
                                                <?php endforeach; ?>
                                                <div class="border-t pt-2 flex justify-between items-center font-semibold">
                                                    <span>Total Time</span>
                                                    <span class="text-blue-800"><?php echo $result['total_time']; ?>ms</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                                Performance Analysis
                                            </h4>
                                            <div class="space-y-3">
                                                <div class="flex justify-between items-center">
                                                    <span class="text-sm text-gray-600">Performance Impact</span>
                                                    <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                                        <?php 
                                                        $impact = $result['analysis']['performance_impact'];
                                                        echo $impact === 'good' ? 'bg-green-100 text-green-700' : 
                                                             ($impact === 'warning' ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700');
                                                        ?>">
                                                        <?php echo ucfirst($result['analysis']['performance_impact']); ?>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-sm text-gray-600">Redirect Count</span>
                                                    <span class="font-semibold"><?php echo $result['redirect_count']; ?></span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-sm text-gray-600">Avg. Response Time</span>
                                                    <span class="font-semibold"><?php echo round($result['total_time'] / count($result['redirect_chain']), 2); ?>ms</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SEO Analysis Tab -->
                                <div class="tab-content hidden" id="seo">
                                    <div class="space-y-6">
                                        <!-- SEO Impact Summary -->
                                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6">
                                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                SEO Impact Assessment
                                            </h4>
                                            <div class="flex items-center space-x-4">
                                                <div class="text-center">
                                                    <div class="text-2xl font-bold 
                                                        <?php 
                                                        $seoImpact = $result['analysis']['seo_impact'];
                                                        echo $seoImpact === 'good' ? 'text-green-600' : 
                                                             ($seoImpact === 'warning' ? 'text-yellow-600' : 'text-red-600');
                                                        ?>">
                                                        <?php echo ucfirst($result['analysis']['seo_impact']); ?>
                                                    </div>
                                                    <div class="text-sm text-gray-600">Overall Rating</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Issues and Recommendations -->
                                        <?php if (!empty($result['analysis']['issues']) || !empty($result['analysis']['recommendations'])): ?>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                            <?php if (!empty($result['analysis']['issues'])): ?>
                                            <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                                                <h5 class="font-semibold text-red-800 mb-3 flex items-center">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                                    </svg>
                                                    Issues Found
                                                </h5>
                                                <ul class="space-y-1 text-sm text-red-700">
                                                    <?php foreach ($result['analysis']['issues'] as $issue): ?>
                                                        <li>• <?php echo htmlspecialchars($issue); ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <?php endif; ?>

                                            <?php if (!empty($result['analysis']['recommendations'])): ?>
                                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                                                <h5 class="font-semibold text-blue-800 mb-3 flex items-center">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                    </svg>
                                                    Recommendations
                                                </h5>
                                                <ul class="space-y-1 text-sm text-blue-700">
                                                    <?php foreach ($result['analysis']['recommendations'] as $recommendation): ?>
                                                        <li>• <?php echo htmlspecialchars($recommendation); ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 text-center border border-white/50">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Performance Analysis</h3>
                    <p class="text-gray-600 text-sm">Detailed response time metrics and performance impact assessment for each redirect step.</p>
                </div>
                
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 text-center border border-white/50">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">SEO Insights</h3>
                    <p class="text-gray-600 text-sm">Comprehensive SEO impact analysis with recommendations for optimal search engine visibility.</p>
                </div>
                
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 text-center border border-white/50">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Chain Analysis</h3>
                    <p class="text-gray-600 text-sm">Complete redirect chain visualization with SSL information and server response details.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Tab Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetTab = btn.getAttribute('data-tab');
                    
                    // Remove active class from all buttons and contents
                    tabBtns.forEach(b => {
                        b.classList.remove('text-blue-600', 'border-blue-500');
                        b.classList.add('text-gray-500', 'border-transparent');
                    });
                    
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });
                    
                    // Add active class to clicked button
                    btn.classList.remove('text-gray-500', 'border-transparent');
                    btn.classList.add('text-blue-600', 'border-blue-500');
                    
                    // Show target content
                    const targetContent = document.getElementById(targetTab);
                    if (targetContent) {
                        targetContent.classList.remove('hidden');
                    }
                });
            });
        });
    </script>

    <!-- Comprehensive SEO Content Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Complete Guide to Redirect Checker and URL Redirect Analysis</h2>
            
            <div class="prose max-w-none text-gray-700 space-y-6">
                <p class="text-lg leading-relaxed">The <strong>Redirect Checker</strong> represents an essential diagnostic tool for webmasters, SEO professionals, developers, and digital marketers monitoring website redirect implementations, troubleshooting navigation issues, and ensuring optimal search engine optimization through proper HTTP status code management. We understand that <strong>URL redirects</strong> serve critical functions including site migrations, content consolidation, HTTPS enforcement, canonical URL establishment, and user experience optimization through seamless navigation across domain changes, page restructures, and content relocations. Our comprehensive <strong>redirect analysis system</strong> provides detailed insights into redirect chains, status codes, response headers, redirect types, and potential issues impacting site performance, SEO rankings, and user experience quality.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Understanding HTTP Redirects and Status Codes</h3>
                
                <p><strong>HTTP redirects</strong> instruct browsers and search engines that requested resources have moved to different locations, automatically forwarding users and crawlers to updated URLs. The HTTP protocol defines specific status codes indicating redirect types and permanence: <strong>301 redirects</strong> signal permanent moves instructing search engines to transfer ranking signals to new URLs, <strong>302 redirects</strong> indicate temporary moves preserving original URL rankings, <strong>307 redirects</strong> maintain HTTP method during temporary redirects, and <strong>308 redirects</strong> preserve methods during permanent moves. Understanding these distinctions proves crucial for implementing redirects achieving intended SEO and user experience outcomes without inadvertent ranking losses or user confusion.</p>
                
                <p>Beyond basic redirect types, webmasters encounter various <strong>HTTP status codes</strong> during redirect analysis including <strong>200 OK</strong> indicating successful resource delivery, <strong>404 Not Found</strong> signaling missing resources, <strong>410 Gone</strong> indicating permanently removed content, <strong>500 Internal Server Error</strong> representing server-side failures, and <strong>503 Service Unavailable</strong> denoting temporary service interruptions. Comprehensive redirect checking identifies not just redirect functionality but complete response chains revealing configuration errors, broken redirects, redirect loops, and server issues requiring remediation for optimal site health and performance.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Types of URL Redirects Explained</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">301 Permanent Redirect</h4>
                
                <p>The <strong>301 Moved Permanently</strong> status code represents the most common and SEO-appropriate redirect type for permanently moved content. Search engines interpret 301 redirects as signals to transfer ranking equity, backlink value, and historical authority from original URLs to destination URLs, consolidating SEO value at new locations. We implement 301 redirects during domain migrations, HTTPS conversions, URL structure changes, content consolidation merging multiple pages, and canonical URL enforcement directing alternate versions to preferred URLs. Properly configured 301 redirects preserve search rankings through transitions while ensuring users seamlessly reach intended content regardless of outdated bookmarks or external links.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">302 Temporary Redirect</h4>
                
                <p><strong>302 Found</strong> redirects indicate temporary content moves where original URLs remain valid and should retain search engine rankings. Use 302 redirects for A/B testing scenarios maintaining original URLs while temporarily displaying alternative content, promotional campaigns redirecting users temporarily without permanent URL changes, maintenance periods routing traffic to temporary pages, or seasonal content variations preserving standard URLs. Search engines generally avoid transferring ranking signals through 302 redirects preserving original URL equity, though extended 302 redirect periods may eventually prompt reconsideration as search engines question temporary designation legitimacy.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">307 and 308 Redirects</h4>
                
                <p><strong>307 Temporary Redirect</strong> and <strong>308 Permanent Redirect</strong> represent modern HTTP/1.1 alternatives to 302 and 301 redirects with critical distinction: they explicitly preserve HTTP request methods and body content during redirection. When original requests use POST methods submitting form data, 307/308 redirects maintain POST methods at destination URLs whereas 301/302 redirects may convert POST requests to GET requests losing submitted data. These specialized redirects prove essential for web applications requiring precise HTTP method preservation during redirects, though remain less common than traditional 301/302 redirects for standard website navigation scenarios.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Meta Refresh Redirects</h4>
                
                <p><strong>Meta refresh redirects</strong> implement redirects through HTML meta tags or JavaScript rather than server-side HTTP responses. While functionally redirecting users, meta refresh redirects present disadvantages including delayed execution creating poor user experiences, inconsistent search engine interpretation potentially failing to transfer SEO value, accessibility concerns for assistive technology users, and vulnerability to client-side blocking. We strongly recommend server-side HTTP redirects over meta refresh alternatives except when server configuration access proves impossible or JavaScript-based single-page applications require client-side navigation management.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Why Redirect Checking Matters for SEO</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Preserving Search Engine Rankings</h4>
                
                <p>Properly implemented <strong>redirects maintain SEO equity</strong> during site changes preventing catastrophic ranking losses when pages move or domains change. Search engines follow redirects discovering new content locations and transferring accumulated ranking signals, backlink authority, and historical trust from old URLs to new destinations. However, redirect implementation errors—incorrect status codes, redirect chains, broken redirects, or missing redirects—result in lost rankings as search engines encounter errors preventing content discovery. Regular redirect checking identifies issues before search engine crawlers experience problems, preserving hard-earned SEO value through site transitions and ongoing content management.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Eliminating Redirect Chains and Loops</h4>
                
                <p><strong>Redirect chains</strong> occur when URLs redirect through multiple intermediate locations before reaching final destinations, creating unnecessary latency, wasting crawler budget, and risking partial SEO value transfer. For example, URL A redirects to URL B, which redirects to URL C, which finally delivers content—search engines may abandon chains after several hops or discount ranking signal transfers through excessive chains. <strong>Redirect loops</strong> represent even worse scenarios where URLs redirect to each other creating infinite cycles browsers and crawlers cannot resolve. Our redirect checker identifies both chains and loops enabling remediation through direct redirects from original sources to final destinations eliminating intermediate steps.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Monitoring Backlink Value Preservation</h4>
                
                <p>Websites accumulate valuable <strong>backlinks</strong> over time from external sites, social media, directories, and earned media coverage. When original URLs change without proper redirects, backlinks become broken links delivering users and search engine authority to 404 errors rather than intended content. This scenario wastes link equity representing potentially years of outreach, content marketing, and relationship building. Redirect checking verifies backlinks successfully reach intended content through redirect implementation, preserving link value and user satisfaction when external links reference outdated URLs.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">How Redirect Checkers Work</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">HTTP Request Simulation</h4>
                
                <p>Our <strong>redirect checker tool</strong> simulates browser and search engine crawler behavior by sending HTTP requests to target URLs and analyzing complete response sequences. The tool follows redirects automatically tracking each hop in redirect chains, recording HTTP status codes at each step, capturing response headers containing redirect destinations and server information, measuring response times indicating performance impacts, and identifying final destination URLs where content actually resides. This systematic analysis reveals redirect implementation details invisible to casual site visitors but critical for SEO and technical website management.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Response Header Analysis</h4>
                
                <p><strong>HTTP response headers</strong> contain crucial information about redirect implementations including Location headers specifying redirect destination URLs, Cache-Control headers affecting redirect caching behavior, server identification revealing underlying technology stacks, security headers indicating HTTPS configurations and policies, and timing information measuring server response performance. Comprehensive header analysis identifies configuration issues including incorrect destination URLs, caching problems causing outdated redirects to persist, security vulnerabilities, and server misconfiguration requiring administrative attention for proper site functionality.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Redirect Chain Visualization</h4>
                
                <p>Complex redirect scenarios benefit from <strong>visual chain representation</strong> displaying complete redirect paths from initial requests through all intermediate hops to final destinations. Our checker presents redirect chains as sequential step-by-step progressions showing URL transformations, status codes at each transition, response times accumulating through chains, and highlighted issues like excessive chain length or detected loops. This visualization enables quick comprehension of redirect complexity and immediate identification of optimization opportunities through chain elimination or redirect consolidation.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Common Redirect Issues and Solutions</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Redirect Chains Exceeding Recommended Limits</h4>
                
                <p><strong>Excessive redirect chains</strong> waste time, consume crawler budget, and risk incomplete SEO value transfer. Google recommends minimizing redirect chains ideally limiting to single redirects from original URLs directly to final destinations. When our checker identifies chains, we recommend updating redirect configurations implementing direct redirects from sources to ultimate destinations bypassing intermediate hops. For example, if Page A redirects to Page B which redirects to Page C, modify Page A's redirect to point directly to Page C eliminating the intermediate step and associated performance cost.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Incorrect Redirect Type Selection</h4>
                
                <p>Using <strong>302 redirects</strong> when permanent 301 redirects are appropriate risks SEO value retention as search engines maintain original URL indexing rather than transferring authority to new locations. Similarly, using 301 permanent redirects for genuinely temporary scenarios signals search engines to deindex original URLs potentially causing issues when temporary redirects end. Our checker identifies redirect types enabling verification of appropriate status code selection matching redirect intent—permanent moves receive 301 codes, temporary situations use 302/307 codes, and both preserve intended SEO outcomes and search engine understanding.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">HTTP to HTTPS Redirect Misconfigurations</h4>
                
                <p><strong>HTTPS migration</strong> requires careful redirect implementation ensuring all HTTP URLs redirect to HTTPS equivalents preserving URL paths and query parameters. Common errors include redirecting all HTTP URLs to HTTPS homepage rather than equivalent HTTPS URLs, creating redirect chains through multiple HTTPS subdomain variations, or implementing HTTPS redirects inconsistently leaving some content accessible via insecure HTTP. Our redirect checker verifies HTTPS redirect completeness testing both root domains and deep content URLs ensuring comprehensive HTTPS enforcement without inadvertent content consolidation or user experience degradation.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Redirect Loops and Circular Redirects</h4>
                
                <p><strong>Redirect loops</strong> create impossible situations where URL A redirects to URL B which redirects back to URL A, or more complex cycles involving multiple URLs ultimately redirecting to earlier points in chains. Browsers detect loops displaying error messages after several redirect attempts, while search engine crawlers abandon loops unable to reach content. Loops typically result from configuration errors, conflicting redirect rules, or CMS plugin conflicts. Our checker immediately identifies loops through cycle detection algorithms highlighting specific URLs participating in circular redirect patterns enabling targeted troubleshooting and rule correction.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Strategic Redirect Implementation Scenarios</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Website Domain Migration</h4>
                
                <p><strong>Domain migrations</strong> require comprehensive redirect strategies mapping every page on old domains to appropriate destinations on new domains. Successful migrations implement one-to-one redirects preserving URL structure when possible, redirect outdated content to relevant replacements when direct equivalents don't exist, establish redirect monitoring detecting missed pages or broken implementations, and maintain redirects long-term ensuring backlinks and bookmarks accumulated over years continue functioning. Our redirect checker validates migration completeness by testing representative URL samples across site sections identifying gaps requiring additional redirect rules.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Content Consolidation and Page Merging</h4>
                
                <p>Sites often consolidate multiple pages covering similar topics into comprehensive resources improving user experience through reduced navigation and concentrated information. <strong>Content consolidation</strong> requires redirecting old individual pages to consolidated replacement pages preserving accumulated SEO value from multiple sources. Implement 301 redirects from all merged pages to consolidation destinations, ensure consolidated content addresses topics from all merged sources maintaining topical relevance for redirected URLs, and monitor consolidated page performance verifying successful SEO value aggregation and improved rankings reflecting combined authority.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">URL Structure Optimization</h4>
                
                <p>Improving <strong>URL structures</strong> for SEO and usability—shorter URLs, keyword inclusion, logical hierarchies—requires redirecting old URLs to new optimized versions. Common optimization scenarios include removing unnecessary parameters and session IDs, implementing human-readable slugs replacing ID-based URLs, establishing consistent capitalization and special character handling, and reorganizing content hierarchies reflecting improved site architecture. Each URL change requires corresponding redirects ensuring search engines and users seamlessly transition to improved URLs without encountering broken links or lost pages.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Managing Discontinued Content</h4>
                
                <p>When permanently removing content, webmasters choose between <strong>404 Not Found</strong> responses honestly signaling content absence or <strong>301 redirects</strong> to related content maintaining user pathways and preserving partial SEO value. For discontinued products, redirect to category pages or related alternatives; for outdated information, redirect to updated content covering similar topics; for eliminated service offerings, redirect to remaining relevant services. Alternatively, 410 Gone status codes explicitly signal permanent removal helping search engines quickly deindex obsolete content without repeated crawl attempts.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Best Practices for Redirect Implementation</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Server-Side Implementation Preference</h4>
                
                <p><strong>Server-side redirects</strong> through web server configurations (Apache .htaccess, Nginx config, IIS rules) or application code provide fastest, most reliable redirect implementations search engines universally recognize and respect. Configure redirects at server or application levels before content delivery rather than relying on client-side JavaScript or meta refresh alternatives. Server-side implementation ensures redirects execute before page rendering, function reliably across all browsers and devices, and receive proper search engine interpretation for SEO value transfer.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Maintaining Redirect Documentation</h4>
                
                <p>Complex sites accumulate numerous <strong>redirect rules</strong> over time through migrations, restructures, and content management. Maintain comprehensive documentation recording redirect rationales, implementation dates, expected permanence, and periodic review schedules. Document temporary redirects with planned end dates preventing accidental permanence, track redirect purposes enabling informed decisions about eventual removal, and establish review processes identifying outdated redirects removable after backlink decay or sufficient transition periods ensuring current redirect configurations remain purposeful and optimized.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Testing Redirects Before Deployment</h4>
                
                <p><strong>Redirect testing</strong> in staging environments before production deployment prevents user-facing errors and SEO disasters. Verify redirects direct to intended destinations without chains or loops, confirm appropriate status codes match redirect purposes, test representative URLs across site sections ensuring comprehensive coverage, validate query parameter preservation when required, and verify redirect performance meets acceptable latency thresholds. Systematic testing identifies configuration errors in controlled environments enabling correction before impacting live site visitors and search engine crawlers.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Monitoring Redirect Performance Over Time</h4>
                
                <p>Redirect requirements evolve as sites change requiring ongoing <strong>performance monitoring</strong> and optimization. Regularly analyze server logs identifying URLs triggering redirects, review redirect response times detecting performance degradation, monitor search console reports for crawl errors related to redirects, analyze user behavior tracking bounce rates from redirected pages, and maintain redirect chain analysis ensuring optimization opportunities receive prompt attention. Proactive monitoring transforms redirect management from one-time implementation tasks into continuous optimization processes supporting long-term site health and SEO performance.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Advanced Redirect Analysis Techniques</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Bulk Redirect Validation</h4>
                
                <p>Large sites require <strong>bulk redirect checking</strong> capabilities testing hundreds or thousands of URLs efficiently. Advanced redirect checkers accept URL lists from sitemaps, backlink reports, analytics exports, or crawl data performing batch validation and generating comprehensive reports highlighting issues requiring attention. Bulk checking identifies systemic problems affecting multiple URLs, validates migration completeness testing all old URLs, and enables scalable redirect quality assurance impossible through manual URL-by-URL testing.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Geographic and Device-Specific Redirects</h4>
                
                <p>Complex sites implement <strong>conditional redirects</strong> based on visitor geography, device types, or browser capabilities. Geographic redirects route visitors to country-specific domains or language versions, device-specific redirects optimize experiences for mobile versus desktop users, and browser-specific redirects accommodate legacy browser limitations or modern capability requirements. Redirect checking must account for these conditional scenarios testing from multiple geographic locations, user agents, and device types ensuring comprehensive redirect functionality validation across diverse visitor contexts.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Backlink Redirect Audit</h4>
                
                <p><strong>Backlink analysis</strong> combined with redirect checking identifies valuable external links requiring redirect attention. Export backlink reports from SEO tools, extract linked URLs, and validate each backlink target ensuring functional redirects to current content or direct content accessibility. Prioritize high-authority backlinks for redirect verification as these links contribute disproportionate SEO value—fixing redirects preserving links from major publications, industry authorities, or viral content delivers greater impact than addressing numerous low-quality backlinks.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Redirect Checker Tool Features</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Complete Redirect Chain Display</h4>
                
                <p>Comprehensive <strong>redirect visualization</strong> displays complete request-response sequences from initial URL inputs through all intermediate redirects to final content delivery. View status codes at each step, inspect response headers revealing server configurations, measure cumulative response times through redirect chains, and identify specific redirect hops requiring optimization or removal. Clear visual presentation transforms complex redirect chains into understandable diagrams facilitating quick comprehension and targeted troubleshooting.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">HTTP Header Inspection</h4>
                
                <p>Advanced redirect checkers provide <strong>detailed header analysis</strong> displaying complete HTTP response headers for each redirect hop. Inspect Location headers confirming redirect destinations, review Cache-Control directives affecting redirect caching, examine security headers like HSTS enforcing HTTPS, verify server identification and technology stacks, and analyze timing headers measuring server response performance. Header inspection reveals configuration details guiding optimization efforts and troubleshooting server-side redirect implementations.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Mobile and Desktop User Agent Testing</h4>
                
                <p>Sites implementing <strong>device-specific redirects</strong> require testing across multiple user agents ensuring appropriate redirect behavior for different visitor devices. Our checker simulates desktop browsers, mobile devices, and search engine crawlers revealing device-specific redirect variations. Verify mobile URLs redirect appropriately to mobile-optimized content, confirm desktop versions remain accessible from desktop browsers, and validate crawler user agents receive consistent redirect behavior supporting proper search engine indexing.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Historical Redirect Tracking</h4>
                
                <p>Tracking <strong>redirect changes over time</strong> identifies configuration modifications, detects new redirect issues, and monitors redirect performance trends. Historical data reveals when redirect chains developed, tracks redirect type changes affecting SEO value transfer, and documents redirect removal or modification for troubleshooting regression issues. Longitudinal monitoring transforms snapshot checking into continuous surveillance detecting problems promptly after introduction enabling rapid remediation before significant SEO or user experience impacts accumulate.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">SEO Impact of Redirect Configurations</h3>
                
                <p>Search engines consume <strong>crawl budget</strong>—limited resources allocated to crawling each site—and redirects consume budget that could otherwise discover new content or refresh existing pages. Excessive redirects, particularly chains and loops, waste crawler resources reducing crawl efficiency and potentially delaying new content discovery. Minimizing redirects through direct URL maintenance and redirect chain elimination optimizes crawl budget allocation ensuring search engines efficiently crawl content priorities rather than navigating redirect complexity.</p>
                
                <p><strong>Page speed</strong> impacts both user experience and search rankings, and redirects add latency requiring additional HTTP requests and server processing before content delivery. Each redirect hop adds network round-trip time, DNS resolution overhead for domain changes, TLS handshake requirements for protocol changes, and server processing delays. While individual redirects add minimal delays, chains accumulate latency creating measurable performance impacts. Fast redirects and chain elimination maintain optimal page speed supporting both user satisfaction and search ranking factors increasingly emphasizing performance.</p>
                
                <p>Mobile-first indexing means Google primarily uses <strong>mobile content versions</strong> for indexing and ranking. Sites implementing separate mobile URLs (m.example.com) require bidirectional redirects ensuring desktop users on mobile URLs reach desktop versions and vice versa. Responsive design eliminating separate mobile URLs simplifies redirect management, but when separate versions exist, comprehensive redirect checking across user agents ensures proper mobile-desktop redirect functioning supporting mobile-first indexing requirements and optimal rankings across device types.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Common Redirect Implementation Methods</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Apache .htaccess Redirects</h4>
                
                <p><strong>Apache web servers</strong> commonly implement redirects through .htaccess files using mod_rewrite rules providing flexible pattern-based redirect configurations. .htaccess redirects offer powerful capabilities including regex pattern matching for bulk redirects, conditional redirects based on request parameters, and dynamic redirect generation. However, .htaccess processing adds slight performance overhead compared to server configuration file implementations, and complex regex rules require careful testing preventing unintended redirect side effects.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Nginx Redirect Configuration</h4>
                
                <p><strong>Nginx servers</strong> implement redirects through server block configurations using return or rewrite directives. Nginx redirects generally perform faster than Apache .htaccess implementations due to configuration parsing occurring at server startup rather than per-request processing. Nginx's location block matching enables precise redirect targeting, while regex support provides flexible pattern-based redirects for complex URL migration scenarios.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Application-Level Redirects</h4>
                
                <p>Web applications implement <strong>redirects programmatically</strong> through application code using framework-specific redirect functions or direct HTTP response header manipulation. Application-level redirects enable complex conditional logic, database-driven redirect mappings for dynamic URL structures, and integration with content management systems. However, application redirects add processing overhead compared to web server implementations and require application availability—server-level redirects function even during application failures providing more robust redirect reliability.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">CDN and Edge Redirects</h4>
                
                <p><strong>Content delivery networks</strong> increasingly offer edge redirect capabilities executing redirects at CDN edge nodes nearest visitors rather than origin servers. Edge redirects minimize latency eliminating origin server round trips for redirected requests, reduce origin server load handling redirects at CDN infrastructure scale, and enable geographic redirect logic based on visitor locations. Advanced CDN features support complex redirect rules, A/B testing scenarios, and dynamic redirect generation rivaling origin server capabilities while delivering superior performance through edge execution.</p>
            </div>
        </div>

        <!-- Comprehensive Comparison Table -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">HTTP Redirect Status Codes Comparison</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Status Code</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Name</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Permanence</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">SEO Value Transfer</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Method Preservation</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Primary Use Cases</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-blue-600">301</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Moved Permanently</td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Permanent</td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Yes, Full Transfer</td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600">May Change to GET</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Domain migrations, HTTPS conversion, permanent URL changes</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-blue-600">302</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Found (Temporary)</td>
                            <td class="border border-gray-300 px-4 py-3 text-orange-600 font-semibold">Temporary</td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600 font-semibold">Minimal/None</td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600">May Change to GET</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">A/B testing, temporary promotions, maintenance pages</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-blue-600">307</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Temporary Redirect</td>
                            <td class="border border-gray-300 px-4 py-3 text-orange-600 font-semibold">Temporary</td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600 font-semibold">Minimal/None</td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Preserved</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">POST form redirects, API endpoints, method preservation required</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-blue-600">308</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Permanent Redirect</td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Permanent</td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Yes, Full Transfer</td>
                            <td class="border border-gray-300 px-4 py-3 text-green-600 font-semibold">Preserved</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">API migrations, permanent moves requiring method preservation</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-red-600">Meta Refresh</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">HTML/JS Redirect</td>
                            <td class="border border-gray-300 px-4 py-3 text-orange-600 font-semibold">Variable</td>
                            <td class="border border-gray-300 px-4 py-3 text-red-600 font-semibold">Unreliable</td>
                            <td class="border border-gray-300 px-4 py-3 text-yellow-600">Not Applicable</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Last resort when server access unavailable (not recommended)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="text-sm text-gray-600 mt-4">*Always prefer server-side HTTP redirects (301, 302, 307, 308) over client-side alternatives for optimal SEO and user experience.</p>
        </div>

        <!-- 25 Comprehensive FAQs -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">25 Frequently Asked Questions About Redirect Checker</h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">1. What is a Redirect Checker?</h3>
                    <p class="text-gray-700">A <strong>Redirect Checker</strong> is a diagnostic tool that analyzes URL redirects by simulating browser requests, tracking redirect chains, displaying HTTP status codes, examining response headers, and identifying redirect issues like chains, loops, or misconfigurations. It helps webmasters verify redirect implementations and optimize redirect strategies for SEO and user experience.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">2. Why should I check my website redirects?</h3>
                    <p class="text-gray-700">Checking redirects ensures proper SEO value transfer during site changes, identifies performance-impacting redirect chains, detects broken redirects causing 404 errors, verifies correct redirect types matching implementation intent, and maintains optimal user experience through seamless navigation. Regular redirect monitoring prevents ranking losses and user frustration from redirect issues.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">3. What's the difference between 301 and 302 redirects?</h3>
                    <p class="text-gray-700"><strong>301 redirects</strong> signal permanent moves instructing search engines to transfer ranking equity to new URLs, while <strong>302 redirects</strong> indicate temporary moves preserving original URL rankings. Use 301 for permanent changes (domain migrations, URL restructures) and 302 for temporary scenarios (A/B testing, maintenance, seasonal content).</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">4. What is a redirect chain?</h3>
                    <p class="text-gray-700">A <strong>redirect chain</strong> occurs when URLs redirect through multiple intermediate locations before reaching final destinations (URL A → URL B → URL C). Chains waste time, consume crawler budget, and risk partial SEO value transfer. Best practice maintains direct redirects from sources to final destinations eliminating intermediate hops.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">5. What is a redirect loop?</h3>
                    <p class="text-gray-700">A <strong>redirect loop</strong> creates impossible situations where URLs redirect to each other in cycles (URL A → URL B → URL A). Browsers display errors after detecting loops, and search engines abandon loops unable to reach content. Loops result from configuration errors requiring rule correction to resolve.</p>
                </div>

                <div class="border-l-4 border-yellow-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">6. How do redirects affect SEO?</h3>
                    <p class="text-gray-700">Proper <strong>redirects preserve SEO value</strong> during site changes by transferring rankings, backlink authority, and trust to new URLs. However, incorrect redirect types, chains, loops, or broken redirects cause ranking losses as search engines encounter errors preventing content discovery and value transfer.</p>
                </div>

                <div class="border-l-4 border-orange-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">7. How many redirects are too many in a chain?</h3>
                    <p class="text-gray-700">Google recommends minimizing redirect chains ideally to <strong>zero intermediate hops</strong>—direct redirects from sources to final destinations. While search engines follow multiple redirects, each hop risks incomplete value transfer and adds latency. Limit chains to maximum 2-3 hops when unavoidable, but prioritize elimination.</p>
                </div>

                <div class="border-l-4 border-red-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">8. Should I use 301 or 302 for HTTPS migration?</h3>
                    <p class="text-gray-700">Always use <strong>301 permanent redirects</strong> for HTTPS migration as the change is permanent. 301 redirects signal search engines to transfer all ranking signals from HTTP to HTTPS versions, update indexed URLs, and consolidate SEO value at secure URLs supporting long-term HTTPS enforcement.</p>
                </div>

                <div class="border-l-4 border-teal-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">9. What are 307 and 308 redirects?</h3>
                    <p class="text-gray-700"><strong>307 (temporary) and 308 (permanent)</strong> redirects preserve HTTP request methods and body content during redirection, unlike 301/302 which may convert POST to GET. Use 307/308 for web applications requiring precise method preservation during redirects, though they remain less common for standard website navigation.</p>
                </div>

                <div class="border-l-4 border-cyan-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">10. Are meta refresh redirects bad for SEO?</h3>
                    <p class="text-gray-700">Yes, <strong>meta refresh redirects</strong> present SEO disadvantages including delayed execution, inconsistent search engine interpretation, and unreliable value transfer. Search engines and SEO professionals strongly prefer server-side HTTP redirects over meta refresh alternatives. Use meta refresh only when server configuration access is impossible.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">11. How do I fix a redirect chain?</h3>
                    <p class="text-gray-700">Identify chain endpoints using redirect checker tools, then <strong>update redirect rules</strong> to point directly from original sources to final destinations bypassing intermediate hops. If A→B→C chain exists, configure A to redirect directly to C, then verify chain elimination through retesting.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">12. Can redirects slow down my website?</h3>
                    <p class="text-gray-700">Yes, each <strong>redirect adds latency</strong> requiring additional HTTP requests, DNS resolution for domain changes, TLS handshakes for protocol changes, and server processing. While individual redirects add minimal delay, chains accumulate latency creating measurable performance impacts affecting both user experience and search rankings.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">13. What HTTP status code indicates successful redirect?</h3>
                    <p class="text-gray-700"><strong>3xx status codes</strong> (301, 302, 307, 308) indicate redirects, while the final destination should return <strong>200 OK</strong> for successful content delivery. Redirect checkers verify complete chains ending with 200 responses confirming functional redirects reaching accessible content.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">14. How long should I keep redirects active?</h3>
                    <p class="text-gray-700">Maintain <strong>permanent redirects indefinitely</strong> as backlinks and bookmarks persist for years. Remove temporary redirects after their specific purposes conclude. For permanent redirects, consider maintaining at least 1-2 years minimum, though longer durations or permanent retention ensures complete backlink value preservation and user experience continuity.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">15. Do redirects consume crawl budget?</h3>
                    <p class="text-gray-700">Yes, <strong>redirects consume crawl budget</strong>—search engines must request original URLs and follow redirects before reaching content. Excessive redirects, particularly chains, waste crawler resources that could otherwise discover new content. Minimize redirects and eliminate chains optimizing crawl budget allocation for content priorities.</p>
                </div>

                <div class="border-l-4 border-yellow-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">16. Should I redirect deleted pages or return 404?</h3>
                    <p class="text-gray-700">Context determines appropriate responses. <strong>Redirect to relevant alternatives</strong> when similar content exists preserving user pathways and partial SEO value. Return <strong>404 Not Found</strong> when no relevant alternatives exist honestly signaling content absence. Use <strong>410 Gone</strong> explicitly signaling permanent removal helping search engines quickly deindex obsolete content.</p>
                </div>

                <div class="border-l-4 border-orange-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">17. How do I check redirects for my entire website?</h3>
                    <p class="text-gray-700">Use <strong>bulk redirect checking tools</strong> accepting URL lists from sitemaps, backlink reports, or crawl data. Enterprise SEO platforms offer comprehensive redirect audits testing thousands of URLs simultaneously. Alternatively, crawl your site identifying all redirects, then validate proper implementation and identify optimization opportunities.</p>
                </div>

                <div class="border-l-4 border-red-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">18. What causes redirect loops?</h3>
                    <p class="text-gray-700"><strong>Configuration errors</strong> create loops: conflicting redirect rules pointing URLs to each other, CMS plugin conflicts implementing contradictory redirects, .htaccess rule interactions creating unintended cycles, or application logic errors generating circular redirect patterns. Careful configuration review and testing prevents loops.</p>
                </div>

                <div class="border-l-4 border-teal-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">19. Can I test redirects before implementing them live?</h3>
                    <p class="text-gray-700">Yes, implement and <strong>test redirects in staging environments</strong> before production deployment. Verify destinations, status codes, chain absence, performance, and comprehensive coverage across representative URLs. Staging testing identifies configuration errors in controlled environments enabling correction before impacting live visitors and search engines.</p>
                </div>

                <div class="border-l-4 border-cyan-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">20. Do redirects affect mobile SEO differently?</h3>
                    <p class="text-gray-700"><strong>Mobile-first indexing</strong> means Google primarily uses mobile versions for ranking. Sites with separate mobile URLs require proper bidirectional redirects between mobile and desktop versions. Test redirects with mobile user agents ensuring correct behavior supporting mobile-first indexing and optimal rankings across device types.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">21. Where should I implement redirects: server or application level?</h3>
                    <p class="text-gray-700"><strong>Server-level redirects</strong> (Apache, Nginx, IIS configurations) provide fastest, most reliable implementations executing before application code and functioning during application failures. Application-level redirects enable complex conditional logic but add processing overhead. Prefer server-level when possible, use application-level when dynamic logic requires it.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">22. How do CDN edge redirects work?</h3>
                    <p class="text-gray-700"><strong>CDN edge redirects</strong> execute at CDN nodes nearest visitors rather than origin servers, minimizing latency and reducing origin load. Edge redirects deliver superior performance through geographic proximity while supporting complex redirect rules rivaling origin capabilities. Modern CDNs offer comprehensive redirect functionality optimizing performance through edge execution.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">23. What information do redirect checkers display?</h3>
                    <p class="text-gray-700">Comprehensive checkers show <strong>complete redirect chains</strong> with each hop, HTTP status codes at every step, response headers revealing configurations, redirect destinations and transformations, response times measuring performance, and issue identification including chains, loops, and misconfiguration warnings requiring attention.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24. Should I redirect www to non-www or vice versa?</h3>
                    <p class="text-gray-700">Choose one <strong>canonical URL format</strong> (www or non-www) and redirect the other to your preference ensuring consistency. Search engines treat them as separate URLs without redirects, splitting ranking signals. Implement 301 redirects standardizing on preferred format consolidating SEO value and preventing duplicate content issues.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">25. How often should I audit my redirects?</h3>
                    <p class="text-gray-700">Conduct <strong>comprehensive redirect audits</strong> quarterly for established sites, after major site changes (migrations, restructures), when launching new sections, and when monitoring detects increased redirect-related errors. Regular auditing identifies configuration drift, optimization opportunities, and issues requiring remediation maintaining optimal redirect health.</p>
                </div>
            </div>
        </div>

        <!-- Best Practices Guide Section -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Redirect Implementation Best Practices</h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold text-blue-900 mb-4">Essential Redirect Guidelines</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Use 301 for permanent changes</strong> - Domain migrations, HTTPS conversion, permanent URL changes</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Implement server-side redirects</strong> - Faster, more reliable than client-side alternatives</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Eliminate redirect chains</strong> - Direct redirects from source to final destination</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Test before deployment</strong> - Verify in staging environments preventing live issues</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Monitor redirect performance</strong> - Regular audits identifying issues and optimization opportunities</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Document redirect rationales</strong> - Track purposes, dates, and review schedules</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Maintain redirects long-term</strong> - Backlinks persist for years requiring ongoing redirect support</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold text-blue-900 mb-4">Redirect Mistakes to Avoid</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Using 302 for permanent changes</strong> - Prevents SEO value transfer to new URLs</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Creating redirect chains</strong> - Wastes time, consumes crawl budget, risks value loss</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Implementing meta refresh redirects</strong> - Poor SEO, unreliable search engine interpretation</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Ignoring redirect loops</strong> - Prevents content access for users and search engines</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Removing redirects prematurely</strong> - Breaks backlinks accumulated over years</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Deploying untested redirects</strong> - Risks live issues impacting users and SEO</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Neglecting mobile redirect testing</strong> - Misses device-specific redirect issues</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 p-6 bg-white rounded-lg border-2 border-blue-300">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Redirect Audit Checklist</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <h4 class="font-semibold text-blue-800 mb-3">Status Code Verification</h4>
                        <ul class="text-sm space-y-2 text-gray-700">
                            <li>✓ Permanent changes use 301</li>
                            <li>✓ Temporary redirects use 302/307</li>
                            <li>✓ No inappropriate redirect types</li>
                            <li>✓ Final destinations return 200 OK</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-blue-800 mb-3">Chain & Loop Detection</h4>
                        <ul class="text-sm space-y-2 text-gray-700">
                            <li>✓ No redirect chains present</li>
                            <li>✓ All redirects direct to final URLs</li>
                            <li>✓ No circular redirect patterns</li>
                            <li>✓ Maximum 1-hop redirects</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-blue-800 mb-3">Performance & Coverage</h4>
                        <ul class="text-sm space-y-2 text-gray-700">
                            <li>✓ Redirect response times acceptable</li>
                            <li>✓ All old URLs properly redirected</li>
                            <li>✓ Backlinks reach correct content</li>
                            <li>✓ Mobile redirects function properly</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php include 'footer.php';?>


</html>
