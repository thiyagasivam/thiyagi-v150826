<?php include 'header.php';?>


<?php
// IP Lookup API Key (Optional, if using ipinfo.io with a token)
$apiKey = 'd730478b0dec15'; // Leave empty if using the free tier

// Function to perform IP address lookup
function lookupIP($ip, $apiKey) {
    $apiUrl = "https://ipinfo.io/$ip/json" . (!empty($apiKey) ? "?token=$apiKey" : '');
    $response = file_get_contents($apiUrl);
    return json_decode($response, true);
}

// Handle form submission
$ipInfo = [];
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ipAddress = $_POST['ip_address'];

    if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
        $ipInfo = lookupIP($ipAddress, $apiKey);
        if (empty($ipInfo)) {
            $error = 'No information found for this IP address.';
        }
    } else {
        $error = 'Invalid IP address.';
    }
}
?>

    <title>Free IP Lookup 2026 - Find Location, ISP & VPN Detection</title>
<meta name="description" content="Instantly check any IP address - Get geolocation, ISP details, and VPN/proxy detection (2026). Perfect for security analysis and network troubleshooting.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">IP Address Lookup</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="ip_address" class="block text-gray-700 font-bold mb-2">Enter IP Address:</label>
                <input type="text" name="ip_address" id="ip_address" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., 8.8.8.8" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Lookup IP</button>
        </form>
        <?php if (!empty($ipInfo)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">IP Address Information:</h2>
                <div class="mt-4">
                    <p class="text-gray-700"><strong>IP:</strong> <?php echo htmlspecialchars($ipInfo['ip'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>Hostname:</strong> <?php echo htmlspecialchars($ipInfo['hostname'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>City:</strong> <?php echo htmlspecialchars($ipInfo['city'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>Region:</strong> <?php echo htmlspecialchars($ipInfo['region'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>Country:</strong> <?php echo htmlspecialchars($ipInfo['country'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>Location:</strong> <?php echo htmlspecialchars($ipInfo['loc'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>Organization:</strong> <?php echo htmlspecialchars($ipInfo['org'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>Postal Code:</strong> <?php echo htmlspecialchars($ipInfo['postal'] ?? 'N/A'); ?></p>
                    <p class="text-gray-700"><strong>Timezone:</strong> <?php echo htmlspecialchars($ipInfo['timezone'] ?? 'N/A'); ?></p>
                </div>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php';?>


</html>
