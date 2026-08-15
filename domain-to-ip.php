<?php include 'header.php';?>

<?php
// Function to convert domain to IP
function domainToIp($domain) {
    // Remove 'http://' or 'https://' and trailing slashes
    $domain = preg_replace('#^https?://#', '', rtrim($domain, '/'));

    // Get the IP address
    $ip = gethostbyname($domain);

    // Check if the IP is valid
    if ($ip === $domain) {
        return 'Invalid domain or unable to resolve IP.';
    } else {
        return $ip;
    }
}

// Handle form submission
$ipAddress = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $domain = $_POST['domain'];
    if (!empty($domain)) {
        $ipAddress = domainToIp($domain);
        if (strpos($ipAddress, 'Invalid') !== false) {
            $error = $ipAddress;
            $ipAddress = '';
        }
    } else {
        $error = 'Please enter a domain name.';
    }
}
?>

    <title>Free Domain to IP Converter 2026 - Find IP Address of Any Website</title>
<meta name="description" content="Instantly convert any domain to its IP address with our free 2026 tool. Perfect for networking, troubleshooting, and website analysis—fast and accurate results!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Domain to IP Converter</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="domain" class="block text-gray-700 font-bold mb-2">Enter Domain:</label>
                <input type="text" name="domain" id="domain" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Convert to IP</button>
        </form>
        <?php if (!empty($ipAddress)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">IP Address:</h2>
                <p class="text-gray-700 text-xl mt-2"><?php echo htmlspecialchars($ipAddress); ?></p>
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
