<?php
/**
 * API Testing Tool for Pincode System
 * Test URL: /pincode/api_test.php?pincode=110001
 */

// Include API configuration
require_once 'api_config.php';

// Include the dynamic generator for testing
require_once 'dynamic.php';

// Handle AJAX requests
if (isset($_GET['action']) && $_GET['action'] === 'test_api') {
    header('Content-Type: application/json');
    
    $pincode = $_GET['pincode'] ?? '';
    if (empty($pincode) || !preg_match('/^\d{6}$/', $pincode)) {
        echo json_encode(['error' => 'Invalid pincode format']);
        exit;
    }
    
    $generator = new DynamicPincodeGenerator();
    
    // Test the API directly
    $reflection = new ReflectionClass($generator);
    $method = $reflection->getMethod('getPincodeData');
    $method->setAccessible(true);
    
    $result = $method->invoke($generator, $pincode);
    
    echo json_encode([
        'pincode' => $pincode,
        'data' => $result,
        'timestamp' => date('Y-m-d H:i:s')
    ]);
    exit;
}

$testPincode = $_GET['pincode'] ?? '110001';
?>
    <title>Pincode API Testing Tool</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <style>
        .json-formatter {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 4px;
            padding: 1rem;
            font-family: 'Courier New', monospace;
            white-space: pre-wrap;
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                <i class="fas fa-cogs text-blue-600 mr-3"></i>
                Pincode API Testing Tool
            </h1>
            <p class="text-gray-600">Test and debug the pincode API integration system</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            
            <!-- Testing Panel -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-search text-blue-600 mr-2"></i>
                    API Test
                </h2>
                
                <form id="testForm" class="space-y-4">
                    <div>
                        <label for="pincode" class="block text-sm font-medium text-gray-700 mb-2">
                            Enter Pincode (6 digits)
                        </label>
                        <input type="text" 
                               id="pincode" 
                               name="pincode" 
                               value="<?php echo htmlspecialchars($testPincode); ?>"
                               pattern="\d{6}" 
                               maxlength="6"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="110001">
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                        <i class="fas fa-play mr-2"></i>
                        Test API
                    </button>
                </form>
                
                <!-- Quick Test Buttons -->
                <div class="mt-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3">Quick Tests:</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <?php
                        $quickTests = ['110001', '400001', '560001', '600001', '700001', '500001', '380001', '583101', '622501'];
                        foreach ($quickTests as $code) {
                            echo '<button onclick="testPincode(\'' . $code . '\')" class="bg-gray-100 hover:bg-gray-200 px-3 py-1 rounded text-sm transition-colors">' . $code . '</button>';
                        }
                        ?>
                    </div>
                </div>
                
                <!-- Loading Indicator -->
                <div id="loading" class="hidden mt-4 text-center">
                    <i class="fas fa-spinner fa-spin text-blue-600 mr-2"></i>
                    <span class="text-gray-600">Testing API...</span>
                </div>
            </div>

            <!-- API Status Panel -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-server text-green-600 mr-2"></i>
                    API Configuration Status
                </h2>
                
                <div class="space-y-3">
                    <?php
                    $apiStatus = PincodeAPIConfig::getAPIStatus();
                    foreach ($apiStatus as $apiName => $config) {
                        $statusIcon = $config['configured'] ? '✅' : '❌';
                        $statusClass = $config['configured'] ? 'bg-green-50 border-green-200' : 'bg-red-50 border-red-200';
                        $textClass = $config['configured'] ? 'text-green-800' : 'text-red-800';
                        
                        echo '<div class="' . $statusClass . ' border rounded-lg p-3">';
                        echo '<div class="flex items-center justify-between mb-1">';
                        echo '<span class="font-medium ' . $textClass . '">' . $statusIcon . ' ' . ucfirst(str_replace('_', ' ', $apiName)) . '</span>';
                        echo '<span class="text-xs ' . $textClass . '">' . strtoupper($config['type']) . '</span>';
                        echo '</div>';
                        echo '<div class="text-xs text-gray-600">';
                        echo 'Cost: ' . $config['cost'];
                        if (isset($config['limit'])) {
                            echo ' | Limit: ' . $config['limit'];
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                
                <div class="mt-4 p-3 bg-blue-50 border border-blue-200 rounded-lg">
                    <p class="text-sm text-blue-800">
                        <i class="fas fa-info-circle mr-1"></i>
                        <strong>Primary API:</strong> postalpincode.in (Free, unlimited requests)
                    </p>
                </div>
            </div>
        </div>

        <!-- Results Panel -->
        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">
                <i class="fas fa-database text-purple-600 mr-2"></i>
                API Response
            </h2>
            
            <div id="results" class="hidden">
                <div class="mb-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Response for Pincode: <span id="result-pincode" class="font-mono text-lg"></span></span>
                        <span class="text-xs text-gray-500" id="result-timestamp"></span>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Formatted Display -->
                    <div>
                        <h3 class="text-sm font-medium text-gray-700 mb-2">Formatted Data:</h3>
                        <div id="formatted-data" class="bg-gray-50 border border-gray-200 rounded-lg p-4 min-h-[200px]">
                            <!-- Formatted data will appear here -->
                        </div>
                    </div>
                    
                    <!-- Raw JSON -->
                    <div>
                        <h3 class="text-sm font-medium text-gray-700 mb-2">Raw JSON Response:</h3>
                        <div id="raw-json" class="json-formatter min-h-[200px]">
                            <!-- Raw JSON will appear here -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="no-results" class="text-center py-8 text-gray-500">
                <i class="fas fa-search text-4xl mb-4"></i>
                <p>Enter a pincode above to test the API</p>
            </div>
        </div>
    </div>

    <script>
        // Test form handler
        document.getElementById('testForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const pincode = document.getElementById('pincode').value;
            testPincode(pincode);
        });

        // Test pincode function
        function testPincode(pincode) {
            if (!/^\d{6}$/.test(pincode)) {
                alert('Please enter a valid 6-digit pincode');
                return;
            }
            
            // Update input field
            document.getElementById('pincode').value = pincode;
            
            // Show loading
            document.getElementById('loading').classList.remove('hidden');
            document.getElementById('results').classList.add('hidden');
            document.getElementById('no-results').classList.add('hidden');
            
            // Make API request
            fetch(`?action=test_api&pincode=${pincode}`)
                .then(response => response.json())
                .then(data => {
                    displayResults(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to test API: ' + error.message);
                })
                .finally(() => {
                    document.getElementById('loading').classList.add('hidden');
                });
        }

        // Display results function
        function displayResults(data) {
            document.getElementById('result-pincode').textContent = data.pincode;
            document.getElementById('result-timestamp').textContent = data.timestamp;
            
            // Format the data for display
            if (data.data && typeof data.data === 'object') {
                let formattedHtml = '<div class="space-y-2">';
                
                for (const [key, value] of Object.entries(data.data)) {
                    if (value && value !== '') {
                        formattedHtml += `
                            <div class="flex justify-between border-b pb-1">
                                <span class="font-medium text-gray-700">${key}:</span>
                                <span class="text-gray-900">${value}</span>
                            </div>
                        `;
                    }
                }
                
                formattedHtml += '</div>';
                document.getElementById('formatted-data').innerHTML = formattedHtml;
            } else {
                document.getElementById('formatted-data').innerHTML = '<div class="text-red-600">No data found or API error</div>';
            }
            
            // Show raw JSON
            document.getElementById('raw-json').textContent = JSON.stringify(data, null, 2);
            
            // Show results panel
            document.getElementById('results').classList.remove('hidden');
            document.getElementById('no-results').classList.add('hidden');
        }
    </script>
</body>
</html>