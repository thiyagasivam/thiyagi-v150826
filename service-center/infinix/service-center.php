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
    error_log("Infinix service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/infinix/');
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

    // Query the infinixservicecenter table
    $stmt = $pdo->prepare("
        SELECT slug, shop_name, address
        FROM infinixservicecenter
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Infinix service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/infinix/');
        exit;
    }

    // Add static/default content for other fields
    $center['email'] = 'support@infinixmobility.com';
    $center['phone_number'] = '+91-11-12345678';
    $center['page_title'] = $center['shop_name'] . ' | Infinix Authorized Service Center Near Me 2026';
    $center['about'] = $center['shop_name'] .' is an authorized Infinix service center Near Me 2026 providing expert repairs and maintenance for all Infinix smartphones and devices.';
    
    $center['services'] = [
        'Screen Replacement',
        'Battery Replacement',
        'Charging Port Repair',
        'Software Issues & Updates',
        'Camera Repair',
        'Water Damage Repair',
        'Speaker & Microphone Repair',
        'Motherboard Repair',
        'Warranty Services',
        'Accessory Sales'
    ];
    
    $center['opening_hours'] = [
        'Monday to Saturday' => '9:00 AM - 7:00 PM',
        'Sunday' => '10:00 AM - 4:00 PM'
    ];
    
    $center['brands_serviced'] = [
        'Infinix Smartphones',
        'Infinix Tablets',
        'Infinix Smart Series',
        'Infinix Note Series',
        'Infinix Hot Series',
        'Infinix Zero Series'
    ];

} catch (PDOException $e) {
    header("HTTP/1.0 500 Internal Server Error");
    die("Service unavailable. Please try again later.");
}
?>
    <meta name="description" content="<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?> Expert smartphone repair services with genuine parts and warranty support.">
    <meta name="keywords" content="Infinix service center, <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>, smartphone repair, mobile repair, screen replacement, battery replacement, Infinix authorized service">
    <meta name="author" content="Infinix Mobility">
        <meta property="og:title" content="<?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?> Professional repair services for all Infinix devices.">
    <meta property="og:type" content="business.business">
    <meta property="og:url" content="<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="/assets/images/infinix-service-center.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>">
<title><?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>",
        "name": "<?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>",
        "description": "<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>",
        "url": "<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>",
        "telephone": "<?= htmlspecialchars($center['phone_number'], ENT_QUOTES, 'UTF-8') ?>",
        "email": "<?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?>",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "28.6139",
            "longitude": "77.2090"
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "opens": "09:00",
                "closes": "19:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Sunday",
                "opens": "10:00",
                "closes": "16:00"
            }
        ],
        "serviceType": "Electronics Repair Service",
        "brand": {
            "@type": "Brand",
            "name": "Infinix"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Infinix Repair Services",
            "itemListElement": [
                <?php 
                $service_schemas = [];
                foreach ($center['services'] as $index => $service) {
                    $service_schemas[] = '{
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "' . htmlspecialchars($service, ENT_QUOTES, 'UTF-8') . '",
                            "serviceType": "Electronics Repair"
                        }
                    }';
                }
                echo implode(',', $service_schemas);
                ?>
            ]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.5",
            "reviewCount": "150"
        },
        "priceRange": "₹₹",
        "paymentAccepted": ["Cash", "Credit Card", "UPI"],
        "currenciesAccepted": "INR"
    }
    </script>
    
    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Infinix Mobility",
        "url": "https://www.infinixmobility.com",
        "logo": "https://www.infinixmobility.com/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?= htmlspecialchars($center['phone_number'], ENT_QUOTES, 'UTF-8') ?>",
            "contactType": "Customer Service",
            "availableLanguage": ["English", "Hindi"]
        },
        "sameAs": [
            "https://www.facebook.com/InfinixIndia",
            "https://twitter.com/InfinixIndia",
            "https://www.instagram.com/infinixindia"
        ]
    }
    </script>
    
    <style>
        :root {
            --primary-color: #0066cc; /* Infinix blue */
            --secondary-color: #ff6600; /* Infinix orange */
            --accent-color: #FFFFFF; /* White accent */
            --light-color: #e6f7ff;
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
        .whatsapp-btn:hover {
            background-color: #128C7E;
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
        .infinix-badge {
            background-color: var(--primary-color);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: bold;
            display: inline-block;
            margin-left: 8px;
        }
        .brand-badge {
            background-color: var(--secondary-color);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: bold;
            margin-right: 6px;
            margin-bottom: 6px;
            display: inline-block;
        }
        @media (max-width: 640px) {
            .map-container {
                height: 250px;
            }
            .service-list li {
                padding: 8px 0;
            }
        }
    </style>

<body class="bg-gray-50">
    <header class="bg-gradient-to-r from-blue-800 to-blue-600 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center mb-4">
                <i class="fas fa-mobile-alt text-4xl text-blue-200"></i>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold mb-2">
                <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                <span class="infinix-badge">Authorized Service Center</span>
            </h1>
            <p class="text-lg text-blue-100 max-w-2xl mx-auto">
                <?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>
            </p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <section class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Contact Information</h2>
                
                <div class="flex items-start mb-4">
                    <i class="fas fa-map-marker-alt text-gray-600 mt-1 mr-3"></i>
                    <div>
                        <p class="font-medium">Service Center Address</p>
                        <p class="text-gray-700"><?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </div>
                
                <div class="flex items-center mb-4">
                    <i class="fas fa-envelope text-gray-600 mr-3"></i>
                    <div>
                        <a href="mailto:<?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>" class="text-gray-800 hover:text-blue-600 hover:underline">
                            <?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                        <p class="text-sm text-gray-500">(Technical Support)</p>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Service Hours</h2>
                <table class="hours-table">
                    <?php foreach ($center['opening_hours'] as $day => $hours): ?>
                    <tr>
                        <td><strong><?= htmlspecialchars($day, ENT_QUOTES, 'UTF-8') ?></strong></td>
                        <td><?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <div class="mt-4 p-3 bg-blue-50 border-l-4 border-blue-400">
                    <p class="text-blue-700"><i class="fas fa-info-circle mr-2"></i> Appointments recommended for major repairs</p>
                </div>
            </section>
        </div>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">About Our Infinix Service Center Near Me 2026</h2>
            <div class="prose max-w-none">
                <p class="mb-4"><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>As an authorized Infinix service provider, we offer:</p>
                <ul class="list-disc pl-5 mt-2 mb-6">
                    <li>Genuine Infinix parts and components</li>
                    <li>Factory-trained technicians</li>
                    <li>Specialized tools for smartphone repairs</li>
                    <li>Warranty and out-of-warranty support</li>
                    <li>Express service for minor repairs</li>
                </ul>
                
                <h3 class="text-xl font-semibold mt-6 mb-3">Infinix Devices We Service</h3>
                <div class="flex flex-wrap">
                    <?php foreach ($center['brands_serviced'] as $brand): ?>
                    <span class="brand-badge"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Our Smartphone Services</h2>
            <ul class="service-list">
                <?php foreach ($center['services'] as $service): ?>
                <li>
                    <i class="fas fa-check-circle text-blue-500"></i>
                    <span class="text-gray-800"><?= htmlspecialchars($service, ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
            
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 border border-gray-200 rounded-lg bg-blue-50">
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-mobile-alt mr-2"></i> Smartphones</h3>
                    <p class="text-sm text-gray-600">Comprehensive service for Infinix smartphones.</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-blue-50">
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-tablet-alt mr-2"></i> Tablets</h3>
                    <p class="text-sm text-gray-600">Specialized service for Infinix tablets.</p>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Schedule a Service</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium mb-3"><i class="fas fa-calendar-check mr-2 text-blue-600"></i> Book an Appointment</h3>
                    <p class="text-gray-600 mb-4">Schedule your service in advance to minimize wait time.</p>
                    <p class="text-sm text-gray-500">Contact us for appointment booking</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-3"><i class="fas fa-tools mr-2 text-blue-600"></i> Walk-in Services</h3>
                    <p class="text-gray-600 mb-4">Walk-ins welcome during business hours, subject to availability.</p>
                    <p class="text-sm text-gray-500"><i class="fas fa-clock mr-2"></i> Average wait time: 15-30 minutes for minor services</p>
                </div>
            </div>
        </section>
    </main>

    <?php include '../../footer.php'; ?>
</body>
</html>