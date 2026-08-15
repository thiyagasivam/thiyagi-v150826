<?php
/**
 * Temporary Broken Link Checker & Fixer
 * This script scans all PHP files for broken internal links and can automatically fix them
 * 
 * IMPORTANT: Delete this file after use for security reasons
 */

// Configuration
$rootDir = __DIR__;
$reportFile = $rootDir . '/broken-links-report.html';
$autoFix = isset($_GET['autofix']) && $_GET['autofix'] === 'yes';

// Initialize counters
$totalFilesScanned = 0;
$totalLinksFound = 0;
$totalBrokenLinks = 0;
$brokenLinksByFile = [];
$fixedLinks = [];

/**
 * Recursively scan directory for PHP files
 */
function scanDirectory($dir, $rootDir) {
    $phpFiles = [];
    $items = scandir($dir);
    
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        
        if (is_dir($path)) {
            // Skip certain directories
            if (in_array($item, ['vendor', 'node_modules', '.git', 'cache', 'tmp'])) {
                continue;
            }
            $phpFiles = array_merge($phpFiles, scanDirectory($path, $rootDir));
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            $phpFiles[] = $path;
        }
    }
    
    return $phpFiles;
}

/**
 * Extract internal PHP links from HTML content
 */
function extractInternalLinks($content) {
    $links = [];
    
    // Pattern 1: href="*.php"
    preg_match_all('/href=["\']([^"\']*\.php)["\']/', $content, $matches1);
    if (!empty($matches1[1])) {
        $links = array_merge($links, $matches1[1]);
    }
    
    // Pattern 2: href='/path/file.php'
    preg_match_all('/href=["\']\/([^"\']*\.php)["\']/', $content, $matches2);
    if (!empty($matches2[1])) {
        $links = array_merge($links, $matches2[1]);
    }
    
    return array_unique($links);
}

/**
 * Check if a linked file exists
 */
function checkLinkExists($link, $currentFile, $rootDir) {
    // Remove leading slash and query strings
    $cleanLink = preg_replace('/\?.*$/', '', $link);
    $cleanLink = ltrim($cleanLink, '/');
    
    // Skip external links
    if (preg_match('/^(http|https|mailto|tel|#)/', $cleanLink)) {
        return true;
    }
    
    // Check absolute path from root
    $absolutePath = $rootDir . DIRECTORY_SEPARATOR . $cleanLink;
    if (file_exists($absolutePath)) {
        return true;
    }
    
    // Check relative to current file
    $currentDir = dirname($currentFile);
    $relativePath = $currentDir . DIRECTORY_SEPARATOR . $cleanLink;
    if (file_exists($relativePath)) {
        return true;
    }
    
    return false;
}

/**
 * Get the line number where a link appears
 */
function getLinkLineNumbers($content, $link) {
    $lines = explode("\n", $content);
    $lineNumbers = [];
    $escapedLink = preg_quote($link, '/');
    
    foreach ($lines as $num => $line) {
        if (preg_match('/' . $escapedLink . '/', $line)) {
            $lineNumbers[] = $num + 1;
        }
    }
    
    return $lineNumbers;
}

/**
 * Remove broken link from file content
 */
function removeBrokenLink($content, $link) {
    $lines = explode("\n", $content);
    $newLines = [];
    $escapedLink = preg_quote($link, '/');
    $removed = false;
    
    foreach ($lines as $line) {
        // Skip lines containing the broken link
        if (preg_match('/<li[^>]*>.*href=["\'][^"\']*' . $escapedLink . '[^"\']*["\'].*<\/li>/', $line)) {
            $removed = true;
            continue;
        }
        
        // Also handle standalone <a> tags
        if (preg_match('/href=["\'][^"\']*' . $escapedLink . '[^"\']*["\']/', $line) && 
            !preg_match('/<li/', $line)) {
            // Remove just the <a> tag, keep surrounding content
            $line = preg_replace('/<a[^>]*href=["\'][^"\']*' . $escapedLink . '[^"\']*["\'][^>]*>.*?<\/a>/', '', $line);
            $removed = true;
        }
        
        $newLines[] = $line;
    }
    
    return ['content' => implode("\n", $newLines), 'removed' => $removed];
}

// Start scanning
echo "<!DOCTYPE html>\n";
echo "<html lang='en'>\n<head>\n";
echo "<meta charset='UTF-8'>\n";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
echo "<title>Broken Link Checker - Results</title>\n";
echo "<style>\n";
echo "body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }\n";
echo ".container { max-width: 1200px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }\n";
echo "h1 { color: #333; border-bottom: 3px solid #e74c3c; padding-bottom: 10px; }\n";
echo "h2 { color: #555; margin-top: 30px; }\n";
echo ".stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin: 20px 0; }\n";
echo ".stat-box { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 8px; text-align: center; }\n";
echo ".stat-box.error { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }\n";
echo ".stat-box.success { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }\n";
echo ".stat-number { font-size: 36px; font-weight: bold; margin: 10px 0; }\n";
echo ".stat-label { font-size: 14px; opacity: 0.9; }\n";
echo ".file-section { background: #f8f9fa; padding: 15px; margin: 15px 0; border-radius: 5px; border-left: 4px solid #e74c3c; }\n";
echo ".file-path { font-weight: bold; color: #e74c3c; font-size: 14px; margin-bottom: 10px; }\n";
echo ".broken-link { background: white; padding: 10px; margin: 5px 0; border-radius: 3px; font-family: monospace; font-size: 12px; }\n";
echo ".line-numbers { color: #888; font-size: 11px; }\n";
echo ".btn { display: inline-block; padding: 12px 24px; background: #e74c3c; color: white; text-decoration: none; border-radius: 5px; margin: 10px 5px; font-weight: 600; transition: all 0.3s; }\n";
echo ".btn:hover { background: #c0392b; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.2); }\n";
echo ".btn-success { background: #27ae60; }\n";
echo ".btn-success:hover { background: #229954; }\n";
echo ".btn-warning { background: #f39c12; }\n";
echo ".btn-warning:hover { background: #e67e22; }\n";
echo ".alert { padding: 15px; margin: 20px 0; border-radius: 5px; }\n";
echo ".alert-success { background: #d4edda; color: #155724; border-left: 4px solid #28a745; }\n";
echo ".alert-info { background: #d1ecf1; color: #0c5460; border-left: 4px solid #17a2b8; }\n";
echo ".alert-warning { background: #fff3cd; color: #856404; border-left: 4px solid #ffc107; }\n";
echo ".fixed-link { background: #d4edda; color: #155724; }\n";
echo ".progress { background: #e0e0e0; height: 8px; border-radius: 4px; overflow: hidden; margin: 20px 0; }\n";
echo ".progress-bar { background: linear-gradient(90deg, #667eea 0%, #764ba2 100%); height: 100%; transition: width 0.3s; }\n";
echo "</style>\n</head>\n<body>\n";
echo "<div class='container'>\n";

echo "<h1>🔍 Broken Link Checker & Fixer</h1>\n";

if ($autoFix) {
    echo "<div class='alert alert-warning'><strong>⚠️ AUTO-FIX MODE ENABLED</strong> - Broken links will be automatically removed from files.</div>\n";
}

echo "<div class='alert alert-info'><strong>ℹ️ Scanning in progress...</strong> Please wait while we check all your PHP files.</div>\n";

flush();
ob_flush();

// Scan all PHP files
$phpFiles = scanDirectory($rootDir, $rootDir);
$totalFilesScanned = count($phpFiles);

echo "<div class='progress'><div class='progress-bar' style='width: 10%'></div></div>\n";
flush();
ob_flush();

// Process each file
foreach ($phpFiles as $index => $file) {
    $content = file_get_contents($file);
    $links = extractInternalLinks($content);
    $totalLinksFound += count($links);
    
    $brokenLinksInFile = [];
    
    foreach ($links as $link) {
        if (!checkLinkExists($link, $file, $rootDir)) {
            $lineNumbers = getLinkLineNumbers($content, $link);
            $brokenLinksInFile[] = [
                'link' => $link,
                'lines' => $lineNumbers
            ];
            $totalBrokenLinks++;
        }
    }
    
    if (!empty($brokenLinksInFile)) {
        $relativePath = str_replace($rootDir . DIRECTORY_SEPARATOR, '', $file);
        $brokenLinksByFile[$relativePath] = $brokenLinksInFile;
        
        // Auto-fix if enabled
        if ($autoFix) {
            $originalContent = $content;
            $fixCount = 0;
            
            foreach ($brokenLinksInFile as $brokenLink) {
                $result = removeBrokenLink($content, $brokenLink['link']);
                if ($result['removed']) {
                    $content = $result['content'];
                    $fixCount++;
                }
            }
            
            if ($fixCount > 0) {
                file_put_contents($file, $content);
                $fixedLinks[$relativePath] = $fixCount;
            }
        }
    }
    
    // Update progress
    if ($index % 10 === 0) {
        $progress = min(90, 10 + (($index / $totalFilesScanned) * 80));
        echo "<script>document.querySelector('.progress-bar').style.width = '{$progress}%';</script>\n";
        flush();
        ob_flush();
    }
}

echo "<script>document.querySelector('.progress-bar').style.width = '100%';</script>\n";
flush();
ob_flush();

// Display results
echo "<h2>📊 Scan Results</h2>\n";

echo "<div class='stats'>\n";
echo "<div class='stat-box success'>\n";
echo "<div class='stat-number'>{$totalFilesScanned}</div>\n";
echo "<div class='stat-label'>Files Scanned</div>\n";
echo "</div>\n";

echo "<div class='stat-box'>\n";
echo "<div class='stat-number'>{$totalLinksFound}</div>\n";
echo "<div class='stat-label'>Total Links Found</div>\n";
echo "</div>\n";

echo "<div class='stat-box error'>\n";
echo "<div class='stat-number'>{$totalBrokenLinks}</div>\n";
echo "<div class='stat-label'>Broken Links</div>\n";
echo "</div>\n";

if ($autoFix) {
    $totalFixed = array_sum($fixedLinks);
    echo "<div class='stat-box success'>\n";
    echo "<div class='stat-number'>{$totalFixed}</div>\n";
    echo "<div class='stat-label'>Links Fixed</div>\n";
    echo "</div>\n";
}
echo "</div>\n";

// Show results
if (empty($brokenLinksByFile)) {
    echo "<div class='alert alert-success'><strong>✅ Great!</strong> No broken internal links found in your PHP files.</div>\n";
} else {
    echo "<h2>🔴 Files with Broken Links (" . count($brokenLinksByFile) . " files)</h2>\n";
    
    if ($autoFix) {
        echo "<div class='alert alert-success'><strong>✅ Fixed!</strong> Broken links have been automatically removed from the affected files.</div>\n";
    }
    
    foreach ($brokenLinksByFile as $file => $brokenLinks) {
        $isFixed = isset($fixedLinks[$file]);
        echo "<div class='file-section' style='" . ($isFixed ? "border-left-color: #27ae60; background: #eafaf1;" : "") . "'>\n";
        echo "<div class='file-path'>" . ($isFixed ? "✅ " : "❌ ") . htmlspecialchars($file) . "</div>\n";
        
        if ($isFixed) {
            echo "<div class='alert alert-success' style='margin: 10px 0; padding: 8px;'><strong>Fixed:</strong> {$fixedLinks[$file]} broken link(s) removed</div>\n";
        }
        
        foreach ($brokenLinks as $brokenLink) {
            $linkClass = $isFixed ? 'broken-link fixed-link' : 'broken-link';
            echo "<div class='{$linkClass}'>\n";
            echo "<strong>" . ($isFixed ? "✅ Removed: " : "❌ Missing: ") . "</strong>" . htmlspecialchars($brokenLink['link']) . "\n";
            echo "<div class='line-numbers'>Found on line(s): " . implode(', ', $brokenLink['lines']) . "</div>\n";
            echo "</div>\n";
        }
        echo "</div>\n";
    }
}

// Action buttons
echo "<h2>🎯 Actions</h2>\n";

if (!$autoFix && !empty($brokenLinksByFile)) {
    echo "<a href='?autofix=yes' class='btn btn-warning' onclick='return confirm(\"This will automatically remove all broken links from your files. This action cannot be undone unless you have a backup. Continue?\");'>🔧 Auto-Fix All Broken Links</a>\n";
}

echo "<a href='?' class='btn btn-success'>🔄 Scan Again</a>\n";
echo "<a href='../' class='btn'>🏠 Back to Home</a>\n";

// Security warning
echo "<div class='alert alert-warning' style='margin-top: 30px;'>\n";
echo "<strong>⚠️ SECURITY WARNING:</strong> This is a temporary diagnostic script. Please delete <code>broken-link-checker-temp.php</code> after use to prevent unauthorized access.\n";
echo "</div>\n";

echo "</div>\n</body>\n</html>";

// Save report to file
$reportContent = "<!DOCTYPE html>\n<html>\n<head><meta charset='UTF-8'><title>Broken Links Report</title></head>\n<body>\n";
$reportContent .= "<h1>Broken Links Report - Generated on " . date('Y-m-d H:i:s') . "</h1>\n";
$reportContent .= "<p>Total Files Scanned: {$totalFilesScanned}</p>\n";
$reportContent .= "<p>Total Links Found: {$totalLinksFound}</p>\n";
$reportContent .= "<p>Total Broken Links: {$totalBrokenLinks}</p>\n";

if (!empty($brokenLinksByFile)) {
    $reportContent .= "<h2>Broken Links by File</h2>\n";
    foreach ($brokenLinksByFile as $file => $links) {
        $reportContent .= "<h3>" . htmlspecialchars($file) . "</h3>\n<ul>\n";
        foreach ($links as $link) {
            $reportContent .= "<li>" . htmlspecialchars($link['link']) . " (Lines: " . implode(', ', $link['lines']) . ")</li>\n";
        }
        $reportContent .= "</ul>\n";
    }
}

$reportContent .= "</body>\n</html>";
file_put_contents($reportFile, $reportContent);
?>
