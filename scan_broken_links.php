<?php
$workspaceDir = __DIR__;
$allPhpFiles = glob('*.php');
$brokenLinks = [];
$filesBrokenLinksMap = [];

echo "Scanning " . count($allPhpFiles) . " PHP files...\n\n";

foreach ($allPhpFiles as $phpFile) {
    $content = file_get_contents($phpFile);
    
    // Find all href links to .php files (with or without leading /)
    preg_match_all('/href=["\']([^"\']*\.php)["\']/', $content, $matches);
    
    if (!empty($matches[1])) {
        foreach ($matches[1] as $link) {
            // Skip external URLs
            if (preg_match('/^https?:\/\//', $link)) {
                continue;
            }
            
            // Remove leading slash and any query strings
            $cleanLink = ltrim($link, '/');
            $cleanLink = explode('?', $cleanLink)[0];
            
            // Check if file exists in workspace
            $fullPath = $workspaceDir . '/' . $cleanLink;
            if (!file_exists($fullPath)) {
                if (!isset($filesBrokenLinksMap[$phpFile])) {
                    $filesBrokenLinksMap[$phpFile] = [];
                }
                $filesBrokenLinksMap[$phpFile][] = $link;
                $brokenLinks[] = $link;
            }
        }
    }
}

$brokenLinks = array_unique($brokenLinks);
sort($brokenLinks);

echo "=== BROKEN LINKS REPORT ===\n\n";
echo "Total files scanned: " . count($allPhpFiles) . "\n";
echo "Files with broken links: " . count($filesBrokenLinksMap) . "\n";
echo "Total unique broken links: " . count($brokenLinks) . "\n\n";

echo "=== FILES WITH BROKEN LINKS ===\n";
foreach ($filesBrokenLinksMap as $file => $links) {
    echo $file . " (" . count($links) . " broken links)\n";
}

echo "\n=== UNIQUE BROKEN LINKS ===\n";
foreach ($brokenLinks as $link) {
    echo $link . "\n";
}

// Save detailed report
$reportContent = json_encode([
    'total_files_scanned' => count($allPhpFiles),
    'files_with_broken_links' => count($filesBrokenLinksMap),
    'total_broken_links' => count($brokenLinks),
    'broken_links_by_file' => $filesBrokenLinksMap,
    'unique_broken_links' => array_values($brokenLinks)
], JSON_PRETTY_PRINT);

file_put_contents('broken_links_analysis.json', $reportContent);
echo "\n\nDetailed report saved to broken_links_analysis.json\n";
