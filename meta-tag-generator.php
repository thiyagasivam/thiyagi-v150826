<?php include 'header.php';?>


<?php
// Function to generate meta tags
function generateMetaTags($title, $description, $keywords, $robotsIndex, $robotsFollow, $contentType, $language, $revisitAfter) {
    $metaTags = [];
    if (!empty($title)) {
        $metaTags[] = "<meta name='title' content='$title'>";
    }
    if (!empty($description)) {
        $metaTags[] = "<meta name='description' content='$description'>";
    }
    if (!empty($keywords)) {
        $metaTags[] = "<meta name='keywords' content='$keywords'>";
    }
    if (!empty($robotsIndex)) {
        $metaTags[] = "<meta name='robots' content='index'>";
    } else {
        $metaTags[] = "<meta name='robots' content='noindex'>";
    }
    if (!empty($robotsFollow)) {
        $metaTags[] = "<meta name='robots' content='follow'>";
    } else {
        $metaTags[] = "<meta name='robots' content='nofollow'>";
    }
    if (!empty($contentType)) {
        $metaTags[] = "<meta http-equiv='Content-Type' content='$contentType'>";
    }
    if (!empty($language)) {
        $metaTags[] = "<meta http-equiv='Content-Language' content='$language'>";
    }
    if (!empty($revisitAfter)) {
        $metaTags[] = "<meta name='revisit-after' content='$revisitAfter'>";
    }
    return implode("\n", $metaTags);
}

// Handle form submission
$metaTags = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $robotsIndex = isset($_POST['robots_index']) ? true : false;
    $robotsFollow = isset($_POST['robots_follow']) ? true : false;
    $contentType = $_POST['content_type'];
    $language = $_POST['language'];
    $revisitAfter = $_POST['revisit_after'];
    $metaTags = generateMetaTags($title, $description, $keywords, $robotsIndex, $robotsFollow, $contentType, $language, $revisitAfter);
}
?>

    <title>Meta Tag Generator 2026 - Free SEO Meta Title & Description Creator</title>
<meta name="description" content="Free online meta tag generator for 2026. Create perfect SEO meta titles & descriptions in seconds. Boost click-through rates with optimized metadata for Google & social media.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Meta Tag Generator</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your page title" value="<?php echo isset($_POST['title']) ? htmlspecialchars($_POST['title']) : ''; ?>">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea name="description" id="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your page description"><?php echo isset($_POST['description']) ? htmlspecialchars($_POST['description']) : ''; ?></textarea>
            </div>
            <div class="mb-4">
                <label for="keywords" class="block text-gray-700 font-bold mb-2">Keywords:</label>
                <textarea name="keywords" id="keywords" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your keywords (comma-separated)"><?php echo isset($_POST['keywords']) ? htmlspecialchars($_POST['keywords']) : ''; ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Robots:</label>
                <div class="flex items-center space-x-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="robots_index" class="form-checkbox" <?php echo isset($_POST['robots_index']) ? 'checked' : ''; ?>>
                        <span class="ml-2">Allow robots to index your website</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" name="robots_follow" class="form-checkbox" <?php echo isset($_POST['robots_follow']) ? 'checked' : ''; ?>>
                        <span class="ml-2">Allow robots to follow all links</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label for="content_type" class="block text-gray-700 font-bold mb-2">Content Type:</label>
                <select name="content_type" id="content_type" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="text/html" <?php echo (isset($_POST['content_type']) && $_POST['content_type'] === 'text/html') ? 'selected' : ''; ?>>text/html</option>
                    <option value="text/plain" <?php echo (isset($_POST['content_type']) && $_POST['content_type'] === 'text/plain') ? 'selected' : ''; ?>>text/plain</option>
                    <option value="application/json" <?php echo (isset($_POST['content_type']) && $_POST['content_type'] === 'application/json') ? 'selected' : ''; ?>>application/json</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="language" class="block text-gray-700 font-bold mb-2">Primary Language:</label>
                <select name="language" id="language" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="en" <?php echo (isset($_POST['language']) && $_POST['language'] === 'en') ? 'selected' : ''; ?>>English</option>
                    <option value="es" <?php echo (isset($_POST['language']) && $_POST['language'] === 'es') ? 'selected' : ''; ?>>Spanish</option>
                    <option value="fr" <?php echo (isset($_POST['language']) && $_POST['language'] === 'fr') ? 'selected' : ''; ?>>French</option>
                    <option value="de" <?php echo (isset($_POST['language']) && $_POST['language'] === 'de') ? 'selected' : ''; ?>>German</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="revisit_after" class="block text-gray-700 font-bold mb-2">Revisit After:</label>
                <select name="revisit_after" id="revisit_after" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="1 day" <?php echo (isset($_POST['revisit_after']) && $_POST['revisit_after'] === '1 day') ? 'selected' : ''; ?>>1 day</option>
                    <option value="3 days" <?php echo (isset($_POST['revisit_after']) && $_POST['revisit_after'] === '3 days') ? 'selected' : ''; ?>>3 days</option>
                    <option value="7 days" <?php echo (isset($_POST['revisit_after']) && $_POST['revisit_after'] === '7 days') ? 'selected' : ''; ?>>7 days</option>
                    <option value="1 month" <?php echo (isset($_POST['revisit_after']) && $_POST['revisit_after'] === '1 month') ? 'selected' : ''; ?>>1 month</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Generate Meta Tags</button>
        </form>
        <?php if (!empty($metaTags)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Generated Meta Tags:</h2>
                <pre class="bg-gray-100 p-4 rounded-lg mt-2 text-gray-700 text-sm overflow-x-auto"><?php echo htmlspecialchars($metaTags); ?></pre>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php';?>

</html>
