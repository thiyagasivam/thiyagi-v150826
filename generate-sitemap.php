<?php
/**
 * Comprehensive Sitemap Generator
 * Scans all PHP files and creates sitemap.xml
 */

$baseUrl = 'https://www.thiyagi.com/';
$rootDir = __DIR__;
$outputFile = $rootDir . '/sitemap.xml';

// Files to exclude
$excludeFiles = [
    'header.php', 'footer.php', 'config.php', 'contact-action.php',
    '404.php', 'broken-link-checker-temp.php', 'generate-sitemap.php',
    'fix_broken_links.php', 'broken-links-report.php', 'broken-links-fixed-report.php'
];

// Directories to exclude
$excludeDirs = ['vendor', 'node_modules', 'tmp', 'cache', 'backup', 'test', 'tests'];

// Priority mapping
$priorityMap = [
    'index.php' => '1.0',
    'about.php' => '0.8',
    'contact.php' => '0.7',
];

// Get all PHP files
function scanPhpFiles($dir, $excludeDirs, $rootDir) {
    $files = [];
    $items = scandir($dir);
    
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        
        if (is_dir($path)) {
            $dirName = basename($path);
            if (!in_array($dirName, $excludeDirs)) {
                $files = array_merge($files, scanPhpFiles($path, $excludeDirs, $rootDir));
            }
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            $files[] = $path;
        }
    }
    
    return $files;
}

// Generate sitemap
$phpFiles = scanPhpFiles($rootDir, $excludeDirs, $rootDir);
$currentDate = date('Y-m-d');

// Start XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

$urlCount = 0;

foreach ($phpFiles as $file) {
    $relativePath = str_replace($rootDir . DIRECTORY_SEPARATOR, '', $file);
    $relativePath = str_replace('\\', '/', $relativePath);
    $filename = basename($file);
    
    // Skip excluded files
    if (in_array($filename, $excludeFiles)) {
        continue;
    }
    
    // Skip backup and temp files
    if (strpos($filename, 'backup') !== false || strpos($filename, '.bak') !== false) {
        continue;
    }
    
    // Create URL
    $url = $baseUrl . $relativePath;
    
    // Determine priority
    $priority = '0.7';
    if (isset($priorityMap[$filename])) {
        $priority = $priorityMap[$filename];
    } elseif (strpos($filename, 'calculator') !== false || strpos($filename, 'converter') !== false) {
        $priority = '0.8';
    }
    
    // Add to sitemap
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($url) . "</loc>\n";
    $xml .= "    <lastmod>{$currentDate}</lastmod>\n";
    $xml .= "    <changefreq>weekly</changefreq>\n";
    $xml .= "    <priority>{$priority}</priority>\n";
    $xml .= "  </url>\n";
    
    $urlCount++;
}

$xml .= '</urlset>';

// Write to file
file_put_contents($outputFile, $xml);

echo "<!DOCTYPE html>\n<html>\n<head>\n";
echo "<meta charset='UTF-8'>\n";
echo "<title>Sitemap Generated</title>\n";
echo "<style>\n";
echo "body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }\n";
echo ".success { background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 20px; border-radius: 5px; margin: 20px 0; }\n";
echo ".stats { background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0; }\n";
echo ".btn { display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; margin: 10px 5px; }\n";
echo ".btn:hover { background: #0056b3; }\n";
echo "pre { background: #f4f4f4; padding: 15px; border-radius: 5px; overflow-x: auto; }\n";
echo "</style>\n</head>\n<body>\n";

echo "<h1>✅ Sitemap Generated Successfully!</h1>\n";

echo "<div class='success'>\n";
echo "<strong>Sitemap created:</strong> sitemap.xml<br>\n";
echo "<strong>Total URLs:</strong> {$urlCount}<br>\n";
echo "<strong>Location:</strong> {$outputFile}\n";
echo "</div>\n";

echo "<div class='stats'>\n";
echo "<h3>Next Steps:</h3>\n";
echo "<ol>\n";
echo "<li><strong>Verify sitemap:</strong> <a href='/sitemap.xml' target='_blank'>View sitemap.xml</a></li>\n";
echo "<li><strong>Validate:</strong> Use <a href='https://www.xml-sitemaps.com/validate-xml-sitemap.html' target='_blank'>XML Sitemap Validator</a></li>\n";
echo "<li><strong>Submit to Google:</strong> Go to <a href='https://search.google.com/search-console' target='_blank'>Google Search Console</a></li>\n";
echo "<li><strong>Submit to Bing:</strong> Go to <a href='https://www.bing.com/webmasters' target='_blank'>Bing Webmaster Tools</a></li>\n";
echo "</ol>\n";
echo "</div>\n";

echo "<h3>Sample URLs included:</h3>\n";
echo "<pre>";
// Show first 10 URLs as sample
$lines = explode("\n", $xml);
$urlLines = array_filter($lines, function($line) {
    return strpos($line, '<loc>') !== false;
});
$sampleUrls = array_slice($urlLines, 0, 10);
foreach ($sampleUrls as $urlLine) {
    echo htmlspecialchars($urlLine) . "\n";
}
echo "... and " . ($urlCount - 10) . " more URLs";
echo "</pre>\n";

echo "<a href='/' class='btn'>Back to Home</a>\n";
echo "<a href='/sitemap.xml' class='btn' target='_blank'>View Sitemap</a>\n";

echo "</body>\n</html>";
?>
