<?php include 'header.php';?>


<?php
// Function to calculate keyword density
function calculateKeywordDensity($text, $keyword) {
    // Convert text and keyword to lowercase for case-insensitive comparison
    $text = strtolower($text);
    $keyword = strtolower($keyword);

    // Count total words in the text
    $totalWords = str_word_count($text);

    // Count occurrences of the keyword
    $keywordCount = substr_count($text, $keyword);

    // Calculate keyword density
    if ($totalWords > 0) {
        $density = ($keywordCount / $totalWords) * 100;
        return number_format($density, 2); // Format to 2 decimal places
    } else {
        return 0;
    }
}

// Handle form submission
$density = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $keyword = $_POST['keyword'];

    if (!empty($text) && !empty($keyword)) {
        $density = calculateKeywordDensity($text, $keyword);
    } else {
        $error = 'Please enter both text and keyword.';
    }
}
?>

    <title>Keyword Density Checker 2026 - Free SEO Content Analyzer Tool</title>
<meta name="description" content="Free online keyword density analyzer for 2026. Calculate word frequency, optimize content for SEO, and improve search rankings with our real-time text analysis tool.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Keyword Density Checker</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="text" class="block text-gray-700 font-bold mb-2">Enter Text:</label>
                <textarea name="text" id="text" rows="5" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., This is a sample text for checking keyword density." required><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea>
            </div>
            <div class="mb-4">
                <label for="keyword" class="block text-gray-700 font-bold mb-2">Enter Keyword:</label>
                <input type="text" name="keyword" id="keyword" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., sample" required value="<?php echo isset($_POST['keyword']) ? htmlspecialchars($_POST['keyword']) : ''; ?>">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Check Density</button>
        </form>
        <?php if (!empty($density)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Keyword Density:</h2>
                <p class="text-gray-700 text-xl mt-2"><?php echo htmlspecialchars($density); ?>%</p>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php';?>


</html>
