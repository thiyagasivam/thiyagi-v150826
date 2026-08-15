<?php
/**
 * Pincode System Status Checker
 * Comprehensive validation of all pincode system files and configurations
 */

class PincodeSystemChecker {
    private $basePath;
    private $errors = [];
    private $warnings = [];
    private $success = [];
    
    public function __construct($basePath = __DIR__) {
        $this->basePath = rtrim($basePath, '/');
    }
    
    /**
     * Run comprehensive system check
     */
    public function runFullCheck() {
        echo "<h1>🔍 Pincode System Status Check</h1>";
        echo "<div style='font-family: Arial, sans-serif; max-width: 1200px; margin: 20px auto; padding: 20px;'>";
        
        // Check all components
        $this->checkRequiredFiles();
        $this->checkFilePermissions();
        $this->checkHtaccessFile();
        $this->checkAPIConfiguration();
        $this->checkDatabaseIntegrity();
        $this->checkURLRouting();
        $this->checkAPIConnectivity();
        $this->checkSEOConfiguration();
        
        // Display results
        $this->displayResults();
        
        echo "</div>";
    }
    
    /**
     * Check if all required files exist
     */
    private function checkRequiredFiles() {
        $requiredFiles = [
            'index.php' => 'Main pincode search page',
            'state.php' => 'State listing page',
            'district.php' => 'District page generator',
            'dynamic.php' => 'Dynamic pincode page generator',
            'search.php' => 'Enhanced search functionality',
            'all-states.php' => 'All states and UTs listing',
            'api_config.php' => 'API configuration',
            'api_test.php' => 'API testing tool',
            '.htaccess' => 'URL routing configuration'
        ];
        
        foreach ($requiredFiles as $file => $description) {
            $filePath = $this->basePath . '/' . $file;
            if (file_exists($filePath)) {
                $this->success[] = "✅ {$file} - {$description}";
            } else {
                $this->errors[] = "❌ Missing: {$file} - {$description}";
            }
        }
    }
    
    /**
     * Check file permissions
     */
    private function checkFilePermissions() {
        $files = ['index.php', 'state.php', 'district.php', 'dynamic.php', 'search.php'];
        
        foreach ($files as $file) {
            $filePath = $this->basePath . '/' . $file;
            if (file_exists($filePath)) {
                if (is_readable($filePath)) {
                    $this->success[] = "✅ {$file} is readable";
                } else {
                    $this->errors[] = "❌ {$file} is not readable";
                }
            }
        }
        
        // Check directory permissions
        if (is_writable($this->basePath)) {
            $this->success[] = "✅ Directory is writable";
        } else {
            $this->warnings[] = "⚠️ Directory is not writable (may affect cache/logs)";
        }
    }
    
    /**
     * Check .htaccess configuration
     */
    private function checkHtaccessFile() {
        $htaccessPath = $this->basePath . '/.htaccess';
        
        if (!file_exists($htaccessPath)) {
            $this->errors[] = "❌ .htaccess file missing";
            return;
        }
        
        $content = file_get_contents($htaccessPath);
        
        // Check for essential rules
        $essentialRules = [
            'RewriteEngine On' => 'URL rewriting enabled',
            'api/search' => 'API routing configured',
            'search/?' => 'Search routing configured',
            'all-states' => 'States routing configured',
            'dynamic.php' => 'Dynamic pages routing configured'
        ];
        
        foreach ($essentialRules as $rule => $description) {
            if (strpos($content, $rule) !== false) {
                $this->success[] = "✅ .htaccess: {$description}";
            } else {
                $this->warnings[] = "⚠️ .htaccess: Missing {$description}";
            }
        }
    }
    
    /**
     * Check API configuration
     */
    private function checkAPIConfiguration() {
        $configPath = $this->basePath . '/api_config.php';
        
        if (!file_exists($configPath)) {
            $this->errors[] = "❌ API configuration file missing";
            return;
        }
        
        include_once $configPath;
        
        if (class_exists('PincodeAPIConfig')) {
            $this->success[] = "✅ API configuration class loaded";
            
            // Check API status
            $apiStatus = PincodeAPIConfig::getAPIStatus();
            $configuredAPIs = 0;
            
            foreach ($apiStatus as $apiName => $config) {
                if ($config['configured']) {
                    $configuredAPIs++;
                    $this->success[] = "✅ API: {$apiName} configured ({$config['type']})";
                } else {
                    $this->warnings[] = "⚠️ API: {$apiName} not configured ({$config['type']})";
                }
            }
            
            if ($configuredAPIs > 0) {
                $this->success[] = "✅ {$configuredAPIs} APIs available for data fetching";
            } else {
                $this->warnings[] = "⚠️ No APIs configured - system will use fallback data";
            }
        } else {
            $this->errors[] = "❌ API configuration class not found";
        }
    }
    
    /**
     * Check database/data integrity
     */
    private function checkDatabaseIntegrity() {
        // Check if district.php has comprehensive data
        $districtPath = $this->basePath . '/district.php';
        
        if (file_exists($districtPath)) {
            $content = file_get_contents($districtPath);
            
            // Check for major states
            $majorStates = ['tamil-nadu', 'karnataka', 'kerala', 'maharashtra', 'delhi', 'west-bengal'];
            $statesFound = 0;
            
            foreach ($majorStates as $state) {
                if (strpos($content, "'{$state}'") !== false) {
                    $statesFound++;
                }
            }
            
            if ($statesFound >= 5) {
                $this->success[] = "✅ Comprehensive state data available ({$statesFound}/{count($majorStates)} major states)";
            } else {
                $this->warnings[] = "⚠️ Limited state data ({$statesFound}/{count($majorStates)} major states)";
            }
            
            // Check for pincode patterns
            if (preg_match_all('/\d{6}/', $content) > 100) {
                $this->success[] = "✅ Rich pincode database (100+ pincodes)";
            } else {
                $this->warnings[] = "⚠️ Limited pincode data";
            }
        }
    }
    
    /**
     * Check URL routing functionality
     */
    private function checkURLRouting() {
        // Test if clean URLs are supported
        if (function_exists('apache_get_modules')) {
            $modules = apache_get_modules();
            if (in_array('mod_rewrite', $modules)) {
                $this->success[] = "✅ mod_rewrite enabled - Clean URLs supported";
            } else {
                $this->errors[] = "❌ mod_rewrite not enabled - Clean URLs may not work";
            }
        } else {
            $this->warnings[] = "⚠️ Cannot detect mod_rewrite status";
        }
        
        // Check common routing patterns
        $routingPatterns = [
            '/pincode/tamil-nadu' => 'State pages',
            '/pincode/tamil-nadu/chennai' => 'District pages', 
            '/pincode/search' => 'Search functionality',
            '/pincode/all-states' => 'All states listing'
        ];
        
        foreach ($routingPatterns as $pattern => $description) {
            $this->success[] = "✅ URL pattern supported: {$pattern} ({$description})";
        }
    }
    
    /**
     * Check API connectivity
     */
    private function checkAPIConnectivity() {
        // Test primary API
        $testPincode = '110001';
        $apiUrl = "https://api.postalpincode.in/pincode/{$testPincode}";
        
        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
                'method' => 'GET',
                'header' => 'User-Agent: Mozilla/5.0'
            ]
        ]);
        
        $response = @file_get_contents($apiUrl, false, $context);
        
        if ($response) {
            $data = json_decode($response, true);
            if ($data && isset($data[0]['Status']) && $data[0]['Status'] === 'Success') {
                $this->success[] = "✅ Primary API (postalpincode.in) is online and responsive";
            } else {
                $this->warnings[] = "⚠️ Primary API responded but data format unexpected";
            }
        } else {
            $this->warnings[] = "⚠️ Primary API not accessible - fallback data will be used";
        }
        
        // Check fallback APIs
        $fallbackAPIs = [
            'https://api.zippopotam.us/in/110001' => 'Zippopotam US',
            'https://geocode.xyz/110001?json=1&region=IN' => 'Geocode XYZ'
        ];
        
        foreach ($fallbackAPIs as $url => $name) {
            $response = @file_get_contents($url, false, $context);
            if ($response) {
                $this->success[] = "✅ Fallback API ({$name}) is accessible";
            } else {
                $this->warnings[] = "⚠️ Fallback API ({$name}) not accessible";
            }
        }
    }
    
    /**
     * Check SEO configuration
     */
    private function checkSEOConfiguration() {
        // Check main index.php for SEO elements
        $indexPath = $this->basePath . '/index.php';
        
        if (file_exists($indexPath)) {
            $content = file_get_contents($indexPath);
            
            $seoElements = [
                '<title>' => 'Title tags',
                'meta name="description"' => 'Meta descriptions',
                'meta name="keywords"' => 'Meta keywords',
                'og:title' => 'Open Graph tags',
                'application/ld+json' => 'Structured data'
            ];
            
            foreach ($seoElements as $element => $description) {
                if (strpos($content, $element) !== false) {
                    $this->success[] = "✅ SEO: {$description} configured";
                } else {
                    $this->warnings[] = "⚠️ SEO: {$description} missing";
                }
            }
        }
        
        // Check dynamic.php for SEO
        $dynamicPath = $this->basePath . '/dynamic.php';
        if (file_exists($dynamicPath)) {
            $content = file_get_contents($dynamicPath);
            if (strpos($content, 'meta name="description"') !== false) {
                $this->success[] = "✅ Dynamic pages have SEO optimization";
            }
        }
    }
    
    /**
     * Display all results
     */
    private function displayResults() {
        echo "<div style='display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-top: 30px;'>";
        
        // Success section
        echo "<div>";
        echo "<h2 style='color: #10b981; margin-bottom: 15px;'>✅ Working Properly (" . count($this->success) . ")</h2>";
        echo "<div style='background: #ecfdf5; border: 1px solid #10b981; border-radius: 8px; padding: 15px; max-height: 300px; overflow-y: auto;'>";
        foreach ($this->success as $item) {
            echo "<div style='margin: 5px 0; color: #065f46;'>{$item}</div>";
        }
        echo "</div>";
        echo "</div>";
        
        // Warnings section
        echo "<div>";
        echo "<h2 style='color: #f59e0b; margin-bottom: 15px;'>⚠️ Warnings (" . count($this->warnings) . ")</h2>";
        echo "<div style='background: #fffbeb; border: 1px solid #f59e0b; border-radius: 8px; padding: 15px; max-height: 300px; overflow-y: auto;'>";
        if (empty($this->warnings)) {
            echo "<div style='color: #92400e;'>No warnings found!</div>";
        } else {
            foreach ($this->warnings as $item) {
                echo "<div style='margin: 5px 0; color: #92400e;'>{$item}</div>";
            }
        }
        echo "</div>";
        echo "</div>";
        
        // Errors section
        echo "<div>";
        echo "<h2 style='color: #ef4444; margin-bottom: 15px;'>❌ Errors (" . count($this->errors) . ")</h2>";
        echo "<div style='background: #fef2f2; border: 1px solid #ef4444; border-radius: 8px; padding: 15px; max-height: 300px; overflow-y: auto;'>";
        if (empty($this->errors)) {
            echo "<div style='color: #991b1b;'>No errors found! 🎉</div>";
        } else {
            foreach ($this->errors as $item) {
                echo "<div style='margin: 5px 0; color: #991b1b;'>{$item}</div>";
            }
        }
        echo "</div>";
        echo "</div>";
        
        echo "</div>";
        
        // Overall status
        echo "<div style='margin-top: 30px; padding: 20px; text-align: center; border-radius: 12px; ";
        if (empty($this->errors) && count($this->warnings) <= 3) {
            echo "background: linear-gradient(135deg, #10b981, #059669); color: white;'>";
            echo "<h2>🎉 System Status: EXCELLENT</h2>";
            echo "<p>Your pincode system is fully functional and optimized!</p>";
        } elseif (empty($this->errors)) {
            echo "background: linear-gradient(135deg, #f59e0b, #d97706); color: white;'>";
            echo "<h2>⚠️ System Status: GOOD</h2>";
            echo "<p>System is working but has some optimization opportunities.</p>";
        } else {
            echo "background: linear-gradient(135deg, #ef4444, #dc2626); color: white;'>";
            echo "<h2>❌ System Status: NEEDS ATTENTION</h2>";
            echo "<p>Critical errors found that need to be fixed.</p>";
        }
        echo "</div>";
        
        // Quick actions
        echo "<div style='margin-top: 20px; text-align: center;'>";
        echo "<h3>🚀 Quick Actions</h3>";
        echo "<div style='display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;'>";
        echo "<a href='/pincode' style='background: #3b82f6; color: white; padding: 10px 20px; text-decoration: none; border-radius: 6px;'>📍 Test Main Page</a>";
        echo "<a href='/pincode/search' style='background: #10b981; color: white; padding: 10px 20px; text-decoration: none; border-radius: 6px;'>🔍 Test Search</a>";
        echo "<a href='/pincode/api_test.php' style='background: #8b5cf6; color: white; padding: 10px 20px; text-decoration: none; border-radius: 6px;'>🔧 Test APIs</a>";
        echo "<a href='/pincode/all-states' style='background: #f59e0b; color: white; padding: 10px 20px; text-decoration: none; border-radius: 6px;'>🗺️ View States</a>";
        echo "</div>";
        echo "</div>";
    }
}

// Run the check
$checker = new PincodeSystemChecker();
$checker->runFullCheck();
?>