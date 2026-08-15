<?php include 'header.php';?>


<?php
// Function to convert JSON to JSON Schema
function jsonToSchema($json) {
    try {
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        
        if (!is_array($data)) {
            throw new Exception('Input must be a JSON object');
        }
        
        $schema = [
            '$schema' => 'http://json-schema.org/draft-07/schema#',
            'type' => 'object',
            'properties' => [],
            'required' => []
        ];

        foreach ($data as $key => $value) {
            $property = ['type' => gettype($value) === 'NULL' ? 'null' : gettype($value)];

            // Handle nested objects
            if (is_array($value) && !empty($value)) {
                if (array_keys($value) === range(0, count($value) - 1)) {
                    // Array type (list)
                    $property['type'] = 'array';
                    $firstItemType = gettype($value[0]) === 'NULL' ? 'null' : gettype($value[0]);
                    $property['items'] = ['type' => $firstItemType];
                } else {
                    // Object type
                    $property['type'] = 'object';
                    $property['properties'] = [];
                    foreach ($value as $subKey => $subValue) {
                        $property['properties'][$subKey] = [
                            'type' => gettype($subValue) === 'NULL' ? 'null' : gettype($subValue)
                        ];
                    }
                }
            }

            $schema['properties'][$key] = $property;
            $schema['required'][] = $key;
        }

        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    } catch (Exception $e) {
        return ['error' => $e->getMessage()];
    }
}

// Handle form submission
$result = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputJson = $_POST['json'] ?? '';
    $schema = jsonToSchema($inputJson);
    
    if (is_array($schema) && isset($schema['error'])) {
        $error = $schema['error'];
    } elseif ($schema !== false) {
        $result = $schema;
    } else {
        $error = 'Invalid JSON input. Please check your JSON syntax.';
    }
}
?>

    <title>JSON to JSON Schema Converter 2026 - Free Online Generator</title>
<meta name="description" content="Free online tool to convert JSON to JSON Schema instantly. Automatically generate structured schema definitions for validation and documentation in 2026.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .code-container {
            font-family: 'Courier New', monospace;
            background-color: #f8f9fa;
            border-radius: 0.375rem;
            padding: 1rem;
            overflow-x: auto;
        }
        textarea {
            min-height: 200px;
        }
        .copy-btn {
            transition: all 0.2s;
        }
        .copy-btn:hover {
            transform: translateY(-1px);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">JSON to JSON Schema Converter</h1>
            <p class="text-gray-600">Convert your JSON data to a JSON Schema automatically</p>
        </div>

        <form method="POST" class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="mb-4">
                <label for="json" class="block text-gray-700 font-medium mb-2">JSON Input:</label>
                <textarea name="json" id="json" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder='{"name": "John", "age": 30, "is_active": true}' required><?= isset($_POST['json']) ? htmlspecialchars($_POST['json']) : '' ?></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-200">Convert to Schema</button>
        </form>

        <?php if (!empty($error)): ?>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded">
                <p><?= htmlspecialchars($error) ?></p>
            </div>
        <?php endif; ?>

        <?php if (!empty($result)): ?>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">JSON Schema Output:</h2>
                    <button onclick="copyToClipboard()" class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-1 px-3 rounded text-sm">
                        Copy to Clipboard
                    </button>
                </div>
                <div class="code-container">
                    <pre id="schema-output"><?= htmlspecialchars($result) ?></pre>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script>
        function copyToClipboard() {
            const output = document.getElementById('schema-output');
            const range = document.createRange();
            range.selectNode(output);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            // Show feedback
            const btn = event.target;
            btn.textContent = 'Copied!';
            setTimeout(() => {
                btn.textContent = 'Copy to Clipboard';
            }, 2000);
        }
    </script>
</body>
<?php include 'footer.php';?>

</html>
