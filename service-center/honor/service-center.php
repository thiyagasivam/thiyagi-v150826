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
    error_log("Honor service center: Empty slug");
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /service-center/honor/');
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

    // Query the honorservicecenter table
    $stmt = $pdo->prepare("
        SELECT slug, shop_name, address, phonenumber
        FROM honorservicecenter
        WHERE slug = ?
    ");
    
    $stmt->execute([$slug]);
    $center = $stmt->fetch();

    if (!$center) {
        error_log("Honor service center not found: " . $slug);
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: /service-center/honor/');
        exit;
    }

    // Enhanced content with professional details
    $center['email'] = 'customersupport@psavglobaltech.com';
    $center['page_title'] = $center['shop_name'] . ' | Honor Authorized Service Center Near Me 2026 - Expert Smartphone Repair';
    $center['about'] = $center['shop_name'] .' is a premium authorized Honor service center Near Me 2026 providing expert repairs, genuine parts, and comprehensive maintenance for all Honor smartphones and devices. Our certified technicians ensure quality service with warranty coverage.';
    
    $center['services'] = [
        'Screen & Display Replacement',
        'Battery Replacement & Health Check',
        'Charging Port & Cable Repair',
        'Software Updates & Optimization',
        'Camera Module Repair',
        'Water Damage Recovery',
        'Speaker & Audio System Repair',
        'Motherboard & Hardware Diagnostics',
        'Warranty & Insurance Claims',
        'Data Recovery & Transfer',
        'Performance Optimization',
        'Virus & Malware Removal'
    ];
    
    $center['opening_hours'] = [
        'Monday to Friday' => '9:00 AM - 7:00 PM',
        'Saturday' => '9:00 AM - 6:00 PM',
        'Sunday' => '10:00 AM - 4:00 PM',
        'Public Holidays' => 'Call for availability'
    ];
    
    $center['brands_serviced'] = [
        'Honor Magic 6 Pro',
        'Honor Magic 5 Series',
        'Honor X9b & X Series',
        'Honor 90 Series',
        'Honor 70 Series',
        'Honor View 20/30',
        'Honor Play Series',
        'Honor Tablets'
    ];

    $center['features'] = [
        'Free Diagnostics & Consultation',
        'Genuine Honor Parts Only',
        'Certified Technician Team',
        'Express Repair Service',
        'Warranty Coverage',
        'Quality Assurance Testing',
        'Data Protection & Privacy',
        'Competitive Pricing'
    ];

    $center['repair_time'] = [
        'Screen Replacement' => '30-60 minutes',
        'Battery Replacement' => '45-90 minutes',
        'Software Issues' => '15-30 minutes',
        'Water Damage Assessment' => '2-24 hours',
        'Major Hardware Repair' => '1-3 days'
    ];

// Get current page URL for breadcrumb schema
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
            "name" => "Honor Service Centers",
            "item" => "https://www.thiyagi.com/service-center/honor/"
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
            "name" => $center['shop_name'] . " Honor Authorized Service Center",
            "item" => $currentUrl
        ]
    ]
];

} catch (PDOException $e) {
    header("HTTP/1.0 500 Internal Server Error");
    die("Service unavailable. Please try again later.");
}
?>

    <meta name="description" content="<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?> Professional Honor smartphone repair with genuine parts, expert technicians, and warranty coverage. ⭐ Rated 4.8/5 stars.">
    <meta name="keywords" content="Honor service center near me 2026, <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>, Honor smartphone repair, mobile repair expert, screen replacement, battery replacement, Honor Magic repair, Honor X series service, authorized Honor service, genuine Honor parts, Honor warranty repair">
    <meta name="author" content="Honor Device Co. Ltd">
        <meta name="theme-color" content="#1e88e5">
    
    <!-- Enhanced Open Graph Tags -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="Professional Honor smartphone repair services with genuine parts and expert technicians. Book your repair today! ⭐ 4.8/5 rating">
    <meta property="og:url" content="<?= htmlspecialchars($currentUrl, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="https://images.unsplash.com/photo-1556656793-08538906a9f8?w=1200&h=630&fit=crop">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Honor Service Centers">
    <meta property="business:contact_data:street_address" content="<?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="business:contact_data:locality" content="India">
    <meta property="business:contact_data:phone_number" content="<?= htmlspecialchars($center['phonenumber'], ENT_QUOTES, 'UTF-8') ?>">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="Professional Honor smartphone repair with genuine parts ⭐ 4.8/5 rated service center">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1556656793-08538906a9f8?w=1200&h=630&fit=crop">
    
<title><?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?></title>
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    <?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "<?= htmlspecialchars($currentUrl, ENT_QUOTES, 'UTF-8') ?>",
        "name": "<?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>",
        "description": "<?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>",
        "url": "<?= htmlspecialchars($currentUrl, ENT_QUOTES, 'UTF-8') ?>",
        "telephone": "<?= htmlspecialchars($center['phonenumber'], ENT_QUOTES, 'UTF-8') ?>",
        "email": "<?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>",
        "image": "https://images.unsplash.com/photo-1556656793-08538906a9f8?w=800&h=600&fit=crop&crop=center",
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
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "19:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "09:00",
                "closes": "18:00"
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
            "name": "Honor",
            "url": "https://www.hihonor.com"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Honor Smartphone Repair Services",
            "itemListElement": [
                <?php 
                $service_schemas = [];
                foreach ($center['services'] as $index => $service) {
                    $service_schemas[] = '{
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "' . htmlspecialchars($service, ENT_QUOTES, 'UTF-8') . '",
                            "serviceType": "Electronics Repair",
                            "provider": {
                                "@type": "Organization",
                                "name": "' . htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') . '"
                            }
                        }
                    }';
                }
                echo implode(',', $service_schemas);
                ?>
            ]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.6",
            "reviewCount": "187",
            "bestRating": "5",
            "worstRating": "1"
        },
        "priceRange": "₹₹",
        "paymentAccepted": ["Cash", "Credit Card", "Debit Card", "UPI", "Net Banking"],
        "currenciesAccepted": "INR"
    }
    </script>

    <!-- FAQ Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What makes <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> the best choice for Honor repairs?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> is an authorized Honor service center with certified technicians, genuine parts, and 6-month warranty. We provide same-day repairs for most issues with transparent pricing and excellent customer service."
                }
            },
            {
                "@type": "Question",
                "name": "Where is <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> located?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our service center is conveniently located at <?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?>. We're easily accessible by public transport and offer free pickup service within 5km radius."
                }
            },
            {
                "@type": "Question",
                "name": "What are the operating hours of <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We are open Monday to Saturday from 10:00 AM to 8:00 PM, and Sundays from 11:00 AM to 6:00 PM. We also offer express service appointments outside regular hours for urgent repairs."
                }
            },
            {
                "@type": "Question",
                "name": "How can I contact <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> for service?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can reach us at <?= !empty($center['phonenumber']) ? htmlspecialchars($center['phonenumber'], ENT_QUOTES, 'UTF-8') : 'our phone number' ?> or email us at <?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>. Walk-ins are welcome, or you can schedule an appointment for priority service."
                }
            },
            {
                "@type": "Question",
                "name": "What Honor device models does <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> service?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We service all Honor smartphone models including Honor 20, Honor 30, Honor 50, Honor Magic series, and older models. Our technicians are trained on all Honor devices and have access to genuine parts for comprehensive repairs."
                }
            },
            {
                "@type": "Question",
                "name": "Does <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> offer pickup and delivery service?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer free pickup and delivery service within 5km radius. For locations beyond that, nominal charges apply. Same-day pickup and next-day delivery available for most repairs."
                }
            },
            {
                "@type": "Question",
                "name": "How long does a typical Honor screen repair take?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most Honor screen repairs are completed within 30-60 minutes. Complex issues may require 2-3 hours. We provide accurate time estimates after initial diagnosis."
                }
            },
            {
                "@type": "Question",
                "name": "Do you use genuine Honor parts for repairs?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we exclusively use genuine Honor parts and high-quality OEM components. All parts come with manufacturer warranty and quality assurance."
                }
            },
            {
                "@type": "Question",
                "name": "What warranty do you provide on repairs?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide 6-month warranty on all repairs and parts. This covers manufacturing defects and workmanship issues. Water damage and physical damage are excluded."
                }
            },
            {
                "@type": "Question",
                "name": "Can you repair water-damaged Honor devices?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in water damage recovery for Honor devices. Success depends on the extent of damage and how quickly you bring it in. Immediate action increases recovery chances."
                }
            }
        ]
    }
    </script>

<title><?= htmlspecialchars($center['page_title'], ENT_QUOTES, 'UTF-8') ?></title>
    
    <!-- Modern CSS Framework -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --honor-primary: #1e88e5;
            --honor-secondary: #00acc1;
            --honor-accent: #ff7043;
            --honor-dark: #0d47a1;
            --honor-light: #e3f2fd;
            --honor-gradient: linear-gradient(135deg, #1e88e5 0%, #00acc1 100%);
            --shadow-soft: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-large: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        * { font-family: 'Inter', sans-serif; }
        
        .honor-gradient { background: var(--honor-gradient); }
        .honor-shadow { box-shadow: var(--shadow-soft); }
        .honor-shadow-md { box-shadow: var(--shadow-medium); }
        .honor-shadow-lg { box-shadow: var(--shadow-large); }
        
        .service-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-left: 4px solid var(--honor-primary);
        }
        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            border-left-color: var(--honor-accent);
        }
        
        .feature-icon {
            background: var(--honor-gradient);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .brand-badge {
            background: var(--honor-gradient);
            transition: all 0.3s ease;
        }
        .brand-badge:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-soft);
        }
        
        .hero-image {
            background: linear-gradient(rgba(30, 136, 229, 0.1), rgba(0, 172, 193, 0.1)),
                        url('https://images.unsplash.com/photo-1556656793-08538906a9f8?w=1920&h=1080&fit=crop&crop=center') center/cover;
        }
        
        .stats-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .timeline-item {
            position: relative;
            padding-left: 2rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: var(--honor-primary);
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(30, 136, 229, 0.2);
        }
        
        @media (max-width: 768px) {
            .hero-image { min-height: 300px; }
            .stats-grid { grid-template-columns: repeat(2, 1fr); gap: 1rem; }
            .container { padding-left: 1rem; padding-right: 1rem; }
            .text-3xl { font-size: 1.75rem; }
            .text-4xl { font-size: 2rem; }
            .text-5xl { font-size: 2.5rem; }
            
            /* Enhanced mobile navigation */
            .mobile-nav {
                position: fixed;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                background: var(--honor-gradient);
                border-radius: 50px;
                padding: 12px 24px;
                box-shadow: var(--shadow-large);
                z-index: 1000;
            }
            
            /* Mobile-friendly service cards */
            .service-card {
                padding: 1rem;
                margin-bottom: 1rem;
            }
            
            /* Improved touch targets */
            .service-card, .brand-badge, .stats-card {
                min-height: 44px;
                display: flex;
                align-items: center;
            }
        }
        
        @media (max-width: 640px) {
            .stats-grid { grid-template-columns: 1fr; }
            .hero-image { min-height: 250px; }
            
            /* Single column layout for mobile */
            .lg\\:grid-cols-2, .md\\:grid-cols-2, .md\\:grid-cols-3, .md\\:grid-cols-4 {
                grid-template-columns: 1fr;
            }
            
            /* Optimized spacing for small screens */
            .p-8 { padding: 1.5rem; }
            .lg\\:p-12 { padding: 1.5rem; }
            .space-y-12 > * + * { margin-top: 2rem; }
        }
        
        /* Progressive Web App features */
        @media (display-mode: standalone) {
            .hero-image { padding-top: env(safe-area-inset-top); }
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            :root {
                --honor-light: #1a365d;
                --shadow-soft: 0 4px 6px -1px rgba(255, 255, 255, 0.1), 0 2px 4px -1px rgba(255, 255, 255, 0.06);
            }
        }
        
        /* High contrast mode */
        @media (prefers-contrast: high) {
            .service-card {
                border: 2px solid var(--honor-primary);
            }
            
            .text-gray-700, .text-gray-600 {
                color: #000;
            }
        }
        
        /* Reduced motion preferences */
        @media (prefers-reduced-motion: reduce) {
            .animated-bg {
                animation: none;
                background: var(--honor-light);
            }
            
            .service-card, .stats-card, .timeline-item {
                transition: none;
            }
        }
        
        .animated-bg {
            background: linear-gradient(-45deg, #e3f2fd, #bbdefb, #90caf9, #64b5f6);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>

<body class="bg-gray-50 antialiased">
    <!-- Hero Section with Enhanced Design -->
    <section class="hero-image min-h-96 flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 via-blue-800/60 to-cyan-800/70"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full animate-pulse hidden md:block"></div>
        <div class="absolute bottom-10 right-10 w-16 h-16 bg-white/5 rounded-full animate-bounce hidden md:block"></div>
        
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div class="flex justify-center mb-6">
                    <div class="bg-white/20 p-4 rounded-full honor-shadow-lg">
                        <i class="fas fa-mobile-alt text-4xl"></i>
                    </div>
                </div>
                
                <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">
                    <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                    <span class="block text-xl md:text-2xl font-medium mt-2 text-blue-200">
                        <i class="fas fa-certificate mr-2"></i>Authorized Honor Service Center
                    </span>
                </h1>
                
                <p class="text-lg md:text-xl mb-8 text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    <?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>
                </p>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 stats-grid">
                    <div class="stats-card rounded-lg p-4 text-center honor-shadow">
                        <div class="text-2xl font-bold text-blue-600">4.6★</div>
                        <div class="text-sm text-gray-600">Customer Rating</div>
                    </div>
                    <div class="stats-card rounded-lg p-4 text-center honor-shadow">
                        <div class="text-2xl font-bold text-blue-600">187+</div>
                        <div class="text-sm text-gray-600">Happy Customers</div>
                    </div>
                    <div class="stats-card rounded-lg p-4 text-center honor-shadow">
                        <div class="text-2xl font-bold text-blue-600">30min</div>
                        <div class="text-sm text-gray-600">Express Service</div>
                    </div>
                    <div class="stats-card rounded-lg p-4 text-center honor-shadow">
                        <div class="text-2xl font-bold text-blue-600">100%</div>
                        <div class="text-sm text-gray-600">Genuine Parts</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-4 py-8 space-y-12">
        <!-- Contact & Hours Section -->
        <section id="contact" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Contact Information -->
            <div class="bg-white rounded-2xl honor-shadow-md p-8">
                <div class="flex items-center mb-6">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-3 rounded-full mr-4">
                        <i class="fas fa-address-card text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900">Contact Information</h2>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-start group">
                        <div class="bg-gray-100 group-hover:bg-blue-100 p-3 rounded-lg mr-4 transition-colors">
                            <i class="fas fa-map-marker-alt text-blue-600 text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 mb-1">Service Center Address</h3>
                            <p class="text-gray-700 leading-relaxed"><?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </div>
                    
                    <?php if (!empty($center['phonenumber'])): ?>
                    <div class="flex items-start group">
                        <div class="bg-gray-100 group-hover:bg-green-100 p-3 rounded-lg mr-4 transition-colors">
                            <i class="fas fa-phone-alt text-green-600 text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 mb-1">Phone Number</h3>
                            <p class="text-gray-700 text-lg"><?= htmlspecialchars($center['phonenumber'], ENT_QUOTES, 'UTF-8') ?></p>
                            <p class="text-sm text-gray-500">Service Helpline & Support</p>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <div class="flex items-start group">
                        <div class="bg-gray-100 group-hover:bg-purple-100 p-3 rounded-lg mr-4 transition-colors">
                            <i class="fas fa-envelope text-purple-600 text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 mb-1">Email Support</h3>
                            <a href="mailto:<?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>" 
                               class="text-blue-600 hover:text-blue-800 hover:underline transition-colors">
                                <?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>
                            </a>
                            <p class="text-sm text-gray-500">Technical Support & Inquiries</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Hours -->
            <div id="hours" class="bg-white rounded-2xl honor-shadow-md p-8">
                <div class="flex items-center mb-6">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 p-3 rounded-full mr-4">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900">Service Hours</h2>
                </div>
                
                <div class="space-y-4">
                    <?php foreach ($center['opening_hours'] as $day => $hours): ?>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100 last:border-b-0">
                        <span class="font-medium text-gray-900"><?= htmlspecialchars($day, ENT_QUOTES, 'UTF-8') ?></span>
                        <span class="text-gray-700 font-mono"><?= htmlspecialchars($hours, ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="mt-6 p-4 bg-blue-50 border-l-4 border-blue-400 rounded-r-lg">
                    <div class="flex items-center">
                        <i class="fas fa-info-circle text-blue-600 mr-3"></i>
                        <div>
                            <p class="text-blue-800 font-medium">Quick Service Available</p>
                            <p class="text-blue-700 text-sm">Express repairs completed in 30-60 minutes</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section with Enhanced Content -->
        <section class="bg-white rounded-2xl honor-shadow-md p-8 lg:p-12">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        About Our Honor Service Center
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-cyan-500 mx-auto rounded-full"></div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?w=600&h=400&fit=crop&crop=center" 
                             alt="Professional smartphone repair service" 
                             class="rounded-xl honor-shadow-lg w-full h-64 object-cover">
                    </div>
                    
                    <div class="space-y-6">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            <?= htmlspecialchars($center['about'], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                        
                        <div class="space-y-4">
                            <h3 class="text-xl font-semibold text-gray-900">Why Choose Us?</h3>
                            <?php foreach ($center['features'] as $feature): ?>
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span class="text-gray-700"><?= htmlspecialchars($feature, ENT_QUOTES, 'UTF-8') ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Grid with Modern Cards -->
        <section id="services" class="bg-white rounded-2xl honor-shadow-md p-8 lg:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Our Professional Services
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Comprehensive smartphone repair and maintenance services with genuine parts and expert technicians
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($center['services'] as $index => $service): ?>
                <div class="service-card bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-3 rounded-lg mr-4">
                            <i class="fas fa-<?= ['mobile-alt', 'battery-half', 'plug', 'sync-alt', 'camera', 'tint', 'volume-up', 'microchip', 'shield-alt', 'hdd', 'tachometer-alt', 'bug'][$index % 12] ?> text-white"></i>
                        </div>
                        <h3 class="font-semibold text-gray-900"><?= htmlspecialchars($service, ENT_QUOTES, 'UTF-8') ?></h3>
                    </div>
                    
                    <?php if (isset($center['repair_time'][explode(' &', $service)[0]])): ?>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-clock mr-2"></i>
                        <span>Typical time: <?= $center['repair_time'][explode(' &', $service)[0]] ?></span>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Honor Devices Supported -->
        <section class="animated-bg rounded-2xl honor-shadow-md p-8 lg:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Honor Devices We Service
                </h2>
                <p class="text-gray-700 max-w-2xl mx-auto">
                    Specialized support for all Honor smartphone series with genuine parts and factory-trained technicians
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php foreach ($center['brands_serviced'] as $brand): ?>
                <div class="brand-badge text-white px-6 py-4 rounded-xl text-center font-medium honor-shadow">
                    <i class="fas fa-mobile-alt mb-2 text-lg block"></i>
                    <?= htmlspecialchars($brand, ENT_QUOTES, 'UTF-8') ?>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Service Process Timeline -->
        <section class="bg-white rounded-2xl honor-shadow-md p-8 lg:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Our Service Process
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Simple, transparent, and efficient repair process designed for your convenience
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-8">
                    <div class="timeline-item">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">1. Free Diagnosis</h3>
                        <p class="text-gray-600">Comprehensive device assessment and transparent quote</p>
                    </div>
                    <div class="timeline-item">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">2. Approval & Repair</h3>
                        <p class="text-gray-600">Get your approval and begin professional repair with genuine parts</p>
                    </div>
                    <div class="timeline-item">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">3. Quality Testing</h3>
                        <p class="text-gray-600">Rigorous testing to ensure optimal performance and functionality</p>
                    </div>
                    <div class="timeline-item">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">4. Pickup & Warranty</h3>
                        <p class="text-gray-600">Device ready with warranty coverage and satisfaction guarantee</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shop Specific FAQ Section -->
        <section class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-2xl honor-shadow-md p-8 lg:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    About <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Frequently asked questions about our <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> service center
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-white rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(1)">
                        <span class="font-semibold text-gray-900">What makes <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> the best choice for Honor repairs?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-1"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-1">
                        <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> is an authorized Honor service center with certified technicians, genuine parts, and 6-month warranty. We provide same-day repairs for most issues with transparent pricing and excellent customer service.
                    </div>
                </div>
                
                <div class="bg-white rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(2)">
                        <span class="font-semibold text-gray-900">Where is <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> located?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-2"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-2">
                        Our service center is conveniently located at <?= htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') ?>. We're easily accessible by public transport and offer free pickup service within 5km radius.
                    </div>
                </div>
                
                <div class="bg-white rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(3)">
                        <span class="font-semibold text-gray-900">What are the operating hours of <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?>?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-3"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-3">
                        We are open Monday to Saturday from 10:00 AM to 8:00 PM, and Sundays from 11:00 AM to 6:00 PM. We also offer express service appointments outside regular hours for urgent repairs.
                    </div>
                </div>
                
                <div class="bg-white rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(4)">
                        <span class="font-semibold text-gray-900">How can I contact <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> for service?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-4"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-4">
                        You can reach us at <?= !empty($center['phonenumber']) ? htmlspecialchars($center['phonenumber'], ENT_QUOTES, 'UTF-8') : 'our phone number' ?> or email us at <?= htmlspecialchars($center['email'], ENT_QUOTES, 'UTF-8') ?>. Walk-ins are welcome, or you can schedule an appointment for priority service.
                    </div>
                </div>
                
                <div class="bg-white rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(5)">
                        <span class="font-semibold text-gray-900">What Honor device models does <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> service?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-5"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-5">
                        We service all Honor smartphone models including Honor 20, Honor 30, Honor 50, Honor Magic series, and older models. Our technicians are trained on all Honor devices and have access to genuine parts for comprehensive repairs.
                    </div>
                </div>
                
                <div class="bg-white rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(6)">
                        <span class="font-semibold text-gray-900">Does <?= htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') ?> offer pickup and delivery service?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-6"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-6">
                        Yes, we offer free pickup and delivery service within 5km radius. For locations beyond that, nominal charges apply. Same-day pickup and next-day delivery available for most repairs.
                    </div>
                </div>
            </div>
        </section>

        <!-- General FAQ Section -->
        <section class="bg-white rounded-2xl honor-shadow-md p-8 lg:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Quick answers to common questions about Honor device repairs and services
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-gray-50 rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition-colors" onclick="toggleFAQ(7)">
                        <span class="font-semibold text-gray-900">How long does a typical Honor screen repair take?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-7"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-7">
                        Most Honor screen repairs are completed within 30-60 minutes. Complex issues may require 2-3 hours. We provide accurate time estimates after initial diagnosis.
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition-colors" onclick="toggleFAQ(8)">
                        <span class="font-semibold text-gray-900">Do you use genuine Honor parts for repairs?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-8"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-8">
                        Yes, we exclusively use genuine Honor parts and high-quality OEM components. All parts come with manufacturer warranty and quality assurance.
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition-colors" onclick="toggleFAQ(9)">
                        <span class="font-semibold text-gray-900">What warranty do you provide on repairs?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-9"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-9">
                        We provide 6-month warranty on all repairs and parts. This covers manufacturing defects and workmanship issues. Water damage and physical damage are excluded.
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg honor-shadow">
                    <button class="w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition-colors" onclick="toggleFAQ(10)">
                        <span class="font-semibold text-gray-900">Can you repair water-damaged Honor devices?</span>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform" id="icon-10"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-700" id="answer-10">
                        Yes, we specialize in water damage recovery for Honor devices. Success depends on the extent of damage and how quickly you bring it in. Immediate action increases recovery chances.
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Areas & Coverage -->
        <section id="location" class="bg-white rounded-2xl honor-shadow-md p-8 lg:p-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Service Coverage Areas
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We serve customers across multiple locations with pickup and delivery options available
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=400&fit=crop&crop=center" 
                         alt="Service coverage map" 
                         class="rounded-xl honor-shadow-lg w-full h-64 object-cover">
                </div>
                
                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <i class="fas fa-map-marker-alt text-blue-600 text-2xl mb-2"></i>
                            <h4 class="font-semibold text-gray-900">Primary Location</h4>
                            <p class="text-sm text-gray-600">Walk-in service available</p>
                        </div>
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <i class="fas fa-truck text-green-600 text-2xl mb-2"></i>
                            <h4 class="font-semibold text-gray-900">Pickup Service</h4>
                            <p class="text-sm text-gray-600">Within 5km radius</p>
                        </div>
                        <div class="text-center p-4 bg-purple-50 rounded-lg">
                            <i class="fas fa-shipping-fast text-purple-600 text-2xl mb-2"></i>
                            <h4 class="font-semibold text-gray-900">Express Delivery</h4>
                            <p class="text-sm text-gray-600">Same day return</p>
                        </div>
                        <div class="text-center p-4 bg-orange-50 rounded-lg">
                            <i class="fas fa-headset text-orange-600 text-2xl mb-2"></i>
                            <h4 class="font-semibold text-gray-900">Remote Support</h4>
                            <p class="text-sm text-gray-600">Software troubleshooting</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="honor-gradient rounded-2xl honor-shadow-lg p-8 lg:p-12 text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Fix Your Honor Device?</h2>
            <p class="text-xl mb-8 text-blue-100">Visit us today for professional service and genuine parts</p>
            
            <div class="grid md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                <div class="bg-white/20 p-6 rounded-xl backdrop-blur-sm">
                    <i class="fas fa-clock text-2xl mb-3"></i>
                    <h3 class="font-semibold mb-2">Walk-in Service</h3>
                    <p class="text-blue-100">No appointment needed for quick diagnostics</p>
                </div>
                <div class="bg-white/20 p-6 rounded-xl backdrop-blur-sm">
                    <i class="fas fa-calendar-check text-2xl mb-3"></i>
                    <h3 class="font-semibold mb-2">Schedule Appointment</h3>
                    <p class="text-blue-100">Book ahead for complex repairs and convenience</p>
                </div>
            </div>
        </section>
    </main>

    <?php include '../../footer.php'; ?>
    
    <!-- Mobile Navigation -->
    <div class="mobile-nav md:hidden">
        <div class="flex items-center space-x-4 text-white text-sm">
            <a href="#contact" class="flex flex-col items-center">
                <i class="fas fa-phone text-lg"></i>
                <span class="text-xs">Call</span>
            </a>
            <a href="#services" class="flex flex-col items-center">
                <i class="fas fa-tools text-lg"></i>
                <span class="text-xs">Services</span>
            </a>
            <a href="#location" class="flex flex-col items-center">
                <i class="fas fa-map-marker-alt text-lg"></i>
                <span class="text-xs">Location</span>
            </a>
            <a href="#hours" class="flex flex-col items-center">
                <i class="fas fa-clock text-lg"></i>
                <span class="text-xs">Hours</span>
            </a>
        </div>
    </div>
    
    <script>
        // FAQ Toggle Function
        function toggleFAQ(index) {
            const answer = document.getElementById(`answer-${index}`);
            const icon = document.getElementById(`icon-${index}`);
            
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                answer.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Add smooth scrolling and interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Add loading animation to service cards
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Animate service cards
            document.querySelectorAll('.service-card').forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                observer.observe(card);
            });

            // Animate stats cards
            document.querySelectorAll('.stats-card').forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'scale(0.9)';
                card.style.transition = `opacity 0.6s ease ${index * 0.15}s, transform 0.6s ease ${index * 0.15}s`;
                observer.observe(card);
            });

            // Animate timeline items
            document.querySelectorAll('.timeline-item').forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                item.style.transition = `opacity 0.6s ease ${index * 0.2}s, transform 0.6s ease ${index * 0.2}s`;
                observer.observe(item);
            });

            // Animate FAQ sections
            document.querySelectorAll('.bg-white.rounded-lg, .bg-gray-50.rounded-lg').forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(10px)';
                item.style.transition = `opacity 0.4s ease ${index * 0.05}s, transform 0.4s ease ${index * 0.05}s`;
                observer.observe(item);
            });

            // Add click tracking for analytics (if needed)
            document.addEventListener('click', function(e) {
                if (e.target.closest('.service-card') || e.target.closest('.brand-badge')) {
                    // You can add analytics tracking here
                    console.log('Service interaction tracked');
                }
            });

            // Mobile-friendly touch interactions
            if ('ontouchstart' in window) {
                document.querySelectorAll('.service-card, .brand-badge').forEach(element => {
                    element.addEventListener('touchstart', function() {
                        this.style.transform = 'scale(0.98)';
                    });
                    
                    element.addEventListener('touchend', function() {
                        this.style.transform = 'scale(1)';
                    });
                });
            }

            // Lazy loading for images
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src || img.src;
                        img.classList.remove('opacity-0');
                        img.classList.add('opacity-100');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img').forEach(img => {
                img.classList.add('transition-opacity', 'duration-300');
                if (img.complete) {
                    img.classList.add('opacity-100');
                } else {
                    img.classList.add('opacity-0');
                    imageObserver.observe(img);
                }
            });
        });
    </script>
</body>
</html>
