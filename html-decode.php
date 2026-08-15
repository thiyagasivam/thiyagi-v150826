<?php include 'header.php';?>


<?php
// Function to decode HTML entities
function decodeHtml($input) {
    return htmlspecialchars_decode($input, ENT_QUOTES | ENT_HTML5);
}

// Handle form submission
$decodedText = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $encodedText = $_POST['encoded_text'] ?? '';
    $decodedText = decodeHtml($encodedText);
}
?>

    <title>Free HTML Decoder 2026 - Decode Encoded HTML Entities Online</title>
<meta name="description" content="Instantly convert HTML entities (&amp;#x27;) back to readable characters (2026). Works with all symbols, emojis and special codes - No software needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .text-area-container {
            position: relative;
        }
        .copy-btn {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 10;
            opacity: 0.7;
            transition: opacity 0.3s;
        }
        .copy-btn:hover {
            opacity: 1;
        }
        textarea {
            min-height: 150px;
        }
        .tool-description {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">HTML Decoder</h1>
            <p class="text-gray-600 tool-description">
                Convert HTML entities back to their original characters. Paste your encoded HTML (like &amp;lt;div&amp;gt;) and get the decoded version (&lt;div&gt;).
            </p>
        </header>

        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="mb-4 text-area-container">
                    <label for="encoded_text" class="block text-gray-700 font-medium mb-2">Encoded HTML:</label>
                    <textarea name="encoded_text" id="encoded_text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Paste your encoded HTML here (e.g., &amp;lt;div&amp;gt;Hello&amp;lt;/div&amp;gt;)"><?php echo isset($_POST['encoded_text']) ? htmlspecialchars($_POST['encoded_text']) : ''; ?></textarea>
                    <button type="button" onclick="copyToClipboard('encoded_text')" class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-1 px-3 rounded">
                        Copy
                    </button>
                </div>
                
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-md transition duration-300">
                        Decode HTML
                    </button>
                </div>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="border-t border-gray-200 p-6">
                <div class="mb-4 text-area-container">
                    <label for="decoded_result" class="block text-gray-700 font-medium mb-2">Decoded Result:</label>
                    <textarea id="decoded_result" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" readonly><?php echo htmlspecialchars($decodedText); ?></textarea>
                    <button type="button" onclick="copyToClipboard('decoded_result')" class="copy-btn bg-blue-100 hover:bg-blue-200 text-blue-800 font-bold py-1 px-3 rounded">
                        Copy
                    </button>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-md p-6 max-w-3xl mx-auto">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About HTML Decoding</h2>
            <div class="prose max-w-none">
                <p>HTML encoding converts special characters to HTML entities to prevent them from being interpreted as HTML code. This tool reverses that process by converting HTML entities back to their original characters.</p>
                
                <h3 class="text-lg font-semibold mt-4">Common HTML Entities:</h3>
                <ul class="list-disc pl-5">
                    <li><code>&amp;lt;</code> = <code>&lt;</code> (less than)</li>
                    <li><code>&amp;gt;</code> = <code>&gt;</code> (greater than)</li>
                    <li><code>&amp;amp;</code> = <code>&amp;</code> (ampersand)</li>
                    <li><code>&amp;quot;</code> = <code>"</code> (double quote)</li>
                    <li><code>&amp;apos;</code> = <code>'</code> (single quote)</li>
                </ul>
            </div>
        </div>
    </div>

    
    <script>
        function copyToClipboard(elementId) {
            const textarea = document.getElementById(elementId);
            textarea.select();
            document.execCommand('copy');
            
            // Show feedback
            const originalText = event.target.textContent;
            event.target.textContent = 'Copied!';
            setTimeout(() => {
                event.target.textContent = originalText;
            }, 2000);
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
