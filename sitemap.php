<?php
// sitemap.php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php
$baseUrl = 'https://www.thiyagi.com';

// Pages to MANUALLY include (with custom settings)
$pages = [
    '/' => [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'daily',
        'priority' => '1.0'
    ],
    '/about' => [  // Removed .php
        'lastmod' => date('Y-m-d', strtotime('-1 week')),
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
    '/contact' => [  // Removed .php
        'lastmod' => date('Y-m-d', strtotime('-1 month')),
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ]
];

// Add all electricity board calculator pages
$electricityBoardCalculators = [
    'andaman-electricity-bill-calculator',
    'apdcl-electricity-bill-calculator',
    'apspdcl-electricity-bill-calculator',
    'bihar-electricity-bill-calculator',
    'cspdcl-electricity-bill-calculator',
    'delhi-electricity-bill-calculator',
    'goa-electricity-bill-calculator',
    'gujarat-electricity-bill-calculator',
    'haryana-electricity-bill-calculator',
    'hpsebl-electricity-bill-calculator',
    'jbvnl-electricity-bill-calculator',
    'jpdcl-electricity-bill-calculator-kashmir',
    'karnataka-electricity-bill-calculator',
    'kerala-kseb-calculator',
    'kseb-bill-calculator',
    'ladakh-electricity-bill-calculator',
    'maharashtra-msedcl-calculator',
    'manipur-electricity-bill-calculator',
    'meghalaya-electricity-bill-calculator',
    'mizoram-electricity-bill-calculator',
    'mp-electricity-bill-calculator',
    'nagaland-electricity-bill-calculator',
    'odisha-electricity-bill-calculator',
    'pspcl-bill-calculator',
    'rajasthan-electricity-bill-calculator',
    'sikkim-electricity-bill-calculator',
    'tneb-electricity-bill-calculator',
    'tsecl-electricity-bill-calculator',
    'tsspdcl-electricity-bill-calculator',
    'upcl-electricity-bill-calculator-uttarakhand',
    'uppcl-bill-calculator',
    'wbsedcl-bill-calculator'
];

foreach ($electricityBoardCalculators as $calculator) {
    $calcFile = ($documentRoot ?? (__DIR__)) . "/electricity-board/{$calculator}.php";
    $lastMod = is_file($calcFile) ? date('Y-m-d', filemtime($calcFile)) : date('Y-m-d');
    $pages["/electricity-board/{$calculator}"] = [
        'lastmod' => $lastMod,
        'changefreq' => 'weekly',
        'priority' => '0.9'
    ];
}

// Add electricity board index page
$indexFile = ($documentRoot ?? (__DIR__)) . '/electricity-board/index.php';
$pages['/electricity-board/index'] = [
    'lastmod' => is_file($indexFile) ? date('Y-m-d', filemtime($indexFile)) : date('Y-m-d'),
    'changefreq' => 'weekly',
    'priority' => '0.9'
];

// Pages to EXCLUDE (will not appear in sitemap)
$excludedPages = [
    '/index',
    '/index.php',
    '/404.php',
    '/header.php',
    '/footer.php',
    '/admin.php',
    '/config.php',
    '/sitemaptest.php',
    '/sitemap.php',
    '/fix-missing-holiday-content',
'/final-link-cleanup',
'/generate-repair-report',
'/page_sharing',
'/generate-uk-holidays',
'/fix-remaining-white-text',
'/fix-broken-links',
'/service-center/asus/index',
'/service-center/asus/service-center',
'/service-center/xiaomi/index',
'/service-center/xiaomi/service-center',
'/service-center/canon/index',
'/service-center/canon/service-center',
'/service-center/motorola/index',
'/service-center/motorola/service-center',
'/service-center/poco/index',
'/service-center/poco/index.php',
'/service-center/poco/service-center',
'/service-center/tata-motors/index',
'/service-center/tata-motors/service-center',
'/service-center/daikin/index',
'/service-center/daikin/service-center',
'/service-center/boat/index',
'/service-center/boat/service-center',
'/service-center/crompton/index',
'/service-center/crompton/service-center',
'/service-center/hero/index',
'/service-center/hero/service-center',
'/service-center/godrej/index',
'/service-center/godrej/service-center',
'/service-center/alcatel/index',
'/service-center/alcatel/service-center',
'/service-center/benq/index',
'/service-center/benq/service-center',
'/service-center/tvs/index',
'/service-center/tvs/service-center',
'/service-center/dell/index',
'/service-center/dell/service-center',
'/service-center/casio/index',
'/service-center/casio/service-center',
'/service-center/apple/index',
'/service-center/apple/info',
'/service-center/apple/service-center',
'/service-center/honor/index',
'/service-center/honor/service-center',
'/service-center/infinix/index',
'/service-center/infinix/service-center',
'/llms-generator',
'/generate-england-cities',
'/fix-white-text-colors',
'/verify-links',
'/check-missing-content',
'/fix-city-titles',
'/fix-flag-images',
'/add-state-flags',
'/complete-link-fix',
'/holiday/usa-holiday/generate-states',
'/electricity-board/breadcrumb-schema',
'/holiday/usa-holiday/fix-state-pages',
'/holiday/usa-holiday/generate-comprehensive-states',
'/fix-broken-images',
'/googleb62a814b9aa3f5fa.html',
'/indexing-fixed.html',
'/broken-link-checker-temp',
'/broken-links-fixed-report',
'/broken-links-fixed-report.php',
'/broken_links_analysis.json',
'/broken_links_fix_report.json'
];

// Folders to EXCLUDE (will not scan these folders)
$excludedFolders = [
    '/admin',
    '/includes',
    '/assets',
    '/css',
    '/js',
    '/images',
    '/blog',
    '/generated-pages'
];

// Function to remove .php extension
function removePhpExtension($path) {
    return preg_replace('/\.php$/', '', $path);
}

function normalizeSitemapPath($path) {
    $path = str_replace('\\', '/', $path);
    if ($path === '' || $path === '/') {
        return '/';
    }

    // Normalize directory index URLs to directory root.
    $path = preg_replace('#/index(?:\.php|\.html)?$#i', '', $path);
    if ($path === '') {
        $path = '/';
    }

    if ($path !== '/') {
        $path = rtrim($path, '/');
    }

    return $path;
}

function shouldIncludeSitemapFile($relativePath, $cleanPath, $fullPath) {
    $relativePathLower = strtolower($relativePath);
    $cleanPathLower = strtolower($cleanPath);
    $baseNameLower = strtolower(basename($relativePath));

    // Exclude root home partial, duplicate root index target and obvious non-content files.
    if (in_array($relativePathLower, ['/home.php', '/index.php'], true)) {
        return false;
    }

    // Exclude common utility/dev/report/test pages from sitemap.
    $excludedNamePatterns = [
        '/^test[-_].+\.php$/',
        '/^simple-test\.php$/',
        '/^newtest\.php$/',
        '/^fix[-_].+\.php$/',
        '/^generate[-_].+\.php$/',
        '/^seed[-_].+\.php$/',
        '/^scan[-_].+\.php$/',
        '/^verify[-_].+\.php$/',
        '/^complete[-_].+\.php$/',
        '/^broken[-_].+\.php$/',
        '/^indexing-fixed\.html$/',
        '/^sitemap-generation-result\.html$/',
        '/^google[a-z0-9]+\.html$/'
    ];

    foreach ($excludedNamePatterns as $pattern) {
        if (preg_match($pattern, $baseNameLower)) {
            return false;
        }
    }

    // Exclude known utility routes that should not be indexed.
    $excludedPathStarts = [
        '/uploads/',
        '/node_modules/',
        '/converted/',
        '/config/'
    ];
    foreach ($excludedPathStarts as $prefix) {
        if (strpos($relativePathLower, $prefix) === 0) {
            return false;
        }
    }

    // Keep only real web pages that use the shared layout include pattern.
    $content = @file_get_contents($fullPath);
    if ($content === false) {
        return false;
    }

    if (!preg_match('/include\s*[\(\s]*["\']header\.php["\']/i', $content)) {
        return false;
    }

    // Drop obvious noindex helper pages if any are added in future.
    if (preg_match('/<meta\s+name=["\']robots["\'][^>]*content=["\'][^"\']*noindex/i', $content)) {
        return false;
    }

    return true;
}

// Function to scan directories recursively
function scanDirectory($dir, $baseDir, &$foundPages, $excludedPages, $excludedFolders) {
    try {
        if (!is_dir($dir) || !is_readable($dir)) {
            return;
        }
        
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST
        );
        
        foreach ($iterator as $file) {
            try {
                $pathname = $file->getPathname();
                $relativePath = str_replace($baseDir, '', $pathname);
                $relativePath = str_replace('\\', '/', $relativePath); // Windows compatibility
                
                // Skip excluded folders
                $isExcludedFolder = false;
                foreach ($excludedFolders as $folder) {
                    if (strpos($relativePath, $folder) === 0) {
                        $isExcludedFolder = true;
                        break;
                    }
                }
                if ($isExcludedFolder) continue;
                
                if ($file->isFile() && in_array(strtolower($file->getExtension()), ['php', 'html'])) {
                    $cleanPath = removePhpExtension($relativePath);
                    $normalizedPath = normalizeSitemapPath($cleanPath);

                    // Skip if excluded or already manually defined
                    if (!in_array($relativePath, $excludedPages) &&
                        !in_array($cleanPath, $excludedPages) &&
                        !isset($foundPages[$normalizedPath]) &&
                        shouldIncludeSitemapFile($relativePath, $cleanPath, $pathname)) {
                        $mtime = @filemtime($pathname);
                        $foundPages[$normalizedPath] = [
                            'lastmod' => $mtime ? date('Y-m-d', $mtime) : date('Y-m-d'),
                            'changefreq' => 'monthly',
                            'priority' => '0.8'
                        ];
                    }
                }
            } catch (Exception $e) {
                // Skip files that cause errors
                continue;
            }
        }
    } catch (Exception $e) {
        // If directory scanning fails, continue with manually defined pages
        return;
    }
}

// Scan the document root and all subdirectories
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? __DIR__;
if (is_dir($documentRoot) && is_readable($documentRoot)) {
    scanDirectory($documentRoot, $documentRoot, $pages, $excludedPages, $excludedFolders);
}

// Generate the sitemap
$seenPaths = [];
foreach ($pages as $path => $data) {
    $path = normalizeSitemapPath($path);

    // Keep root only once after normalization.
    if (isset($seenPaths[$path])) {
        continue;
    }
    $seenPaths[$path] = true;

    // Validate the URL
    $fullUrl = $baseUrl . $path;
    if (strlen($fullUrl) > 2048) continue; // Skip URLs that are too long
    
    echo "\n  <url>";
    echo "\n    <loc>" . htmlspecialchars($fullUrl, ENT_XML1, 'UTF-8') . '</loc>';
    echo "\n    <lastmod>" . htmlspecialchars($data['lastmod'], ENT_XML1, 'UTF-8') . '</lastmod>';
    echo "\n    <changefreq>" . htmlspecialchars($data['changefreq'], ENT_XML1, 'UTF-8') . '</changefreq>';
    echo "\n    <priority>" . htmlspecialchars($data['priority'], ENT_XML1, 'UTF-8') . '</priority>';
    echo "\n  </url>";
}
echo "\n";
?>
</urlset>
