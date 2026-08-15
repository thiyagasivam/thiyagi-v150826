<?php include '../../header.php'; ?>
<?php
// Database connection settings
$host = "127.0.0.1:3306";
$user = "u662933183_servicecenter";
$password = "e^?al5veVS6";
$database = "u662933183_servicecenter";

// Create MySQL connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Get search and filter parameters from GET request
$search = isset($_GET['search']) ? $_GET['search'] : '';
$city = isset($_GET['city']) ? $_GET['city'] : '';
$center_type = isset($_GET['center_type']) ? $_GET['center_type'] : '';

// Build SQL query with filters
$sql = "SELECT shop, address, shop_city, center_type, phone_number, slug, maps FROM miservicecenters WHERE 1=1";
$params = [];
$types = '';

if (!empty($search)) {
    $sql .= " AND (shop LIKE ? OR address LIKE ? OR shop_city LIKE ?)";
    $search_term = "%$search%";
    $params[] = $search_term;
    $params[] = $search_term;
    $params[] = $search_term;
    $types .= 'sss';
}

if (!empty($city)) {
    $sql .= " AND shop_city = ?";
    $params[] = $city;
    $types .= 's';
}

if (!empty($center_type) && $center_type != 'all') {
    $sql .= " AND center_type = ?";
    $params[] = $center_type;
    $types .= 's';
}

// Prepare and execute the statement
$stmt = $conn->prepare($sql);

if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();

$serviceCenters = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $serviceCenters[] = [
            "shop" => $row["shop"],
            "shop_city" => $row["shop_city"],
            "center_type" => $row["center_type"],
            "address" => $row["address"],
            "phone_number" => $row["phone_number"],
            "maps" => $row["maps"]
        ];
    }
}

// Get unique cities for filter dropdown
$cities = [];
$city_query = $conn->query("SELECT DISTINCT shop_city FROM miservicecenters ORDER BY shop_city");
if ($city_query && $city_query->num_rows > 0) {
    while ($row = $city_query->fetch_assoc()) {
        $cities[] = $row['shop_city'];
    }
}

// Get unique center types for filter dropdown
$center_types = [];
$type_query = $conn->query("SELECT DISTINCT center_type FROM miservicecenters ORDER BY center_type");
if ($type_query && $type_query->num_rows > 0) {
    while ($row = $type_query->fetch_assoc()) {
        $center_types[] = $row['center_type'];
    }
}

$conn->close();
?>

<meta name="description" content="Find authorized Xiaomi service centers across India. Get contact details, addresses, and phone numbers for genuine Xiaomi repair and support services.">
<title>Xiaomi Service Centers Near Me 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-mobile-alt text-red-600 text-2xl mr-3"></i>
                    <h1 class="text-2xl font-bold text-gray-900">Xiaomi Service Centers Near Me 2026</h1>
                </div>
                <div class="hidden md:block">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                        <i class="fas fa-store mr-1"></i>
                        <?php echo count($serviceCenters); ?> Locations
                    </span>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Search and Filter Section -->
        <div class="px-4 sm:px-0 mb-6">
            <form method="GET" action="" class="bg-white p-4 rounded-lg shadow">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input 
                            type="text" 
                            name="search" 
                            value="<?= htmlspecialchars($search) ?>" 
                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" 
                            placeholder="Search by name, address or city...">
                    </div>
                    
                    <div class="flex-shrink-0">
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                        <select 
                            name="city" 
                            id="city"
                            class="block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md">
                            <option value="">All Cities</option>
                            <?php foreach ($cities as $city_option): ?>
                                <option value="<?= htmlspecialchars($city_option) ?>" <?= $city == $city_option ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($city_option) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="flex-shrink-0">
                        <label for="center_type" class="block text-sm font-medium text-gray-700 mb-1">Center Type</label>
                        <select 
                            name="center_type" 
                            id="center_type"
                            class="block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md">
                            <option value="all">All Types</option>
                            <?php foreach ($center_types as $type): ?>
                                <option value="<?= htmlspecialchars($type) ?>" <?= $center_type == $type ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($type) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button 
                            type="submit" 
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <i class="fas fa-filter mr-2"></i> Filter
                        </button>
                        <?php if ($search || $city || ($center_type && $center_type != 'all')): ?>
                            <a 
                                href="?" 
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                <i class="fas fa-times mr-2"></i> Clear
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>

        <?php if (!empty($serviceCenters)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 sm:px-0">
                <?php foreach ($serviceCenters as $center): ?>
                    <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-red-100 p-3 rounded-full">
                                    <i class="fas fa-store text-red-600 text-xl"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900"><?= htmlspecialchars($center['shop']) ?></h3>
                                    <div class="mt-1 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1.5 flex-shrink-0 text-gray-400"></i>
                                        <span><?= htmlspecialchars($center['shop_city']) ?></span>
                                    </div>
                                    <div class="mt-1 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-tag mr-1.5 flex-shrink-0 text-gray-400"></i>
                                        <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded"><?= htmlspecialchars($center['center_type']) ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 border-t border-gray-200 pt-4">
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-map-marked-alt mr-2 flex-shrink-0 text-gray-400"></i>
                                    <p><?= nl2br(htmlspecialchars($center['address'])) ?></p>
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <i class="fas fa-phone-alt mr-2 flex-shrink-0 text-gray-400"></i>
                                    <a href="tel:<?= htmlspecialchars($center['phone_number']) ?>" class="text-blue-600 hover:underline"><?= htmlspecialchars($center['phone_number']) ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-4 sm:px-6 flex justify-between">
                            <?php if (!empty($center['maps'])): ?>
                                <a href="<?= htmlspecialchars($center['maps']) ?>" target="_blank" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                    <i class="fas fa-directions mr-2"></i> View on Map
                                </a>
                            <?php else: ?>
                                <span class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-400 bg-gray-100 cursor-not-allowed">
                                    <i class="fas fa-directions mr-2"></i> Map Not Available
                                </span>
                            <?php endif; ?>
                            <a href="tel:<?= htmlspecialchars($center['phone_number']) ?>" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                <i class="fas fa-phone mr-2"></i> Call Now
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
                    <?php if ($search || $city || ($center_type && $center_type != 'all')): ?>
                        No centers match your search criteria. Try adjusting your filters.
                    <?php else: ?>
                        We couldn't find any service centers in our database.
                    <?php endif; ?>
                </p>
                <?php if ($search || $city || ($center_type && $center_type != 'all')): ?>
                    <div class="mt-4">
                        <a href="?" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            <i class="fas fa-undo mr-2"></i> Reset Filters
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </main>

    
</body>
<?php include '../../footer.php'; ?>
</html>