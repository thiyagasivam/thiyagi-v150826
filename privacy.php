<?php
$pageTitle = 'Privacy Policy - Thiyagi Tools | GDPR & CCPA Compliant Data Protection';
$pageDescription = "Thiyagi Tools' privacy policy outlines how we collect, use, and protect your data. Compliant with GDPR, CCPA, and global privacy laws. Learn about your rights and our security measures.";
include 'header.php';
?>
    <style>
        body {
            /* background-color: #f8f9fa; - bg-gray-100 */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6; /* leading-relaxed or leading-loose */
        }
        .privacy-header {
            background-color: #2c3e50; /* bg-gray-800 */
            color: white; /* text-white */
            padding: 60px 0; /* py-16 */
            margin-bottom: 40px; /* mb-10 */
        }
        .privacy-section {
            background: white; /* bg-white */
            border-radius: 8px; /* rounded-lg */
            box-shadow: 0 2px 15px rgba(0,0,0,0.05); /* shadow-md */
            padding: 30px; /* p-8 */
            margin-bottom: 30px; /* mb-8 */
        }
        .policy-date {
            font-size: 0.9rem; /* text-sm */
            color: #6c757d; /* text-gray-500 */
        }
        h2 {
            color: #2c3e50; /* text-gray-800 */
            padding-bottom: 10px; /* pb-2.5 */
            border-bottom: 1px solid #eee; /* border-b border-gray-200 */
            margin-top: 30px; /* mt-8 */
        }
        h3 {
            color: #3498db; /* text-blue-500 */
            margin-top: 25px; /* mt-6 */
        }
    </style>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="privacy-header text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> <!-- container -> max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -->
            <h1 class="text-4xl md:text-5xl font-bold">Privacy Policy</h1> <!-- display-4 fw-bold -> text-4xl md:text-5xl font-bold -->
            <p class="text-xl md:text-2xl">Last updated: <span class="policy-date"><?php echo date('F j, Y'); ?></span></p> <!-- lead -> text-xl md:text-2xl -->
        </div>
    </header>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12"> <!-- container mb-5 -> max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12 -->
        <div class="privacy-section"> <!-- privacy-section -> privacy-section -->
            <p>At Thiyagi Tools, we take your privacy seriously. This policy explains what information we collect and how we use it.</p>

            <h2>1. Information We Collect</h2>
            <h3>1.1 Automatic Data Collection</h3>
            <p>When you use our tools, we may automatically collect:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Browser type and version</li>
                <li>Approximate geographic location (country-level)</li>
                <li>Pages visited and time spent</li>
                <li>Referring website (if applicable)</li>
            </ul>

            <h3>1.2 User-Provided Data</h3>
            <p>For specific tools that require input:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>YouTube URLs (for video analysis tools)</li>
                <li>Text content (for text processing tools)</li>
                <li>Financial numbers (for calculators)</li>
            </ul>
            <p class="mt-2"><strong>Important:</strong> We never store your input data permanently. All processing happens in your browser when possible.</p> <!-- Added mt-2 for spacing -->

            <h2>2. How We Use Information</h2>
            <p>We use collected information to:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Improve tool accuracy and performance</li>
                <li>Understand usage patterns to prioritize development</li>
                <li>Prevent abuse of our services</li>
                <li>Comply with legal obligations</li>
            </ul>

            <h2>3. Data Sharing</h2>
            <p>We do not sell or rent your personal information. Limited data may be shared with:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Google Analytics (anonymous usage data)</li>
                <li>Cloudflare (security and performance)</li>
                <li>Legal authorities if required by law</li>
            </ul>

            <h2>4. Cookies</h2>
            <p>We use only essential cookies for:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Remembering user preferences</li>
                <li>Security protection</li>
                <li>Load balancing</li>
            </ul>

            <h2>5. Your Rights</h2>
            <p>You have the right to:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Request access to your data</li>
                <li>Ask for correction or deletion</li>
                <li>Opt-out of analytics tracking</li>
            </ul>
            <p class="mt-2">To exercise these rights, please <a href="contact" class="text-blue-600 hover:underline">contact us</a>.</p> <!-- Added mt-2 and styling for link -->

            <h2>6. Changes to This Policy</h2>
            <p>We may update this policy periodically. Significant changes will be announced on our homepage.</p>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
</body>
<?php include 'footer.php';?>
</html>
