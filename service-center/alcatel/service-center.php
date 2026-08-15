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
            "name" => "Alcatel Service Centers",
            "item" => "https://www.thiyagi.com/service-center/alcatel/"
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
                "name" => (isset($center) && $center && isset($center['shop_name']) ? $center['shop_name'] . " - Alcatel Authorized Service Center" : "Alcatel Authorized Service Center"),
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
    error_log("Alcatel service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/alcatel/');
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

    // Prepare and execute query - changed table name to alcatelservicecenter
    $stmt = $pdo->prepare("
        SELECT slug, shop_name, address, phone_number
        FROM alcatelservicecenter
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Alcatel service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/alcatel/');
        exit;
    }

    // Add static/default content for other fields
    $center['email'] = 'customercare.india@alcatel-mobile.com';
    $center['page_title'] = $center['shop_name'] . ' | 2026 Authorized Alcatel Service Center Near Me';
    $center['about'] = $center['shop_name'] .' is an authorized 2026 Alcatel service center Near Me providing expert repairs and support for all Alcatel smartphones, tablets and feature phones.';
    
    $center['services'] = [
        'Smartphone Repair',
        'Tablet Repair',
        'Display Replacement',
        'Battery Replacement',
        'Charging Port Repair',
        'Water Damage Repair',
        'Software Issues',
        'Data Recovery',
        'Warranty Services',
        'Accessory Replacement'
    ];
    
    $center['opening_hours'] = [
        'Monday to Friday' => '10:00 AM - 7:00 PM',
        'Saturday' => '10:00 AM - 5:00 PM',
        'Sunday' => 'Closed'
    ];
    
    $center['brands_serviced'] = [
        'Alcatel Smartphones',
        'Alcatel Tablets',
        'Alcatel Feature Phones',
        'Alcatel Accessories'
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
            --primary-color: #005EB8; /* Alcatel blue */
            --secondary-color: #E31E24; /* Alcatel red */
            --accent-color: #FFD700; /* Gold accent */
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
        .alcatel-badge {
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
    <header class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center mb-4">
                <i class="fas fa-mobile-alt text-4xl text-blue-200"></i>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold mb-2">
                <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                <span class="alcatel-badge">Authorized Service Provider</span>
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
                        <p class="text-sm text-gray-500">(Customer Support)</p>
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-3 mt-6">
                    <a href="https://wa.me/<?= htmlspecialchars(preg_replace('/[^0-9]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                       class="whatsapp-btn">
                        <i class="fab fa-whatsapp mr-2"></i> Chat on WhatsApp
                    </a>
                    <a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', $center['phone_number']), ENT_QUOTES, 'UTF-8') ?>" 
                       class="bg-blue-800 text-white px-4 py-3 rounded-lg flex items-center">
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
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">About Our Alcatel Service Center Near Me</h2>
            <div class="prose max-w-none">
                <p class="mb-4"><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>As an authorized Alcatel service provider, we offer:</p>
                <ul class="list-disc pl-5 mt-2 mb-6">
                    <li>Genuine Alcatel parts and accessories</li>
                    <li>Certified technicians</li>
                    <li>Quick turnaround for most repairs</li>
                    <li>Warranty support</li>
                    <li>Software troubleshooting</li>
                </ul>
                
                <h3 class="text-xl font-semibold mt-6 mb-3">Alcatel Products We Service</h3>
                <div class="flex flex-wrap">
                    <?php foreach ($center['brands_serviced'] as $brand): ?>
                    <span class="brand-badge"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Our Alcatel Repair Services</h2>
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
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-mobile-alt mr-2"></i> Smartphone Services</h3>
                    <p class="text-sm text-gray-600">Screen replacement, battery service, camera repair, charging port issues, water damage recovery for all Alcatel smartphone models.</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-tablet-alt mr-2"></i> Tablet Services</h3>
                    <p class="text-sm text-gray-600">Display repair, battery replacement, software issues, charging problems for Alcatel tablets.</p>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Service Center Location</h2>
            <p class="mb-4">Visit our authorized Alcatel service center Near Me at:</p>
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
        <h2 class="modern-heading">Alcatel Service Centers</h2>
        <div class="grid-container">
            <!-- Grid Items -->
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/3-com-technologies-4" target="_blank">3-Com Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/3g-vega-enterprise-5" target="_blank">3G Vega Enterprise</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/4g-telecom-6" target="_blank">4G Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/5g-solutions-7" target="_blank">5G Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/a-m-sales-8" target="_blank">A M Sales</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/a-to-z-mobile-care-9" target="_blank">A To Z Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/a-to-z-solutions-10" target="_blank">A To Z Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/a-d-communication-11" target="_blank">A.D.Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/aai-shree-khodiyar-mobile-12" target="_blank">AAI Shree Khodiyar Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/aakash-telecom-13" target="_blank">Aakash Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/aarav-services-14" target="_blank">Aarav Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ad-communication-15" target="_blank">AD Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/agarwal-care-16" target="_blank">Agarwal Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ahuja-mobile-care-17" target="_blank">Ahuja Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ajay-electronics-18" target="_blank">Ajay Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/akash-enterprises-19" target="_blank">Akash Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/aks-telecom-20" target="_blank">AKS Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/aksh-agency-21" target="_blank">Aksh Agency</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/amaan-enterprises-1" target="_blank">Amaan Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ambika-telecom-22" target="_blank">Ambika Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/anand-gift-mobile-centre-23" target="_blank">Anand Gift & Mobile Centre</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/annu-mobile-center-24" target="_blank">Annu Mobile Center</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ansh-communication-25" target="_blank">Ansh Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/anshinka-technology-26" target="_blank">Anshinka Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/anshul-vineet-mobile-computer-27" target="_blank">Anshul Vineet Mobile & Computer</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/apace-solutions-28" target="_blank">Apace Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/arora-communications-29" target="_blank">Arora Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/arun-enterprises-30" target="_blank">Arun Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/arun-mobile-care-31" target="_blank">Arun Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/as-mobile-service-32" target="_blank">AS Mobile Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ashwani-communication-33" target="_blank">Ashwani Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/asian-mobile-service-34" target="_blank">Asian Mobile Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/avionic-solutions-35" target="_blank">Avionic Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ayushi-electronics-36" target="_blank">Ayushi Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ayyappa-services-37" target="_blank">Ayyappa Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/babjee-communication-38" target="_blank">Babjee Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/balaji-enterprises-39" target="_blank">Balaji Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/balaji-sales-and-services-40" target="_blank">Balaji Sales And Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/best-communications-41" target="_blank">Best Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/bg-technologies-42" target="_blank">BG Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/bhagwati-telecom-43" target="_blank">Bhagwati Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/bharat-enterprises-44" target="_blank">Bharat Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/bhasker-communications-45" target="_blank">Bhasker Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/big-mobile-master-46" target="_blank">Big Mobile Master</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/billaiya-mobile-47" target="_blank">Billaiya Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/care-deal-services-48" target="_blank">Care Deal Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/cell-care-49" target="_blank">CELL CARE</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/cell-care-services-50" target="_blank">Cell Care Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/cell-heart-51" target="_blank">Cell Heart</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/cell-world-52" target="_blank">Cell World</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/chamundeshwari-telecommunications-53" target="_blank">Chamundeshwari Telecommunications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/chhabra-telecom-54" target="_blank">Chhabra Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/classic-electronics-55" target="_blank">Classic Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/d-t-infotech-56" target="_blank">D.T. Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/das-care-57" target="_blank">Das Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/deep-mobile-58" target="_blank">Deep Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/deepak-communication-light-59" target="_blank">Deepak Communication & Light</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/deprosys-technologies-60" target="_blank">Deprosys Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/dharm-s-mobile-61" target="_blank">Dharm's Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/dhiman-communication-62" target="_blank">Dhiman Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/digital-electronics-63" target="_blank">Digital Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/diside-telecom-64" target="_blank">Diside Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/dutta-enterprises-65" target="_blank">Dutta Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/e-max-mobiles-66" target="_blank">E-Max Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/fortune-service-67" target="_blank">Fortune Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/four-u-services-68" target="_blank">Four U Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/friends-mobile-gallery-69" target="_blank">Friends Mobile Gallery</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/futurz-computer-70" target="_blank">Futurz Computer</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/g-n-enterprises-71" target="_blank">G.N. Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gallexy-services-72" target="_blank">Gallexy Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gander-electronics-telecommunication-73" target="_blank">Gander Electronics & Telecommunication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gandhi-sales-74" target="_blank">Gandhi Sales</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gautam-communication-75" target="_blank">Gautam Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gayathri-communications-76" target="_blank">Gayathri Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gaytri-mobiles-77" target="_blank">Gaytri Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/global-infotech-78" target="_blank">Global Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/global-mobile-masters-79" target="_blank">Global Mobile Masters</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/globe-connexion-services-80" target="_blank">Globe Connexion & Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/goodwill-service-81" target="_blank">Goodwill Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/goyal-communication-82" target="_blank">Goyal Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/green-wep-technology-83" target="_blank">Green Wep Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gsm-solutions-84" target="_blank">GSM Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/guru-kripa-enterprises-85" target="_blank">Guru Kripa Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gurukrupa-enterprise-86" target="_blank">Gurukrupa Enterprise</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/gvs-enterprises-87" target="_blank">GVS Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/harish-communication-88" target="_blank">Harish Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/heet-telecom-89" target="_blank">Heet Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/heneel-mobile-mart-90" target="_blank">Heneel Mobile Mart</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/hi-tech-cell-care-91" target="_blank">HI Tech Cell Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/hitech-mobile-care-92" target="_blank">Hitech Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/hybrid-systems-93" target="_blank">Hybrid Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/india-cell-service-94" target="_blank">India Cell Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/j-j-electronics-95" target="_blank">J.J. Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/jai-ambey-mobile-shop-96" target="_blank">Jai Ambey Mobile Shop</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/jai-bala-ji-communication-97" target="_blank">Jai Bala Ji Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/jai-gurudev-mall-98" target="_blank">Jai Gurudev Mall</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/jai-maa-infocom-99" target="_blank">Jai Maa Infocom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/jain-telecom-100" target="_blank">Jain Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/janavi-enterprises-101" target="_blank">Janavi Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/janki-enterprises-102" target="_blank">Janki Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/java-telecom-103" target="_blank">Java Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/jay-durge-mobile-104" target="_blank">Jay Durge Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/jmv-enterprises-105" target="_blank">JMV Enterprises,</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/joint-communicaiton-106" target="_blank">Joint Communicaiton</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/k-s-mobile-107" target="_blank">K S Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kamal-mobile-zone-108" target="_blank">Kamal Mobile Zone</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kanawat-mobiles-repairing-center-109" target="_blank">Kanawat Mobiles Repairing Center</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kapil-enterprises-110" target="_blank">Kapil Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kare-first-electronics-111" target="_blank">Kare First Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kartik-mobile-center-112" target="_blank">Kartik Mobile Center</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/karuna-enterprises-113" target="_blank">KARUNA ENTERPRISES</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kg-solutions-114" target="_blank">KG Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kgn-mobile-galaxy-115" target="_blank">KGN Mobile Galaxy</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/khan-infotech-116" target="_blank">Khan Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kota-mobile-117" target="_blank">Kota Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/krishna-enterprises-3" target="_blank">Krishna Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kumar-electronics-118" target="_blank">Kumar Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/kushal-services-119" target="_blank">Kushal Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/lakshmi-enterprises-120" target="_blank">Lakshmi Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/lawaniyan-telecom-121" target="_blank">Lawaniyan Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/laxmi-telecare-122" target="_blank">Laxmi Telecare</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/link-service-123" target="_blank">Link Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/lucky-star-mobile-shop-124" target="_blank">Lucky Star Mobile Shop</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/luxmi-enterprises-125" target="_blank">Luxmi Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/m-i-enterprises-127" target="_blank">M.I.Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/m-m-mobile-solution-128" target="_blank">M.M. Mobile Solution</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/m-s-mobile-communication-129" target="_blank">M.S. Mobile Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/m-s-kailash-sharma-mobile-point-130" target="_blank">M/s Kailash Sharma Mobile Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/m-s-manohar-electronics-131" target="_blank">M/s Manohar Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/m-s-mobicare-132" target="_blank">M/s Mobicare</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/m-m-technologies-126" target="_blank">M&M Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maa-gauri-services-133" target="_blank">Maa Gauri Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maa-gayatri-telecom-134" target="_blank">Maa Gayatri Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maa-meenakshi-mobile-135" target="_blank">Maa Meenakshi Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maa-narmda-mobile-repairing-136" target="_blank">Maa Narmda Mobile Repairing</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maa-samleswari-mobile-care-137" target="_blank">Maa Samleswari Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maa-vaishno-communication-138" target="_blank">Maa Vaishno Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/madhav-sales-service-139" target="_blank">Madhav Sales & Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/madura-check-point-140" target="_blank">Madura Check Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mahadev-enterprises-141" target="_blank">Mahadev Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maheshwari-mobile-and-stationers-142" target="_blank">Maheshwari Mobile And Stationers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/manav-mobile-centre-143" target="_blank">Manav Mobile Centre</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/manju-telecom-144" target="_blank">Manju Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/maruthi-mobiles-145" target="_blank">Maruthi Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/max-solution-146" target="_blank">Max Solution</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/megha-communication-service-center-147" target="_blank">Megha Communication & Service Center</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mm-enterprises-148" target="_blank">MM Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-care-149" target="_blank">Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-care-150" target="_blank">Mobile Care (Almora)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-care-centre-151" target="_blank">MOBILE CARE CENTRE</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-care-centre-152" target="_blank">Mobile Care Centre (Auraiya)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-corner-153" target="_blank">Mobile Corner</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-disney-154" target="_blank">Mobile Disney</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-garden-155" target="_blank">Mobile Garden</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-master-156" target="_blank">Mobile Master</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-service-center-157" target="_blank">Mobile Service Center</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-services-158" target="_blank">Mobile Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-shoppee-159" target="_blank">Mobile Shoppee</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-solution-160" target="_blank">Mobile Solution</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobile-world-161" target="_blank">Mobile World</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mobilewala-dotcom-162" target="_blank">Mobilewala Dotcom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/modi-mobile-point-163" target="_blank">Modi Mobile Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mohit-mobiles-services-164" target="_blank">Mohit Mobiles & Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mousam-mobile-repairing-centre-165" target="_blank">Mousam Mobile & Repairing Centre</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mousumi-mobile-care-166" target="_blank">Mousumi Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/mukherjee-telecom-167" target="_blank">Mukherjee Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/multi-tasking-systems-168" target="_blank">Multi Tasking Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/music-beats-2-169" target="_blank">Music Beats 2</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/my-mobile-care-170" target="_blank">My Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/n-d-traders-171" target="_blank">N.D. Traders</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/national-computers-172" target="_blank">National Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/nayyer-electronics-173" target="_blank">Nayyer Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/naz-mobiles-174" target="_blank">NAZ-Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/new-genius-mobile-175" target="_blank">New Genius Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/new-mobile-world-176" target="_blank">New Mobile World</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/new-siddhivinayak-mobile-177" target="_blank">New Siddhivinayak Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/nextstep-technology-178" target="_blank">Nextstep Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/nexus-179" target="_blank">Nexus</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/nidhi-communication-180" target="_blank">Nidhi Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/niha-marketing-181" target="_blank">Niha Marketing</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/nitin-communication-182" target="_blank">Nitin Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/nitya-enterprises-183" target="_blank">Nitya Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/nivedita-enterprises-184" target="_blank">Nivedita Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/novelty-collection-185" target="_blank">Novelty Collection</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ocean-mobile-care-186" target="_blank">Ocean Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/om-enterprises-187" target="_blank">OM Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/om-mobile-repairing-188" target="_blank">Om Mobile Repairing</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/om-sai-ram-communication-189" target="_blank">Om Sai Ram Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/om-sai-telecom-190" target="_blank">Om Sai Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/pal-mobile-191" target="_blank">Pal Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/patel-mobile-192" target="_blank">Patel Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/perfect-mobile-computer-repair-centre-193" target="_blank">Perfect Mobile & Computer Repair Centre</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/perfect-mobile-shop-194" target="_blank">Perfect Mobile Shop</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/phone-mart-195" target="_blank">Phone Mart</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/phones-4u-196" target="_blank">Phones 4U</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/quality-communication-197" target="_blank">Quality Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/r-k-telecom-198" target="_blank">R.K. Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/r-k-times-communication-199" target="_blank">R.K. Times & Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/r-m-service-care-200" target="_blank">R.M. Service Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/radhika-telecom-201" target="_blank">Radhika Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/raima-s-communication-point-202" target="_blank">Raima's Communication Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/raj-enterprises-203" target="_blank">Raj Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/raja-tracers-204" target="_blank">Raja Tracers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/rajeev-infocom-205" target="_blank">Rajeev Infocom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/rani-telecommunication-206" target="_blank">Rani Telecommunication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ravi-telecom-207" target="_blank">Ravi Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/rb-telecom-208" target="_blank">RB Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/reddy-mobiles-209" target="_blank">Reddy Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/rohit-trading-co-210" target="_blank">Rohit Trading Co.</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/royal-communication-211" target="_blank">Royal Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/rudraksh-infosys-212" target="_blank">RUDRAKSH INFOSYS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/s-k-mobile-care-213" target="_blank">S.K. Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/s-s-communications-214" target="_blank">S.S. Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/s-s-enterprise-215" target="_blank">S.S. Enterprise</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sagar-communication-216" target="_blank">Sagar Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sagun-infotech-217" target="_blank">Sagun Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sai-infotech-218" target="_blank">Sai Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sai-shopee-219" target="_blank">Sai Shopee</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sai-telecom-220" target="_blank">Sai Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sambhwani-mobile-shop-221" target="_blank">Sambhwani Mobile Shop</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/samiksha-sales-and-services-222" target="_blank">Samiksha Sales And Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sandeep-enterprises-223" target="_blank">Sandeep Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sanjay-telecom-224" target="_blank">Sanjay Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sankhyan-mobile-care-225" target="_blank">Sankhyan Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sarkar-communication-226" target="_blank">Sarkar Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/satguru-communication-227" target="_blank">Satguru Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/satya-electronics-228" target="_blank">Satya Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/satyam-mobile-computers-229" target="_blank">Satyam Mobile & Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/scom-mobitech-230" target="_blank">Scom Mobitech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shakir-mobile-care-231" target="_blank">Shakir Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shakti-infotech-232" target="_blank">Shakti Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shankar-mobile-center-233" target="_blank">Shankar Mobile Center</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shanu-enterprises-234" target="_blank">Shanu Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sharma-electronics-235" target="_blank">Sharma Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shavirag-electro-electronics-236" target="_blank">Shavirag Electro Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sheetal-enterprise-237" target="_blank">Sheetal Enterprise</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shikha-enterprises-238" target="_blank">Shikha Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shipra-electrical-appliances-239" target="_blank">Shipra Electrical & Appliances</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shiv-shakti-enterprises-240" target="_blank">Shiv Shakti Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-bala-ji-services-241" target="_blank">Shree Bala Ji Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-balaji-mobile-242" target="_blank">Shree Balaji Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-communication-243" target="_blank">Shree Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-ganesh-enterprises-244" target="_blank">Shree Ganesh Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-jee-communication-245" target="_blank">Shree Jee Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-mahaveer-electronics-246" target="_blank">Shree Mahaveer Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-mobile-repairing-centre-247" target="_blank">Shree Mobile & Repairing Centre</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-radhey-trading-co-248" target="_blank">Shree Radhey Trading Co.</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-sai-maintenance-249" target="_blank">Shree Sai Maintenance</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-sai-samarth-enterprise-250" target="_blank">Shree Sai Samarth Enterprise</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-services-251" target="_blank">Shree Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shree-shyam-enterprises-252" target="_blank">Shree Shyam Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shreya-s-empire-253" target="_blank">Shreya's Empire</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shri-ganesh-telecom-254" target="_blank">Shri Ganesh Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shri-giridhari-technology-255" target="_blank">Shri Giridhari Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shri-sai-bharti-communication-256" target="_blank">Shri Sai Bharti Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shri-satguru-mobile-257" target="_blank">Shri Satguru Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shri-shyam-enterprises-258" target="_blank">Shri Shyam Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shubham-kdmr-group-259" target="_blank">Shubham & KDMR Group</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shubham-telecom-260" target="_blank">Shubham Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/shweta-cell-point-261" target="_blank">Shweta Cell Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/siddhivinayak-services-262" target="_blank">Siddhivinayak Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/singh-communication-263" target="_blank">Singh Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/siva-communication-264" target="_blank">Siva Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/smk-technologies-265" target="_blank">SMK Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sony-service-zone-266" target="_blank">Sony Service Zone</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sri-durga-communications-267" target="_blank">Sri Durga Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sri-ratnam-electronics-268" target="_blank">Sri Ratnam Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sri-sai-communications-269" target="_blank">Sri Sai Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/srinivas-telecom-270" target="_blank">Srinivas Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/ssr-services-271" target="_blank">SSR Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/star-technology-272" target="_blank">Star Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sujana-telecom-services-273" target="_blank">Sujana Telecom Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sumit-elecrostat-274" target="_blank">Sumit Elecrostat</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sunaniya-electronics-275" target="_blank">Sunaniya Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sunil-communication-centre-276" target="_blank">Sunil Communication Centre</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sunil-mobile-point-277" target="_blank">Sunil Mobile Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/sunrise-cell-care-278" target="_blank">Sunrise Cell Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/suraj-technology-279" target="_blank">Suraj Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/swamy-mobiles-280" target="_blank">Swamy Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/swap-enterprise-281" target="_blank">Swap Enterprise</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/swaraj-electronics-282" target="_blank">Swaraj Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/system-solution-283" target="_blank">System Solution</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/tara-tele-mobile-284" target="_blank">Tara Tele & Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/tele-tech-285" target="_blank">Tele-Tech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/teleworld-286" target="_blank">TeleWorld</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/the-care-point-2" target="_blank">The Care Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/the-infinite-customer-service-287" target="_blank">The Infinite Customer Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/tirupati-mobile-care-288" target="_blank">Tirupati Mobile Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/tirupati-telecom-289" target="_blank">Tirupati Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/unique-communication-290" target="_blank">Unique Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/unitech-291" target="_blank">Unitech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/usha-traders-292" target="_blank">Usha Traders</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/v-care-293" target="_blank">V Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/vatsal-infotech-294" target="_blank">Vatsal Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/veer-mobiles-295" target="_blank">Veer Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/vibhavari-mobiles-296" target="_blank">Vibhavari Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/vijeex-systems-297" target="_blank">Vijeex Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/vinayaka-mobile-solutions-298" target="_blank">Vinayaka Mobile Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/vinod-mobiles-299" target="_blank">Vinod Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/vision-tech-300" target="_blank">Vision Tech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/we-care-301" target="_blank">We Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/world-mobile-302" target="_blank">World Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/yadeen-multimedia-303" target="_blank">Yadeen Multimedia</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/yash-communication-304" target="_blank">Yash Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/zenith-emporium-305" target="_blank">Zenith Emporium</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/alcatel/zunaira-televentures-306" target="_blank">Zunaira Televentures</a>
        </div>
    </div>
</body>
    
</body>
<?php include '../../footer.php'; ?>
</html>