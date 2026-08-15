<?php include 'header.php'; ?>

<?php
// Handle form submission
$input = '';
$output = '';
$action = 'encode';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['input'] ?? '';
    $action = $_POST['action'] ?? 'encode';
    
    try {
        if ($action === 'encode') {
            $output = urlencode($input);
        } elseif ($action === 'decode') {
            $output = urldecode($input);
        }
    } catch (Exception $e) {
        $error = 'An error occurred during processing.';
    }
}
?>

        <title>URL Encoder & Decoder 2026 - Encode and Decode URLs Online</title>
        <meta name="description" content="Free URL Encoder & Decoder tool to convert text to URL-safe format and decode percent-encoded URLs. Fast, accurate, and mobile-friendly.">
        <meta name="keywords" content="URL encoder, URL decoder, percent encoding, URL escape, URL unescape, encode decode URL">

        <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="URL Encoder & Decoder - Encode and Decode URLs Online">
        <meta property="og:description" content="Convert text to URL-safe format or decode encoded URLs. Free online tool.">
        <meta property="og:url" content="https://www.thiyagi.com/url-encode">
        <meta property="og:image" content="https://www.thiyagi.com/nt.png">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="URL Encoder & Decoder - Encode and Decode URLs Online">
        <meta name="twitter:description" content="Convert text to URL-safe format or decode encoded URLs. Free online tool.">
        <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

        <!-- JSON-LD -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebApplication",
            "name": "URL Encoder & Decoder",
            "url": "https://www.thiyagi.com/url-encode",
            "applicationCategory": "DeveloperApplication",
            "description": "Encode text to URL-safe format and decode percent-encoded URLs.",
            "operatingSystem": "Web Browser",
            "offers": {"@type": "Offer", "price": "0", "priceCurrency": "USD"}
        }
        </script>

        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .tab-active {
            background-color: #3b82f6;
            color: white;
        }
        .tab-inactive {
            background-color: #e5e7eb;
            color: #4b5563;
        }
        .tab-inactive:hover {
            background-color: #d1d5db;
        }
        textarea {
            min-height: 150px;
        }
        .copy-btn {
            transition: all 0.2s;
        }
        .copy-btn:hover {
            transform: translateY(-1px);
        }
        .copy-btn:active {
            transform: translateY(1px);
        }
    </style>

<body class="bg-gray-50">
    <!-- Breadcrumb -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 py-3 text-sm">
                <a href="./" class="text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-home mr-1"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                <span class="text-gray-600">URL Encoder & Decoder</span>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white py-14">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-4">
                <i class="fas fa-link text-3xl"></i>
            </div>
            <h1 class="text-4xl font-bold mb-3">URL Encoder & Decoder</h1>
            <p class="text-blue-100">Encode text to URL-safe format or decode percent-encoded URLs. Fast, accurate, and mobile-friendly.</p>
            <div class="mt-4 flex flex-wrap justify-center gap-2 text-sm">
                <span class="bg-white/20 px-3 py-1 rounded-full">⚡ Instant</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">🛠️ Developer-friendly</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">📱 Mobile-ready</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8 max-w-4xl -mt-10">
        <!-- <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">URL Encode/Decoder</h1>
            <p class="text-gray-600">Encode or decode URLs with this free online tool</p>
        </header> -->

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="flex mb-4 rounded-md overflow-hidden">
                    <button type="submit" name="action" value="encode" 
                            class="<?= $action === 'encode' ? 'tab-active' : 'tab-inactive' ?> flex-1 py-2 px-4 font-medium">
                        Encode
                    </button>
                    <button type="submit" name="action" value="decode" 
                            class="<?= $action === 'decode' ? 'tab-active' : 'tab-inactive' ?> flex-1 py-2 px-4 font-medium">
                        Decode
                    </button>
                </div>

                <div class="mb-4">
                    <label for="input" class="block text-gray-700 font-medium mb-2">
                        <?= $action === 'encode' ? 'Text to encode' : 'URL to decode' ?>
                    </label>
                    <textarea name="input" id="input" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                              rows="5" placeholder="<?= $action === 'encode' ? 'Enter text to encode as URL...' : 'Enter URL to decode...' ?>" required><?= htmlspecialchars($input) ?></textarea>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white font-bold py-3 px-4 rounded-md transition duration-200 shadow-md">
                    <?= $action === 'encode' ? 'Encode URL' : 'Decode URL' ?>
                </button>
            </form>

            <?php if (!empty($output) || !empty($error)): ?>
            <div class="border-t border-gray-200 p-6 bg-gray-50">
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-xl font-semibold text-gray-800">Result</h2>
                    <?php if (!empty($output)): ?>
                    <button id="copyBtn" class="copy-btn bg-blue-600 hover:bg-blue-700 text-white py-1 px-3 rounded-md text-sm font-medium">
                        Copy to Clipboard
                    </button>
                    <?php endif; ?>
                </div>

                <?php if (!empty($error)): ?>
                    <div class="text-red-500"><?= htmlspecialchars($error) ?></div>
                <?php else: ?>
                    <div id="output" class="bg-white p-4 rounded-md border border-gray-200 whitespace-pre-wrap break-all"><?= htmlspecialchars($output) ?></div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About URL Encoding/Decoding</h2>
            <div class="prose text-gray-700">
                <p>URL encoding converts characters into a format that can be transmitted over the Internet. URLs can only be sent over the Internet using the ASCII character-set.</p>
                <p class="mt-2">URL encoding replaces unsafe characters with a "%" followed by two hexadecimal digits (percent-encoding).</p>
                <p class="mt-2">URL decoding is the reverse process, converting encoded characters back to their original form.</p>
            </div>
        </section>
    </div>

    <!-- Features -->
    <div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-star text-yellow-500 mr-3"></i>
                Why use this tool?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-blue-500 text-4xl mb-4">⚡</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Instant results</h3>
                    <p class="text-gray-600 text-sm">One click to encode or decode.</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-green-500 text-4xl mb-4">🛠️</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Developer-friendly</h3>
                    <p class="text-gray-600 text-sm">Great for testing queries and redirects.</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-purple-500 text-4xl mb-4">📱</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Mobile-ready</h3>
                    <p class="text-gray-600 text-sm">Optimized for phones and desktops.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                Frequently Asked Questions
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">encodeURIComponent vs encodeURI?</h3>
                    <p class="text-gray-600"><code>encodeURIComponent</code> encodes all characters except letters, digits, - _ . ! ~ * ' ( ). <code>encodeURI</code> leaves URL syntax characters unencoded (:/?#[]@).</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Common use cases</h3>
                    <p class="text-gray-600">Encoding query parameters, form data, redirect URLs, and special characters like spaces, & and ?.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Is decoding safe?</h3>
                    <p class="text-gray-600">Decoding is safe for inspection. Avoid injecting decoded data into HTML without escaping.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Space: + or %20?</h3>
                    <p class="text-gray-600">Both appear in practice. <code>%20</code> is the standard percent-encoding; <code>+</code> is common in form-urlencoded bodies.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Tools -->
    <div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-12">
        <div class="p-8 max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-tools text-blue-600 mr-3"></i>
                Related Tools
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="html-encode" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-pink-500 text-2xl mb-2">🔤</div>
                    <h3 class="font-bold text-gray-700 text-sm">HTML Encoder</h3>
                    <p class="text-gray-600 text-xs">Escape HTML entities</p>
                </a>
                <a href="html-decode" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-green-500 text-2xl mb-2">🧩</div>
                    <h3 class="font-bold text-gray-700 text-sm">HTML Decoder</h3>
                    <p class="text-gray-600 text-xs">Unescape HTML entities</p>
                </a>
                <a href="json-validator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-purple-500 text-2xl mb-2">📄</div>
                    <h3 class="font-bold text-gray-700 text-sm">JSON Validator</h3>
                    <p class="text-gray-600 text-xs">Validate JSON quickly</p>
                </a>
                <a href="open-graph-checker" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-blue-500 text-2xl mb-2">🖼️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Open Graph Checker</h3>
                    <p class="text-gray-600 text-xs">Preview social meta</p>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('copyBtn')?.addEventListener('click', function(){
            const out = document.getElementById('output');
            if (!out) return;
            const text = out.innerText;
            navigator.clipboard.writeText(text).then(() => {
                const self = this;
                const old = self.textContent;
                self.textContent = 'Copied!';
                setTimeout(() => self.textContent = old, 1500);
            });
        });
    </script>
</body>
   <?php include 'footer.php'; ?>

</html>
