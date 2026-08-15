<?php include 'header.php';?>


<?php
// Function to generate Open Graph meta tags
function generateOpenGraphTags($title, $description, $imageUrl, $url) {
    $ogTags = [];
    $ogTags[] = '<meta property="og:title" content="' . htmlspecialchars($title) . '">';
    $ogTags[] = '<meta property="og:description" content="' . htmlspecialchars($description) . '">';
    $ogTags[] = '<meta property="og:image" content="' . htmlspecialchars($imageUrl) . '">';
    $ogTags[] = '<meta property="og:url" content="' . htmlspecialchars($url) . '">';
    $ogTags[] = '<meta property="og:type" content="website">';
    return implode("\n", $ogTags);
}

// Handle form submission
$ogTags = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $imageUrl = $_POST['image_url'];
    $url = $_POST['url'];

    if (!empty($title) && !empty($description) && !empty($imageUrl) && !empty($url)) {
        $ogTags = generateOpenGraphTags($title, $description, $imageUrl, $url);
    } else {
        $error = 'All fields are required.';
    }
}
?>

    <title>Open Graph Generator 2026 - Free Meta Tags Creator for Social Media</title>
<meta name="description" content="Create perfect Open Graph meta tags for 2026. Generate social media previews for Facebook, Twitter & LinkedIn with our free online tool. Optimize your website's share appearance instantly.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Open Graph Generator</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., My Awesome Website" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="description" id="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., This is a description of my awesome website." required></textarea>
            </div>
            <div class="mb-4">
                <label for="image_url" class="block text-gray-700 font-bold mb-2">Image URL:</label>
                <input type="url" name="image_url" id="image_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://example.com/image.jpg" required>
            </div>
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">URL:</label>
                <input type="url" name="url" id="url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Generate Open Graph Tags</button>
        </form>
        <?php if (!empty($ogTags)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Generated Open Graph Tags:</h2>
                <pre class="bg-gray-100 p-4 rounded-lg mt-2 text-gray-700 text-sm overflow-x-auto"><code><?php echo htmlspecialchars($ogTags); ?></code></pre>
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
