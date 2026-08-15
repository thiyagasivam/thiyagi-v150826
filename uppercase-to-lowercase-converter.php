<?php include 'header.php'; ?>

<?php
// Function to convert text to lowercase
function convertToLowercase($text) {
    return strtolower($text);
}

// Handle form submission
$convertedText = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'] ?? '';
    $convertedText = convertToLowercase($inputText);
}
?>
<title>Uppercase to Lowercase Converter | Text Case Tool</title>
    <meta name="description" content="Free online tool to convert uppercase text to lowercase instantly. Perfect for SEO, programming, and text formatting.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .text-area {
            min-height: 200px;
            transition: all 0.3s ease;
        }
        .text-area:focus {
            min-height: 250px;
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

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Uppercase to Lowercase Converter</h1>
            <p class="text-gray-600">Convert any uppercase text to lowercase instantly</p>
        </header>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-medium mb-2">Enter your text:</label>
                    <textarea name="text" id="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-area focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Type or paste your UPPERCASE text here..."><?= htmlspecialchars($_POST['text'] ?? '') ?></textarea>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition duration-200 flex-grow">
                        Convert to Lowercase
                    </button>
                    <button type="button" onclick="copyToClipboard()" class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-3 px-6 rounded-lg transition duration-200">
                        Copy Result
                    </button>
                    <button type="button" onclick="clearText()" class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-3 px-6 rounded-lg transition duration-200">
                        Clear Text
                    </button>
                </div>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="border-t border-gray-200 p-6 bg-gray-50">
                <h2 class="text-xl font-medium text-gray-800 mb-3">Converted Text:</h2>
                <div class="bg-white p-4 rounded border border-gray-200 mb-4">
                    <p id="result-text" class="whitespace-pre-wrap"><?= htmlspecialchars($convertedText) ?></p>
                </div>
                <div class="text-sm text-gray-500">
                    <p>Character count: <span id="char-count"><?= mb_strlen($convertedText) ?></span></p>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-medium text-gray-800 mb-3">About This Tool</h2>
            <div class="prose max-w-none text-gray-700">
                <p>This free online tool converts any uppercase text to lowercase instantly. Simply paste or type your text in the input box above and click "Convert to Lowercase".</p>
                <h3 class="text-lg font-medium mt-4">Common Uses:</h3>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Formatting text for consistency</li>
                    <li>Preparing text for programming or coding</li>
                    <li>SEO optimization (meta tags, URLs)</li>
                    <li>Normalizing user-generated content</li>
                    <li>Preparing text for case-sensitive applications</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard() {
            const resultText = document.getElementById('result-text');
            if (!resultText) return;
            
            navigator.clipboard.writeText(resultText.textContent)
                .then(() => {
                    alert('Text copied to clipboard!');
                })
                .catch(err => {
                    console.error('Failed to copy text: ', err);
                });
        }

        function clearText() {
            document.getElementById('text').value = '';
        }

        // Update character count in real-time
        const textarea = document.getElementById('text');
        if (textarea) {
            textarea.addEventListener('input', function() {
                const charCount = document.getElementById('char-count');
                if (charCount) {
                    charCount.textContent = this.value.length;
                }
            });
        }
    </script>
</body>
   <?php include 'footer.php'; ?>

</html>
