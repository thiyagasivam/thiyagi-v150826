<?php include 'header.php';?>


<?php
// Function to fetch Open Graph meta tags from a URL
function fetchOpenGraphTags($url) {
    $html = file_get_contents($url);
    if ($html === false) {
        return false;
    }

    $doc = new DOMDocument();
    @$doc->loadHTML($html);

    $metaTags = $doc->getElementsByTagName('meta');
    $openGraphTags = [];

    // List of Open Graph properties to check
    $ogProperties = [
        'og:title',
        'og:description',
        'og:image',
        'og:url',
        'og:site_name',
        'og:locale',
        'og:type',
    ];

    foreach ($metaTags as $tag) {
        if ($tag->hasAttribute('property') && in_array($tag->getAttribute('property'), $ogProperties)) {
            $openGraphTags[$tag->getAttribute('property')] = $tag->getAttribute('content');
        }
    }

    return $openGraphTags;
}

// Handle form submission
$ogTags = [];
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUrl = $_POST['url'];
    if (!empty($inputUrl)) {
        // Validate URL
        if (filter_var($inputUrl, FILTER_VALIDATE_URL)) {
            $ogTags = fetchOpenGraphTags($inputUrl);
            if ($ogTags === false) {
                $error = 'Unable to fetch Open Graph tags. Please check the URL and try again.';
            }
        } else {
            $error = 'Invalid URL. Please enter a valid URL.';
        }
    } else {
        $error = 'Please enter a URL to check Open Graph tags.';
    }
}
?>

    <title>Open Graph Checker 2026 - Free Social Media Meta Tag Validator</title>
<meta name="description" content="Free online Open Graph checker for 2026. Test and preview how your links appear on Facebook, Twitter, LinkedIn & WhatsApp. Fix missing or incorrect social media metadata instantly.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Open Graph Checker</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">Enter URL:</label>
                <input type="url" name="url" id="url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Check Open Graph Tags</button>
        </form>
        <?php if (!empty($ogTags)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Open Graph Tags:</h2>
                <ul class="list-disc list-inside text-gray-700 text-xl mt-2">
                    <?php foreach ($ogTags as $property => $content): ?>
                        <li><strong><?php echo htmlspecialchars($property); ?>:</strong> <?php echo htmlspecialchars($content); ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php if (isset($ogTags['og:image'])): ?>
                    <div class="mt-4">
                        <h3 class="text-xl font-bold text-gray-800">Open Graph Image:</h3>
                        <img src="<?php echo htmlspecialchars($ogTags['og:image']); ?>" alt="Open Graph Image" class="mt-2 rounded-lg shadow-md" style="max-width: 100%; height: auto;">
                    </div>
                <?php endif; ?>
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
