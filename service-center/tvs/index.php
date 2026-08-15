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

// Build query for TVS service centers
$sql = "SELECT slug, shop_name, address, phone_number, maps FROM tvsmotorservicecenter";
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

<meta name="description" content="Find authorized Tvs service centers across India. Get contact details, addresses, and phone numbers for genuine Tvs repair and support services.">
<title>TVS Authorized Service Centers Near Me 2026</title>
    <style>
        .tvs-gradient {
            background: linear-gradient(135deg, #f5f5f7 0%, #e1e1e6 100%);
        }
        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .tvs-primary {
            color: #E11B22; /* TVS red */
        }
        .tvs-bg-primary {
            background-color: #E11B22;
        }
        .tvs-bg-secondary {
            background-color: #000000; /* TVS black */
        }
    </style>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-motorcycle tvs-primary text-2xl"></i>
                    <h1 class="text-xl font-bold text-gray-800">TVS Service Centers</h1>
                </div>
                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">
                    <i class="fas fa-store mr-1"></i>
                    <?php echo count($serviceCenters); ?> Locations
                </span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="tvs-gradient">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Find an Authorized TVS Service Center Near Me 2026</h2>
                <p class="text-gray-600 mb-6">Get professional service for your TVS vehicles by certified technicians</p>
                
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
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-red-600 focus:border-transparent" 
                            placeholder="Search by shop name or location...">
                        <button 
                            type="submit" 
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 tvs-bg-primary text-white px-4 py-1.5 rounded-md text-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600">
                            Search
                        </button>
                    </div>
                </form>
                
                <div class="flex flex-wrap justify-center gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-motorcycle mr-1"></i> Motorcycles
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-scooter mr-1"></i> Scooters
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-tools mr-1"></i> Maintenance
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-car-crash mr-1"></i> Repairs
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
                                <div class="flex-shrink-0 tvs-bg-primary p-3 rounded-full text-white">
                                    <i class="fas fa-motorcycle text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800"><?= htmlspecialchars($center['shop_name']) ?></h3>
                                    <span class="inline-flex items-center mt-1 px-2 py-0.5 rounded text-xs font-medium tvs-bg-primary text-white">
                                        <i class="fas fa-check-circle mr-1"></i> Authorized
                                    </span>
                                </div>
                            </div>
                            
                            <div class="mt-4 border-t border-gray-200 pt-4">
                                <div class="flex items-start">
                                    <i class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3"></i>
                                    <p class="text-gray-600"><?= nl2br(htmlspecialchars($center['address'])) ?></p>
                                </div>
                                
                                <div class="flex items-center mt-3">
                                    <i class="fas fa-phone-alt text-gray-400 mr-3"></i>
                                    <a href="tel:<?= htmlspecialchars($center['phone_number']) ?>" class="text-blue-600 hover:underline">
                                        <?= htmlspecialchars($center['phone_number']) ?>
                                    </a>
                                </div>

                                <?php if (!empty($center['maps'])): ?>
                                <div class="flex items-start mt-3">
                                    <i class="fas fa-map text-gray-400 mt-1 mr-3"></i>
                                    <a href="<?= htmlspecialchars($center['maps']) ?>" target="_blank" class="text-blue-600 hover:underline">
                                        View on Map
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 px-6 py-4 flex justify-between">
                            <a href="/service-center/tvs/<?= htmlspecialchars($center['slug']) ?>" class="text-sm font-medium text-gray-700 hover:text-gray-900">
                                <i class="fas fa-info-circle mr-1"></i> Details
                            </a>
                            <a href="tel:<?= htmlspecialchars($center['phone_number']) ?>" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md shadow-sm text-white tvs-bg-primary hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-600">
                                <i class="fas fa-phone mr-1"></i> Call Now
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
                    <a href="?" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white tvs-bg-primary hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-600">
                        <i class="fas fa-undo mr-2"></i> Clear search
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </main>
</body>
<?php include '../../footer.php'; ?>
</html>