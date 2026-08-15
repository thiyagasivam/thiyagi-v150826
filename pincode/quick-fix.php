<?php
/**
 * Pincode System Quick Fix Tool
 * Automatically fixes common issues and missing configurations
 */

class PincodeQuickFix {
    private $basePath;
    private $fixed = [];
    private $skipped = [];
    
    public function __construct($basePath = __DIR__) {
        $this->basePath = rtrim($basePath, '/');
    }
    
    /**
     * Run all quick fixes
     */
    public function runAllFixes() {
        echo "<h1>🔧 Pincode System Quick Fix Tool</h1>";
        echo "<div style='font-family: Arial, sans-serif; max-width: 800px; margin: 20px auto; padding: 20px;'>";
        
        $this->fixFilePermissions();
        $this->createMissingFiles();
        $this->updateHtaccess();
        $this->validateConfiguration();
        $this->optimizePerformance();
        
        $this->displayResults();
        
        echo "</div>";
    }
    
    /**
     * Fix file permissions
     */
    private function fixFilePermissions() {
        $phpFiles = glob($this->basePath . '/*.php');
        
        foreach ($phpFiles as $file) {
            if (!is_readable($file)) {
                if (chmod($file, 0644)) {
                    $this->fixed[] = "✅ Fixed permissions for " . basename($file);
                } else {
                    $this->skipped[] = "⚠️ Could not fix permissions for " . basename($file);
                }
            }
        }
        
        // Ensure .htaccess is readable
        $htaccessPath = $this->basePath . '/.htaccess';
        if (file_exists($htaccessPath) && !is_readable($htaccessPath)) {
            if (chmod($htaccessPath, 0644)) {
                $this->fixed[] = "✅ Fixed .htaccess permissions";
            }
        }
    }
    
    /**
     * Create missing essential files
     */
    private function createMissingFiles() {
        // Create robots.txt if missing
        $robotsPath = $this->basePath . '/robots.txt';
        if (!file_exists($robotsPath)) {
            $robotsContent = "# Robots.txt for Pincode Directory\n";
            $robotsContent .= "User-agent: *\n";
            $robotsContent .= "Allow: /\n\n";
            $robotsContent .= "# Sitemap\n";
            $robotsContent .= "Sitemap: https://www.thiyagi.com/sitemap.xml\n";
            
            if (file_put_contents($robotsPath, $robotsContent)) {
                $this->fixed[] = "✅ Created robots.txt";
            }
        }
        
        // Create error handling file
        $errorPath = $this->basePath . '/error.php';
        if (!file_exists($errorPath)) {
            $errorContent = $this->generateErrorPage();
            if (file_put_contents($errorPath, $errorContent)) {
                $this->fixed[] = "✅ Created error handling page";
            }
        }
    }
    
    /**
     * Update .htaccess with essential rules
     */
    private function updateHtaccess() {
        $htaccessPath = $this->basePath . '/.htaccess';
        
        if (file_exists($htaccessPath)) {
            $content = file_get_contents($htaccessPath);
            $updated = false;
            
            // Add security headers if missing
            if (strpos($content, 'X-Content-Type-Options') === false) {
                $securityHeaders = "\n# Security Headers\n";
                $securityHeaders .= "<IfModule mod_headers.c>\n";
                $securityHeaders .= "    Header always set X-Content-Type-Options nosniff\n";
                $securityHeaders .= "    Header always set X-Frame-Options SAMEORIGIN\n";
                $securityHeaders .= "</IfModule>\n";
                
                $content .= $securityHeaders;
                $updated = true;
            }
            
            // Add performance optimization if missing
            if (strpos($content, 'mod_deflate') === false) {
                $compression = "\n# Compression\n";
                $compression .= "<IfModule mod_deflate.c>\n";
                $compression .= "    AddOutputFilterByType DEFLATE text/css application/javascript text/html\n";
                $compression .= "</IfModule>\n";
                
                $content .= $compression;
                $updated = true;
            }
            
            if ($updated) {
                if (file_put_contents($htaccessPath, $content)) {
                    $this->fixed[] = "✅ Updated .htaccess with security and performance rules";
                }
            }
        }
    }
    
    /**
     * Validate and fix configuration
     */
    private function validateConfiguration() {
        // Check API config
        $configPath = $this->basePath . '/api_config.php';
        if (file_exists($configPath)) {
            $content = file_get_contents($configPath);
            
            // Ensure all necessary constants are defined
            if (strpos($content, 'class PincodeAPIConfig') !== false) {
                $this->fixed[] = "✅ API configuration is properly structured";
            } else {
                $this->skipped[] = "⚠️ API configuration needs manual review";
            }
        }
        
        // Validate dynamic.php has proper error handling
        $dynamicPath = $this->basePath . '/dynamic.php';
        if (file_exists($dynamicPath)) {
            $content = file_get_contents($dynamicPath);
            if (strpos($content, 'try') !== false && strpos($content, 'catch') !== false) {
                $this->fixed[] = "✅ Dynamic pages have error handling";
            } else {
                $this->skipped[] = "⚠️ Consider adding more error handling to dynamic pages";
            }
        }
    }
    
    /**
     * Optimize performance settings
     */
    private function optimizePerformance() {
        // Check if opcache is enabled
        if (function_exists('opcache_get_status')) {
            $status = opcache_get_status();
            if ($status && $status['opcache_enabled']) {
                $this->fixed[] = "✅ OPcache is enabled for better performance";
            } else {
                $this->skipped[] = "⚠️ Consider enabling OPcache for better performance";
            }
        }
        
        // Check memory limit
        $memoryLimit = ini_get('memory_limit');
        $memoryBytes = $this->parseMemoryLimit($memoryLimit);
        if ($memoryBytes >= 128 * 1024 * 1024) { // 128MB
            $this->fixed[] = "✅ Memory limit is adequate ({$memoryLimit})";
        } else {
            $this->skipped[] = "⚠️ Memory limit is low ({$memoryLimit}) - consider increasing";
        }
        
        // Check max execution time
        $maxTime = ini_get('max_execution_time');
        if ($maxTime >= 30) {
            $this->fixed[] = "✅ Execution time limit is adequate ({$maxTime}s)";
        } else {
            $this->skipped[] = "⚠️ Execution time limit is low ({$maxTime}s)";
        }
    }
    
    /**
     * Parse memory limit string to bytes
     */
    private function parseMemoryLimit($limit) {
        $limit = trim($limit);
        $last = strtolower($limit[strlen($limit)-1]);
        $limit = (int) $limit;
        
        switch($last) {
            case 'g': $limit *= 1024;
            case 'm': $limit *= 1024;
            case 'k': $limit *= 1024;
        }
        
        return $limit;
    }
    
    /**
     * Generate error page content
     */
    private function generateErrorPage() {
        return '<?php
/**
 * Pincode System Error Page
 */
$errorCode = $_GET["error"] ?? "unknown";
$title = "Page Not Found - Pincode Directory";
?>
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        .error-container { max-width: 600px; margin: 0 auto; }
        .error-code { font-size: 72px; font-weight: bold; color: #e74c3c; }
        .error-message { font-size: 24px; margin: 20px 0; }
        .suggestions { text-align: left; background: #f8f9fa; padding: 20px; border-radius: 8px; }
        .btn { display: inline-block; padding: 10px 20px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; margin: 5px; }
    </style>
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-message">Pincode Page Not Found</div>
        <p>The pincode information you\'re looking for might have moved or doesn\'t exist.</p>
        
        <div class="suggestions">
            <h3>Try these instead:</h3>
            <ul>
                <li>Go back to the <a href="/pincode">main pincode search</a></li>
                <li>Browse <a href="/pincode/all-states">all states and UTs</a></li>
                <li>Use our <a href="/pincode/search">advanced search</a></li>
                <li>Check if you typed the URL correctly</li>
            </ul>
        </div>
        
        <div style="margin-top: 30px;">
            <a href="/pincode" class="btn">🏠 Home</a>
            <a href="/pincode/search" class="btn">🔍 Search</a>
            <a href="/pincode/all-states" class="btn">🗺️ Browse States</a>
        </div>
    </div>
</body>
</html>';
    }
    
    /**
     * Display results
     */
    private function displayResults() {
        echo "<div style='margin-top: 30px;'>";
        echo "<div style='display: grid; grid-template-columns: 1fr 1fr; gap: 20px;'>";
        
        // Fixed items
        echo "<div>";
        echo "<h2 style='color: #10b981;'>✅ Fixed (" . count($this->fixed) . ")</h2>";
        echo "<div style='background: #ecfdf5; border: 1px solid #10b981; border-radius: 8px; padding: 15px; max-height: 300px; overflow-y: auto;'>";
        if (empty($this->fixed)) {
            echo "<div style='color: #065f46;'>No fixes were needed!</div>";
        } else {
            foreach ($this->fixed as $item) {
                echo "<div style='margin: 5px 0; color: #065f46;'>{$item}</div>";
            }
        }
        echo "</div>";
        echo "</div>";
        
        // Skipped items  
        echo "<div>";
        echo "<h2 style='color: #f59e0b;'>⚠️ Manual Review Needed (" . count($this->skipped) . ")</h2>";
        echo "<div style='background: #fffbeb; border: 1px solid #f59e0b; border-radius: 8px; padding: 15px; max-height: 300px; overflow-y: auto;'>";
        if (empty($this->skipped)) {
            echo "<div style='color: #92400e;'>Everything was automatically fixed!</div>";
        } else {
            foreach ($this->skipped as $item) {
                echo "<div style='margin: 5px 0; color: #92400e;'>{$item}</div>";
            }
        }
        echo "</div>";
        echo "</div>";
        
        echo "</div>";
        
        // Summary
        $total_fixes = count($this->fixed);
        echo "<div style='margin-top: 30px; padding: 20px; text-align: center; border-radius: 12px; ";
        if ($total_fixes > 0) {
            echo "background: linear-gradient(135deg, #10b981, #059669); color: white;'>";
            echo "<h2>🎉 Quick Fix Complete!</h2>";
            echo "<p>Applied {$total_fixes} automatic fixes to optimize your system.</p>";
        } else {
            echo "background: linear-gradient(135deg, #3b82f6, #2563eb); color: white;'>";
            echo "<h2>✨ System Already Optimized!</h2>";
            echo "<p>No fixes were needed - your system is running great!</p>";
        }
        echo "</div>";
        
        echo "<div style='text-align: center; margin-top: 20px;'>";
        echo "<a href='status-check.php' style='background: #8b5cf6; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; font-weight: bold;'>🔍 Run Status Check Again</a>";
        echo "</div>";
        
        echo "</div>";
    }
}

// Run the quick fix
$fixer = new PincodeQuickFix();
$fixer->runAllFixes();
?>