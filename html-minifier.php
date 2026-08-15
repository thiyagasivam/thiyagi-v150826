<?php include 'header.php';?>


<?php
// Function to minify HTML
function minifyHtml($html) {
    if (empty($html)) {
        return '';
    }
    
    // Remove comments (except conditional comments)
    $html = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $html);
    
    // Remove whitespace between tags
    $html = preg_replace('/>\s+</', '><', $html);
    
    // Remove whitespace at start and end
    $html = preg_replace('/\s+/', ' ', $html);
    $html = trim($html);
    
    return $html;
}

// Initialize variables
$minifiedHtml = '';
$error = '';
$originalSize = 0;
$minifiedSize = 0;
$savedBytes = 0;
$savedPercent = 0;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['html'])) {
    $inputHtml = $_POST['html'];
    
    if (!empty($inputHtml)) {
        $originalSize = strlen($inputHtml);
        $minifiedHtml = minifyHtml($inputHtml);
        $minifiedSize = strlen($minifiedHtml);
        $savedBytes = $originalSize - $minifiedSize;
        $savedPercent = ($originalSize > 0) ? round(($savedBytes / $originalSize) * 100, 2) : 0;
    } else {
        $error = 'Please enter HTML content to minify';
    }
}
?>
    <title>Free HTML Minifier 2026 - Compress & Optimize Code Online</title>
<meta name="description" content="Reduce HTML file size by removing comments, whitespace and extra tags (2026). Boost website speed with clean minified code - No installation needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .copy-btn { transition: all 0.2s ease; }
        .copy-btn:hover { transform: translateY(-1px); }
        .copy-btn:active { transform: translateY(1px); }
        textarea, .result-area { min-height: 200px; }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">HTML Minifier Tool</h1>
            <p class="text-gray-600">Compress your HTML code by removing whitespace and comments</p>
        </header>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="mb-4">
                    <label for="html" class="block text-gray-700 font-medium mb-2">HTML Code:</label>
                    <textarea name="html" id="html" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required><?php echo isset($inputHtml) ? htmlspecialchars($inputHtml) : ''; ?></textarea>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition w-full sm:w-auto">
                        Minify HTML
                    </button>
                    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($inputHtml)): ?>
                        <div class="text-sm text-gray-500 text-center sm:text-right">
                            Original: <?php echo number_format($originalSize); ?> bytes | 
                            Minified: <?php echo number_format($minifiedSize); ?> bytes | 
                            Saved: <?php echo number_format($savedBytes); ?> bytes (<?php echo $savedPercent; ?>%)
                        </div>
                    <?php endif; ?>
                </div>
            </form>

            <?php if (!empty($minifiedHtml) || !empty($error)): ?>
                <div class="border-t border-gray-200 p-6">
                    <?php if (!empty($error)): ?>
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($minifiedHtml)): ?>
                        <div class="mb-4">
                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-2 gap-2">
                                <label class="block text-gray-700 font-medium">Minified HTML:</label>
                                <button onclick="copyToClipboard()" class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-1 px-3 rounded text-sm w-full sm:w-auto">
                                    Copy to Clipboard
                                </button>
                            </div>
                            <pre id="result" class="result-area bg-gray-100 p-4 rounded-md overflow-x-auto"><?php echo htmlspecialchars($minifiedHtml); ?></pre>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About This Tool</h2>
            <div class="prose max-w-none text-gray-700">
                <p>This tool helps optimize your HTML by:</p>
                <ul class="list-disc pl-5">
                    <li>Removing unnecessary whitespace and line breaks</li>
                    <li>Removing HTML comments (except conditional comments)</li>
                    <li>Preserving content in &lt;pre&gt;, &lt;textarea&gt;, and &lt;script&gt; tags</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard() {
            const result = document.getElementById('result');
            navigator.clipboard.writeText(result.textContent)
                .then(() => {
                    const btn = event.target;
                    btn.textContent = 'Copied!';
                    setTimeout(() => {
                        btn.textContent = 'Copy to Clipboard';
                    }, 2000);
                });
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
