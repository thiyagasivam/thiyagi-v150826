<?php
// Enhanced HTML encoding and decoding functions
class HtmlEncoder {
    
    // Standard HTML encoding
    public static function encode($input) {
        return htmlspecialchars($input, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
    
    // Standard HTML decoding
    public static function decode($input) {
        return htmlspecialchars_decode($input, ENT_QUOTES | ENT_HTML5);
    }
    
    // Encode all characters to numeric entities
    public static function encodeNumeric($input) {
        // Only encode non-ASCII characters (above 127) and special HTML characters
        $result = '';
        $length = mb_strlen($input, 'UTF-8');
        
        for ($i = 0; $i < $length; $i++) {
            $char = mb_substr($input, $i, 1, 'UTF-8');
            $ord = mb_ord($char, 'UTF-8');
            
            // Encode HTML special characters and non-ASCII characters
            if ($ord > 127 || in_array($char, ['<', '>', '&', '"', "'"])) {
                $result .= '&#' . $ord . ';';
            } else {
                $result .= $char;
            }
        }
        
        return $result;
    }
    
    // Encode with custom character mappings
    public static function encodeCustom($input, $preserveNewlines = false, $convertSpaces = false) {
        // Order matters: encode & first to prevent double-encoding
        $entities = [
            '&' => '&amp;',
            '<' => '&lt;',
            '>' => '&gt;',
            '"' => '&quot;',
            "'" => '&#39;',
        ];
        
        // Only convert spaces to &nbsp; if specifically requested
        if ($convertSpaces) {
            $entities[' '] = '&nbsp;';
        }
        
        if (!$preserveNewlines) {
            $entities["\n"] = '<br>';
            $entities["\r"] = '';
        }
        
        return str_replace(array_keys($entities), array_values($entities), $input);
    }
    
    // URL encode for HTML attributes
    public static function encodeUrl($input) {
        return urlencode($input);
    }
    
    // Decode URL encoded strings
    public static function decodeUrl($input) {
        return urldecode($input);
    }
    
    // Advanced HTML entity decoding
    public static function decodeAdvanced($input) {
        // First decode standard HTML entities
        $decoded = html_entity_decode($input, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        
        // Then decode numeric entities (using mb_chr for full Unicode support)
        $decoded = preg_replace_callback('/&#([0-9]+);/', function($matches) {
            $codePoint = (int)$matches[1];
            // Validate code point range
            if ($codePoint > 0 && $codePoint <= 0x10FFFF) {
                return mb_chr($codePoint, 'UTF-8');
            }
            return $matches[0]; // Return original if invalid
        }, $decoded);
        
        // Decode hex entities (using mb_chr for full Unicode support)
        $decoded = preg_replace_callback('/&#x([0-9a-fA-F]+);/', function($matches) {
            $codePoint = hexdec($matches[1]);
            // Validate code point range
            if ($codePoint > 0 && $codePoint <= 0x10FFFF) {
                return mb_chr($codePoint, 'UTF-8');
            }
            return $matches[0]; // Return original if invalid
        }, $decoded);
        
        return $decoded;
    }
    
    // Analyze HTML string for statistics
    public static function analyzeHtml($input) {
        $stats = [
            'total_chars' => mb_strlen($input, 'UTF-8'),
            'html_entities' => 0,
            'html_tags' => 0,
            'special_chars' => 0,
            'entities_found' => [],
            'tags_found' => [],
        ];
        
        // Count HTML entities
        preg_match_all('/&[a-zA-Z][a-zA-Z0-9]*;|&#[0-9]+;|&#x[0-9a-fA-F]+;/', $input, $entities);
        $stats['html_entities'] = count($entities[0]);
        $stats['entities_found'] = array_unique($entities[0]);
        
        // Count HTML tags
        preg_match_all('/<[^>]+>/', $input, $tags);
        $stats['html_tags'] = count($tags[0]);
        $stats['tags_found'] = array_unique($tags[0]);
        
        // Count special characters
        $special = preg_match_all('/[<>&"\'`]/', $input);
        $stats['special_chars'] = $special ?: 0;
        
        return $stats;
    }
}

// Handle form submission
$result = '';
$error = '';
$stats = null;
$action = $_POST['action'] ?? '';
$input = $_POST['input'] ?? '';
$encoding_type = $_POST['encoding_type'] ?? 'standard';
$preserve_newlines = isset($_POST['preserve_newlines']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Validate input
        if (empty($input)) {
            throw new Exception('Please enter some text to encode/decode');
        }
        
        // Check input size limit (1MB)
        if (strlen($input) > 1048576) {
            throw new Exception('Input text is too large. Maximum size is 1MB.');
        }
        
        // Validate action
        if (!in_array($action, ['encode', 'decode'])) {
            throw new Exception('Invalid action specified');
        }
        
        // Validate encoding type
        $validEncodingTypes = ['standard', 'numeric', 'custom', 'url', 'advanced'];
        if (!in_array($encoding_type, $validEncodingTypes)) {
            $encoding_type = 'standard';
        }
        
        // Get analysis statistics
        $stats = HtmlEncoder::analyzeHtml($input);
        
        switch ($action) {
            case 'encode':
                switch ($encoding_type) {
                    case 'numeric':
                        $result = HtmlEncoder::encodeNumeric($input);
                        break;
                    case 'custom':
                        $convertSpaces = isset($_POST['convert_spaces']);
                        $result = HtmlEncoder::encodeCustom($input, $preserve_newlines, $convertSpaces);
                        break;
                    case 'url':
                        $result = HtmlEncoder::encodeUrl($input);
                        break;
                    default:
                        $result = HtmlEncoder::encode($input);
                }
                break;
                
            case 'decode':
                switch ($encoding_type) {
                    case 'advanced':
                        $result = HtmlEncoder::decodeAdvanced($input);
                        break;
                    case 'url':
                        $result = HtmlEncoder::decodeUrl($input);
                        break;
                    default:
                        $result = HtmlEncoder::decode($input);
                }
                break;
                
            default:
                throw new Exception('Invalid action specified');
        }
        
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

    <title>HTML Encode Decode Tool 2026 - Secure Text Conversion & Entity Generator</title>
    <meta name="description" content="Advanced HTML encoder/decoder tool supporting multiple encoding types, entity conversion, URL encoding, and security-focused text transformation in 2026. Free online HTML entity converter.">
    <meta name="keywords" content="HTML encoder decoder, HTML entities converter, text encoding tool 2026, HTML escape characters, web security encoder, XSS prevention tool">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/html-encode">
    <meta property="og:title" content="HTML Encode Decode Tool 2026 - Secure Text Conversion & Entity Generator">
    <meta property="og:description" content="Advanced HTML encoder/decoder with multiple encoding types and security features. Professional web development tool.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/html-encode">
    <meta property="twitter:title" content="HTML Encode Decode Tool 2026 - Secure Text Conversion & Entity Generator">
    <meta property="twitter:description" content="Advanced HTML encoder/decoder with security features and multiple encoding options.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "HTML Encode Decode Tool 2026",
        "description": "Advanced HTML encoder and decoder tool for web developers with multiple encoding options and security features",
        "url": "https://www.thiyagi.com/html-encode",
        "applicationCategory": "DeveloperApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>
    
    <style>
        .code-container {
            font-family: 'Fira Code', 'Courier New', monospace;
            line-height: 1.5;
        }
        .tab-button.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .entity-highlight {
            background: linear-gradient(120deg, #a8edea 0%, #fed6e3 100%);
            padding: 2px 4px;
            border-radius: 4px;
            font-weight: 600;
        }
        .process-animation {
            animation: processFlow 0.8s ease-in-out;
        }
        @keyframes processFlow {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }
        .stats-counter {
            animation: countUp 0.6s ease-out;
        }
        @keyframes countUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
<body class="bg-gray-50">
    <!-- Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-200 px-4 py-3">
        <div class="max-w-6xl mx-auto">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Developer Tools</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">HTML Encode/Decode</li>
            </ol>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">🔒 HTML Encode/Decode Tool 2026</h1>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto">Professional HTML entity encoder and decoder with advanced features for web developers, security professionals, and content creators.</p>
        </header>

        <!-- Main Tool Interface -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <form method="POST" id="encodingForm">
                <!-- Action Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="flex">
                        <button type="button" class="tab-button <?= ($action === 'encode' || empty($action)) ? 'active' : '' ?> px-8 py-4 text-sm font-medium border-b-2 border-transparent hover:text-blue-600 hover:border-blue-300 transition-colors" 
                                onclick="switchAction('encode')">
                            🔒 HTML Encode
                        </button>
                        <button type="button" class="tab-button <?= $action === 'decode' ? 'active' : '' ?> px-8 py-4 text-sm font-medium border-b-2 border-transparent hover:text-blue-600 hover:border-blue-300 transition-colors" 
                                onclick="switchAction('decode')">
                            🔓 HTML Decode
                        </button>
                    </nav>
                </div>

                <div class="p-8">
                    <!-- Input Section -->
                    <div class="grid lg:grid-cols-2 gap-8 mb-8">
                        <div>
                            <label for="input" class="block text-gray-700 font-semibold mb-4 text-lg">📝 Input Text/HTML:</label>
                            <div class="relative">
                                <textarea name="input" id="input" rows="12" 
                                         class="w-full px-4 py-4 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors code-container resize-none" 
                                         placeholder="Paste your HTML, text, or entities here..."><?= htmlspecialchars($input) ?></textarea>
                                <div class="absolute bottom-2 right-2 bg-gray-100 px-2 py-1 rounded text-xs text-gray-600">
                                    <span id="charCount"><?= mb_strlen($input, 'UTF-8') ?></span> chars
                                </div>
                            </div>
                            
                            <!-- Quick Action Buttons -->
                            <div class="flex flex-wrap gap-2 mt-3">
                                <button type="button" onclick="clearInput()" class="text-xs bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-1 rounded transition-colors">
                                    Clear
                                </button>
                                <button type="button" onclick="loadSample()" class="text-xs bg-blue-100 hover:bg-blue-200 text-blue-700 px-3 py-1 rounded transition-colors">
                                    Load Sample
                                </button>
                            </div>
                        </div>

                        <!-- Options Panel -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-4 text-lg">⚙️ Encoding Options:</label>
                            
                            <!-- Encoding Type Selection -->
                            <div class="mb-6">
                                <div id="encodeOptions" style="<?= $action === 'decode' ? 'display:none' : '' ?>">
                                    <label class="block text-gray-700 font-medium mb-3">Encoding Method:</label>
                                    <div class="space-y-2">
                                        <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                            <input type="radio" name="encoding_type" value="standard" <?= ($encoding_type === 'standard' || empty($encoding_type)) ? 'checked' : '' ?> class="mr-3">
                                            <div>
                                                <span class="font-medium">Standard HTML Entities</span>
                                                <p class="text-sm text-gray-600">Basic HTML character encoding</p>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                            <input type="radio" name="encoding_type" value="numeric" <?= $encoding_type === 'numeric' ? 'checked' : '' ?> class="mr-3">
                                            <div>
                                                <span class="font-medium">Numeric Entities</span>
                                                <p class="text-sm text-gray-600">All characters as &#123; format</p>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                            <input type="radio" name="encoding_type" value="custom" <?= $encoding_type === 'custom' ? 'checked' : '' ?> class="mr-3">
                                            <div>
                                                <span class="font-medium">Custom Encoding</span>
                                                <p class="text-sm text-gray-600">Enhanced with non-breaking spaces</p>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                            <input type="radio" name="encoding_type" value="url" <?= $encoding_type === 'url' ? 'checked' : '' ?> class="mr-3">
                                            <div>
                                                <span class="font-medium">URL Encoding</span>
                                                <p class="text-sm text-gray-600">Percent-encoded format</p>
                                            </div>
                                        </label>
                                    </div>
                                    
                                    <!-- Custom Options -->
                                    <div class="mt-4 p-3 bg-blue-50 rounded-lg space-y-2">
                                        <label class="flex items-center">
                                            <input type="checkbox" name="preserve_newlines" <?= $preserve_newlines ? 'checked' : '' ?> class="mr-2">
                                            <span class="text-sm text-gray-700">Preserve line breaks (don't convert to &lt;br&gt;)</span>
                                        </label>
                                        <label class="flex items-center">
                                            <input type="checkbox" name="convert_spaces" <?= isset($_POST['convert_spaces']) ? 'checked' : '' ?> class="mr-2">
                                            <span class="text-sm text-gray-700">Convert spaces to &amp;nbsp; (non-breaking spaces)</span>
                                        </label>
                                    </div>
                                </div>

                                <div id="decodeOptions" style="<?= $action !== 'decode' ? 'display:none' : '' ?>">
                                    <label class="block text-gray-700 font-medium mb-3">Decoding Method:</label>
                                    <div class="space-y-2">
                                        <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                            <input type="radio" name="encoding_type" value="standard" <?= ($encoding_type === 'standard' || empty($encoding_type)) ? 'checked' : '' ?> class="mr-3">
                                            <div>
                                                <span class="font-medium">Standard Decoding</span>
                                                <p class="text-sm text-gray-600">Basic HTML entity decoding</p>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                            <input type="radio" name="encoding_type" value="advanced" <?= $encoding_type === 'advanced' ? 'checked' : '' ?> class="mr-3">
                                            <div>
                                                <span class="font-medium">Advanced Decoding</span>
                                                <p class="text-sm text-gray-600">Includes numeric & hex entities</p>
                                            </div>
                                        </label>
                                        <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                            <input type="radio" name="encoding_type" value="url" <?= $encoding_type === 'url' ? 'checked' : '' ?> class="mr-3">
                                            <div>
                                                <span class="font-medium">URL Decoding</span>
                                                <p class="text-sm text-gray-600">Decode percent-encoded strings</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="text-center mb-8">
                        <input type="hidden" name="action" id="actionInput" value="<?= $action ?: 'encode' ?>">
                        <button type="submit" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                            <span id="buttonText"><?= $action === 'decode' ? '🔓 Decode HTML' : '🔒 Encode HTML' ?></span>
                        </button>
                    </div>

                    <?php if (!empty($error)): ?>
                    <!-- Error Display -->
                    <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg mb-8">
                        <div class="flex items-center">
                            <span class="text-red-500 text-2xl mr-3">❌</span>
                            <div>
                                <h3 class="text-red-800 font-semibold">Processing Error</h3>
                                <p class="text-red-700 mt-1"><?= htmlspecialchars($error) ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($result)): ?>
                    <!-- Results Section -->
                    <div class="bg-gradient-to-r from-green-500 to-blue-500 rounded-lg p-1 mb-8">
                        <div class="bg-white rounded-lg p-8">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-2xl font-bold text-gray-800 flex items-center">
                                    <span class="mr-3"><?= $action === 'decode' ? '🔓' : '🔒' ?></span>
                                    <?= $action === 'decode' ? 'Decoded' : 'Encoded' ?> Result
                                </h3>
                                <div class="flex gap-2">
                                    <button type="button" onclick="copyResult()" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                                        📋 Copy
                                    </button>
                                    <button type="button" onclick="clearResult()" class="bg-gray-600 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                                        🗑️ Clear
                                    </button>
                                </div>
                            </div>
                            
                            <div class="relative">
                                <textarea id="result" rows="12" 
                                         class="w-full px-4 py-4 border-2 border-gray-300 rounded-lg bg-gray-50 code-container resize-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                         readonly><?= htmlspecialchars($result) ?></textarea>
                                <div class="absolute bottom-2 right-2 bg-gray-200 px-2 py-1 rounded text-xs text-gray-600">
                                    <?= mb_strlen($result, 'UTF-8') ?> chars
                                </div>
                            </div>

                            <!-- Statistics -->
                            <?php if ($stats): ?>
                            <div class="grid md:grid-cols-4 gap-4 mt-6 pt-6 border-t border-gray-200">
                                <div class="text-center bg-blue-50 p-4 rounded-lg">
                                    <div class="text-2xl font-bold text-blue-600 stats-counter"><?= $stats['total_chars'] ?></div>
                                    <div class="text-sm text-blue-800">Total Characters</div>
                                </div>
                                <div class="text-center bg-green-50 p-4 rounded-lg">
                                    <div class="text-2xl font-bold text-green-600 stats-counter"><?= $stats['html_entities'] ?></div>
                                    <div class="text-sm text-green-800">HTML Entities</div>
                                </div>
                                <div class="text-center bg-purple-50 p-4 rounded-lg">
                                    <div class="text-2xl font-bold text-purple-600 stats-counter"><?= $stats['html_tags'] ?></div>
                                    <div class="text-sm text-purple-800">HTML Tags</div>
                                </div>
                                <div class="text-center bg-orange-50 p-4 rounded-lg">
                                    <div class="text-2xl font-bold text-orange-600 stats-counter"><?= $stats['special_chars'] ?></div>
                                    <div class="text-sm text-orange-800">Special Characters</div>
                                </div>
                            </div>

                            <?php if (!empty($stats['entities_found'])): ?>
                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <h4 class="font-semibold text-gray-800 mb-3">🔍 Entities Found:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($stats['entities_found'] as $entity): ?>
                                        <span class="entity-highlight text-sm"><?= htmlspecialchars($entity) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🚀 Advanced HTML Encoding Features</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-4xl mb-4">🔒</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Security Focused</h3>
                        <p class="text-gray-600 text-sm">Prevent XSS attacks and code injection</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">⚡</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Multiple Formats</h3>
                        <p class="text-gray-600 text-sm">Standard, numeric, URL, and custom encoding</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">📊</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Text Analysis</h3>
                        <p class="text-gray-600 text-sm">Detailed statistics and entity detection</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🎯</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Developer Tools</h3>
                        <p class="text-gray-600 text-sm">Professional features for web developers</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- HTML Entity Reference -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">📚 HTML Entity Reference</h2>
            </div>
            <div class="p-8">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Character</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Entity Name</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Entity Number</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Description</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-mono text-lg">&lt;</td>
                                <td class="py-3 px-4 font-mono">&amp;lt;</td>
                                <td class="py-3 px-4 font-mono">&amp;#60;</td>
                                <td class="py-3 px-4">Less than sign</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-mono text-lg">&gt;</td>
                                <td class="py-3 px-4 font-mono">&amp;gt;</td>
                                <td class="py-3 px-4 font-mono">&amp;#62;</td>
                                <td class="py-3 px-4">Greater than sign</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-mono text-lg">&amp;</td>
                                <td class="py-3 px-4 font-mono">&amp;amp;</td>
                                <td class="py-3 px-4 font-mono">&amp;#38;</td>
                                <td class="py-3 px-4">Ampersand</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-mono text-lg">"</td>
                                <td class="py-3 px-4 font-mono">&amp;quot;</td>
                                <td class="py-3 px-4 font-mono">&amp;#34;</td>
                                <td class="py-3 px-4">Double quotation mark</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-mono text-lg">'</td>
                                <td class="py-3 px-4 font-mono">&amp;#39;</td>
                                <td class="py-3 px-4 font-mono">&amp;#39;</td>
                                <td class="py-3 px-4">Single quotation mark</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 font-mono text-lg">&nbsp;</td>
                                <td class="py-3 px-4 font-mono">&amp;nbsp;</td>
                                <td class="py-3 px-4 font-mono">&amp;#160;</td>
                                <td class="py-3 px-4">Non-breaking space</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-purple-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">❓ Frequently Asked Questions</h2>
            </div>
            <div class="p-8">
                <div class="space-y-6">
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: When should I use HTML encoding?</h4>
                        <p class="text-gray-700 text-sm">A: Use HTML encoding when displaying user input, preventing XSS attacks, or when you need to show HTML code as text on a webpage without it being rendered.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: What's the difference between named and numeric entities?</h4>
                        <p class="text-gray-700 text-sm">A: Named entities use descriptive names (&amp;lt;), while numeric entities use character codes (&amp;#60;). Both represent the same character but numeric entities work for any Unicode character.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Is this tool secure for sensitive data?</h4>
                        <p class="text-gray-700 text-sm">A: Yes, all processing happens in your browser or on our secure servers. We don't store or log any data you encode or decode.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Can I encode entire HTML documents?</h4>
                        <p class="text-gray-700 text-sm">A: Absolutely! This tool can handle large HTML documents, code snippets, or any text content that needs HTML entity conversion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        function switchAction(action) {
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            document.getElementById('actionInput').value = action;
            document.getElementById('buttonText').textContent = action === 'decode' ? '🔓 Decode HTML' : '🔒 Encode HTML';
            
            // Show/hide appropriate options
            document.getElementById('encodeOptions').style.display = action === 'encode' ? 'block' : 'none';
            document.getElementById('decodeOptions').style.display = action === 'decode' ? 'block' : 'none';
        }

        // Character counter
        document.getElementById('input').addEventListener('input', function() {
            document.getElementById('charCount').textContent = this.value.length;
        });

        // Copy result to clipboard
        function copyResult() {
            const resultTextarea = document.getElementById('result');
            resultTextarea.select();
            resultTextarea.setSelectionRange(0, 99999);
            document.execCommand('copy');
            
            // Show feedback
            const button = event.target;
            const originalText = button.innerHTML;
            button.innerHTML = '✓ Copied!';
            button.classList.add('process-animation');
            setTimeout(() => {
                button.innerHTML = originalText;
                button.classList.remove('process-animation');
            }, 2000);
        }

        // Clear functions
        function clearInput() {
            document.getElementById('input').value = '';
            document.getElementById('charCount').textContent = '0';
        }

        function clearResult() {
            const result = document.getElementById('result');
            if (result) {
                result.value = '';
            }
        }

        // Load sample data
        function loadSample() {
            const samples = [
                "&lt;script&gt;alert('Hello World');&lt;/script&gt;",
                "&lt;div class='example'&gt;This is a 'quoted' text with &lt;b&gt;bold&lt;/b&gt; &amp; &lt;i&gt;italic&lt;/i&gt; elements.&lt;/div&gt;",
                "Special characters: &lt; &gt; &amp; \" ' © ® ™ €",
                "HTML entities: &amp;lt;div&amp;gt;&amp;amp;nbsp;&amp;lt;/div&amp;gt;"
            ];
            const randomSample = samples[Math.floor(Math.random() * samples.length)];
            document.getElementById('input').value = randomSample;
            document.getElementById('charCount').textContent = randomSample.length;
        }

        // Form animation on submit
        document.getElementById('encodingForm').addEventListener('submit', function() {
            const button = this.querySelector('button[type="submit"]');
            button.classList.add('process-animation');
        });

        // Auto-scroll to results after processing
        <?php if (!empty($result)): ?>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const resultsSection = document.querySelector('.bg-gradient-to-r.from-green-500');
                if (resultsSection) {
                    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 300);
        });
        <?php endif; ?>
    </script>
</body>
<?php include 'footer.php';?>
</html>
