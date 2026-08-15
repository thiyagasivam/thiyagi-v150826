<?php include 'header.php';?>


<?php
// Function to check if a URL is indexed by Google
function isUrlIndexed($url) {
    $query = urlencode("site:$url");
    $googleUrl = "https://www.google.com/search?q=$query";
    $response = file_get_contents($googleUrl);

    // Check if the response contains the "did not match any documents" message
    if (strpos($response, 'did not match any documents') !== false) {
        return false;
    } else {
        return true;
    }
}

// Handle form submission
$isIndexed = null;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUrl = $_POST['url'];
    if (!empty($inputUrl)) {
        // Validate URL format
        if (filter_var($inputUrl, FILTER_VALIDATE_URL)) {
            $isIndexed = isUrlIndexed($inputUrl);
        } else {
            $error = 'Please enter a valid URL.';
        }
    } else {
        $error = 'Please enter a URL to check.';
    }
}
?>

    <title>Free Google Index Checker 2026 - Verify If Your Site is Indexed</title>
<meta name="description" content="Instantly check if your website or page is indexed by Google (2026). Fix indexing issues, view last crawl date, and improve SEO visibility - No registration needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Google Index Checker</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">Enter URL:</label>
                <input type="url" name="url" id="url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Check Index Status</button>
        </form>
        <?php if ($isIndexed !== null): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Index Status:</h2>
                <p class="text-gray-700 text-xl mt-2">
                    <?php echo $isIndexed ? '✅ The URL is indexed by Google.' : '❌ The URL is not indexed by Google.'; ?>
                </p>
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
