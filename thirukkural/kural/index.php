<?php
// Set UTF-8 encoding for proper Tamil character display
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get URL parameter from different sources
$url = '';
$kural_id = '';

// Check for URL parameter in GET
if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url = $_GET['url'];
}

// Check for direct ID parameter
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $kural_id = intval($_GET['id']);
}

// Parse URL path for kural ID (e.g., /thirukkural/kural/thirukkural-1166)
$request_uri = $_SERVER['REQUEST_URI'];
if (preg_match('/thirukkural[_-]?(\d+)/', $request_uri, $matches)) {
    $kural_id = intval($matches[1]);
}

// If no URL or ID found, redirect to main page
if (empty($url) && empty($kural_id)) {
    header('Location: ../index.php');
    exit;
}

// Database connection
$host = "127.0.0.1:3306";
$dbname = "u662933183_servicecenter";
$username = "u662933183_servicecenter";
$password = "e^?al5veVS6";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set charset to utf8mb4 for proper Tamil character support
    $pdo->exec("SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdo->exec("SET CHARACTER SET utf8mb4");
    $pdo->exec("SET character_set_connection=utf8mb4");
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Get the specific kural - try different methods
$kural = null;

// Method 1: Search by URL if provided
if (!empty($url)) {
    $sql = "SELECT * FROM thirukkural WHERE url = :url LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':url', $url);
    $stmt->execute();
    $kural = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Method 2: Search by ID if URL search failed or no URL provided
if (!$kural && !empty($kural_id)) {
    // Check what columns exist first
    $columns = $pdo->query("SHOW COLUMNS FROM thirukkural")->fetchAll(PDO::FETCH_COLUMN);
    
    if (in_array('id', $columns)) {
        $sql = "SELECT * FROM thirukkural WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $kural_id, PDO::PARAM_INT);
        $stmt->execute();
        $kural = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        // If no id column, search by any numeric field or row number
        $first_column = $columns[0];
        $sql = "SELECT * FROM thirukkural ORDER BY `$first_column` LIMIT 1 OFFSET :offset";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':offset', max(0, $kural_id - 1), PDO::PARAM_INT);
        $stmt->execute();
        $kural = $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

if (!$kural) {
    // Show error message instead of immediate redirect
    ?>
<title>Kural Not Found</title>
    <body class="bg-gray-50 p-8">
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">குறள் கிடைக்கவில்லை</h1>
            <p class="text-gray-600 mb-4">The requested Kural was not found.</p>
            <p class="text-sm text-gray-500 mb-4">
                Searched for: <?php echo htmlspecialchars($url ?: "ID: $kural_id"); ?><br>
                Request URI: <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>
            </p>
            <a href="../" class="bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700">
                Back to Thirukkural
            </a>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Get the kural ID for navigation
$current_id = isset($kural['id']) ? $kural['id'] : $kural_id;

// Get previous and next kurals
$prev_kural = null;
$next_kural = null;

if ($current_id) {
    $columns = $pdo->query("SHOW COLUMNS FROM thirukkural")->fetchAll(PDO::FETCH_COLUMN);
    
    if (in_array('id', $columns)) {
        // Use actual ID column
        $prev_sql = "SELECT id, url FROM thirukkural WHERE id < :id ORDER BY id DESC LIMIT 1";
        $prev_stmt = $pdo->prepare($prev_sql);
        $prev_stmt->bindValue(':id', $current_id);
        $prev_stmt->execute();
        $prev_kural = $prev_stmt->fetch(PDO::FETCH_ASSOC);

        $next_sql = "SELECT id, url FROM thirukkural WHERE id > :id ORDER BY id ASC LIMIT 1";
        $next_stmt = $pdo->prepare($next_sql);
        $next_stmt->bindValue(':id', $current_id);
        $next_stmt->execute();
        $next_kural = $next_stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$page_title = "குறள் " . $current_id . " - Thirukkural by Thiruvalluvar";
$page_description = strip_tags($kural['couplet'] ?? $kural['english_explanation'] ?? '');
$page_keywords = "thirukkural " . $current_id . ", thiruvalluvar, tamil literature, ethics";

// Check if header file exists
if (file_exists('../../header.php')) {
    include '../../header.php';
    // Add meta tags after header
    echo '<meta name="description" content="' . htmlspecialchars($page_description) . '">';
} else {
    ?>
<title><?php echo $page_title; ?></title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Tamil:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            .tamil-text {
                font-family: 'Noto Sans Tamil', 'Latha', 'Vijaya', 'Tamil Sangam MN', sans-serif;
                line-height: 1.8;
            }
            body {
                font-family: 'Noto Sans Tamil', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            }
        </style>
    <body class="bg-gray-50">
    <?php
}
?>

<div class="max-w-4xl mx-auto px-4 py-8">
    <!-- Navigation -->
    <div class="mb-6">
        <nav class="text-sm text-gray-600">
            <a href="../../" class="hover:text-yellow-600">Home</a> / 
            <a href="../" class="hover:text-yellow-600">Thirukkural</a> / 
            <span class="text-gray-800 tamil-text">குறள் <?php echo $current_id; ?></span>
        </nav>
    </div>

    <!-- Kural Card -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-yellow-700 mb-2 tamil-text">குறள் <?php echo $current_id; ?></h1>
            <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
        </div>

        <!-- Tamil Kural -->
        <div class="text-center mb-8">
            <?php if (isset($kural['kural']) && !empty($kural['kural'])): ?>
            <div class="text-3xl md:text-4xl text-gray-800 font-medium leading-relaxed mb-6 tamil-text">
                <?php echo nl2br(htmlspecialchars($kural['kural'], ENT_QUOTES, 'UTF-8')); ?>
            </div>
            <?php endif; ?>
            
            <!-- Transliteration -->
            <?php if (isset($kural['transliteration']) && !empty($kural['transliteration'])): ?>
            <div class="text-xl text-gray-600 italic mb-4">
                <?php echo htmlspecialchars($kural['transliteration'], ENT_QUOTES, 'UTF-8'); ?>
            </div>
            <?php endif; ?>
            
            <!-- English Couplet -->
            <?php if (isset($kural['couplet']) && !empty($kural['couplet'])): ?>
            <div class="text-xl text-gray-700 font-medium">
                <?php echo htmlspecialchars($kural['couplet'], ENT_QUOTES, 'UTF-8'); ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- Explanations -->
        <div class="space-y-6">
            <!-- Mu. Varadarasanar Explanation -->
            <?php if (isset($kural['muVaradharasanarexplanation']) && !empty($kural['muVaradharasanarexplanation'])): ?>
            <div class="bg-blue-50 border-l-4 border-blue-400 p-6 rounded-r-lg">
                <h3 class="text-xl font-semibold text-blue-800 mb-3 flex items-center tamil-text">
                    <i class="fas fa-user-graduate mr-3"></i>மு. வரதராசனார் விளக்கம்
                </h3>
                <p class="text-gray-700 leading-relaxed text-lg tamil-text">
                    <?php echo nl2br(htmlspecialchars($kural['muVaradharasanarexplanation'], ENT_QUOTES, 'UTF-8')); ?>
                </p>
            </div>
            <?php endif; ?>

            <!-- Solomon Paapaiya Explanation -->
            <?php if (isset($kural['solomonpaapaiyaexplanation']) && !empty($kural['solomonpaapaiyaexplanation'])): ?>
            <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-r-lg">
                <h3 class="text-xl font-semibold text-green-800 mb-3 flex items-center tamil-text">
                    <i class="fas fa-book mr-3"></i>சாலமன் பாப்பையா விளக்கம்
                </h3>
                <p class="text-gray-700 leading-relaxed text-lg tamil-text">
                    <?php echo nl2br(htmlspecialchars($kural['solomonpaapaiyaexplanation'], ENT_QUOTES, 'UTF-8')); ?>
                </p>
            </div>
            <?php endif; ?>

            <!-- Kalaignar Explanation -->
            <?php if (isset($kural['kalaignarexplanation']) && !empty($kural['kalaignarexplanation'])): ?>
            <div class="bg-orange-50 border-l-4 border-orange-400 p-6 rounded-r-lg">
                <h3 class="text-xl font-semibold text-orange-800 mb-3 flex items-center tamil-text">
                    <i class="fas fa-pen mr-3"></i>கலைஞர் விளக்கம்
                </h3>
                <p class="text-gray-700 leading-relaxed text-lg tamil-text">
                    <?php echo nl2br(htmlspecialchars($kural['kalaignarexplanation'], ENT_QUOTES, 'UTF-8')); ?>
                </p>
            </div>
            <?php endif; ?>

            <!-- English Explanation -->
            <?php if (isset($kural['english_explanation']) && !empty($kural['english_explanation'])): ?>
            <div class="bg-purple-50 border-l-4 border-purple-400 p-6 rounded-r-lg">
                <h3 class="text-xl font-semibold text-purple-800 mb-3 flex items-center">
                    <i class="fas fa-language mr-3"></i>English Explanation
                </h3>
                <p class="text-gray-700 leading-relaxed text-lg">
                    <?php echo nl2br(htmlspecialchars($kural['english_explanation'], ENT_QUOTES, 'UTF-8')); ?>
                </p>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="flex justify-between items-center">
        <?php if ($prev_kural): ?>
        <a href="?id=<?php echo $prev_kural['id']; ?>" 
           class="flex items-center bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700 transition-colors">
            <i class="fas fa-chevron-left mr-2"></i>
            Previous (குறள் <?php echo $prev_kural['id']; ?>)
        </a>
        <?php elseif ($current_id > 1): ?>
        <a href="?id=<?php echo $current_id - 1; ?>" 
           class="flex items-center bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700 transition-colors">
            <i class="fas fa-chevron-left mr-2"></i>
            Previous (குறள் <?php echo $current_id - 1; ?>)
        </a>
        <?php else: ?>
        <div></div>
        <?php endif; ?>

        <a href="../" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
            <i class="fas fa-list mr-2"></i>All Kurals
        </a>

        <?php if ($next_kural): ?>
        <a href="?id=<?php echo $next_kural['id']; ?>" 
           class="flex items-center bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700 transition-colors">
            Next (குறள் <?php echo $next_kural['id']; ?>)
            <i class="fas fa-chevron-right ml-2"></i>
        </a>
        <?php else: ?>
        <a href="?id=<?php echo $current_id + 1; ?>" 
           class="flex items-center bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700 transition-colors">
            Next (குறள் <?php echo $current_id + 1; ?>)
            <i class="fas fa-chevron-right ml-2"></i>
        </a>
        <?php endif; ?>
    </div>


</div>

<script>
function copyToClipboard() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(function() {
        alert('Link copied to clipboard!');
    });
}
</script>

<?php 
if (file_exists('../../footer.php')) {
    include '../../footer.php'; 
} else {
    echo '</body></html>';
}
?>