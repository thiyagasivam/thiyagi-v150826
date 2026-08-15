<?php include 'header.php';?>


<?php
// Function to generate a privacy policy
function generatePrivacyPolicy($data) {
    $companyName = htmlspecialchars($data['company_name']);
    $websiteUrl = htmlspecialchars($data['website_url']);
    $contactEmail = htmlspecialchars($data['contact_email']);
    $policyDate = htmlspecialchars($data['policy_date']);

    $privacyPolicy = <<<EOD
<h2>Privacy Policy for $companyName</h2>
<p>At $companyName, accessible from <a href="$websiteUrl">$websiteUrl</a>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by $companyName and how we use it.</p>

<h3>1. Information We Collect</h3>
<p>We collect various types of information, including but not limited to:</p>
<ul>
    <li>Personal information (e.g., name, email address)</li>
    <li>Log files (e.g., IP address, browser type)</li>
    <li>Cookies and usage data</li>
</ul>

<h3>2. How We Use Your Information</h3>
<p>We use the information we collect in various ways, including to:</p>
<ul>
    <li>Provide, operate, and maintain our website</li>
    <li>Improve, personalize, and expand our website</li>
    <li>Understand and analyze how you use our website</li>
    <li>Develop new products, services, features, and functionality</li>
</ul>

<h3>3. Contact Us</h3>
<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us at <a href="mailto:$contactEmail">$contactEmail</a>.</p>

<p><strong>Effective Date:</strong> $policyDate</p>
EOD;

    return $privacyPolicy;
}

// Handle form submission
$privacyPolicy = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'company_name' => $_POST['company_name'],
        'website_url' => $_POST['website_url'],
        'contact_email' => $_POST['contact_email'],
        'policy_date' => $_POST['policy_date'],
    ];
    $privacyPolicy = generatePrivacyPolicy($data);
}
?>

    <title>Privacy Policy Generator 2026 - Free GDPR & CCPA Compliant Template</title>
<meta name="description" content="Create a custom privacy policy for your website or app in minutes. Our free 2026 generator covers GDPR, CCPA, CalOPPA, and more with legally-reviewed clauses for global compliance.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Privacy Policy Generator</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="company_name" class="block text-gray-700 font-bold mb-2">Company Name:</label>
                <input type="text" name="company_name" id="company_name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., My Company" required>
            </div>
            <div class="mb-4">
                <label for="website_url" class="block text-gray-700 font-bold mb-2">Website URL:</label>
                <input type="url" name="website_url" id="website_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://mycompany.com" required>
            </div>
            <div class="mb-4">
                <label for="contact_email" class="block text-gray-700 font-bold mb-2">Contact Email:</label>
                <input type="email" name="contact_email" id="contact_email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., contact@mycompany.com" required>
            </div>
            <div class="mb-4">
                <label for="policy_date" class="block text-gray-700 font-bold mb-2">Effective Date:</label>
                <input type="date" name="policy_date" id="policy_date" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Generate Privacy Policy</button>
        </form>
        <?php if (!empty($privacyPolicy)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Generated Privacy Policy:</h2>
                <div class="mt-4 text-gray-700"><?php echo $privacyPolicy; ?></div>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php';?>
</html>
