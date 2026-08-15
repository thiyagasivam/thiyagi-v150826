<?php
$page_title = "Browse Thirukkural by Categories";
$page_description = "Browse Thirukkural organized by categories - Virtue, Wealth, and Love";
$page_keywords = "thirukkural categories, virtue, wealth, love, thiruvalluvar";

include '../header.php';
?>
<title>Browse Thirukkural by Categories - Virtue, Wealth & Love | Thiyagi.com</title>
<meta name="description" content="Browse Thirukkural organized by its three main categories: Virtue (Aram), Wealth (Porul), and Love (Inbam). Explore the timeless wisdom of Thiruvalluvar's couplets categorized by themes.">
<?php

// Database connection
$host = "127.0.0.1:3306";
$dbname = "u662933183_servicecenter";
$username = "u662933183_servicecenter";
$password = "e^?al5veVS6";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Define categories (assuming you have category information)
$categories = [
    'virtue' => ['name' => 'அறத்துப்பால் (Virtue)', 'start' => 1, 'end' => 370, 'color' => 'blue'],
    'wealth' => ['name' => 'பொருட்பால் (Wealth)', 'start' => 371, 'end' => 1080, 'color' => 'green'],
    'love' => ['name' => 'காமத்துப்பால் (Love)', 'start' => 1081, 'end' => 1330, 'color' => 'red']
];

$selected_category = $_GET['category'] ?? 'virtue';
if (!isset($categories[$selected_category])) {
    $selected_category = 'virtue';
}

$category_info = $categories[$selected_category];
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;

// Get kurals for selected category
$sql = "SELECT * FROM thirukkural 
        WHERE id BETWEEN :start AND :end 
        ORDER BY id 
        LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':start', $category_info['start'], PDO::PARAM_INT);
$stmt->bindValue(':end', $category_info['end'], PDO::PARAM_INT);
$stmt->bindValue(':limit', $per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$kurals = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Calculate pagination
$total_in_category = $category_info['end'] - $category_info['start'] + 1;
$total_pages = ceil($total_in_category / $per_page);
?>

<div class="max-w-6xl mx-auto px-4 py-8">
    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">திருக்குறள் பிரிவுகள்</h1>
        <p class="text-gray-600">Browse Thirukkural organized by its three main sections</p>
    </div>

    <!-- Category Tabs -->
    <div class="flex flex-wrap justify-center mb-8">
        <?php foreach ($categories as $key => $cat): ?>
        <a href="?category=<?php echo $key; ?>" 
           class="mx-2 mb-2 px-6 py-3 rounded-lg transition-colors <?php echo $selected_category == $key ? 'bg-'.$cat['color'].'-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?>">
            <?php echo $cat['name']; ?>
            <span class="text-sm">(<?php echo $cat['start']; ?>-<?php echo $cat['end']; ?>)</span>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- Current Category Info -->
    <div class="bg-<?php echo $category_info['color']; ?>-50 border-l-4 border-<?php echo $category_info['color']; ?>-400 p-6 mb-8">
        <h2 class="text-2xl font-bold text-<?php echo $category_info['color']; ?>-800 mb-2">
            <?php echo $category_info['name']; ?>
        </h2>
        <p class="text-<?php echo $category_info['color']; ?>-700">
            Kurals <?php echo $category_info['start']; ?> to <?php echo $category_info['end']; ?>
            (Total: <?php echo $total_in_category; ?> kurals)
        </p>
    </div>

    <!-- Kurals Display -->
    <div class="space-y-6">
        <?php foreach ($kurals as $kural): ?>
        <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
            <div class="flex justify-between items-start mb-4">
                <h3 class="text-xl font-bold text-<?php echo $category_info['color']; ?>-700">
                    குறள் <?php echo $kural['id']; ?>
                </h3>
                <a href="kural/<?php echo $kural['url']; ?>" 
                   class="text-<?php echo $category_info['color']; ?>-600 hover:text-<?php echo $category_info['color']; ?>-800">
                    <i class="fas fa-external-link-alt"></i>
                </a>
            </div>
            
            <div class="text-2xl text-gray-800 font-medium mb-3 leading-relaxed">
                <?php echo nl2br(htmlspecialchars($kural['kural'])); ?>
            </div>
            
            <?php if (!empty($kural['couplet'])): ?>
            <div class="text-gray-600 italic">
                <?php echo htmlspecialchars($kural['couplet']); ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <?php if ($total_pages > 1): ?>
    <div class="flex justify-center mt-8">
        <nav class="flex space-x-2">
            <?php if ($page > 1): ?>
                <a href="?category=<?php echo $selected_category; ?>&page=1" 
                   class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">First</a>
                <a href="?category=<?php echo $selected_category; ?>&page=<?php echo $page - 1; ?>" 
                   class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Previous</a>
            <?php endif; ?>

            <?php
            $start = max(1, $page - 2);
            $end = min($total_pages, $page + 2);
            
            for ($i = $start; $i <= $end; $i++):
            ?>
                <a href="?category=<?php echo $selected_category; ?>&page=<?php echo $i; ?>" 
                   class="px-3 py-2 <?php echo $i == $page ? 'bg-'.$category_info['color'].'-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?> rounded">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?category=<?php echo $selected_category; ?>&page=<?php echo $page + 1; ?>" 
                   class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Next</a>
                <a href="?category=<?php echo $selected_category; ?>&page=<?php echo $total_pages; ?>" 
                   class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Last</a>
            <?php endif; ?>
        </nav>
    </div>
    <?php endif; ?>
</div>

<?php include '../footer.php'; ?>