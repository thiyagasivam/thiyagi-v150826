<?php include 'header.php';?>


<?php
// Function to fetch and analyze meta tags from a URL
function analyzeMetaTags($url) {
    // Fetch HTML content from the URL
    $html = @file_get_contents($url);
    if ($html === false) {
        return null;
    }

    // Create a DOMDocument object to parse the HTML
    $dom = new DOMDocument();
    @$dom->loadHTML($html);

    // Extract meta tags
    $metaTags = [];
    $metaElements = $dom->getElementsByTagName('meta');

    foreach ($metaElements as $element) {
        $name = $element->getAttribute('name') ?: $element->getAttribute('property');
        $content = $element->getAttribute('content');
        if ($name && $content) {
            $metaTags[$name] = $content;
        }
    }

    // Extract title tag
    $titleElement = $dom->getElementsByTagName('title')->item(0);
    if ($titleElement) {
        $metaTags['title'] = $titleElement->textContent;
    }

    return $metaTags;
}

// Handle form submission
$metaTags = [];
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];
    if (!empty($url)) {
        // Validate URL format
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $metaTags = analyzeMetaTags($url);
            if ($metaTags === null) {
                $error = 'Unable to fetch or analyze the provided URL.';
            }
        } else {
            $error = 'Invalid URL format. Please enter a valid URL.';
        }
    } else {
        $error = 'Please enter a URL to analyze.';
    }
}
?>

    <title>Meta Tags Analyzer 2026 - Free SEO Metadata Checker & Preview Tool</title>
<meta name="description" content="Free online meta tags analyzer for 2026. Audit and optimize your page's metadata for better SEO. Preview search snippets, check lengths, and improve click-through rates instantly.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Meta Tags Analyzer</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">Enter URL:</label>
                <input type="url" name="url" id="url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Analyze Meta Tags</button>
        </form>
        <?php if (!empty($metaTags)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Meta Tags Analysis:</h2>
                <div class="overflow-x-auto mt-4">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">Meta Tag</th>
                                <th class="px-4 py-2 border">Content</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($metaTags as $name => $content): ?>
                                <tr>
                                    <td class="px-4 py-2 border"><?php echo htmlspecialchars($name); ?></td>
                                    <td class="px-4 py-2 border"><?php echo htmlspecialchars($content); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
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
