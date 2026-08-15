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
    error_log("Boat service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/boat/');
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
        SELECT slug, shop_name, state, address, phone_number, maplink
        FROM boatservicecenter
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Boat service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/boat/');
        exit;
    }

    // Add static/default content for other fields
    $center['email'] = 'support@boat-lifestyle.com';
    $center['page_title'] = $center['shop_name'] . ' | Authorized boAt Service Center Near Me 2026';
    $center['about'] = $center['shop_name'] .' is an authorized boAt service center Near Me - India\'s No.1 Earwear Brand. We provide expert repairs and support for all boAt headphones, earphones, and wearable devices.';
    
    $center['services'] = [
        'Headphone Repair',
        'Earphone Repair',
        'Bluetooth Connectivity Issues',
        'Battery Replacement',
        'Audio Quality Issues',
        'Charging Port Repair',
        'Water Damage Repair',
        'Warranty Claims'
    ];
    
    $center['opening_hours'] = [
        'Monday to Saturday' => '10:00 AM - 7:00 PM',
        'Sunday' => 'Closed'
    ];
    
    // Process map link to ensure it's a proper embed URL
    $center['map_embed'] = '';
    if (!empty($center['maplink'])) {
        $maplink = $center['maplink'];
        
        // If it's already an embed URL, use it directly
        if (strpos($maplink, 'maps/embed') !== false) {
            $center['map_embed'] = '<iframe src="'.htmlspecialchars($maplink).'" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
        // If it's a regular Google Maps URL, try to convert to embed
        elseif (strpos($maplink, 'google.com/maps') !== false || strpos($maplink, 'goo.gl/maps') !== false) {
            // Extract coordinates from the URL
            if (preg_match('/@(-?\d+\.\d+),(-?\d+\.\d+)/', $maplink, $matches)) {
                $lat = $matches[1];
                $lng = $matches[2];
                $embedUrl = "https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3000!2d{$lng}!3d{$lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin";
                $center['map_embed'] = '<iframe src="'.htmlspecialchars($embedUrl).'" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            } else {
                // Use address-based search
                $address = urlencode($center['address'] . ', ' . $center['state'] . ', India');
                $embedUrl = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0!2d0.0!3d0.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z" . base64_encode($address) . "!5e0!3m2!1sen!2sin";
                $center['map_embed'] = '<iframe src="'.htmlspecialchars($embedUrl).'" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            }
        } else {
            // Create a simple search-based map
            $address = urlencode($center['address'] . ', ' . $center['state'] . ', India');
            $embedUrl = "https://maps.google.com/maps?width=100%25&height=450&hl=en&q=" . $address . "&t=&z=14&ie=UTF8&iwloc=&output=embed";
            $center['map_embed'] = '<iframe src="'.htmlspecialchars($embedUrl).'" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
    } else {
        // No map link available, create from address
        $address = urlencode($center['address'] . ', ' . $center['state'] . ', India');
        $embedUrl = "https://maps.google.com/maps?width=100%25&height=450&hl=en&q=" . $address . "&t=&z=14&ie=UTF8&iwloc=&output=embed";
        $center['map_embed'] = '<iframe src="'.htmlspecialchars($embedUrl).'" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    }

} catch (PDOException $e) {
    header("HTTP/1.0 500 Internal Server Error");
    die("Service unavailable. Please try again later.");
}
?>
<?php
// Get current page URL
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Generate breadcrumb schema for individual service center pages
$breadcrumbSchema = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://www.thiyagi.com/"
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Service Center",
            "item" => "https://www.thiyagi.com/service-center/"
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => "Boat Service Centers",
            "item" => "https://www.thiyagi.com/service-center/boat/"
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
            "name" => $center['shop_name'] . " Boat Authorized Service Center",
            "item" => $currentUrl
        ]
    ]
];
?>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
    <meta name="description" content="<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>">
<title><?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0000FF; /* boAt brand blue */
            --secondary-color: #000000; /* boAt brand black */
            --accent-color: #00FF00; /* boAt accent green */
            --light-color: #f5f5f5;
            --whatsapp-color: #25D366;
        }
        .service-list li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        .service-list i {
            margin-right: 12px;
            color: var(--primary-color);
        }
        .map-container {
            height: 350px;
            width: 100%;
            background-color: #eee;
            margin-top: 15px;
            border-radius: 8px;
            overflow: hidden;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .whatsapp-btn {
            background-color: var(--whatsapp-color);
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-top: 15px;
            transition: all 0.3s;
        }
        .hours-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .hours-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .hours-table td {
            padding: 10px;
            border: 1px solid #e0e0e0;
        }
        .boat-badge {
            background-color: var(--primary-color);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: bold;
            display: inline-block;
            margin-left: 8px;
        }
    </style>

<body class="bg-gray-50">
    <header class="bg-gradient-to-r from-blue-900 to-black text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center mb-4">
                <i class="fas fa-headphones text-4xl text-blue-300"></i>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold mb-2">
                <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                <span class="boat-badge">Authorized Service Center</span>
            </h1>
            <p class="text-lg text-blue-200 max-w-2xl mx-auto">
                <?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>
                <span class="block mt-2 font-semibold">India's No.1 Earwear Brand</span>
            </p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <section class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-900 border-b border-blue-200 pb-2 mb-4">Contact Information</h2>
                
                <div class="flex items-start mb-4">
                    <i class="fas fa-map-marker-alt text-blue-600 mt-1 mr-3"></i>
                    <div>
                        <p class="font-medium">Service Center Address</p>
                        <p class="text-gray-700"><?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="text-gray-700"><?= htmlspecialchars($center['state'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </div>
                
                <div class="flex items-center mb-4">
                    <i class="fas fa-phone-alt text-blue-600 mr-3"></i>
                    <div>
                        <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" class="text-blue-600 hover:underline">
                            <?= htmlspecialchars($center['phone_number'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                        <p class="text-sm text-gray-500">(Service Helpline)</p>
                    </div>
                </div>
                
                <div class="flex items-center mb-4">
                    <i class="fas fa-envelope text-blue-600 mr-3"></i>
                    <div>
                        <a href="mailto:<?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>" class="text-blue-600 hover:underline">
                            <?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                        <p class="text-sm text-gray-500">(Customer Support)</p>
                    </div>
                </div>
                
                <a href="https://wa.me/<?= htmlspecialchars(preg_replace('/[^0-9]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                   class="whatsapp-btn">
                    <i class="fab fa-whatsapp mr-2"></i> Chat with boAt Support
                </a>
            </section>

            <section class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold text-blue-900 border-b border-blue-200 pb-2 mb-4">Service Hours</h2>
                <table class="hours-table">
                    <?php foreach ($center['opening_hours'] as $day => $hours): ?>
                    <tr>
                        <td><strong><?= htmlspecialchars($day, ENT_QUOTES, 'UTF-8') ?></strong></td>
                        <td><?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <div class="mt-4 p-3 bg-yellow-50 border-l-4 border-yellow-400">
                    <p class="text-yellow-700"><i class="fas fa-info-circle mr-2"></i> Walk-ins welcome during service hours</p>
                </div>
            </section>
        </div>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-blue-900 border-b border-blue-200 pb-2 mb-4">About Our boAt Service Center Near Me</h2>
            <div class="prose max-w-none">
                <p class="mb-4"><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>As an authorized boAt service partner, we provide:</p>
                <ul class="list-disc pl-5 mt-2">
                    <li>Genuine boAt spare parts</li>
                    <li>Manufacturer-approved repair techniques</li>
                    <li>Skilled technicians trained by boAt</li>
                    <li>Quick turnaround time</li>
                    <li>Warranty claim processing</li>
                </ul>
                
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-blue-900 border-b border-blue-200 pb-2 mb-4">Our boAt Repair Services</h2>
            <ul class="service-list">
                <?php foreach ($center['services'] as $service): ?>
                <li>
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span class="text-gray-800"><?= htmlspecialchars($service, ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 border border-blue-100 rounded-lg bg-blue-50">
                    <h3 class="font-semibold text-blue-800 mb-2"><i class="fas fa-headphones mr-2"></i> Headphone Services</h3>
                    <p class="text-sm">Specialized repair for all boAt headphone models including Rockerz, Nirvana, and Immortal series.</p>
                </div>
                <div class="p-4 border border-blue-100 rounded-lg bg-blue-50">
                    <h3 class="font-semibold text-blue-800 mb-2"><i class="fas fa-earbuds mr-2"></i> Earphone Services</h3>
                    <p class="text-sm">Expert care for your boAt earphones including BassHeads, Airdopes, and other TWS models.</p>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-blue-900 border-b border-blue-200 pb-2 mb-4">Service Center Location</h2>
            <p class="mb-4">Visit our authorized boAt service center at:</p>
            <div class="flex items-start mb-4">
                <i class="fas fa-map-marker-alt text-red-500 mt-1 mr-3 text-xl"></i>
                <div>
                    <p class="font-medium"><?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p class="text-gray-700"><?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p class="text-gray-700"><?= htmlspecialchars($center['state'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
            
            <div class="map-container">
                <?= $center['map_embed'] ?>
            </div>
            
        </section>
    </main>

    
</body>
<?php include '../../footer.php'; ?>
</html>