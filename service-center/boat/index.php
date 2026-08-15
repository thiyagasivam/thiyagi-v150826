<?php include '../../header.php'; ?>
<?php
// Database connection settings - UPDATE THESE WITH YOUR CREDENTIALS
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
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$state = isset($_GET['state']) ? trim($_GET['state']) : '';

// Build SQL query with filters
$sql = "SELECT slug, shop_name, state, address, phone_number FROM boatservicecenter WHERE 1=1";
$params = [];
$types = '';

if (!empty($search)) {
    $sql .= " AND (shop_name LIKE ? OR address LIKE ? OR state LIKE ?)";
    $search_term = "%$search%";
    $params[] = $search_term;
    $params[] = $search_term;
    $params[] = $search_term;
    $types .= 'sss';
}

if (!empty($state)) {
    $sql .= " AND state = ?";
    $params[] = $state;
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
            "slug" => $row["slug"],
            "shop_name" => $row["shop_name"],
            "state" => $row["state"],
            "address" => $row["address"],
            "phone_number" => $row["phone_number"],
            
        ];
    }
}

// Get unique states for filter dropdown
$states = [];
$state_query = $conn->query("SELECT DISTINCT state FROM boatservicecenter ORDER BY state");
if ($state_query && $state_query->num_rows > 0) {
    while ($row = $state_query->fetch_assoc()) {
        $states[] = $row['state'];
    }
}

$conn->close();
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
            "name" => "Boat Service Centers",
            "item" => "https://www.thiyagi.com/service-center/boat/"
        ]
    ]
];
?>

<meta name="description" content="Find authorized Boat service centers across India. Get contact details, addresses, and phone numbers for genuine Boat repair and support services.">
<title>Boat Service Centers Near Me 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom styles for better mobile experience */
        @media (max-width: 640px) {
            .service-card {
                margin-bottom: 1.5rem;
            }
            .filter-form {
                padding: 1rem;
            }
        }
    </style>

<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-anchor text-blue-600 text-2xl mr-3"></i>
                    <h1 class="text-2xl font-bold text-gray-900">Boat Service Centers Near Me 2026</h1>
                </div>
                <div class="hidden md:block">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
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
            <form method="GET" action="" class="bg-white p-4 rounded-lg shadow filter-form">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input 
                            type="text" 
                            name="search" 
                            value="<?= htmlspecialchars($search) ?>" 
                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                            placeholder="Search by name, address or state...">
                    </div>
                    
                    <div class="flex-shrink-0">
                        <label for="state" class="block text-sm font-medium text-gray-700 mb-1">State</label>
                        <select 
                            name="state" 
                            id="state"
                            class="block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">All States</option>
                            <?php foreach ($states as $state_option): ?>
                                <option value="<?= htmlspecialchars($state_option) ?>" <?= $state == $state_option ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($state_option) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="flex space-x-2">
                        <button 
                            type="submit" 
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <i class="fas fa-filter mr-2"></i> Filter
                        </button>
                        <?php if ($search || $state): ?>
                            <a 
                                href="?" 
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
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
                    <div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300 service-card">
                        <div class="px-4 py-5 sm:p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-100 p-3 rounded-full">
                                    <i class="fas fa-anchor text-blue-600 text-xl"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900"><?= htmlspecialchars($center['shop_name']) ?></h3>
                                    <div class="mt-1 flex items-center text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-1.5 flex-shrink-0 text-gray-400"></i>
                                        <span><?= htmlspecialchars($center['state']) ?></span>
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
                            
                            <a href="tel:<?= htmlspecialchars($center['phone_number']) ?>" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
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
                    <?php if ($search || $state): ?>
                        No centers match your search criteria. Try adjusting your filters.
                    <?php else: ?>
                        We couldn't find any service centers in our database.
                    <?php endif; ?>
                </p>
                <?php if ($search || $state): ?>
                    <div class="mt-4">
                        <a href="?" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
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