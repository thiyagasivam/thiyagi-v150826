<?php
$_SERVER['DOCUMENT_ROOT'] = 'C:/xampp/htdocs/live/thiyagi-n';
ob_start();
include 'sitemap.php';
$sitemap = ob_get_clean();

// Search for Gujarat calculator
if (strpos($sitemap, 'gujarat-electricity-bill-calculator') !== false) {
    echo "✓ Gujarat Electricity Bill Calculator found in sitemap\n";
    
    // Extract the specific URL entry
    preg_match('/<url>.*gujarat-electricity.*?<\/url>/s', $sitemap, $matches);
    if (!empty($matches)) {
        echo "\nSitemap entry:\n";
        echo htmlspecialchars_decode($matches[0]);
    }
} else {
    echo "✗ Gujarat Electricity Bill Calculator NOT found in sitemap\n";
}

// Count total electricity board calculators
$count = substr_count($sitemap, '/electricity-board/');
echo "\n\nTotal electricity board pages in sitemap: $count\n";
