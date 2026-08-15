<?php
// Set UTF-8 encoding for proper Tamil character display
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page_title = "Thirukkural - Tamil Classic Literature";
$page_description = "Explore the timeless wisdom of Thirukkural by Saint Thiruvalluvar with explanations from Mu. Varadarasanar, Solomon Paapaiya, and Kalaignar.";
$page_keywords = "thirukkural, thiruvalluvar, tamil literature, ethics, morality, wisdom, mu varadarasanar, solomon paapaiya, kalaignar";

// Check if header file exists
if (file_exists('../header.php')) {
    include '../header.php';
} else {
    echo "Error: header.php file not found at ../header.php<br>";
    // Create a basic HTML structure if header is missing
    ?>
<?php } ?>
<title>Thirukkural - Tamil Classic Literature by Thiruvalluvar | Thiyagi.com</title>
<meta name="description" content="Explore the timeless wisdom of Thirukkural by Saint Thiruvalluvar with explanations from Mu. Varadarasanar, Solomon Paapaiya, and Kalaignar. Browse all 1330 couplets organized by chapters and categories.">
<?php if (!file_exists('../header.php')) { ?>
        <style>
            /* Tamil font support */
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Tamil:wght@300;400;500;600;700&display=swap');
            
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

// Check if table exists
try {
    $check_table = $pdo->query("SHOW TABLES LIKE 'thirukkural'");
    if ($check_table->rowCount() == 0) {
        die("Error: 'thirukkural' table does not exist in the database.");
    }
} catch(PDOException $e) {
    die("Error checking table: " . $e->getMessage());
}

// Get current page
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$per_page = 20;
$offset = ($page - 1) * $per_page;

// Get total count
try {
    $count_sql = "SELECT COUNT(*) FROM thirukkural";
    $total_count = $pdo->query($count_sql)->fetchColumn();
    $total_pages = ceil($total_count / $per_page);
    
    if ($total_count == 0) {
        $kurals = [];
    } else {
        // Check what columns exist in the table
        $columns = $pdo->query("SHOW COLUMNS FROM thirukkural")->fetchAll(PDO::FETCH_COLUMN);
        $order_column = in_array('id', $columns) ? 'id' : $columns[0]; // Use first column if no id
        
        // Get kurals for current page
        $sql = "SELECT * FROM thirukkural ORDER BY `$order_column` LIMIT :limit OFFSET :offset";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':limit', $per_page, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $kurals = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch(PDOException $e) {
    die("Error querying data: " . $e->getMessage());
}
?>

<div class="max-w-6xl mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">திருக்குறள்</h1>
        <h2 class="text-2xl text-yellow-600 mb-2">Thirukkural by Saint Thiruvalluvar</h2>
        <p class="text-gray-600 max-w-3xl mx-auto">
            Explore the timeless wisdom of Thirukkural, a classic Tamil text consisting of 1,330 couplets dealing with ethics, politics, economics, and love. 
            Each Kural is presented with explanations from renowned Tamil scholars.
        </p>
    </div>

    <!-- Search Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="flex flex-col md:flex-row gap-4">
            <input type="text" id="searchInput" placeholder="Search Thirukkural..." 
                   class="flex-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
            <button onclick="searchKural()" 
                    class="bg-yellow-600 text-white px-6 py-3 rounded-lg hover:bg-yellow-700 transition-colors">
                <i class="fas fa-search mr-2"></i>Search
            </button>
        </div>
    </div>

    <!-- Kurals Display -->
    <div id="kuralsContainer">
        <?php if (empty($kurals)): ?>
        <div class="bg-white rounded-lg shadow-md p-8 text-center">
            <i class="fas fa-book-open text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-600 mb-2">No Kurals Found</h3>
            <p class="text-gray-500 mb-4">
                <?php echo $total_count == 0 ? 'The thirukkural table is empty. Please add some kurals to the database.' : 'No kurals found for the current page.'; ?>
            </p>
            <?php if ($total_count == 0): ?>
            <p class="text-sm text-gray-400">
                Make sure your database has been populated with Thirukkural data.
            </p>
            <?php endif; ?>
        </div>
        <?php else: ?>
        <?php foreach ($kurals as $index => $kural): ?>
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <!-- Kural Header -->
            <div class="border-b border-gray-200 pb-4 mb-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-yellow-700">
                        குறள் <?php echo isset($kural['id']) ? htmlspecialchars($kural['id']) : ($offset + $index + 1); ?>
                    </h3>
                    <?php if (isset($kural['url'])): ?>
                    <a href="kural/<?php echo $kural['url']; ?>" 
                       class="text-blue-600 hover:text-blue-800 text-sm">
                        <i class="fas fa-external-link-alt"></i> View Details
                    </a>
                    <?php endif; ?>
                </div>
                
                <!-- Tamil Kural -->
                <?php if (isset($kural['kural'])): ?>
                <div class="text-2xl text-gray-800 font-medium mb-3 leading-relaxed tamil-text">
                    <?php echo nl2br(htmlspecialchars($kural['kural'], ENT_QUOTES, 'UTF-8')); ?>
                </div>
                <?php endif; ?>
                
                <!-- Transliteration -->
                <?php if (isset($kural['transliteration']) && !empty($kural['transliteration'])): ?>
                <div class="text-lg text-gray-600 italic mb-3">
                    <?php echo htmlspecialchars($kural['transliteration'], ENT_QUOTES, 'UTF-8'); ?>
                </div>
                <?php endif; ?>
                
                <!-- English Couplet -->
                <?php if (isset($kural['couplet']) && !empty($kural['couplet'])): ?>
                <div class="text-lg text-gray-700 mb-3">
                    <strong>English:</strong> <?php echo htmlspecialchars($kural['couplet'], ENT_QUOTES, 'UTF-8'); ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Explanations -->
            <div class="space-y-4">
                <!-- Mu. Varadarasanar Explanation -->
                <?php if (isset($kural['muVaradharasanarexplanation']) && !empty($kural['muVaradharasanarexplanation'])): ?>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2 tamil-text">
                        <i class="fas fa-user-graduate mr-2"></i>மு. வரதராசனார் விளக்கம்
                    </h4>
                    <p class="text-gray-700 tamil-text"><?php echo nl2br(htmlspecialchars($kural['muVaradharasanarexplanation'], ENT_QUOTES, 'UTF-8')); ?></p>
                </div>
                <?php endif; ?>

                <!-- Solomon Paapaiya Explanation -->
                <?php if (isset($kural['solomonpaapaiyaexplanation']) && !empty($kural['solomonpaapaiyaexplanation'])): ?>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2 tamil-text">
                        <i class="fas fa-book mr-2"></i>சாலமன் பாப்பையா விளக்கம்
                    </h4>
                    <p class="text-gray-700 tamil-text"><?php echo nl2br(htmlspecialchars($kural['solomonpaapaiyaexplanation'], ENT_QUOTES, 'UTF-8')); ?></p>
                </div>
                <?php endif; ?>

                <!-- Kalaignar Explanation -->
                <?php if (isset($kural['kalaignarexplanation']) && !empty($kural['kalaignarexplanation'])): ?>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-2 tamil-text">
                        <i class="fas fa-pen mr-2"></i>கலைஞர் விளக்கம்
                    </h4>
                    <p class="text-gray-700 tamil-text"><?php echo nl2br(htmlspecialchars($kural['kalaignarexplanation'], ENT_QUOTES, 'UTF-8')); ?></p>
                </div>
                <?php endif; ?>

                <!-- English Explanation -->
                <?php if (isset($kural['english_explanation']) && !empty($kural['english_explanation'])): ?>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">
                        <i class="fas fa-language mr-2"></i>English Explanation
                    </h4>
                    <p class="text-gray-700"><?php echo nl2br(htmlspecialchars($kural['english_explanation'], ENT_QUOTES, 'UTF-8')); ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <?php if ($total_pages > 1): ?>
    <div class="flex justify-center mt-8">
        <nav class="flex space-x-2">
            <?php if ($page > 1): ?>
                <a href="?page=1" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">First</a>
                <a href="?page=<?php echo $page - 1; ?>" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Previous</a>
            <?php endif; ?>

            <?php
            $start = max(1, $page - 2);
            $end = min($total_pages, $page + 2);
            
            for ($i = $start; $i <= $end; $i++):
            ?>
                <a href="?page=<?php echo $i; ?>" 
                   class="px-3 py-2 <?php echo $i == $page ? 'bg-yellow-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?> rounded">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page + 1; ?>" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Next</a>
                <a href="?page=<?php echo $total_pages; ?>" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Last</a>
            <?php endif; ?>
        </nav>
    </div>
    <?php endif; ?>
</div>

<script>
function searchKural() {
    const searchTerm = document.getElementById('searchInput').value;
    if (searchTerm.trim() === '') {
        location.reload();
        return;
    }
    
    fetch(`search.php?q=${encodeURIComponent(searchTerm)}`)
        .then(response => response.json())
        .then(data => {
            displaySearchResults(data);
        })
        .catch(error => {
            console.error('Search error:', error);
        });
}

function displaySearchResults(kurals) {
    const container = document.getElementById('kuralsContainer');
    
    if (kurals.length === 0) {
        container.innerHTML = '<div class="text-center py-8"><p class="text-gray-600">No results found.</p></div>';
        return;
    }
    
    let html = '';
    kurals.forEach(kural => {
        html += `
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="border-b border-gray-200 pb-4 mb-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-yellow-700">குறள் ${kural.id}</h3>
                    <a href="kural/${kural.url}" class="text-blue-600 hover:text-blue-800 text-sm">
                        <i class="fas fa-external-link-alt"></i> View Details
                    </a>
                </div>
                <div class="text-2xl text-gray-800 font-medium mb-3 leading-relaxed">
                    ${kural.kural.replace(/\n/g, '<br>')}
                </div>
                ${kural.transliteration ? `<div class="text-lg text-gray-600 italic mb-3">${kural.transliteration}</div>` : ''}
                ${kural.couplet ? `<div class="text-lg text-gray-700 mb-3"><strong>English:</strong> ${kural.couplet}</div>` : ''}
            </div>
            <!-- Explanations would go here -->
        </div>`;
    });
    
    container.innerHTML = html;
}

// Search on Enter key
document.getElementById('searchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        searchKural();
    }
});
</script>

<?php 
if (file_exists('../footer.php')) {
    include '../footer.php'; 
} else {
    echo '</body></html>';
}
?>