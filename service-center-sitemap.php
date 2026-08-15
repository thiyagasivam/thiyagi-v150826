<?php
// service-center-sitemap.php - Dynamic sitemap for service center pages
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php
$baseUrl = 'https://www.thiyagi.com';
$today = date('Y-m-d');

// Read the static XML file to extract URLs
$xmlFile = __DIR__ . '/service-center-sitemap.xml';
if (file_exists($xmlFile) && is_readable($xmlFile)) {
    try {
        libxml_use_internal_errors(true);
        $xml = simplexml_load_file($xmlFile);
        
        if ($xml === false) {
            echo "\n<!-- Error loading XML file -->\n";
        } else {
            foreach ($xml->url as $url) {
                $loc = (string)$url->loc;
                $lastmod = trim((string)$url->lastmod);
                $changefreq = trim((string)$url->changefreq);
                $priority = trim((string)$url->priority);

                if (strlen($loc) > 2048) continue;

                $effectiveLastmod = $lastmod !== '' ? $lastmod : $today;
                echo "\n  <url>";
                echo "\n    <loc>" . htmlspecialchars($loc, ENT_XML1, 'UTF-8') . '</loc>';
                echo "\n    <lastmod>" . htmlspecialchars($effectiveLastmod, ENT_XML1, 'UTF-8') . '</lastmod>';
                if ($changefreq !== '') {
                    echo "\n    <changefreq>" . htmlspecialchars($changefreq, ENT_XML1, 'UTF-8') . '</changefreq>';
                }
                if ($priority !== '') {
                    echo "\n    <priority>" . htmlspecialchars($priority, ENT_XML1, 'UTF-8') . '</priority>';
                }
                echo "\n  </url>";
            }
            echo "\n";
        }
        libxml_clear_errors();
    } catch (Exception $e) {
        echo "\n<!-- Error processing sitemap: " . htmlspecialchars($e->getMessage(), ENT_XML1, 'UTF-8') . " -->\n";
    }
} else {
    echo "\n<!-- Service center sitemap XML file not found or not readable -->\n";
}
?>
</urlset>
