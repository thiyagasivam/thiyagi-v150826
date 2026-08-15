<?php include '../../header.php'; ?>
<?php
// Database connection
$host = "127.0.0.1:3306";
$user = "u662933183_servicecenter";
$password = "e^?al5veVS6";
$database = "u662933183_servicecenter";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search parameter
$search = isset($_GET['search']) ? $conn->real_escape_string(trim($_GET['search'])) : '';

// Build query for Infinix service centers
$sql = "SELECT slug, shop_name, address FROM infinixservicecenter";
if (!empty($search)) {
    $sql .= " WHERE shop_name LIKE '%$search%' OR address LIKE '%$search%'";
}
$sql .= " ORDER BY shop_name ASC";

$result = $conn->query($sql);
$serviceCenters = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $serviceCenters[] = $row;
    }
}
$conn->close();
?>

    <meta name="description" content="Find authorized Infinix service centers near me 2026. Expert smartphone repair services, genuine parts, warranty support. Get professional service for Infinix Smart, Note, Hot & Zero series devices.">
    <meta name="keywords" content="Infinix service center near me 2026, Infinix authorized service center, smartphone repair, mobile repair, Infinix Smart series, Infinix Note series, Infinix Hot series, Infinix Zero series, screen replacement, battery replacement">
    <meta name="author" content="Infinix Mobility">
        <meta property="og:title" content="Infinix Authorized Service Centers Near Me 2026">
    <meta property="og:description" content="Find authorized Infinix service centers near you. Expert smartphone repair services with genuine parts and warranty support for all Infinix devices.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="/assets/images/infinix-service-centers.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Infinix Authorized Service Centers Near Me 2026">
    <meta name="twitter:description" content="Find authorized Infinix service centers near you. Expert smartphone repair services with genuine parts and warranty support.">
<title>Infinix Authorized Service Centers Near Me 2026</title>
    <style>
        .infinix-gradient {
            background: linear-gradient(135deg, #e6f7ff 0%, #f0f8ff 100%);
        }
        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .infinix-primary {
            color: #0066cc; /* Infinix blue */
        }
        .infinix-bg-primary {
            background-color: #0066cc;
        }
        .infinix-bg-secondary {
            background-color: #ff6600; /* Infinix orange */
        }
    </style>
    
    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Infinix Authorized Service Centers Near Me 2026",
        "description": "Find authorized Infinix service centers near you. Expert smartphone repair services with genuine parts and warranty support for all Infinix devices.",
        "url": "<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>",
        "mainEntity": {
            "@type": "ItemList",
            "name": "Infinix Service Centers",
            "numberOfItems": <?= count($serviceCenters) ?>,
            "itemListElement": [
                <?php 
                $schema_items = [];
                foreach ($serviceCenters as $index => $center) {
                    $schema_items[] = '{
                        "@type": "ListItem",
                        "position": ' . ($index + 1) . ',
                        "item": {
                            "@type": "LocalBusiness",
                            "name": "' . htmlspecialchars($center['shop_name'], ENT_QUOTES, 'UTF-8') . '",
                            "description": "Authorized Infinix service center providing expert smartphone repair services",
                            "url": "/service-center/infinix/' . htmlspecialchars($center['slug'], ENT_QUOTES, 'UTF-8') . '",
                            "address": {
                                "@type": "PostalAddress",
                                "streetAddress": "' . htmlspecialchars($center['address'], ENT_QUOTES, 'UTF-8') . '",
                                "addressCountry": "IN"
                            },
                            "serviceType": "Electronics Repair Service",
                            "brand": {
                                "@type": "Brand",
                                "name": "Infinix"
                            }
                        }
                    }';
                }
                echo implode(',', $schema_items);
                ?>
            ]
        },
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Service Centers",
                    "item": "/service-center/"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Infinix Service Centers",
                    "item": "/service-center/infinix/"
                }
            ]
        }
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
        "description": "Infinix is a smartphone brand offering cutting-edge technology and innovative designs for young consumers worldwide.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-11-12345678",
            "contactType": "Customer Service",
            "availableLanguage": ["English", "Hindi"]
        },
        "sameAs": [
            "https://www.facebook.com/InfinixIndia",
            "https://twitter.com/InfinixIndia",
            "https://www.instagram.com/infinixindia",
            "https://www.youtube.com/c/InfinixSmartphone"
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Infinix Device Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Screen Replacement",
                        "serviceType": "Electronics Repair"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Battery Replacement",
                        "serviceType": "Electronics Repair"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Software Updates",
                        "serviceType": "Electronics Maintenance"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Warranty Services",
                        "serviceType": "Electronics Support"
                    }
                }
            ]
        }
    }
    </script>
    
    <!-- Website Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Infinix Service Centers Directory",
        "url": "<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>",
        "description": "Comprehensive directory of authorized Infinix service centers across India",
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>?search={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-mobile-alt infinix-primary text-2xl"></i>
                    <h1 class="text-xl font-bold text-gray-800">Infinix Service Centers Near Me 2026</h1>
                </div>
                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">
                    <i class="fas fa-store mr-1"></i>
                    <?php echo count($serviceCenters); ?> Locations
                </span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="infinix-gradient">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Find an Authorized Infinix Service Center Near Me 2026</h2>
                <p class="text-gray-600 mb-6">Get professional service for your Infinix smartphones by certified technicians</p>
                
                <!-- Search Form -->
                <form method="GET" class="mb-6">
                    <div class="relative max-w-xl mx-auto">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input 
                            type="text" 
                            name="search" 
                            value="<?= htmlspecialchars($search) ?>" 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" 
                            placeholder="Search by shop name, location or nearby landmark...">
                        <button 
                            type="submit" 
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 infinix-bg-primary text-white px-4 py-1.5 rounded-md text-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                            Search
                        </button>
                    </div>
                </form>
                
                <div class="flex flex-wrap justify-center gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-mobile-alt mr-1"></i> Smartphones
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-tablet-alt mr-1"></i> Tablets
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-tools mr-1"></i> Repairs
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-wrench mr-1"></i> Maintenance
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <?php if (!empty($serviceCenters)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($serviceCenters as $center): ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 service-card">
                        <div class="p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 infinix-bg-primary p-3 rounded-full text-white">
                                    <i class="fas fa-mobile-alt text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800"><?= htmlspecialchars($center['shop_name']) ?></h3>
                                    <span class="inline-flex items-center mt-1 px-2 py-0.5 rounded text-xs font-medium infinix-bg-primary text-white">
                                        <i class="fas fa-check-circle mr-1"></i> Authorized
                                    </span>
                                </div>
                            </div>
                            
                            <div class="mt-4 border-t border-gray-200 pt-4">
                                <div class="flex items-start">
                                    <i class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3"></i>
                                    <p class="text-gray-600"><?= nl2br(htmlspecialchars($center['address'])) ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 px-6 py-4 flex justify-between">
                            <a href="/service-center/infinix/<?= htmlspecialchars($center['slug']) ?>" class="text-sm font-medium text-gray-700 hover:text-gray-900">
                                <i class="fas fa-info-circle mr-1"></i> Details
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-12">
                <i class="fas fa-store-slash text-4xl text-gray-400 mb-4"></i>
                <h3 class="text-lg font-medium text-gray-900">No service centers found</h3>
                <p class="mt-1 text-sm text-gray-500">
                    <?php if (!empty($search)): ?>
                        No centers match your search for "<?= htmlspecialchars($search) ?>"
                    <?php else: ?>
                        No service centers available at this time
                    <?php endif; ?>
                </p>
                <?php if (!empty($search)): ?>
                    <a href="?" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white infinix-bg-primary hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        <i class="fas fa-undo mr-2"></i> Clear search
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </main>

    <?php include '../../footer.php'; ?>
</body>
</html>