<?php include '../../header.php'; ?>
<?php
// Get current page URL
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Generate breadcrumb schema
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
            "name" => "Motorola Service Centers",
            "item" => "https://www.thiyagi.com/service-center/motorola/"
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
                "name" => (isset($center) && $center && isset($center['shop_name']) ? $center['shop_name'] . " - Motorola Authorized Service Center" : "Motorola Authorized Service Center"),
                "item" => $currentUrl
        ]
    ]
];
?>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<?php
// Database configuration
define('DB_HOST', '127.0.0.1:3306');
define('DB_NAME', 'u662933183_servicecenter');
define('DB_USER', 'u662933183_servicecenter');
define('DB_PASS', 'e^?al5veVS6');

// Get slug from URL
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

if (empty($slug)) {
    error_log("Motorola service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/motorola/');
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

    // Query the motorolaservicecenter table
    $stmt = $pdo->prepare("
        SELECT slug, shop_name, address, phone_number
        FROM motorolaservicecenter
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Motorola service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/motorola/');
        exit;
    }

    // Add static/default content for other fields
    $center['email'] = 'support@motorola.com';
    $center['page_title'] = $center['shop_name'] . ' | Motorola Authorized Service Center Near Me 2026';
    $center['about'] = $center['shop_name'] .' is an authorized Motorola service center Near Me 2026 providing expert repairs and maintenance for all Motorola smartphones and devices.';
    
    $center['services'] = [
        'Smartphone Repair',
        'Screen Replacement',
        'Battery Replacement',
        'Water Damage Repair',
        'Software Issues',
        'Hardware Diagnostics',
        'Motherboard Repair',
        'Camera Repair',
        'Charging Port Repair',
        'Warranty Services'
    ];
    
    $center['opening_hours'] = [
        'Monday to Friday' => '9:00 AM - 6:00 PM',
        'Saturday' => '10:00 AM - 4:00 PM',
        'Sunday' => 'Closed'
    ];
    
    $center['brands_serviced'] = [
        'Motorola Edge Series',
        'Motorola Razr',
        'Motorola G Series',
        'Motorola One Series',
        'Motorola E Series',
        'Motorola Accessories'
    ];

} catch (PDOException $e) {
    header("HTTP/1.0 500 Internal Server Error");
    die("Service unavailable. Please try again later.");
}
?>
    <meta name="description" content="<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>">
<title><?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #5c92fa; /* Motorola blue */
            --secondary-color: #000000; /* Motorola black */
            --accent-color: #FFFFFF; /* White accent */
            --light-color: #f5f5f7;
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
        .motorola-badge {
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
    <header class="bg-gradient-to-r from-blue-600 to-blue-400 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center mb-4">
                <i class="fas fa-mobile-alt text-4xl text-blue-200"></i>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold mb-2">
                <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                <span class="motorola-badge">Authorized Service Center</span>
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
                    <i class="fas fa-phone-alt text-gray-600 mr-3"></i>
                    <div>
                        <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" class="text-gray-800 hover:text-blue-600 hover:underline">
                            <?= htmlspecialchars($center['phone_number'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                        <p class="text-sm text-gray-500">(Service Helpline)</p>
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
                
                <div class="flex flex-wrap gap-3 mt-6">
                    <a href="https://wa.me/<?= htmlspecialchars(preg_replace('/[^0-9]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                       class="whatsapp-btn">
                        <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
                    </a>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                       class="bg-blue-600 text-white px-4 py-3 rounded-lg flex items-center">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
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
                    <p class="text-blue-700"><i class="fas fa-info-circle mr-2"></i> Appointments recommended for hardware repairs</p>
                </div>
            </section>
        </div>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">About Our Motorola Service Center Near Me 2026</h2>
            <div class="prose max-w-none">
                <p class="mb-4"><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>As an authorized Motorola service provider, we offer:</p>
                <ul class="list-disc pl-5 mt-2 mb-6">
                    <li>Genuine Motorola parts and components</li>
                    <li>Factory-trained technicians</li>
                    <li>Specialized tools for smartphone repairs</li>
                    <li>Warranty and out-of-warranty support</li>
                    <li>Same-day service for most repairs</li>
                </ul>
                
                <h3 class="text-xl font-semibold mt-6 mb-3">Motorola Products We Service</h3>
                <div class="flex flex-wrap">
                    <?php foreach ($center['brands_serviced'] as $brand): ?>
                    <span class="brand-badge"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Our Motorola Repair Services</h2>
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
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-mobile-alt mr-2"></i> Smartphone Services</h3>
                    <p class="text-sm text-gray-600">Screen replacement, battery repair, water damage restoration, and other smartphone services.</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-blue-50">
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-sync-alt mr-2"></i> Software Services</h3>
                    <p class="text-sm text-gray-600">OS updates, software troubleshooting, and performance optimization for Motorola devices.</p>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Service Center Location</h2>
            <p class="mb-4">Visit our authorized Motorola service center at:</p>
            <div class="flex items-start mb-4">
                <i class="fas fa-map-marker-alt text-blue-500 mt-1 mr-3 text-xl"></i>
                <div>
                    <p class="font-medium"><?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p class="text-gray-700"><?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
            
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15282225.79979123!2d73.7250245393691!3d20.750301298393563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1629996543210!5m2!1sen!2sin" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div class="mt-4 p-3 bg-gray-50 rounded-lg">
                <p class="text-sm text-gray-600"><i class="fas fa-info-circle mr-2"></i> Free parking available | Same-day service for most repairs</p>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Schedule a Service</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium mb-3"><i class="fas fa-calendar-check mr-2 text-blue-600"></i> Book an Appointment</h3>
                    <p class="text-gray-600 mb-4">Schedule your service in advance to minimize wait time.</p>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                       class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                        <i class="fas fa-phone mr-2"></i> Call to Book
                    </a>
                </div>
                <div>
                    <h3 class="text-lg font-medium mb-3"><i class="fas fa-tools mr-2 text-blue-600"></i> Walk-in Services</h3>
                    <p class="text-gray-600 mb-4">Walk-ins welcome during business hours, subject to availability.</p>
                    <p class="text-sm text-gray-500"><i class="fas fa-clock mr-2"></i> Average wait time: 15-30 minutes for simple repairs</p>
                </div>
            </div>
        </section>
    </main>

    <style>
        /* Grid layout */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }

        /* Style for each link item */
        .service-link {
            display: block;
            padding: 0.75rem;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            transition: all 0.2s ease-in-out;
            text-align: center;
        }

        .service-link:hover {
            background-color: #e9ecef;
            border-color: #adb5bd;
            text-decoration: underline;
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }
        
        /* Modern Centered Heading Styles */
        .modern-heading {
            text-align: center;
            color: #212529;
            margin: 1.5rem 0;
            position: relative;
            padding-bottom: 0.75rem;
            font-weight: 700;
            font-size: 2.5rem;
            letter-spacing: -0.02em;
        }

        /* Create a stylish underline */
        .modern-heading::after {
            content: '';
            display: block;
            width: 80px;
            height: 5px;
            background: linear-gradient(90deg, #5c92fa, #3a7af0);
            margin: 0.5rem auto 0;
            border-radius: 3px;
        }
    </style>

<?php include '../../footer.php'; ?>
</html>