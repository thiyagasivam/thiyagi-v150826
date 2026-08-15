<?php include 'header.php';?>


<?php
// Function to minify CSS
function minifyCSS($css) {
    // Remove comments
    $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
    
    // Remove spaces, tabs, newlines, etc.
    $css = str_replace(["\r\n", "\r", "\n", "\t", '  ', '    ', '    '], '', $css);
    
    // Remove unnecessary spaces
    $css = preg_replace(['/\s*{\s*/', '/\s*}\s*/', '/\s*;\s*/', '/\s*:\s*/', '/\s*,\s*/'], ['{', '}', ';', ':', ','], $css);
    
    return trim($css);
}

// Handle form submission
$minifiedCSS = '';
$originalLength = 0;
$minifiedLength = 0;
$reduction = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $css = $_POST['css'] ?? '';
    $originalLength = strlen($css);
    $minifiedCSS = minifyCSS($css);
    $minifiedLength = strlen($minifiedCSS);
    
    if ($originalLength > 0) {
        $reduction = 100 - (($minifiedLength / $originalLength) * 100);
    }
}
?>

    <title>Free CSS Minifier Tool 2026 – Compress & Optimize Stylesheets Instantly</title>
    <meta name="description" content="educe CSS file size and boost page speed with our free online CSS minifier (2026). Remove comments, whitespace, and optimize styles in seconds—no downloads needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .code-container {
            position: relative;
        }
        .copy-btn {
            position: absolute;
            right: 10px;
            top: 10px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border: none;
            border-radius: 4px;
            padding: 2px 8px;
            cursor: pointer;
            transition: all 0.2s;
        }
        .copy-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        textarea {
            min-height: 200px;
        }
        .stats-card {
            transition: all 0.3s ease;
        }
        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <header class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">CSS Minifier Tool</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Paste your CSS code below to minify and compress it for better performance and faster loading times.</p>
        </header>

        <!-- Main Form -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <form method="POST" class="p-6">
                <div class="mb-4">
                    <label for="css" class="block text-gray-700 font-medium mb-2">CSS Code:</label>
                    <div class="code-container">
                        <textarea name="css" id="css" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 font-mono text-sm" placeholder="Paste your CSS code here..."><?php echo isset($_POST['css']) ? htmlspecialchars($_POST['css']) : ''; ?></textarea>
                        <button type="button" onclick="copyToClipboard('css')" class="copy-btn text-gray-600 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                            </svg>
                            Copy
                        </button>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                        Minify CSS
                    </button>
                    <button type="button" onclick="clearForm()" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </form>
        </div>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <!-- Results Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Original Size -->
                <div class="stats-card bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                    <h3 class="text-gray-500 font-medium mb-1">Original Size</h3>
                    <p class="text-2xl font-bold text-gray-800"><?php echo number_format($originalLength); ?> bytes</p>
                </div>
                
                <!-- Minified Size -->
                <div class="stats-card bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
                    <h3 class="text-gray-500 font-medium mb-1">Minified Size</h3>
                    <p class="text-2xl font-bold text-gray-800"><?php echo number_format($minifiedLength); ?> bytes</p>
                </div>
                
                <!-- Reduction -->
                <div class="stats-card bg-white p-6 rounded-lg shadow-md border-l-4 border-purple-500">
                    <h3 class="text-gray-500 font-medium mb-1">Reduction</h3>
                    <p class="text-2xl font-bold text-gray-800"><?php echo number_format($reduction, 2); ?>%</p>
                </div>
            </div>

            <!-- Minified Output -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Minified CSS Output:</h2>
                    <div class="code-container">
                        <textarea id="minified-output" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 font-mono text-sm bg-gray-50" readonly><?php echo htmlspecialchars($minifiedCSS); ?></textarea>
                        <button type="button" onclick="copyToClipboard('minified-output')" class="copy-btn text-gray-600 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                            </svg>
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">About CSS Minification</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-medium text-gray-700 mb-2">Why Minify CSS?</h3>
                        <ul class="list-disc pl-5 text-gray-600 space-y-1">
                            <li>Reduces file size for faster page loading</li>
                            <li>Improves website performance</li>
                            <li>Removes unnecessary characters and whitespace</li>
                            <li>Optimizes CSS delivery</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-2">How It Works</h3>
                        <ul class="list-disc pl-5 text-gray-600 space-y-1">
                            <li>Removes all comments from your CSS</li>
                            <li>Eliminates unnecessary whitespace and line breaks</li>
                            <li>Optimizes CSS syntax where possible</li>
                            <li>Preserves all functionality of your original CSS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            element.select();
            document.execCommand('copy');
            
            // Show feedback
            const copyBtn = element.nextElementSibling;
            const originalText = copyBtn.innerHTML;
            copyBtn.innerHTML = 'Copied!';
            setTimeout(() => {
                copyBtn.innerHTML = originalText;
            }, 2000);
        }
        
        function clearForm() {
            document.getElementById('css').value = '';
        }
    </script>
</body>

<?php include 'footer.php';?>
</html>
