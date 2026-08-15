<?php include 'header.php'; ?>

<?php
// SEO-friendly settings
$page_title = "Twitter Card Generator";
$page_description = "Generate Twitter Cards for your website or app with this easy-to-use tool.";
$page_keywords = "Twitter Card, Twitter Meta Tags, SEO, Social Media, App Cards";
$page_url = "https://yourdomain.com/twitter-card-generator";
?>

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        #twitter-card-form {
            max-width: 600px;
            margin: 0 auto;
        }
        #generated-meta-tags {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Twitter Card Generator</h1>

        <!-- Twitter Card Form -->
        <form id="twitter-card-form" class="bg-white p-6 rounded-lg shadow-md">
            <!-- Card Type -->
            <div class="mb-4">
                <label for="card-type" class="block text-sm font-medium text-gray-700">Select Type</label>
                <select id="card-type" name="card-type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                    <option value="summary">Summary</option>
                    <option value="summary_large_image">Summary with Large Image</option>
                    <option value="app">App</option>
                    <option value="player">Player</option>
                </select>
            </div>

            <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
            </div>

            <!-- Image URL -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input type="url" id="image" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <!-- Site Username -->
            <div class="mb-4">
                <label for="site" class="block text-sm font-medium text-gray-700">Site Username</label>
                <input type="text" id="site" name="site" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <!-- Creator Username -->
            <div class="mb-4">
                <label for="creator" class="block text-sm font-medium text-gray-700">Creator Username</label>
                <input type="text" id="creator" name="creator" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <!-- App Details -->
            <div id="app-details" class="hidden">
                <div class="mb-4">
                    <label for="app-name" class="block text-sm font-medium text-gray-700">App Name</label>
                    <input type="text" id="app-name" name="app-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="iphone-id" class="block text-sm font-medium text-gray-700">iPhone App ID</label>
                    <input type="text" id="iphone-id" name="iphone-id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="ipad-id" class="block text-sm font-medium text-gray-700">iPad App ID</label>
                    <input type="text" id="ipad-id" name="ipad-id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="google-play-id" class="block text-sm font-medium text-gray-700">Google Play App ID</label>
                    <input type="text" id="google-play-id" name="google-play-id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="app-country" class="block text-sm font-medium text-gray-700">App Country (If Not Available in US Store)</label>
                    <input type="text" id="app-country" name="app-country" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
            </div>

            <!-- Number of Images -->
            <div class="mb-4">
                <label for="image-count" class="block text-sm font-medium text-gray-700">Number of Images</label>
                <input type="number" id="image-count" name="image-count" min="1" max="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Generate Twitter Card</button>
        </form>

        <!-- Generated Twitter Card Meta Tags -->
        <div id="generated-meta-tags" class="mt-8 bg-white p-6 rounded-lg shadow-md hidden">
            <h2 class="text-xl font-bold mb-4">Generated Twitter Card Meta Tags</h2>
            <pre id="meta-tags-output" class="bg-gray-100 p-4 rounded-md"></pre>
        </div>
    </div>

    <!-- JavaScript for Generating Meta Tags -->
    <script>
        document.getElementById('twitter-card-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const cardType = document.getElementById('card-type').value;
            const title = document.getElementById('title').value;
            const description = document.getElementById('description').value;
            const image = document.getElementById('image').value;
            const site = document.getElementById('site').value;
            const creator = document.getElementById('creator').value;
            const appName = document.getElementById('app-name').value;
            const iphoneId = document.getElementById('iphone-id').value;
            const ipadId = document.getElementById('ipad-id').value;
            const googlePlayId = document.getElementById('google-play-id').value;
            const appCountry = document.getElementById('app-country').value;
            const imageCount = document.getElementById('image-count').value;

            let metaTags = `
<meta name="twitter:card" content="${cardType}">
<meta name="twitter:title" content="${title}">
<meta name="twitter:description" content="${description}">
<meta name="twitter:image" content="${image}">
<meta name="twitter:site" content="@${site}">
<meta name="twitter:creator" content="@${creator}">
            `;

            if (cardType === 'app') {
                metaTags += `
<meta name="twitter:app:name:iphone" content="${appName}">
<meta name="twitter:app:id:iphone" content="${iphoneId}">
<meta name="twitter:app:name:ipad" content="${appName}">
<meta name="twitter:app:id:ipad" content="${ipadId}">
<meta name="twitter:app:name:googleplay" content="${appName}">
<meta name="twitter:app:id:googleplay" content="${googlePlayId}">
<meta name="twitter:app:country" content="${appCountry}">
                `;
            }

            for (let i = 1; i <= imageCount; i++) {
                metaTags += `
<meta name="twitter:image${i}" content="${image}">
                `;
            }

            document.getElementById('meta-tags-output').textContent = metaTags.trim();
            document.getElementById('generated-meta-tags').classList.remove('hidden');
        });

        // Show/hide app details based on card type
        document.getElementById('card-type').addEventListener('change', function () {
            const appDetails = document.getElementById('app-details');
            if (this.value === 'app') {
                appDetails.classList.remove('hidden');
            } else {
                appDetails.classList.add('hidden');
            }
        });
    </script>
</body>
   <?php include 'footer.php'; ?>

</html>
