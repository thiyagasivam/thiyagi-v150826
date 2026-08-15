<?php include '../../header.php'; ?>
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
            "name" => "Apple Service Centers",
            "item" => "https://www.thiyagi.com/service-center/apple/"
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
                "name" => (isset($center) && $center && isset($center['shop_name']) ? $center['shop_name'] . " Apple Authorized Service Center" : "Apple Authorized Service Center"),
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
    error_log("Apple service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/apple/');
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
        SELECT slug, shop_name, address, phone_number
        FROM appleservicecenters
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Apple service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/apple/');
        exit;
    }

    // Add static/default content for other fields
    $center['email'] = 'bangalore_admin@apple.com';
    $center['page_title'] = $center['shop_name'] . ' | Authorized Apple Service Center Near Me 2026';
    $center['about'] = $center['shop_name'] .' is an authorized Apple service center Near Me 2026 providing expert repairs and support for all Apple products including iPhone, iPad, MacBook, Apple Watch and more.';
    
    $center['services'] = [
        'iPhone Repair',
        'iPad Repair',
        'MacBook Repair',
        'Apple Watch Repair',
        'Display Replacement',
        'Battery Replacement',
        'Water Damage Repair',
        'Software Issues',
        'Data Recovery',
        'Warranty Services'
    ];
    
    $center['opening_hours'] = [
        'Monday to Friday' => '10:00 AM - 7:00 PM',
        'Saturday' => '10:00 AM - 5:00 PM',
        'Sunday' => 'Closed'
    ];
    
    $center['brands_serviced'] = [
        'iPhone',
        'iPad',
        'MacBook',
        'Apple Watch',
        'iMac',
        'Mac Pro',
        'AirPods'
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
            --primary-color: #000000; /* Apple black */
            --secondary-color: #A2AAAD; /* Apple gray */
            --accent-color: #0071E3; /* Apple blue */
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
            color: var(--accent-color);
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
        .apple-badge {
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
    <header class="bg-gradient-to-r from-gray-900 to-gray-700 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center mb-4">
                <i class="fab fa-apple text-4xl text-gray-300"></i>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold mb-2">
                <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                <span class="apple-badge">Authorized Service Provider</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
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
                        <p class="text-sm text-gray-500">(Customer Support)</p>
                    </div>
                </div>

                 <div class="flex items-center mb-4">
                   <?php include 'info.php';?>
                </div>


                <div class="flex flex-wrap gap-3 mt-6">
                    <a href="https://wa.me/<?= htmlspecialchars(preg_replace('/[^0-9]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                       class="whatsapp-btn">
                        <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
                    </a>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                       class="bg-gray-800 text-white px-4 py-3 rounded-lg flex items-center">
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
                    <p class="text-blue-700"><i class="fas fa-info-circle mr-2"></i> Appointments recommended for faster service</p>
                </div>
            </section>
        </div>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">About Our Apple Service Center Near Me 2026</h2>
            <div class="prose max-w-none">
                <p class="mb-4"><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>As an authorized Apple service provider, we offer:</p>
                <ul class="list-disc pl-5 mt-2 mb-6">
                    <li>Genuine Apple parts and accessories</li>
                    <li>Apple-certified technicians</li>
                    <li>Same-day service for many repairs</li>
                    <li>Warranty and AppleCare+ support</li>
                    <li>Diagnostics and software support</li>
                </ul>
                
                <h3 class="text-xl font-semibold mt-6 mb-3">Apple Products We Service</h3>
                <div class="flex flex-wrap">
                    <?php foreach ($center['brands_serviced'] as $brand): ?>
                    <span class="brand-badge"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Our Apple Repair Services</h2>
            <ul class="service-list">
                <?php foreach ($center['services'] as $service): ?>
                <li>
                    <i class="fas fa-check-circle text-green-500"></i>
                    <span class="text-gray-800"><?= htmlspecialchars($service, ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
            
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-mobile-alt mr-2"></i> iPhone Services</h3>
                    <p class="text-sm text-gray-600">Screen replacement, battery service, camera repair, charging port issues, water damage recovery, and more for all iPhone models.</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-laptop mr-2"></i> Mac Services</h3>
                    <p class="text-sm text-gray-600">Logic board repair, display replacement, keyboard service, battery replacement, data recovery, and macOS support.</p>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Service Center Location</h2>
            <p class="mb-4">Visit our authorized Apple service center Near Me 2026 at:</p>
            <div class="flex items-start mb-4">
                <i class="fas fa-map-marker-alt text-red-500 mt-1 mr-3 text-xl"></i>
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
                <p class="text-sm text-gray-600"><i class="fas fa-info-circle mr-2"></i> Free parking available | Wheelchair accessible</p>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Schedule a Repair</h2>
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
                    <h3 class="text-lg font-medium mb-3"><i class="fas fa-tools mr-2 text-blue-600"></i> Walk-in Repairs</h3>
                    <p class="text-gray-600 mb-4">Walk-ins welcome during business hours, subject to availability.</p>
                    <p class="text-sm text-gray-500"><i class="fas fa-clock mr-2"></i> Average wait time: 15-30 minutes</p>
                </div>
            </div>
        </section>
    </main>

       <style>
        /* Grid layout */
        .grid-container {
            display: grid;
            /* Starts with 1 column, adjusts based on screen size */
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem; /* Space between items */
            margin-top: 1rem; /* Space below the heading */
        }

        /* Style for each link item */
        .service-link {
            display: block;
            padding: 1rem; /* Increased padding */
            color: #0056b3; /* Darker blue */
            text-decoration: none;
            font-weight: 600; /* Semi-bold */
            background-color: #f1f8ff; /* Light blue background */
            border: 1px solid #c8e1ff; /* Light blue border */
            border-radius: 8px; /* More rounded corners */
            transition: all 0.3s ease; /* Smoother transitions */
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05); /* Subtle shadow */
        }

        .service-link:hover, .service-link:focus {
            background-color: #007bff; /* Bootstrap primary blue */
            color: white;
            border-color: #007bff;
            transform: translateY(-3px); /* Lift effect */
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2); /* Blue shadow */
            outline: none; /* Remove default focus outline */
        }

        /* Modern heading styles */
        .modern-heading {
            text-align: center;
            color: #212529; /* Dark gray color for text */
            margin: 1.5rem 0; /* Add some vertical margin */
            position: relative; /* Needed for the pseudo-element positioning */
            padding-bottom: 0.75rem; /* Space below text for the underline */
            font-weight: 700; /* Bold font weight */
            font-size: 2.5rem; /* Large font size */
            letter-spacing: -0.02em; /* Slightly tighter letter spacing */
        }

        /* Create a stylish underline */
        .modern-heading::after {
            content: '';
            display: block;
            width: 80px; /* Fixed width for the underline */
            height: 5px; /* Thickness of the underline */
            background: linear-gradient(90deg, #007bff, #0056b3); /* Blue gradient */
            margin: 0.5rem auto 0; /* Center the underline */
            border-radius: 3px; /* Rounded corners on the underline */
        }

        /* Responsive adjustments are handled by auto-fit grid */
    </style>

    <div class="container">
        <!-- Modern Centered Heading -->
        <h2 class="modern-heading">Apple Service Centers</h2>
        <div class="grid-container">
            <!-- Grid Items -->
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ample-technologies-pvt-ltd-83" target="_blank">AMPLE TECHNOLOGIES PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ample-technologies-pvt-ltd-97" target="_blank">AMPLE TECHNOLOGIES PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ample-technologies-pvt-ltd-98" target="_blank">AMPLE TECHNOLOGIES PVT LTD (Bangalore)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ample-technologies-pvt-ltd-99" target="_blank">Ample Technologies Pvt. Ltd.</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-55" target="_blank">Aptronix</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-84" target="_blank">Aptronix</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-100" target="_blank">Aptronix</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-103" target="_blank">Aptronix (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-65" target="_blank">Aptronix (Hyderabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-69" target="_blank">Aptronix (Hyderabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-104" target="_blank">APTRONIX (Hyderabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-105" target="_blank">APTRONIX (Hyderabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-102" target="_blank">Aptronix (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/aptronix-101" target="_blank">Aptronix (Secunderabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-106" target="_blank">B2X</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-107" target="_blank">B2X (Bathinda)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-p-ltd-108" target="_blank">B2X SERVICE SOLUTIONS INDIA P LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-p-ltd-111" target="_blank">B2X SERVICE SOLUTIONS INDIA P LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-p-ltd-109" target="_blank">B2X SERVICE SOLUTIONS INDIA P LTD (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-p-ltd-110" target="_blank">B2X SERVICE SOLUTIONS INDIA P LTD (Pune)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-p-ltd-112" target="_blank">B2X SERVICE SOLUTIONS INDIA P LTD (Udaipur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-private-limited-43" target="_blank">B2X Service Solutions India Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-private-limited-56" target="_blank">B2X Service Solutions India Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-private-limited-113" target="_blank">B2X Service Solutions India Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-private-limited-59" target="_blank">B2X Service Solutions India Private Limited (Ahmedabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-private-limited-70" target="_blank">B2X Service Solutions India Private Limited (Kozhikode)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/b2x-service-solutions-india-private-limited-114" target="_blank">B2X Service Solutions India Private Limited (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-care-technologies-26" target="_blank">Conquer Care Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-care-technologies-115" target="_blank">Conquer Care Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-care-technologies-llp-11" target="_blank">CONQUER CARE TECHNOLOGIES LLP</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-care-technologies-llp-116" target="_blank">CONQUER CARE TECHNOLOGIES LLP</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-care-technologies-llp-118" target="_blank">CONQUER CARE TECHNOLOGIES LLP (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-care-technologies-llp-119" target="_blank">CONQUER CARE TECHNOLOGIES LLP (Nellore)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-care-technologies-llp-117" target="_blank">CONQUER CARE TECHNOLOGIES LLP (Visakhapatnam)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/conquer-technologies-120" target="_blank">Conquer Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/consolidated-premium-retailers-12" target="_blank">CONSOLIDATED PREMIUM RETAILERS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solution-services-pvt-ltd-13" target="_blank">F1 Info Solution  & Services PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-private-limited-71" target="_blank">F1 Info Solutions & Services Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-14" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-79" target="_blank">F1 Info Solutions & Services PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-121" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-131" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-128" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Aurangabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-130" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Bangalore)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-85" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Chandigarh)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-86" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-132" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Indore)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-124" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Jammu)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-127" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Kanpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-122" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Kochi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-125" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Kolkata)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-129" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Ludhiana)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-133" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Madurai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-123" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-87" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (New Delhi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-126" target="_blank">F1 INFO SOLUTIONS & SERVICES PVT LTD (Patna)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/f1-info-solutions-services-pvt-ltd-80" target="_blank">F1 Info Solutions & Services Pvt Ltd (Thiruvananthapuram)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/future-world-retail-private-limited-29" target="_blank">Future World Retail Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/future-world-retail-private-limited-134" target="_blank">Future World Retail Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/future-world-retail-pvt-ltd-23" target="_blank">FUTURE WORLD RETAIL PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/future-world-retail-pvt-ltd-135" target="_blank">FUTURE WORLD RETAIL PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/future-world-retail-pvt-ltd-136" target="_blank">FUTURE WORLD RETAIL PVT LTD (New Delhi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/future-world-retail-pvt-ltd-15" target="_blank">Future World Retail Pvt. Ltd.</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/gdigi-services-limited-88" target="_blank">Gdigi Services Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/icare-ample-technologies-private-limited-73" target="_blank">Icare - Ample Technologies Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/icare-ample-technologies-pvt-ltd-137" target="_blank">ICare - Ample Technologies Pvt Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/icare-ample-technologies-pvt-ltd-138" target="_blank">ICare - Ample Technologies Pvt Ltd (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/icare-ample-technologies-pvt-ltd-139" target="_blank">ICare - Ample Technologies Pvt Ltd (Gwalior)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/icare-ample-technologies-pvt-ltd-140" target="_blank">ICare - Ample Technologies Pvt Ltd (Udupi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/idelta-electronic-services-llp-60" target="_blank">Idelta Electronic Services Llp</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/idelta-electronic-services-llp-76" target="_blank">Idelta Electronic Services Llp</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/idelta-electronic-services-llp-141" target="_blank">IDELTA ELECTRONIC SERVICES LLP</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/idelta-electronic-services-llp-77" target="_blank">Idelta Electronic Services Llp (Dehradun)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/idestiny-16" target="_blank">IDESTINY</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/idestiny-ranchi-35" target="_blank">IDESTINY</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/infahs-private-limited-89" target="_blank">Infahs Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/istore-by-reliance-digital-17" target="_blank">ISTORE BY RELIANCE DIGITAL</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-74" target="_blank">IVENUS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-91" target="_blank">IVENUS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-142" target="_blank">IVENUS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-90" target="_blank">IVENUS (Anand)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-143" target="_blank">IVENUS (Bhavnagar)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-144" target="_blank">IVENUS (Surat)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-tech-venus-36" target="_blank">Ivenus/ Tech Venus</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-tech-venus-75" target="_blank">Ivenus/ Tech Venus</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-tech-venus-145" target="_blank">Ivenus/ Tech Venus</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ivenus-tech-venus-39" target="_blank">Ivenus/ Tech Venus (Surat)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/kns-technologies-31" target="_blank">KNS TECHNOLOGIES</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/kns-technologies-40" target="_blank">Kns Technologies (Raipur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/macintel-solutions-44" target="_blank">Macintel Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/macintel-solutions-66" target="_blank">MACINTEL SOLUTIONS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/macintel-solutions-146" target="_blank">Macintel Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/macintel-solutions-147" target="_blank">Macintel Solutions (Siliguri)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/maple-digital-technology-int-pvt-ltd-57" target="_blank">Maple Digital Technology INT PVT. LTD.</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ngrt-systems-private-limited-37" target="_blank">Ngrt Systems Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ngrt-systems-private-limited-72" target="_blank">Ngrt Systems Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ngrt-systems-pvt-ltd-148" target="_blank">NGRT SYSTEMS PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ngrt-systems-pvt-ltd-150" target="_blank">NGRT SYSTEMS PVT LTD (Bhopal)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/ngrt-systems-pvt-ltd-149" target="_blank">NGRT SYSTEMS PVT LTD (Nagpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/pcss-solutions-private-limited-151" target="_blank">PCSS SOLUTIONS PRIVATE LIMITED</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/pcss-solutions-private-limited-152" target="_blank">Pcss Solutions Private Limited (Panaji)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-18" target="_blank">PLANETCARE</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-50" target="_blank">Planetcare</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-153" target="_blank">Planetcare</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-madurai-156" target="_blank">PLANETCARE - MADURAI</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-25" target="_blank">PLANETCARE (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-155" target="_blank">PLANETCARE (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-154" target="_blank">PLANETCARE (Pondicherry)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-27" target="_blank">Planetcare (Tiruchirappalli)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/planetcare-24" target="_blank">Planetcare (Tirunelveli)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/premium-lifestyle-ampamp-fashion-india-157" target="_blank">PREMIUM LIFESTYLE & FASHION INDIA</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-81" target="_blank">QDIGI SERVICES LIMITED</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-92" target="_blank">QDIGI SERVICES LIMITED</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-158" target="_blank">QDIGI SERVICES LIMITED</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-159" target="_blank">Qdigi Services Limited (Ambala)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-163" target="_blank">QDIGI SERVICES LIMITED (Bikaner)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-93" target="_blank">Qdigi Services Limited (Ghaziabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-167" target="_blank">QDIGI SERVICES LIMITED (Jabalpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-160" target="_blank">QDIGI SERVICES LIMITED (Jalandhar)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-164" target="_blank">QDIGI SERVICES LIMITED (Jamshedpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-162" target="_blank">QDIGI SERVICES LIMITED (Kota)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-161" target="_blank">Qdigi Services Limited (New Delhi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-165" target="_blank">QDIGI SERVICES LIMITED (Pathankot)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-limited-166" target="_blank">Qdigi Services Limited (Rohtak)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/qdigi-services-ltd-94" target="_blank">QDIGI SERVICES LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/radius-systems-private-limited-19" target="_blank">RADIUS SYSTEMS PRIVATE LIMITED</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/radius-systems-private-limited-61" target="_blank">Radius Systems Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/radius-systems-private-limited-62" target="_blank">Radius Systems Private Limited (Dehradun)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-34" target="_blank">Reliance Retail Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-58" target="_blank">Reliance Retail Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-78" target="_blank">Reliance Retail Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-168" target="_blank">Reliance Retail Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-45" target="_blank">Reliance Retail Limited (Alwar)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-63" target="_blank">Reliance Retail Limited (Gurgaon)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-47" target="_blank">Reliance Retail Limited (Jaipur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-46" target="_blank">Reliance Retail Limited (Latur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-limited-169" target="_blank">Reliance Retail Limited (Mathura)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-20" target="_blank">RELIANCE RETAIL LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-48" target="_blank">Reliance Retail Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-51" target="_blank">RELIANCE RETAIL LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-170" target="_blank">Reliance Retail Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-171" target="_blank">RELIANCE RETAIL LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-175" target="_blank">RELIANCE RETAIL LTD (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-178" target="_blank">Reliance Retail Ltd (Jamnagar)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-173" target="_blank">Reliance Retail Ltd (Navi Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-174" target="_blank">RELIANCE RETAIL LTD (Navi Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-177" target="_blank">Reliance Retail Ltd (New Delhi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-179" target="_blank">Reliance Retail Ltd (Solapur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-176" target="_blank">Reliance Retail Ltd (Varanasi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/reliance-retail-ltd-172" target="_blank">Reliance Retail Ltd (Zirakpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/systematix-media-38" target="_blank">Systematix Media</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/systematix-media-67" target="_blank">Systematix Media</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/systematix-media-95" target="_blank">SYSTEMATIX MEDIA</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/systematix-media-180" target="_blank">SYSTEMATIX MEDIA</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-private-limited-30" target="_blank">Tresor Systems Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-private-limited-32" target="_blank">Tresor Systems Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-private-limited-68" target="_blank">Tresor Systems Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-private-limited-96" target="_blank">Tresor Systems Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-private-limited-41" target="_blank">Tresor Systems Private Limited (Allahabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-pvt-ltd-82" target="_blank">TRESOR SYSTEMS PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-pvt-ltd-181" target="_blank">TRESOR SYSTEMS PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-pvt-ltd-184" target="_blank">TRESOR SYSTEMS PVT LTD (Jaipur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-pvt-ltd-182" target="_blank">TRESOR SYSTEMS PVT LTD (Kolkata)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/tresor-systems-pvt-ltd-183" target="_blank">Tresor Systems Pvt Ltd (Noida)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-21" target="_blank">Unicorn Infosolutions Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-42" target="_blank">Unicorn Infosolutions Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-52" target="_blank">Unicorn Infosolutions Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-185" target="_blank">Unicorn Infosolutions Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-186" target="_blank">Unicorn Infosolutions Private Limited (Gurgaon)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-54" target="_blank">Unicorn Infosolutions Private Limited (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-49" target="_blank">Unicorn Infosolutions Private Limited (New Delhi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-53" target="_blank">Unicorn Infosolutions Private Limited (Pune)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-private-limited-64" target="_blank">Unicorn Infosolutions Private Limited (Pune)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-22" target="_blank">UNICORN INFOSOLUTIONS PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-187" target="_blank">UNICORN INFOSOLUTIONS PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-191" target="_blank">UNICORN INFOSOLUTIONS PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-188" target="_blank">UNICORN INFOSOLUTIONS PVT LTD (Ahmedabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-189" target="_blank">UNICORN INFOSOLUTIONS PVT LTD (Chandigarh)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-192" target="_blank">UNICORN INFOSOLUTIONS PVT LTD (Gurgaon)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-190" target="_blank">UNICORN INFOSOLUTIONS PVT LTD (New Delhi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-28" target="_blank">Unicorn Infosolutions Pvt Ltd (Noida)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-193" target="_blank">UNICORN INFOSOLUTIONS PVT LTD (Pune)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/unicorn-infosolutions-pvt-ltd-194" target="_blank">UNICORN INFOSOLUTIONS PVT. LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/venus-data-products-33" target="_blank">Venus Data Products</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/venus-data-products-195" target="_blank">VENUS DATA PRODUCTS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/venus-data-products-pvt-ltd-196" target="_blank">VENUS DATA PRODUCTS PVT LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/venus-data-products-pvt-ltd-197" target="_blank">VENUS DATA PRODUCTS PVT LTD (Ahmedabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/apple/venus-data-products-pvt-ltd-198" target="_blank">VENUS DATA PRODUCTS PVT LTD (Vapi)</a>
        </div>
    </div>
</body>
</body>
<?php include '../../footer.php'; ?>
</html>