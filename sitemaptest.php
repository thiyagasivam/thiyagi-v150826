<?php
// Database configuration
define('DB_HOST', '127.0.0.1:3306');
define('DB_NAME', 'u662933183_servicecenter');
define('DB_USER', 'u662933183_servicecenter');
define('DB_PASS', 'e^?al5veVS6');
define('BASE_URL', 'https://www.thiyagi.com/service-center/poco/');

// Set proper XML header
header('Content-Type: application/xml; charset=utf-8');

try {
    // Create database connection
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    // Fetch all active service centers
    $stmt = $pdo->query("SELECT slug FROM pocoservicecenter");
    $centers = $stmt->fetchAll();

    // Start XML output
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

    // Current date for lastmod (you can modify this if you have update dates in your DB)
    $lastmod = date('Y-m-d');

    // Generate URL entries
    foreach ($centers as $center) {
        $url = htmlspecialchars(BASE_URL . $center['slug']);
        echo <<<XML
    <url>
        <loc>$url</loc>
        <lastmod>$lastmod</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
XML;
        echo "\n";
    }

    echo '</urlset>';

} catch (PDOException $e) {
    // Fallback minimal sitemap if there's an error
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    echo '</urlset>';
    // You might want to log the error in production
    // error_log("Sitemap generation error: " . $e->getMessage());
}
?>
