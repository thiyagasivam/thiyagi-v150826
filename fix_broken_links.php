<?php
$reportFile = 'broken_links_analysis.json';
$report = json_decode(file_get_contents($reportFile), true);

$filesModified = 0;
$linksRemoved = 0;
$modifications = [];

echo "=== FIXING BROKEN LINKS ===\n\n";
echo "Files to fix: " . count($report['broken_links_by_file']) . "\n\n";

foreach ($report['broken_links_by_file'] as $file => $brokenLinks) {
    echo "Processing: $file\n";
    
    $content = file_get_contents($file);
    $originalContent = $content;
    $fileLinksRemoved = 0;
    
    // Get unique broken links for this file
    $uniqueBrokenLinks = array_unique($brokenLinks);
    
    foreach ($uniqueBrokenLinks as $brokenLink) {
        // Escape special regex characters
        $escapedLink = preg_quote($brokenLink, '/');
        
        // Pattern 1: Remove entire $pattern1 = '/<li[^>]*>\s*<a[^>]*href=["\'][^"\']*' . $escapedLink . '[^"\']*["\'][^>]*>.*?<\/a>\s*<\/li>\s*/is';
        $newContent = preg_replace($pattern1, '', $content);
        
        if ($newContent !== $content) {
            $count = 0;
            $content = preg_replace($pattern1, '', $content, -1, $count);
            $fileLinksRemoved += $count;
            echo "  - Removed $count <li> entries for: $brokenLink\n";
            continue;
        }
        
        // Pattern 2: Remove standalone <a href="broken.php">...</a>
        $pattern2 = '/<a[^>]*href=["\'][^"\']*' . $escapedLink . '[^"\']*["\'][^>]*>.*?<\/a>/is';
        $count = 0;
        $content = preg_replace($pattern2, '', $content, -1, $count);
        
        if ($count > 0) {
            $fileLinksRemoved += $count;
            echo "  - Removed $count <a> tags for: $brokenLink\n";
        }
    }
    
    if ($content !== $originalContent) {
        // Create backup
        $backupFile = $file . '.backup_' . date('Ymd_His');
        file_put_contents($backupFile, $originalContent);
        
        // Save modified content
        file_put_contents($file, $content);
        
        $filesModified++;
        $linksRemoved += $fileLinksRemoved;
        $modifications[] = [
            'file' => $file,
            'links_removed' => $fileLinksRemoved,
            'backup' => $backupFile
        ];
        
        echo "  ✓ Fixed! Removed $fileLinksRemoved broken link references\n";
        echo "  Backup saved: $backupFile\n";
    } else {
        echo "  - No changes needed (links may be in code/comments)\n";
    }
    
    echo "\n";
}

echo "\n=== FIX SUMMARY ===\n";
echo "Files modified: $filesModified\n";
echo "Total broken link references removed: $linksRemoved\n\n";

// Save fix report
$fixReport = [
    'timestamp' => date('Y-m-d H:i:s'),
    'files_modified' => $filesModified,
    'total_links_removed' => $linksRemoved,
    'modifications' => $modifications
];

file_put_contents('broken_links_fix_report.json', json_encode($fixReport, JSON_PRETTY_PRINT));
echo "Detailed fix report saved to broken_links_fix_report.json\n";
