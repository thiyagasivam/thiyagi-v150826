<?php include 'header.php';?>


<?php
// Free API Key from WhoisXML (Sign up at https://whoisxmlapi.com/)
$apiKey = 'YOUR_FREE_API_KEY';

// Function to get hosting information using WhoisXML API
function getHostingInfo($domain, $apiKey) {
    $apiUrl = "https://www.whoisxmlapi.com/whoisserver/WhoisService?apiKey=$apiKey&domainName=$domain&outputFormat=JSON";

    // Fetch data from the API
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if (isset($data['WhoisRecord'])) {
        $info = $data['WhoisRecord'];
        $result = "Domain Name: " . ($info['domainName'] ?? 'N/A') . "<br>";
        $result .= "Registrar: " . ($info['registrarName'] ?? 'N/A') . "<br>";
        $result .= "Creation Date: " . ($info['createdDate'] ?? 'N/A') . "<br>";
        $result .= "Expiration Date: " . ($info['expiresDate'] ?? 'N/A') . "<br>";
        $result .= "Name Servers: " . (isset($info['nameServers']) ? implode(', ', $info['nameServers']) : 'N/A') . "<br>";
        return $result;
    } else {
        return "Unable to retrieve hosting information for $domain.";
    }
}

// Handle form submission
$hostingInfo = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $domain = $_POST['domain'];

    if (!empty($domain)) {
        $hostingInfo = getHostingInfo($domain, $apiKey);
        if (strpos($hostingInfo, 'Unable to retrieve') !== false) {
            $error = $hostingInfo;
            $hostingInfo = '';
        }
    } else {
        $error = 'Please enter a valid domain name.';
    }
}
?>

    <title>Free Hosting Checker 2026 - Find Web Server & DNS Provider</title>
<meta name="description" content="Detect any website's hosting company, server location, and DNS details in seconds (2026). Perfect for competitors analysis and migration planning - No technical skills needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Hosting Checker</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="domain" class="block text-gray-700 font-bold mb-2">Enter Domain:</label>
                <input type="text" name="domain" id="domain" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Check Hosting</button>
        </form>
        <?php if (!empty($hostingInfo)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Hosting Information:</h2>
                <div class="text-gray-700 text-xl mt-2"><?php echo $hostingInfo; ?></div>
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
