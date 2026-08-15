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
            "name" => "Dell Service Centers",
            "item" => "https://www.thiyagi.com/service-center/dell/"
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
                "name" => (isset($center) && $center && isset($center['shop_name']) ? $center['shop_name'] . " - Dell Authorized Service Center" : "Dell Authorized Service Center"),
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
    error_log("Dell service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/dell/');
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

    // Query the dellservicecenter table
    $stmt = $pdo->prepare("
        SELECT slug, shop_name, address, phone_number
        FROM dellservicecenter
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Dell service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/dell/');
        exit;
    }

    // Add static/default content for other fields
    $center['email'] = 'Online_India@dell.com';
    $center['page_title'] = $center['shop_name'] . ' | Dell Authorized Service Center Near Me 2026';
    $center['about'] = $center['shop_name'] .' is an authorized Dell service center Near Me 2026 providing expert repairs and maintenance for all Dell computers and peripherals.';
    
    $center['services'] = [
        'Laptop Repair',
        'Desktop Repair',
        'Hardware Diagnostics',
        'Motherboard Replacement',
        'Screen Replacement',
        'Battery Replacement',
        'Data Recovery',
        'Software Installation',
        'Virus Removal',
        'Warranty Services'
    ];
    
    $center['opening_hours'] = [
        'Monday to Friday' => '9:00 AM - 6:00 PM',
        'Saturday' => '10:00 AM - 4:00 PM',
        'Sunday' => 'Closed'
    ];
    
    $center['brands_serviced'] = [
        'Dell Laptops',
        'Dell Desktops',
        'Dell Workstations',
        'Dell Servers',
        'Dell Monitors',
        'Dell Printers'
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
            --primary-color: #0076CE; /* Dell blue */
            --secondary-color: #000000; /* Dell black */
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
        .dell-badge {
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
                <i class="fas fa-laptop text-4xl text-blue-200"></i>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold mb-2">
                <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                <span class="dell-badge">Authorized Service Center</span>
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
                       class="bg-blue-700 text-white px-4 py-3 rounded-lg flex items-center">
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
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">About Our Dell Service Center Near Me 2026</h2>
            <div class="prose max-w-none">
                <p class="mb-4"><?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>As an authorized Dell service provider, we offer:</p>
                <ul class="list-disc pl-5 mt-2 mb-6">
                    <li>Genuine Dell parts and components</li>
                    <li>Factory-trained technicians</li>
                    <li>Specialized tools for computer repairs</li>
                    <li>Warranty and out-of-warranty support</li>
                    <li>Same-day service for most repairs</li>
                </ul>
                
                <h3 class="text-xl font-semibold mt-6 mb-3">Dell Products We Service</h3>
                <div class="flex flex-wrap">
                    <?php foreach ($center['brands_serviced'] as $brand): ?>
                    <span class="brand-badge"><?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8') ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Our Dell Repair Services</h2>
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
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-laptop mr-2"></i> Laptop Services</h3>
                    <p class="text-sm text-gray-600">Screen replacement, motherboard repair, battery replacement, and other laptop services.</p>
                </div>
                <div class="p-4 border border-gray-200 rounded-lg bg-blue-50">
                    <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-desktop mr-2"></i> Desktop Services</h3>
                    <p class="text-sm text-gray-600">Hardware diagnostics, component replacement, and performance upgrades for desktops.</p>
                </div>
            </div>
        </section>

        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 border-b border-gray-200 pb-2 mb-4">Service Center Location</h2>
            <p class="mb-4">Visit our authorized Dell service center at:</p>
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

    
</body>
   <style>
        /* Grid layout */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 columns */
            gap: 1rem; /* Space between items */
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
            text-align: center; /* Center text */
        }

        .service-link:hover {
            background-color: #e9ecef;
            border-color: #adb5bd;
            text-decoration: underline;
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr); /* 3 columns on medium screens */
            }
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr); /* 2 columns on small screens */
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: 1fr; /* 1 column on extra small screens */
            }
        }
        /* Modern Centered Heading Styles */
.modern-heading {
    text-align: center; /* Center the text */
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
    </style>

    <div class="container">
        <h2 class="modern-heading">Dell Service Centers</h2>
        <div class="grid-container">
            <!-- Grid Items -->
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/24x7-infotech-25" target="_blank">24X7 Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/9am-deal-10" target="_blank">9Am Deal</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/aditya-enterprises-26" target="_blank">Aditya Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/adp-itrescuer-private-limited-27" target="_blank">Adp Itrescuer Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/adwaita-technology-solutions-llp-28" target="_blank">Adwaita Technology Solutions Llp</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ahd-communications-29" target="_blank">Ahd Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/amber-computers-30" target="_blank">Amber Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/amber-computers-31" target="_blank">Amber Computers (Ujjain)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/anything-computers-32" target="_blank">Anything Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ashok-electronics-and-computer-servicing-centre-33" target="_blank">Ashok Electronics And Computer Servicing Centre</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/atp-care-34" target="_blank">Atp Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/av-computer-services-35" target="_blank">Av Computer Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/avenue-computers-36" target="_blank">Avenue Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/axel-services-37" target="_blank">Axel Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/bachpan-mobile-38" target="_blank">Bachpan Mobile</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/blue-chip-computers-39" target="_blank">Blue Chip Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/blue-chip-computers-40" target="_blank">Blue Chip Computers (Palakkad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/bm-enterprises-41" target="_blank">Bm Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/bright-land-computers-42" target="_blank">Bright Land Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/byte-interface-private-limited-43" target="_blank">Byte Interface Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/care-for-connect-44" target="_blank">Care For Connect</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/carryzone-1" target="_blank">CARRYZONE</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/chdl-infotech-private-limited-45" target="_blank">CHDL Infotech Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/club-laptop-veer-laptop-service-center-2" target="_blank">Club Laptop (Veer Laptop Service Center)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/cntrl-r-46" target="_blank">Cntrl R</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/comptech-systems-services-47" target="_blank">Comptech Systems & Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-care-48" target="_blank">Computer Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-gallery-services-14" target="_blank">Computer Gallery Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-infotech-india-pvt-ltd-49" target="_blank">Computer Infotech (India) Pvt.Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-plaza-50" target="_blank">Computer Plaza</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-service-51" target="_blank">Computer Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-services-52" target="_blank">Computer Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-systems-services-53" target="_blank">Computer Systems & Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/computer-trouble-shooters-54" target="_blank">Computer Trouble Shooters</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/creativecomp-infotech-private-limited-55" target="_blank">Creativecomp Infotech Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/creativecomp-infotech-private-limited-56" target="_blank">Creativecomp Infotech Private Limited (Allahabad)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/creativecomp-infotech-private-limited-57" target="_blank">Creativecomp Infotech Private Limited (Meerut)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/crystal-chip-computers-58" target="_blank">Crystal Chip Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/crystal-tech-service-59" target="_blank">Crystal Tech Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/crystal-tech-service-60" target="_blank">Crystal Tech Service (Bengaluru)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/crystal-tech-service-yelahanka-3" target="_blank">Crystal Tech Service-Yelahanka</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/d-tech-computers-4" target="_blank">D-Tech Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/dad-dude-61" target="_blank">Dad & Dude</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/daya-i-t-solutions-62" target="_blank">Daya I.T Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/delight-solutions-63" target="_blank">Delight Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/dev-mohini-printers-suppliers-64" target="_blank">Dev Mohini Printers & Suppliers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/dhanvi-communications-65" target="_blank">Dhanvi Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/digital-info-services-66" target="_blank">Digital Info Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/digitech-computer-infosystem-67" target="_blank">Digitech Computer Infosystem</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/digitech-computer-infosystem-silchar-68" target="_blank">Digitech Computer Infosystem-Silchar</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/digitech-computer-infosystem-tezpur-69" target="_blank">Digitech Computer Infosystem-Tezpur</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/divya-computers-15" target="_blank">Divya Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/doctor-fone-services-70" target="_blank">Doctor Fone Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/doctor-fone-services-71" target="_blank">Doctor Fone Services (Kottayam)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/e-services-72" target="_blank">E Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/e-tek-solutions-73" target="_blank">E-Tek Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/end-to-end-it-services-74" target="_blank">End To End It Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/eureka-trading-5" target="_blank">Eureka Trading</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/eureka-trading-co-75" target="_blank">Eureka Trading & Co</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/excel-computers-76" target="_blank">Excel Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/falcon-digi-world-77" target="_blank">Falcon Digi World</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ferret-solutions-78" target="_blank">Ferret Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/foursquare-techno-private-limited-79" target="_blank">Foursquare Techno Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gayathri-electronics-80" target="_blank">Gayathri Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gbs-systems-service-pvt-ltd-81" target="_blank">GBS Systems & Service Pvt Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gbs-systems-service-pvt-ltd-82" target="_blank">GBS Systems & Service Pvt Ltd (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gi-infotech-83" target="_blank">Gi Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gina-care-84" target="_blank">Gina Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ginia-care-85" target="_blank">Ginia Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/global-infocom-86" target="_blank">GLOBAL INFOCOM</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/global-it-services-87" target="_blank">Global It Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/global-network-88" target="_blank">Global Network,</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gloriya-it-89" target="_blank">Gloriya It</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gnext-computer-90" target="_blank">Gnext Computer</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/grace-infotech-91" target="_blank">Grace Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/gsm-solutions-92" target="_blank">Gsm Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/hara-agency-93" target="_blank">Hara Agency</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/help-care-94" target="_blank">Help Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/hi-tech-communication-95" target="_blank">Hi-Tech Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/hindtel-communications-96" target="_blank">Hindtel Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/honey-telecom-97" target="_blank">Honey Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/i-dot-infotech-98" target="_blank">I Dot Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/i-dot-infotech-99" target="_blank">I DOT Infotech (Asansol)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/impact-infotech-100" target="_blank">Impact Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/impact-infotech-101" target="_blank">Impact Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/indigo-computers-102" target="_blank">Indigo Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-103" target="_blank">Infocare Digital Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-107" target="_blank">Infocare Digital Systems (Bareilly)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-104" target="_blank">Infocare Digital Systems (Gorakhpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-108" target="_blank">Infocare Digital Systems (Gorakhpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-105" target="_blank">Infocare Digital Systems (Kanpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-109" target="_blank">Infocare Digital Systems (Kanpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-106" target="_blank">Infocare Digital Systems (Varanasi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/infocare-digital-systems-110" target="_blank">Infocare Digital Systems (Varanasi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/it-intellisys-technology-111" target="_blank">It Intellisys Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/it-services-112" target="_blank">It Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/it-services-113" target="_blank">It Services (Saran)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/itech-agencies-114" target="_blank">Itech Agencies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/jamsons-enterprises-115" target="_blank">Jamsons Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/kalimi-enterprise-116" target="_blank">Kalimi Enterprise</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/kalimi-enterprise-117" target="_blank">Kalimi Enterprise (Malda)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/kanchan-infocom-118" target="_blank">Kanchan Infocom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/key-computers-119" target="_blank">Key Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/klickit-solutions-services-120" target="_blank">KlickIT Solutions & Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/kota-mobiles-121" target="_blank">Kota Mobiles</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/krishna-electronics-12" target="_blank">Krishna Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/krishna-enterprises-122" target="_blank">Krishna Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/krishna-enterprises-123" target="_blank">Krishna Enterprises (Kanpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/kushagra-communication-124" target="_blank">Kushagra Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/laptop-shopee-125" target="_blank">Laptop Shopee</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/logic-technologies-126" target="_blank">Logic Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/lovely-communication-127" target="_blank">Lovely Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-k-solutions-128" target="_blank">M K Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-ashu-infotech-129" target="_blank">M/S Ashu Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-axcel-services-130" target="_blank">M/S Axcel Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-brs-computer-mobile-solutions-131" target="_blank">M/S Brs Computer & Mobile Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-creativecomp-infotech-private-limited-132" target="_blank">M/S Creativecomp Infotech Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-creativecomp-infotech-private-limited-133" target="_blank">M/S Creativecomp Infotech Private Limited (Kanpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-creativecomp-infotech-private-limited-134" target="_blank">M/S Creativecomp Infotech Private Limited (Lucknow)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-creativecomp-infotech-private-limited-135" target="_blank">M/S Creativecomp Infotech Private Limited (Noida)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-creativecomp-infotech-private-limited-136" target="_blank">M/S Creativecomp Infotech Private Limited (Varanasi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-daya-it-solutions-137" target="_blank">M/S Daya It Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-digitech-computer-infosystem-138" target="_blank">M/S Digitech Computer Infosystem</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-elite-tech-services-139" target="_blank">M/S Elite Tech Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-icon-computer-140" target="_blank">M/S Icon Computer</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-indigo-computers-141" target="_blank">M/S Indigo Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-infocom-systems-16" target="_blank">M/S Infocom Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-insight-systems-142" target="_blank">M/S Insight Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-micro-touch-infotech-private-limited-143" target="_blank">M/S Micro Touch Infotech Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-microsys-144" target="_blank">M/S Microsys</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-mobile-technologies-145" target="_blank">M/S Mobile Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-mystery-mind-it-engg-services-privatelimited-146" target="_blank">M/S Mystery Mind It & Engg Services Privatelimited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-nc-infotech-147" target="_blank">M/S Nc Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-148" target="_blank">M/S Regenersis Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-149" target="_blank">M/S Regenersis Private Limited (Bangalore)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-150" target="_blank">M/S Regenersis Private Limited (Bangalore)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-155" target="_blank">M/S Regenersis Private Limited (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-156" target="_blank">M/S Regenersis Private Limited (Chennai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-151" target="_blank">M/S Regenersis Private Limited (Ernakulam)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-152" target="_blank">M/S Regenersis Private Limited (Kolkata)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-153" target="_blank">M/S Regenersis Private Limited (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-regenersis-private-limited-154" target="_blank">M/S Regenersis Private Limited (Pune)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-shree-krishna-computers-157" target="_blank">M/S Shree Krishna Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-shreya-computers-158" target="_blank">M/S Shreya Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-srg-informatics-159" target="_blank">M/S Srg Informatics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-sv-cellular-160" target="_blank">M/S Sv Cellular</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-swastik-computers-161" target="_blank">M/S Swastik Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-swastik-computers-162" target="_blank">M/S Swastik Computers (Jalandhar)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-swastik-computers-163" target="_blank">M/S Swastik Computers (Ludhiana)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-wipro-infotech-foursquare-techno-privatelimited-164" target="_blank">M/S Wipro Infotech, Foursquare Techno Privatelimited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-wipro-limited-165" target="_blank">M/S Wipro Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-wipro-limited-cas-computers-166" target="_blank">M/S Wipro Limited, CAS Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/m-s-wipro-limited-impact-infotech-167" target="_blank">M/S Wipro Limited, Impact Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/maa-telecom-168" target="_blank">Maa Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/maa-telecom-169" target="_blank">Maa Telecom (Bongaigaon)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mac-enterprises-170" target="_blank">Mac Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mac-enterprises-171" target="_blank">Mac Enterprises (Pune)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mac-enterprises-172" target="_blank">Mac Enterprises (Ratnagiri)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mahasu-it-solutions-private-limited-173" target="_blank">Mahasu It Solutions Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mahasu-it-solutions-private-limited-174" target="_blank">Mahasu It Solutions Private Limited (Patiala)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/media-enterprises-175" target="_blank">Media Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/media-enterprises-176" target="_blank">Media Enterprises (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mgenterprises-177" target="_blank">Mgenterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/micro-computers-178" target="_blank">Micro Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/micrologic-communications-179" target="_blank">Micrologic Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mobile-bazar-180" target="_blank">Mobile Bazar</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mobile-care-point-181" target="_blank">Mobile Care Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mobile-solution-182" target="_blank">Mobile Solution</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mobile-world-183" target="_blank">Mobile World</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mousebeat-services-184" target="_blank">Mousebeat Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mrithika-electronics-185" target="_blank">Mrithika Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mystery-mind-it-engg-services-private-limited-186" target="_blank">Mystery Mind It & Engg Services Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/mystery-mind-it-engg-services-privatelimited-187" target="_blank">Mystery Mind It & Engg Services Privatelimited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/narayan-infosys-188" target="_blank">Narayan Infosys</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/nc-infotech-189" target="_blank">NC Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/network-business-group-190" target="_blank">Network Business Group</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/network-business-group-191" target="_blank">Network Business Group (Patiala)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/new-computer-care-192" target="_blank">New Computer Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/novatta-innovative-solutions-17" target="_blank">Novatta Innovative Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/novatta-innovative-solutions-pvt-ltd-193" target="_blank">Novatta Innovative Solutions Pvt Ltd.</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/om-infotech-194" target="_blank">Om Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/omkar-infosolution-195" target="_blank">Omkar Infosolution</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ozone-services-196" target="_blank">Ozone Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/pace-computer-197" target="_blank">Pace Computer</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/pace-computer-consultants-private-limited-198" target="_blank">Pace Computer Consultants Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/pameesha-technologies-199" target="_blank">Pameesha Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/pameesha-technologies-services-private-limited-200" target="_blank">Pameesha Technologies Services Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/panda-mobitech-201" target="_blank">Panda Mobitech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/peptronics-202" target="_blank">Peptronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/petra-infoserv-pvt-ltd-203" target="_blank">Petra Infoserv Pvt Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/pioneer-electrical-computers-204" target="_blank">PIONEER ELECTRICAL & COMPUTERS</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/pradhan-electronics-205" target="_blank">Pradhan Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/pramanik-mobile-service-zone-206" target="_blank">Pramanik Mobile Service Zone</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/prateek-computer-services-207" target="_blank">Prateek Computer Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/premier-it-solutions-india-private-limited-208" target="_blank">Premier IT Solutions India Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/printech-solutions-209" target="_blank">Printech Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/printech-solutions-210" target="_blank">Printech Solutions (Ernakulam)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/printech-solutions-211" target="_blank">Printech Solutions (Ernakulam)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/printer-care-services-212" target="_blank">Printer Care & Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/printer-care-services-213" target="_blank">Printer Care & Services (Thrissur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/professional-tech-solutions-private-limited-214" target="_blank">Professional Tech Solutions Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/qubefix-18" target="_blank">Qubefix</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/qubefix-215" target="_blank">Qubefix</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/qubix-technology-216" target="_blank">Qubix Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/raghav-computers-217" target="_blank">Raghav Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/raghav-computers-11" target="_blank">Raghav Computers,</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/raghav-computers-218" target="_blank">Raghav Computers,</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/raj-enterprises-219" target="_blank">Raj Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/rajya-consultancy-services-220" target="_blank">Rajya Consultancy Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/rajya-consultancy-services-221" target="_blank">RAJYA CONSULTANCY SERVICES</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ram-infotech-222" target="_blank">RAM INFOTECH</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/raywant-communication-19" target="_blank">Raywant Communication</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/real-e-store-223" target="_blank">Real E Store</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/real-value-it-services-224" target="_blank">Real Value It Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/regenersis-private-limited-225" target="_blank">Regenersis Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/regenersis-private-limited-227" target="_blank">Regenersis Private Limited (Guwahati)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/regenersis-private-limited-226" target="_blank">Regenersis Private Limited (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/reliable-computer-system-228" target="_blank">Reliable Computer System</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/reliable-computer-system-229" target="_blank">RELIABLE COMPUTER SYSTEM (Jalgaon)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/rishabh-infotech-230" target="_blank">Rishabh Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/rishabh-infotech-231" target="_blank">RISHABH INFOTECH (Jaigaon)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/rs-services-232" target="_blank">Rs Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/safe-and-secure-solutions-233" target="_blank">Safe And Secure Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/safe-and-secure-solutions-234" target="_blank">SAFE AND SECURE SOLUTIONS (Tumkur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sagar-enterprises-235" target="_blank">Sagar Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sahni-enperprises-236" target="_blank">Sahni Enperprises,</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/saini-sadhu-computer-point-237" target="_blank">Saini Sadhu Computer Point</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/saini-sadhu-computer-point-238" target="_blank">Saini Sadhu Computer Point (Bharatpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sanjay-telecom-239" target="_blank">Sanjay Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sd-computronix-240" target="_blank">SD COMPUTRONIX</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sg-telecare-private-limited-241" target="_blank">Sg Telecare Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shidhi-vinayak-enterprises-242" target="_blank">Shidhi Vinayak Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shivam-enterprises-243" target="_blank">Shivam Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shree-bhavani-systems-244" target="_blank">Shree Bhavani Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shree-ninja-electronics-245" target="_blank">Shree Ninja Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shree-sai-enterprises-246" target="_blank">Shree Sai Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shri-computing-247" target="_blank">Shri Computing</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shri-computing-248" target="_blank">Shri Computing (Jaipur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shri-sai-telecom-and-laptop-249" target="_blank">SHRI SAI TELECOM AND LAPTOP</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shriram-neotech-250" target="_blank">Shriram Neotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/shyama-international-251" target="_blank">Shyama International</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/siddham-multi-services-6" target="_blank">Siddham Multi Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/siddham-multi-services-252" target="_blank">SIDDHAM MULTI SERVICES</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/silicon-computer-services-253" target="_blank">Silicon Computer Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/skypro-technologies-20" target="_blank">Skypro Technologies</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/skypro-technologies-pvt-ltd-254" target="_blank">Skypro Technologies Pvt Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/smart-link-255" target="_blank">Smart Link</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/smart-service-256" target="_blank">Smart Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/soft-innovations-257" target="_blank">Soft Innovations</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/soft-innovations-258" target="_blank">Soft Innovations (Udhampur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/solid-tech-india-computer-serviced-pvt-ltd-259" target="_blank">Solid Tech India Computer Serviced Pvt Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/solid-tech-india-computer-serviced-pvt-ltd-260" target="_blank">Solid Tech India Computer Serviced Pvt Ltd (Surat)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/solo-comp-tele-services-261" target="_blank">Solo Comp & Tele Services</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/solution-care-262" target="_blank">Solution Care</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/spectrum-technology-263" target="_blank">Spectrum Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sreevani-traders-264" target="_blank">Sreevani Traders</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sri-jishnu-communication-265" target="_blank">SRI JISHNU COMMUNICATION</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sri-jishnu-communications-266" target="_blank">Sri Jishnu Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sri-shubham-communications-267" target="_blank">Sri Shubham Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/srishti-enterprises-268" target="_blank">Srishti Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/srishti-enterprises-269" target="_blank">SRISHTI ENTERPRISES (Ranchi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ss-marketers-270" target="_blank">Ss Marketers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/ss-telecom-271" target="_blank">Ss Telecom</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/sss-infotech-272" target="_blank">Sss Infotech</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/star-enterprises-7" target="_blank">Star Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/star-enterprises-273" target="_blank">Star Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/star-info-service-274" target="_blank">Star Info Service</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/subham-computers-275" target="_blank">Subham Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/subham-technology-276" target="_blank">SUBHAM TECHNOLOGY</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/surface-mount-technology-277" target="_blank">Surface Mount Technology</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/syscomp-electra-278" target="_blank">Syscomp Electra</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/syscomp-electra-279" target="_blank">Syscomp Electra (North 24 Parganas)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tamanna-enterprises-280" target="_blank">Tamanna Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tech-max-solutions-281" target="_blank">Tech Max Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/techmax-solutions-13" target="_blank">Techmax Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/techmax-solutions-282" target="_blank">Techmax Solutions</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/techmax-solutions-283" target="_blank">Techmax Solutions (Bangalore)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/techmax-solutions-arekere-21" target="_blank">Techmax Solutions-Arekere</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/technics-info-systems-22" target="_blank">Technics Info Systems</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/techno-service-zone-8" target="_blank">TECHNO SERVICE ZONE</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/techwings-284" target="_blank">Techwings</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/the-compu-world-285" target="_blank">THE COMPU WORLD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/the-monster-it-286" target="_blank">The Monster It</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tirupati-enterprises-287" target="_blank">Tirupati Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/topline-computers-288" target="_blank">Topline Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/topserv-infotech-pvt-ltd-289" target="_blank">TOPSERV INFOTECH Pvt LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/topserv-infotech-pvt-ltd-290" target="_blank">TOPSERV INFOTECH PVT LTD,</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/total-system-solution-291" target="_blank">Total System Solution</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tvs-electronics-limited-292" target="_blank">Tvs Electronics Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tvs-electronics-limited-293" target="_blank">Tvs Electronics Limited (Jamshedpur)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tvs-electronics-limited-295" target="_blank">Tvs Electronics Limited (Mumbai)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tvs-electronics-limited-296" target="_blank">Tvs Electronics Limited (New Delhi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tvs-electronics-limited-294" target="_blank">Tvs Electronics Limited (Ranchi)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tvs-electronics-ltd-23" target="_blank">TVS Electronics LTD</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/tvs-electronics-ltd-297" target="_blank">TVS Electronics Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/unitech-computers-298" target="_blank">Unitech Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/unitech-computers-299" target="_blank">Unitech Computers (Nashik)</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/v-connect-300" target="_blank">V Connect</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/v-care-computers-301" target="_blank">V-Care Computers</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/veer-laptop-service-center-302" target="_blank">Veer Laptop Service Center</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/vibhave-communications-303" target="_blank">Vibhave Communications</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/vidya-enterprises-304" target="_blank">Vidya Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/vinay-enterprises-305" target="_blank">Vinay Enterprises</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/vision-vibes-technologies-pvt-ltd-306" target="_blank">Vision Vibes Technologies Pvt. Ltd</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/waves-electronics-307" target="_blank">Waves Electronics</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/welkin-marketing-company-9" target="_blank">Welkin Marketing Company</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/welkin-marketing-company-308" target="_blank">Welkin Marketing Company</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/wise-machines-private-limited-309" target="_blank">Wise Machines Private Limited</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/xad-infotech-solutions-310" target="_blank">XaD?Infotech Solutions.</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/xcellvice-24" target="_blank">Xcellvice</a>
            <a class="service-link" href="https://www.thiyagi.com/service-center/dell/zauafshan-services-311" target="_blank">Zauafshan Services</a>
        </div>
    </div>
</body>
<?php include '../../footer.php'; ?>
</html>