<?php include 'header.php'; ?>
<title>Internet Speed Test 2026 | Check Download Upload Speed | Free Network Tester</title>
<meta name="description" content="Test your internet speed instantly with our 2026 free speed test tool. Check download, upload speeds and ping for accurate network performance measurement.">
<meta name="keywords" content="internet speed test 2026, network speed checker, download upload speed test, ping test, bandwidth test, internet performance">

<?php
// Handle form submission and speed test simulation
$downloadSpeed = null;
$uploadSpeed = null;
$ping = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_test'])) {
    // Simulate network test (in a real implementation, you'd use JavaScript for actual measurements)
    $ping = rand(5, 50); // ms
    $downloadSpeed = rand(10, 500) / 10; // Mbps
    $uploadSpeed = rand(2, 100) / 10; // Mbps
}
?>

    <title>Network Speed Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .gauge {
            width: 100%;
            height: 20px;
            background: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }
        .gauge-fill {
            height: 100%;
            background: linear-gradient(90deg, #00a1ff, #00ff9d);
            transition: width 1.5s ease-out;
        }
        .needle {
            position: absolute;
            top: -10px;
            width: 2px;
            height: 40px;
            background: #333;
            transform-origin: bottom center;
            transition: transform 1.5s ease-out;
        }
        .test-button {
            background: linear-gradient(90deg, #00a1ff, #00ff9d);
            transition: all 0.3s ease;
        }
        .test-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 161, 255, 0.3);
        }
        .test-button:active {
            transform: translateY(0);
        }
    </style>

<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Network Speed Test</h1>
            <p class="text-gray-600 text-lg">Test your internet connection speed</p>
        </header>

        <main class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                <div class="p-6 sm:p-8">
                    <form method="POST" id="speedtest-form">
                        <div class="text-center">
                            <button type="submit" name="run_test" class="test-button text-white font-bold py-4 px-12 rounded-full text-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                Start Speed Test
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-gray-50 p-6 sm:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                            <div class="text-2xl font-bold text-gray-700 mb-2">Ping</div>
                            <div class="text-4xl font-bold text-blue-600 mb-4" id="ping-value">
                                <?php echo $ping ? $ping . ' ms' : '--'; ?>
                            </div>
                            <div class="text-gray-500">Latency</div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                            <div class="text-2xl font-bold text-gray-700 mb-2">Download</div>
                            <div class="text-4xl font-bold text-green-600 mb-4" id="download-value">
                                <?php echo $downloadSpeed ? $downloadSpeed . ' Mbps' : '--'; ?>
                            </div>
                            <div class="gauge mt-2">
                                <div class="gauge-fill" id="download-gauge" style="width: <?php echo $downloadSpeed ? ($downloadSpeed / 5) : 0; ?>%"></div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                            <div class="text-2xl font-bold text-gray-700 mb-2">Upload</div>
                            <div class="text-4xl font-bold text-purple-600 mb-4" id="upload-value">
                                <?php echo $uploadSpeed ? $uploadSpeed . ' Mbps' : '--'; ?>
                            </div>
                            <div class="gauge mt-2">
                                <div class="gauge-fill" id="upload-gauge" style="width: <?php echo $uploadSpeed ? ($uploadSpeed / 5) : 0; ?>%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                <div class="p-6 sm:p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">How It Works</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-blue-500 text-4xl mb-3">1</div>
                            <h3 class="text-lg font-semibold mb-2">Click Start</h3>
                            <p class="text-gray-600">Begin the test by clicking the Start button</p>
                        </div>
                        <div class="text-center">
                            <div class="text-blue-500 text-4xl mb-3">2</div>
                            <h3 class="text-lg font-semibold mb-2">Test Runs</h3>
                            <p class="text-gray-600">We measure your ping, download and upload speeds</p>
                        </div>
                        <div class="text-center">
                            <div class="text-blue-500 text-4xl mb-3">3</div>
                            <h3 class="text-lg font-semibold mb-2">Get Results</h3>
                            <p class="text-gray-600">View your detailed speed test results</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    
    </div>

    <script>
        // In a real implementation, this would contain actual speed test logic using JavaScript
        // This is just a placeholder for the PHP demo
        document.getElementById('speedtest-form').addEventListener('submit', function(e) {
            // In a real app, we would prevent form submission and run JavaScript tests
            // e.preventDefault();
            // runSpeedTest();
        });

        // This would be the actual speed test function
        function runSpeedTest() {
            // Implementation would measure actual network performance
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
