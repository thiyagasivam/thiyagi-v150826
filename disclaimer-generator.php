<?php include 'header.php';?>


<?php
// Function to generate disclaimer text
function generateDisclaimer($type, $company, $website, $email) {
    $disclaimers = [
        'general' => "
            <h3 class='text-xl font-semibold mb-2'>General Disclaimer</h3>
            <p>The information provided by $company ('we', 'us', or 'our') on $website (the 'Site') is for general informational purposes only. All information on the Site is provided in good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the Site.</p>
            
            <p>Under no circumstance shall we have any liability to you for any loss or damage of any kind incurred as a result of the use of the site or reliance on any information provided on the site. Your use of the site and your reliance on any information on the site is solely at your own risk.</p>
        ",
        'affiliate' => "
            <h3 class='text-xl font-semibold mb-2'>Affiliate Disclaimer</h3>
            <p>This site $website and the products and services offered on this site are not associated, affiliated, endorsed, or sponsored by any business listed on this page nor have they been reviewed tested or certified by any other company.</p>
            
            <p>We may earn a commission if you purchase something through our affiliate links. This comes at no extra cost to you and helps support the maintenance of this website.</p>
        ",
        'medical' => "
            <h3 class='text-xl font-semibold mb-2'>Medical Disclaimer</h3>
            <p>The information provided by $company ('we', 'us', or 'our') on $website (the 'Site') is for general informational purposes only. All information on the Site is provided in good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any medical information on the Site.</p>
            
            <p>The Site cannot and does not contain medical advice. The medical information is provided for general informational and educational purposes only and is not a substitute for professional advice. Accordingly, before taking any actions based upon such information, we encourage you to consult with the appropriate professionals.</p>
        ",
        'financial' => "
            <h3 class='text-xl font-semibold mb-2'>Financial Disclaimer</h3>
            <p>The information provided by $company ('we', 'us', or 'our') on $website (the 'Site') is for general informational purposes only. All information on the Site is provided in good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any financial information on the Site.</p>
            
            <p>The Site cannot and does not contain financial advice. The financial information is provided for general informational and educational purposes only and is not a substitute for professional advice. Accordingly, before taking any actions based upon such information, we encourage you to consult with the appropriate professionals.</p>
        ",
        'copyright' => "
            <h3 class='text-xl font-semibold mb-2'>Copyright Disclaimer</h3>
            <p>Under Section 107 of the Copyright Act 1976, allowance is made for 'fair use' for purposes such as criticism, comment, news reporting, teaching, scholarship, and research. Fair use is a use permitted by copyright statute that might otherwise be infringing.</p>
            
            <p>If you have any copyright issues with any of the content on $website, please contact us at $email with proof of ownership and we will remove the infringing material immediately.</p>
        "
    ];

    return $disclaimers[$type] ?? $disclaimers['general'];
}

// Handle form submission
$disclaimerText = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'] ?? 'general';
    $company = $_POST['company'] ?? '';
    $website = $_POST['website'] ?? '';
    $email = $_POST['email'] ?? '';
    
    $disclaimerText = generateDisclaimer($type, $company, $website, $email);
}
?>

    <title>Free Disclaimer Generator 2026 – Create Custom Legal Disclaimers in Minutes</title>
    <meta name="description" content="Generate professional, legally compliant disclaimers for your website, app, or business with our free 2026 tool. No legal fees—customize and download instantly!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .disclaimer-preview {
            min-height: 200px;
            border: 1px dashed #ccc;
            padding: 1rem;
            background-color: #f9f9f9;
        }
        .copy-btn {
            transition: all 0.3s ease;
        }
        .copy-btn:hover {
            transform: translateY(-2px);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Disclaimer Generator</h1>
            <p class="text-gray-600">Create professional disclaimers for your website in seconds</p>
        </header>

        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="type" class="block text-gray-700 font-medium mb-2">Disclaimer Type</label>
                        <select id="type" name="type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="general">General Disclaimer</option>
                            <option value="affiliate">Affiliate Disclaimer</option>
                            <option value="medical">Medical Disclaimer</option>
                            <option value="financial">Financial Disclaimer</option>
                            <option value="copyright">Copyright Disclaimer</option>
                        </select>
                    </div>
                    <div>
                        <label for="company" class="block text-gray-700 font-medium mb-2">Company/Your Name</label>
                        <input type="text" id="company" name="company" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="My Company LLC">
                    </div>
                    <div>
                        <label for="website" class="block text-gray-700 font-medium mb-2">Website URL</label>
                        <input type="url" id="website" name="website" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Contact Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="contact@example.com">
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                    Generate Disclaimer
                </button>
            </form>
        </div>

        <?php if (!empty($disclaimerText)): ?>
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-gray-800">Your Generated Disclaimer</h2>
                <button onclick="copyToClipboard()" class="copy-btn bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-4 rounded-lg flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                    Copy Text
                </button>
            </div>
            <div class="disclaimer-preview rounded-lg mb-4">
                <?php echo $disclaimerText; ?>
            </div>
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="font-semibold text-blue-800 mb-2">How to use this disclaimer:</h3>
                <ol class="list-decimal list-inside text-blue-700">
                    <li class="mb-1">Copy the generated disclaimer text above</li>
                    <li class="mb-1">Paste it on your website's disclaimer page</li>
                    <li>Link to it from your footer or terms page</li>
                </ol>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <script>
        function copyToClipboard() {
            const disclaimerText = document.querySelector('.disclaimer-preview').innerText;
            navigator.clipboard.writeText(disclaimerText).then(() => {
                alert('Disclaimer copied to clipboard!');
            });
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
