<?php include 'header.php';?>


<?php
// Function to check DNS records
function checkDNSRecords($domain) {
    $recordTypes = ['A', 'MX', 'CNAME', 'TXT', 'NS', 'SOA'];
    $results = [];

    foreach ($recordTypes as $type) {
        $records = @dns_get_record($domain, constant("DNS_$type"));
        if (!empty($records)) {
            $results[$type] = $records;
        }
    }

    return $results;
}

// Function to format DNS records for display
function formatDNSRecords($dnsRecords) {
    $formattedRecords = [];

    foreach ($dnsRecords as $type => $records) {
        $formattedRecords[$type] = [];
        foreach ($records as $record) {
            switch ($type) {
                case 'A':
                    $formattedRecords[$type][] = "IP: {$record['ip']}";
                    break;
                case 'MX':
                    $formattedRecords[$type][] = "Priority: {$record['pri']}, Target: {$record['target']}";
                    break;
                case 'CNAME':
                    $formattedRecords[$type][] = "Target: {$record['target']}";
                    break;
                case 'TXT':
                    $formattedRecords[$type][] = "Text: {$record['txt']}";
                    break;
                case 'NS':
                    $formattedRecords[$type][] = "Name Server: {$record['target']}";
                    break;
                case 'SOA':
                    $formattedRecords[$type][] = "Primary NS: {$record['mname']}, Admin Email: {$record['rname']}, Serial: {$record['serial']}, Refresh: {$record['refresh']}, Retry: {$record['retry']}, Expire: {$record['expire']}, Minimum TTL: {$record['minimum-ttl']}";
                    break;
            }
        }
    }

    return $formattedRecords;
}

// Handle form submission
$domain = '';
$dnsRecords = [];
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $domain = trim($_POST['domain']);
    if (!empty($domain)) {
        // Remove 'http://' or 'https://' if present
        $domain = preg_replace('#^https?://#', '', $domain);
        // Remove trailing slashes
        $domain = rtrim($domain, '/');

        if (filter_var($domain, FILTER_VALIDATE_DOMAIN)) {
            $dnsRecords = checkDNSRecords($domain);
            if (empty($dnsRecords)) {
                $error = 'No DNS records found for this domain.';
            } else {
                $dnsRecords = formatDNSRecords($dnsRecords);
            }
        } else {
            $error = 'Invalid domain name.';
        }
    } else {
        $error = 'Please enter a domain name.';
    }
}
?>

    <title>Free DNS Records Checker 2026 - Verify & Analyze Domain Records Instantly</title>
    <meta name="description" content="Quickly check and validate DNS records (A, MX, CNAME, TXT) for any domain with our free 2026 tool. Perfect for troubleshooting, migrations, and website setup!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">DNS Records Checker</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="domain" class="block text-gray-700 font-bold mb-2">Enter Domain:</label>
                <input type="text" name="domain" id="domain" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., example.com" value="<?php echo htmlspecialchars($domain); ?>" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Check DNS Records</button>
        </form>
        <?php if (!empty($dnsRecords)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">DNS Records for <?php echo htmlspecialchars($domain); ?>:</h2>
                <?php foreach ($dnsRecords as $type => $records): ?>
                    <div class="mt-4">
                        <h3 class="text-xl font-bold text-gray-700"><?php echo htmlspecialchars($type); ?> Records:</h3>
                        <ul class="list-disc list-inside text-gray-700 text-lg mt-2">
                            <?php foreach ($records as $record): ?>
                                <li><?php echo htmlspecialchars($record); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
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
