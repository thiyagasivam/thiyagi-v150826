<?php include 'header.php';?>

<?php
/**
 * YouTube Title Generator Tool
 */

// Function to generate YouTube titles based on input keywords
function generateTitles($keywords) {
    if (empty(trim($keywords))) {
        return [];
    }

    // Clean and process keywords
    $keywords = trim($keywords);
    $words = preg_split('/[,\s]+/', $keywords, -1, PREG_SPLIT_NO_EMPTY);
    
    // Remove duplicates and common stop words
    $words = array_unique($words);
    $stopWords = ['the', 'and', 'or', 'a', 'an', 'in', 'on', 'at', 'for', 'to', 'of', 'with', 'by'];
    $filteredWords = array_diff(array_map('strtolower', $words), $stopWords);
    
    if (empty($filteredWords)) {
        return [];
    }

    $mainKeyword = implode(' ', array_slice($filteredWords, 0, 3));
    $allKeywords = implode(' ', $filteredWords);
    
    // Generate diverse title suggestions
    $titles = [
        // How-to titles
        "How to " . ucwords($mainKeyword) . " - Complete Guide 2026",
        "How to " . ucwords($mainKeyword) . " in 10 Minutes",
        "How to " . ucwords($mainKeyword) . " Like a Pro",
        
        // List titles
        "Top 10 " . ucwords($mainKeyword) . " Tips You Must Know",
        "5 Best " . ucwords($mainKeyword) . " Strategies That Work",
        "7 Amazing " . ucwords($mainKeyword) . " Tricks",
        
        // Ultimate guides
        "Ultimate Guide to " . ucwords($mainKeyword) . " for Beginners",
        "The Complete " . ucwords($mainKeyword) . " Tutorial",
        "Master " . ucwords($mainKeyword) . " in 2026",
        
        // Explanatory titles
        ucwords($mainKeyword) . " Explained in Simple Terms",
        "Everything You Need to Know About " . ucwords($mainKeyword),
        ucwords($mainKeyword) . " Made Easy",
        
        // Problem-solution titles
        "Why " . ucwords($mainKeyword) . " Isn't Working (And How to Fix It)",
        "Common " . ucwords($mainKeyword) . " Mistakes to Avoid",
        "The Truth About " . ucwords($mainKeyword),
        
        // Trending/current titles
        ucwords($mainKeyword) . " in 2026: What You Need to Know",
        "Latest " . ucwords($mainKeyword) . " Trends and Updates",
        "Future of " . ucwords($mainKeyword) . " - 2026 Predictions",
        
        // Question titles
        "What is " . ucwords($mainKeyword) . "? (Beginner's Guide)",
        "Is " . ucwords($mainKeyword) . " Worth It in 2026?",
        "Should You Try " . ucwords($mainKeyword) . "?",
        
        // Comparison titles
        ucwords($mainKeyword) . " vs Alternatives: Which is Better?",
        "Best " . ucwords($mainKeyword) . " Tools Compared",
        
        // Results-focused titles
        "I Tried " . ucwords($mainKeyword) . " for 30 Days - Here's What Happened",
        "My " . ucwords($mainKeyword) . " Results After 1 Year",
        ucwords($mainKeyword) . " Before and After"
    ];
    
    return array_slice($titles, 0, 15); // Return top 15 suggestions
}

// Handle form submission
$titles = [];
$error = '';
$inputKeywords = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputKeywords = trim($_POST['keywords'] ?? '');
    
    if (empty($inputKeywords)) {
        $error = 'Please enter some keywords to generate titles.';
    } else {
        $titles = generateTitles($inputKeywords);
        if (empty($titles)) {
            $error = 'Unable to generate titles. Please try different keywords.';
        }
    }
}
?>
    <title>Free YouTube Title Generator 2026 - Create Engaging Video Titles</title>
    <meta name="description" content="Generate compelling YouTube video titles that drive views and engagement. Professional title creator tool for content creators and marketers (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .title-item {
            transition: all 0.2s ease;
        }
        .title-item:hover {
            background-color: #f3f4f6;
            transform: translateX(5px);
        }
        .copy-btn {
            opacity: 0;
            transition: opacity 0.2s ease;
        }
        .title-item:hover .copy-btn {
            opacity: 1;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Title Generator",
        "description": "Generate compelling YouTube video titles that drive views and engagement. Professional title creator tool for content creators and marketers.",
        "url": "https://www.thiyagi.com/youtube-title-generator",
        "applicationCategory": "WebApplication",
        "operatingSystem": "Any",
        "permissions": "browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "provider": {
            "@type": "Organization",
            "name": "Thiyagi",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.thiyagi.com"
        },{
            "@type": "ListItem",
            "position": 2,
            "name": "YouTube Title Generator",
            "item": "https://www.thiyagi.com/youtube-title-generator"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I create engaging YouTube titles?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Use our YouTube title generator by entering your video keywords. We'll create multiple engaging title options including how-to guides, lists, tutorials, and trending formats that drive views."
            }
        },{
            "@type": "Question",
            "name": "What makes a good YouTube video title?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Good YouTube titles are clear, include relevant keywords, create curiosity, stay under 60 characters, and match the video content. They should be engaging without being clickbait."
            }
        },{
            "@type": "Question",
            "name": "How many title ideas does the generator create?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our generator creates 15 diverse title suggestions in different formats including how-to guides, top lists, tutorials, explanations, and trending topics to give you variety."
            }
        }]
    }
    </script>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Title Generator</h1>
            <p class="text-gray-600">Create engaging video titles that drive views and engagement</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="keywords" class="block text-gray-700 font-medium mb-2">Enter Keywords or Topic:</label>
                    <textarea name="keywords" id="keywords" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                              placeholder="Example: digital marketing, SEO tips, video editing, cooking recipes"
                              required><?= htmlspecialchars($inputKeywords) ?></textarea>
                    <p class="text-gray-500 text-sm mt-1">Enter keywords separated by commas or spaces</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Generate Titles
                    </button>
                    <button type="button" onclick="document.getElementById('keywords').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($titles) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Generated Titles</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($titles)): ?>
                    <div class="space-y-3">
                        <?php foreach ($titles as $index => $title): ?>
                        <div class="title-item p-3 border border-gray-200 rounded-lg relative group cursor-pointer" 
                             onclick="copyTitle('<?= htmlspecialchars($title, ENT_QUOTES) ?>', this)">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <span class="inline-block bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded mr-2">
                                        <?= $index + 1 ?>
                                    </span>
                                    <span class="text-gray-800"><?= htmlspecialchars($title) ?></span>
                                </div>
                                <button class="copy-btn bg-blue-600 hover:bg-blue-700 text-white px-2 py-1 rounded text-xs transition duration-200">
                                    Copy
                                </button>
                            </div>
                            <div class="mt-2 text-xs text-gray-500">
                                Length: <?= strlen($title) ?> characters
                                <?php if (strlen($title) > 60): ?>
                                <span class="text-orange-600 font-medium">(May be truncated in search)</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">💡 Pro Tips:</h3>
                        <ul class="text-blue-700 text-sm space-y-1">
                            <li>• Keep titles under 60 characters for full visibility</li>
                            <li>• Include your main keyword near the beginning</li>
                            <li>• Create curiosity without being misleading</li>
                            <li>• Use numbers and power words when relevant</li>
                            <li>• Test different titles to see what works best</li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">YouTube Title Best Practices</h2>
            <div class="prose max-w-none text-gray-700">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">✅ Do This:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Use relevant keywords early</li>
                            <li>Keep titles clear and descriptive</li>
                            <li>Include numbers when possible</li>
                            <li>Create emotional connection</li>
                            <li>Match your thumbnail</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-red-800 mb-2">❌ Avoid This:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Misleading clickbait</li>
                            <li>ALL CAPS titles</li>
                            <li>Too many special characters</li>
                            <li>Overly long titles (60+ chars)</li>
                            <li>Keyword stuffing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Title Categories</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">📚 Educational</h3>
                    <p class="text-blue-700 text-sm">How-to guides, tutorials, explanations</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg border border-green-200">
                    <h3 class="font-semibold text-green-800 mb-2">📋 List-Based</h3>
                    <p class="text-green-700 text-sm">Top 10, best of, comparisons</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg border border-purple-200">
                    <h3 class="font-semibold text-purple-800 mb-2">❓ Question</h3>
                    <p class="text-purple-700 text-sm">What, why, how, should you</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyTitle(title, element) {
            navigator.clipboard.writeText(title).then(function() {
                const button = element.querySelector('.copy-btn');
                const originalText = button.textContent;
                button.textContent = 'Copied!';
                button.classList.add('bg-green-600');
                
                setTimeout(function() {
                    button.textContent = originalText;
                    button.classList.remove('bg-green-600');
                }, 2000);
            }).catch(function(err) {
                console.error('Failed to copy: ', err);
            });
        }
    </script>
</body>
<?php include 'footer.php';?>
</html>