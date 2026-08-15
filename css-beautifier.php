<?php include 'header.php';?>


<?php
// Function to beautify CSS
function beautifyCSS($css) {
    // Initialize variables
    $beautified = '';
    $indent = 0;
    $inProperty = false;
    $inComment = false;
    
    // Split CSS into lines
    $lines = explode("\n", $css);
    
    foreach ($lines as $line) {
        $line = trim($line);
        
        // Skip empty lines
        if (empty($line)) {
            continue;
        }
        
        // Handle comments
        if (strpos($line, '/*') !== false) {
            $inComment = true;
        }
        
        if ($inComment) {
            $beautified .= str_repeat('    ', $indent) . $line . "\n";
            if (strpos($line, '*/') !== false) {
                $inComment = false;
            }
            continue;
        }
        
        // Handle closing braces
        if (strpos($line, '}') !== false) {
            $indent--;
            $beautified .= str_repeat('    ', $indent) . "}\n";
            continue;
        }
        
        // Handle opening braces
        if (strpos($line, '{') !== false) {
            $parts = explode('{', $line);
            $selector = trim($parts[0]);
            $beautified .= str_repeat('    ', $indent) . $selector . " {\n";
            $indent++;
            continue;
        }
        
        // Handle properties
        if (strpos($line, ':') !== false) {
            $beautified .= str_repeat('    ', $indent) . $line . "\n";
            continue;
        }
        
        // Handle media queries and other at-rules
        if (strpos($line, '@') === 0) {
            $beautified .= str_repeat('    ', $indent) . $line . "\n";
            continue;
        }
    }
    
    return trim($beautified);
}

// Handle form submission
$result = '';
$error = '';
$inputCss = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputCss = $_POST['css'] ?? '';
    
    if (!empty($inputCss)) {
        try {
            $result = beautifyCSS($inputCss);
        } catch (Exception $e) {
            $error = 'Error processing CSS: ' . $e->getMessage();
        }
    } else {
        $error = 'Please enter some CSS to beautify';
    }
}
?>

    <title>Free CSS Beautifier & Formatter Tool 2026 – Clean & Minify Instantly</title>
    <meta name="description" content="Format and beautify messy CSS code for free in 2026! Our online tool instantly cleans, indents, and minifies stylesheets—perfect for developers. No signup required!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .code-container {
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
            line-height: 1.5;
        }
        .input-textarea, .output-textarea {
            min-height: 300px;
            white-space: pre;
            tab-size: 4;
        }
        .copy-btn {
            transition: all 0.2s ease;
        }
        .copy-btn:hover {
            transform: translateY(-2px);
        }
        .copy-btn:active {
            transform: translateY(0);
        }
    </style>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">CSS Beautifier</h1>
            <p class="text-lg text-gray-600">Format and beautify your CSS code for better readability</p>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="mb-6">
                    <label for="css" class="block text-gray-700 font-bold mb-2">Enter your CSS code:</label>
                    <textarea name="css" id="css" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 input-textarea" placeholder="Paste your minified or messy CSS code here..." required><?= htmlspecialchars($inputCss) ?></textarea>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 flex-grow">
                        Beautify CSS
                    </button>
                    <button type="button" onclick="document.getElementById('css').value = ''" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-6 rounded-lg transition duration-300">
                        Clear
                    </button>
                </div>
            </form>

            <?php if (!empty($error)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mx-6 mb-6" role="alert">
                    <p><?= htmlspecialchars($error) ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($result)): ?>
                <div class="border-t border-gray-200 p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-800">Beautified CSS:</h2>
                        <button onclick="copyToClipboard('result')" class="copy-btn bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium py-2 px-4 rounded-lg flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
                                <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
                            </svg>
                            Copy
                        </button>
                    </div>
                    <div class="code-container bg-gray-50 p-4 rounded-lg overflow-auto">
                        <pre id="result" class="output-textarea m-0"><?= htmlspecialchars($result) ?></pre>
                    </div>
                </div>
            <?php endif; ?>
        </main>

        <section class="mt-12 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About CSS Beautifier</h2>
            <div class="prose max-w-none text-gray-700">
                <p>This CSS Beautifier tool helps you format and organize your CSS code for better readability and maintainability. It properly indents your CSS code, adds line breaks between rules, and makes your stylesheets easier to work with.</p>
                
                <h3 class="text-xl font-bold mt-4 text-gray-800">How to use:</h3>
                <ol class="list-decimal pl-5 space-y-2">
                    <li>Paste your minified or messy CSS code into the input box</li>
                    <li>Click the "Beautify CSS" button</li>
                    <li>Copy the formatted output or clear the form to start over</li>
                </ol>
                
                <h3 class="text-xl font-bold mt-4 text-gray-800">Features:</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Proper indentation of CSS rules</li>
                    <li>Logical spacing between selectors and properties</li>
                    <li>Preserves comments in your CSS</li>
                    <li>Handles media queries and other at-rules</li>
                    <li>Completely free and works in your browser</li>
                </ul>
            </div>
        </section>
    </div>

 
    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const range = document.createRange();
            range.selectNode(element);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            // Show temporary feedback
            const copyBtn = event.target.closest('button');
            const originalText = copyBtn.innerHTML;
            copyBtn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Copied!
            `;
            
            setTimeout(() => {
                copyBtn.innerHTML = originalText;
            }, 2000);
        }
    </script>
</body>

<?php include 'footer.php';?>
</html>
