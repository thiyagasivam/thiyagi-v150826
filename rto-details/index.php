<?php
$pageTitle = 'RTO Details India 2026 - Complete RTO Code Directory | 25+ Years Experience';
$pageDescription = 'Complete directory of RTO details, codes, and office information across India. Find RTO offices, vehicle registration details, and contact information. Built with 25+ years of automotive expertise for 2026.';
$pageKeywords = 'RTO details India, RTO codes, vehicle registration, RTO office directory, India RTO information 2026';
include '../header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-7xl mx-auto">
    <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">RTO Details India 2026</h1>
    <p class="text-xl text-gray-600 text-center mb-12">Complete RTO directory and vehicle registration information - Professional automotive guide with 25+ years of experience</p>
  </div>
</div>

<?php include 'breadcrumb-schema.php';?>
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

// Build query for RTO offices
$sql = "SELECT slug, rto_no, city, state, address FROM rto";
if (!empty($search)) {
    $sql .= " WHERE city LIKE '%$search%' OR rto_no LIKE '%$search%' OR address LIKE '%$search%'";
}
$sql .= " ORDER BY city ASC";

$result = $conn->query($sql);
$rtoOffices = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rtoOffices[] = $row;
    }
}
$conn->close();
?>

    <style>
        .rto-gradient {
            background: linear-gradient(135deg, #f5f5f7 0%, #e1e1e6 100%);
        }
        .office-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .rto-primary {
            color: #1a365d; /* RTO blue */
        }
        .rto-bg-primary {
            background-color: #1a365d;
        }
        .rto-bg-secondary {
            background-color: #2c5282; /* Darker blue */
        }
    </style>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-id-card-alt rto-primary text-2xl"></i>
                    <h1 class="text-xl font-bold text-gray-800">RTO Offices</h1>
                </div>
                <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    <?php echo count($rtoOffices); ?> Locations
                </span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="rto-gradient">
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Find Regional Transport Offices</h2>
                <p class="text-gray-600 mb-6">Locate RTO offices for vehicle registration, driving license, and other transport services</p>
                
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
                            placeholder="Search by city, RTO number or address...">
                        <button 
                            type="submit" 
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 rto-bg-primary text-white px-4 py-1.5 rounded-md text-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                            Search
                        </button>
                    </div>
                </form>
                
                <div class="flex flex-wrap justify-center gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-car mr-1"></i> Registration
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-id-card mr-1"></i> License
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-file-alt mr-1"></i> Permits
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white bg-opacity-70 text-gray-800">
                        <i class="fas fa-taxi mr-1"></i> Vehicle Tax
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <?php if (!empty($rtoOffices)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($rtoOffices as $office): ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 office-card">
                        <div class="p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 rto-bg-primary p-3 rounded-full text-white">
                                    <i class="fas fa-building text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800"><?= htmlspecialchars($office['city']) ?> RTO</h3>
                                    <span class="inline-flex items-center mt-1 px-2 py-0.5 rounded text-xs font-medium rto-bg-primary text-white">
                                        <i class="fas fa-hashtag mr-1"></i> <?= htmlspecialchars($office['rto_no']) ?>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="mt-4 border-t border-gray-200 pt-4">
                                <div class="flex items-start">
                                    <i class="fas fa-map-marker-alt text-gray-400 mt-1 mr-3"></i>
                                    <p class="text-gray-600"><?= nl2br(htmlspecialchars($office['address'])) ?></p>
                                </div>
                                
                                <div class="flex items-center mt-3">
                                    <i class="fas fa-flag text-gray-400 mr-3"></i>
                                    <p class="text-gray-600"><?= htmlspecialchars($office['state']) ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 px-6 py-4 flex justify-between">
                            <!-- Removed View Map Button -->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-12">
                <i class="fas fa-building text-4xl text-gray-400 mb-4"></i>
                <h3 class="text-lg font-medium text-gray-900">No RTO offices found</h3>
                <p class="mt-1 text-sm text-gray-500">
                    <?php if (!empty($search)): ?>
                        No offices match your search for "<?= htmlspecialchars($search) ?>"
                    <?php else: ?>
                        No RTO offices available at this time
                    <?php endif; ?>
                </p>
                <?php if (!empty($search)): ?>
                    <a href="?" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white rto-bg-primary hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        <i class="fas fa-undo mr-2"></i> Clear search
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </main>

    
</body>
<?php include '../footer.php';?>
</html>