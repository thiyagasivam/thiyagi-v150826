<?php include '../../header.php'; ?>
<?php
// Database configuration
define('DB_HOST', '127.0.0.1:3306');
define('DB_NAME', 'u662933183_servicecenter');
define('DB_USER', 'u662933183_servicecenter');
define('DB_PASS', 'e^?al5veVS6');

// Get slug from URL
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

if (empty($slug)) {
    error_log("Xiaomi service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/xiaomi/');
    exit;
}

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

    // Prepare and execute query
    $stmt = $pdo->prepare("
        SELECT shop, address, shop_city, center_type, phone_number, slug, maps
        FROM miservicecenters
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Xiaomi service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/xiaomi/');
        exit;
    }

    // Add static/default content for other fields
    $center['email'] = 'support@mi-service.in';
    $center['page_title'] = $center['shop'] . ' | Authorized Xiaomi Service Center Near Me 2026';
    $center['about'] = $center['shop'] .' is an official authorized Xiaomi service center Near Me 2026 providing professional repairs and support for all Xiaomi, Redmi, and POCO devices. Our certified technicians use genuine parts to ensure quality service.';
    // $center['about'] = 'Official authorized Xiaomi service center providing professional  repairs and support for all Xiaomi, Redmi, and POCO devices. Our certified technicians use genuine parts.';
    $center['services'] = [
        'Screen Replacement',
        'Battery Replacement',
        'Software Issues',  
        'Camera Repair',
        'Water Damage Repair',
        'Charging Port Repair',
        'Motherboard Repair'
    ];
    $center['opening_hours'] = [
        'Monday to Friday' => '10:00 AM - 7:00 PM',
        'Saturday' => '10:00 AM - 5:00 PM',
        'Sunday' => 'Closed'
    ];
    $center['map_embed'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.123456789012!2d80.12345678901234!3d13.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDA3JzI0LjQiTiA4MMKwMDcnMjQuNCJF!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';

} catch (PDOException $e) {
    header("HTTP/1.0 500 Internal Server Error");
    die("Service unavailable. Please try again later.");
}
?>
    <meta name="description" content="<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>">
<title><?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        :root {
            --primary-color: #FF6700;
            --secondary-color: #333;
            --light-color: #f5f5f5;
            --dark-color: #333;
            --whatsapp-color: #25D366;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: var(--secondary-color); background-color: var(--light-color); }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        header { background-color: var(--primary-color); color: white; padding: 30px 0; text-align: center; margin-bottom: 30px; }
        h1 { font-size: 2rem; margin-bottom: 15px; font-weight: 700; }
        h2 { color: var(--primary-color); margin: 25px 0 15px; font-size: 1.5rem; border-bottom: 2px solid var(--primary-color); padding-bottom: 8px; }
        .card { background: white; padding: 25px; margin-bottom: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .info-item { display: flex; align-items: center; margin-bottom: 12px; }
        .info-item i { margin-right: 12px; color: var(--primary-color); width: 24px; text-align: center; font-size: 1.1rem; }
        .hours-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .hours-table tr:nth-child(even) { background-color: #f9f9f9; }
        .hours-table td { padding: 10px; border: 1px solid #e0e0e0; }
        .service-list { list-style-type: none; }
        .service-list li { padding: 12px 0; border-bottom: 1px solid #eee; display: flex; align-items: center; }
        .service-list i { margin-right: 12px; color: var(--primary-color); }
        .map-container { height: 350px; width: 100%; background-color: #eee; margin-top: 15px; border-radius: 8px; overflow: hidden; }
        .map-container iframe { width: 100%; height: 100%; border: none; }
        footer { text-align: center; padding: 25px; background-color: var(--dark-color); color: white; margin-top: 40px; }
        .whatsapp-btn { background-color: var(--whatsapp-color); color: white; padding: 12px 20px; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; margin-top: 15px; transition: all 0.3s; }
        .whatsapp-btn:hover { background-color: #128C7E; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
        .whatsapp-btn i { margin-right: 8px; font-size: 1.2rem; }
        .contact-grid { display: grid; gap: 20px; }
        

        @media (min-width: 768px) {
            .contact-grid { grid-template-columns: 1fr 1fr; }
            h1 { font-size: 2.5rem; }
        }
        @media (max-width: 480px) {
            header { padding: 20px 0; }
            h1 { font-size: 1.8rem; }
            .card { padding: 20px; }
        }
    </style>

    <header>
        <div class="container">
            <h1><?= htmlspecialchars($center['shop'], ENT_QUOTES, 'UTF-8') ?></h1>
            <p><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    </header>

    <main class="container">
        <div class="contact-grid">
            <section class="card">
                <h2>Contact Information</h2>
                  <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><?= htmlspecialchars($center['center_type'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                  <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><?= htmlspecialchars($center['shop_city'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <address><?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?></address>
                </div>
              
                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($center['phone_number'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:<?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </div>
                <a href="https://wa.me/<?= htmlspecialchars(preg_replace('/[^0-9]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                   class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                </a>
            </section>

            <section class="card">
                <h2>Business Hours</h2>
                <table class="hours-table">
                    <?php foreach ($center['opening_hours'] as $day => $hours): ?>
                    <tr>
                        <td><strong><?= htmlspecialchars($day, ENT_QUOTES, 'UTF-8') ?></strong></td>
                        <td><?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </section>
        </div>

        <section class="card">
            <h2>About Our Xiaomi Service Center Near Me 2026</h2>
            <p><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
            <p>We specialize in repairing all Xiaomi, Redmi, and POCO devices with genuine parts and manufacturer-approved techniques. Our technicians are certified by Xiaomi to ensure your device receives the best care possible.</p>
        </section>

        <section class="card">
            <h2>Our Services</h2>
            <ul class="service-list">
                <?php foreach ($center['services'] as $service): ?>
                <li>
                    <i class="fas fa-check-circle"></i>
                    <span><?= htmlspecialchars($service, ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="card">
            <h2>Our Location</h2>
            <p>Visit us at our convenient location:</p>
            <div class="map-container">
                <?= $center['map_embed'] ?>
            </div>
        </section>
    </main>

    
</body>
<?php include '../../footer.php'; ?>
</html>