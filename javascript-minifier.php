<?php include 'header.php';?>


<?php


// Handle form submission
$minifiedJs = '';
$error = '';
$originalSize = 0;
$minifiedSize = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jsCode = $_POST['js_code'] ?? '';
    
    if (!empty($jsCode)) {
        try {
            $originalSize = strlen($jsCode);
            
            // Basic minification (remove comments, whitespace, etc.)
            $minifiedJs = preg_replace('
                /(?:
                    (\/\/.*?\n)|             # Single-line comments
                    (\/\*[\s\S]*?\*\/)|      # Multi-line comments
                    ([ ]+\n)|                # Trailing whitespace
                    (\n[ ]+)|                # Leading whitespace
                    (\n+)|                   # Multiple newlines
                    ([ ]+)|                 # Multiple spaces
                    (^\s+|\s+$)             # Leading/trailing whitespace
                )/x', 
                '', 
                $jsCode
            );
            
            // Remove semicolons before closing brackets
            $minifiedJs = preg_replace('/;\s*}/', '}', $minifiedJs);
            
            $minifiedSize = strlen($minifiedJs);
            
        } catch (Exception $e) {
            $error = 'Error minifying JavaScript: ' . $e->getMessage();
        }
    } else {
        $error = 'Please enter JavaScript code to minify';
    }
}
?>
    <title>JavaScript Minifier 2026 - Free Online Code Compressor & Optimizer</title>
<meta name="description" content="Free online JavaScript minifier for 2026. Compress and optimize JS files instantly. Reduce file size, remove comments, and speed up website performance with our free tool.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom enhancements */
        .code-editor {
            font-family: 'Courier New', monospace;
            min-height: 200px;
        }
        .stats-badge {
            font-size: 0.8rem;
        }
        @media (max-width: 640px) {
            .flex-col-mobile {
                flex-direction: column;
            }
            .w-full-mobile {
                width: 100% !important;
            }
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">JavaScript Minifier</h1>
            <p class="text-gray-600">Compress and optimize your JavaScript code for better performance</p>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="mb-4">
                    <label for="js_code" class="block text-gray-700 font-bold mb-2">JavaScript Code:</label>
                    <textarea 
                        id="js_code" 
                        name="js_code" 
                        rows="12" 
                        class="code-editor w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        placeholder="Paste your JavaScript code here..."><?= htmlspecialchars($_POST['js_code'] ?? '') ?></textarea>
                </div>

                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center space-x-4">
                        <button 
                            type="submit" 
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition duration-200">
                            Minify JavaScript
                        </button>
                        
                        <button 
                            type="button" 
                            onclick="document.getElementById('js_code').value = ''" 
                            class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                            Clear
                        </button>
                    </div>
                    
                    <?php if ($originalSize > 0): ?>
                        <div class="flex items-center space-x-4 stats-badge">
                            <span class="text-gray-700">
                                Original: <?= formatBytes($originalSize) ?>
                            </span>
                            <span class="text-gray-700">
                                Minified: <?= formatBytes($minifiedSize) ?>
                            </span>
                            <span class="text-green-600 font-bold">
                                Saved: <?= round((($originalSize - $minifiedSize) / $originalSize * 100), 2) ?>%
                            </span>
                        </div>
                    <?php endif; ?>
                </div>
            </form>

            <?php if (!empty($error)): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mx-6 mb-6">
                    <div class="text-red-700"><?= htmlspecialchars($error) ?></div>
                </div>
            <?php endif; ?>

            <?php if (!empty($minifiedJs)): ?>
                <div class="border-t border-gray-200 p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Minified JavaScript:</h2>
                        <button 
                            onclick="copyToClipboard('minified_output')" 
                            class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-1 px-3 rounded text-sm transition duration-200">
                            Copy
                        </button>
                    </div>
                    <pre id="minified_output" class="code-editor bg-gray-100 p-4 rounded-lg overflow-x-auto"><?= htmlspecialchars($minifiedJs) ?></pre>
                    
                    <div class="mt-4 flex flex-wrap gap-2">
                        <a 
                            href="data:text/plain;charset=utf-8,<?= urlencode($minifiedJs) ?>" 
                            download="minified.js" 
                            class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg text-sm transition duration-200">
                            Download Minified JS
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About JavaScript Minifier</h2>
            <div class="prose text-gray-700">
                <p>This tool helps you minify your JavaScript code by removing unnecessary characters like:</p>
                <ul class="list-disc pl-5">
                    <li>Whitespace (spaces, tabs, newlines)</li>
                    <li>Comments (single-line and multi-line)</li>
                    <li>Unnecessary semicolons</li>
                </ul>
                <p class="mt-4">Minifying your JavaScript can significantly reduce file size, leading to faster page load times and improved website performance.</p>
            </div>
        </section>
    </div>

   
    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.innerText;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>
</body>
<?php include 'footer.php';?>

</html>

<?php
// Helper function to format bytes
function formatBytes($bytes, $precision = 2) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    
    $bytes /= (1 << (10 * $pow));
    
    return round($bytes, $precision) . ' ' . $units[$pow];
}
?>
