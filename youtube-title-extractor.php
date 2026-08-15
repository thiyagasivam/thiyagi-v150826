<?php include 'header.php';?>

<?php
/**
 * YouTube Title Extractor Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to extract the title of a YouTube video
function extractYouTubeTitle($videoId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&id=$videoId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $snippet = $data['items'][0]['snippet'];
        $stats = $data['items'][0]['statistics'] ?? [];
        
        return [
            'title' => $snippet['title'] ?? '',
            'description' => $snippet['description'] ?? '',
            'channelTitle' => $snippet['channelTitle'] ?? '',
            'publishedAt' => $snippet['publishedAt'] ?? '',
            'tags' => $snippet['tags'] ?? [],
            'viewCount' => $stats['viewCount'] ?? 0,
            'likeCount' => $stats['likeCount'] ?? 0,
            'commentCount' => $stats['commentCount'] ?? 0,
        ];
    }
    return null;
}

// Function to extract video ID from YouTube URL
function extractVideoId($url) {
    $patterns = [
        '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
        '/youtu\.be\/([a-zA-Z0-9_-]+)/',
        '/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
        '/youtube\.com\/v\/([a-zA-Z0-9_-]+)/',
    ];
    
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
        }
    }
    return false;
}

// Handle form submission
$videoData = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    
    if (empty($videoUrl)) {
        $error = 'Please enter a YouTube video URL.';
    } else {
        $videoId = extractVideoId($videoUrl);
        
        if (!$videoId) {
            $error = 'Invalid YouTube video URL. Please enter a valid YouTube URL.';
        } else {
            $videoData = extractYouTubeTitle($videoId, $apiKey);
            if (!$videoData || empty($videoData['title'])) {
                $error = 'Unable to extract title. Please check the URL and try again.';
            }
        }
    }
}
?>
    <title>Free YouTube Title Extractor 2026 - Extract Video Titles Instantly</title>
    <meta name="description" content="Extract YouTube video titles instantly from any video URL. Professional title extraction tool for content creators and researchers (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .copy-btn {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            z-index: 10;
        }
        .result-container {
            position: relative;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Title Extractor",
        "description": "Extract YouTube video titles instantly from any video URL. Professional title extraction tool for content creators and researchers.",
        "url": "https://www.thiyagi.com/youtube-title-extractor",
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
            "name": "YouTube Title Extractor",
            "item": "https://www.thiyagi.com/youtube-title-extractor"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I extract a YouTube video title?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Simply paste any YouTube video URL into our extractor tool. We'll instantly extract the title along with additional video information like channel name, publish date, and statistics."
            }
        },{
            "@type": "Question",
            "name": "What YouTube URL formats are supported?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We support all YouTube URL formats including youtube.com/watch, youtu.be, youtube.com/embed, and youtube.com/v links."
            }
        },{
            "@type": "Question",
            "name": "Can I extract titles from private videos?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, our tool only works with public YouTube videos. Private, unlisted, or restricted videos cannot be accessed for title extraction."
            }
        }]
    }
    </script>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Title Extractor</h1>
            <p class="text-gray-600">Extract YouTube video titles and information instantly</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="video_url" class="block text-gray-700 font-medium mb-2">Enter YouTube Video URL:</label>
                    <input type="url" name="video_url" id="video_url" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="https://www.youtube.com/watch?v=VIDEO_ID" 
                           value="<?= htmlspecialchars($_POST['video_url'] ?? '') ?>"
                           required>
                    <p class="text-gray-500 text-sm mt-1">Supports youtube.com and youtu.be URLs</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Extract Title
                    </button>
                    <button type="button" onclick="document.getElementById('video_url').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($videoData) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Extraction Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($videoData)): ?>
                    <div class="space-y-6">
                        <!-- Video Title -->
                        <div class="result-container">
                            <label class="block text-gray-700 font-medium mb-2">Video Title:</label>
                            <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                                <p class="text-gray-800 text-lg" id="extracted_title"><?= htmlspecialchars($videoData['title']) ?></p>
                                <button onclick="copyToClipboard('extracted_title')" class="copy-btn bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm transition duration-200">
                                    Copy
                                </button>
                            </div>
                        </div>

                        <!-- Video Information -->
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-3">Video Information</h3>
                            <div class="grid md:grid-cols-2 gap-4 text-sm">
                                <div>
                                    <span class="font-medium text-blue-700">Channel:</span>
                                    <span class="text-blue-900"><?= htmlspecialchars($videoData['channelTitle']) ?></span>
                                </div>
                                <?php if (!empty($videoData['publishedAt'])): ?>
                                <div>
                                    <span class="font-medium text-blue-700">Published:</span>
                                    <span class="text-blue-900"><?= date('F j, Y', strtotime($videoData['publishedAt'])) ?></span>
                                </div>
                                <?php endif; ?>
                                <div>
                                    <span class="font-medium text-blue-700">Title Length:</span>
                                    <span class="text-blue-900"><?= strlen($videoData['title']) ?> characters</span>
                                </div>
                                <?php if (!empty($videoData['viewCount'])): ?>
                                <div>
                                    <span class="font-medium text-blue-700">Views:</span>
                                    <span class="text-blue-900"><?= number_format($videoData['viewCount']) ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Statistics (if available) -->
                        <?php if (!empty($videoData['viewCount']) || !empty($videoData['likeCount'])): ?>
                        <div class="grid md:grid-cols-3 gap-4">
                            <?php if (!empty($videoData['viewCount'])): ?>
                            <div class="bg-gray-50 p-4 rounded-lg border text-center">
                                <div class="text-2xl font-bold text-gray-600"><?= number_format($videoData['viewCount']) ?></div>
                                <div class="text-gray-700 font-medium">Views</div>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($videoData['likeCount'])): ?>
                            <div class="bg-gray-50 p-4 rounded-lg border text-center">
                                <div class="text-2xl font-bold text-gray-600"><?= number_format($videoData['likeCount']) ?></div>
                                <div class="text-gray-700 font-medium">Likes</div>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($videoData['commentCount'])): ?>
                            <div class="bg-gray-50 p-4 rounded-lg border text-center">
                                <div class="text-2xl font-bold text-gray-600"><?= number_format($videoData['commentCount']) ?></div>
                                <div class="text-gray-700 font-medium">Comments</div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <!-- Tags (if available) -->
                        <?php if (!empty($videoData['tags'])): ?>
                        <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                            <h3 class="text-lg font-semibold text-purple-800 mb-2">Tags</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach (array_slice($videoData['tags'], 0, 10) as $tag): ?>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-sm"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                                <?php if (count($videoData['tags']) > 10): ?>
                                <span class="text-purple-600 text-sm">+<?= count($videoData['tags']) - 10 ?> more</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About YouTube Title Extractor</h2>
            <div class="prose max-w-none text-gray-700">
                <p class="mb-4">Our YouTube Title Extractor tool allows you to quickly extract titles and metadata from any public YouTube video. Perfect for content research, competitor analysis, and SEO optimization.</p>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-2">✅ What You Get:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Complete video title</li>
                            <li>Channel information</li>
                            <li>Publication date</li>
                            <li>View and engagement stats</li>
                            <li>Video tags (when available)</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-2">📊 Use Cases:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Content research and analysis</li>
                            <li>Competitor title research</li>
                            <li>SEO keyword extraction</li>
                            <li>Social media content planning</li>
                            <li>Academic research</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Supported URL Formats</h2>
            <div class="space-y-3">
                <div class="bg-gray-50 p-3 rounded border">
                    <code class="text-blue-600">https://www.youtube.com/watch?v=VIDEO_ID</code>
                    <span class="text-gray-600 ml-2">(Standard YouTube URL)</span>
                </div>
                <div class="bg-gray-50 p-3 rounded border">
                    <code class="text-blue-600">https://youtu.be/VIDEO_ID</code>
                    <span class="text-gray-600 ml-2">(Short YouTube URL)</span>
                </div>
                <div class="bg-gray-50 p-3 rounded border">
                    <code class="text-blue-600">https://www.youtube.com/embed/VIDEO_ID</code>
                    <span class="text-gray-600 ml-2">(Embed URL)</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const range = document.createRange();
            range.selectNode(element);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            // Show feedback
            const btn = event.target;
            btn.textContent = 'Copied!';
            setTimeout(() => {
                btn.textContent = 'Copy';
            }, 2000);
        }
    </script>
</body>
<?php include 'footer.php';?>
</html>