<?php include 'header.php';?>

<?php
/**
 * YouTube Description Extractor Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to extract video description and metadata
function extractVideoData($videoId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&id=$videoId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $item = $data['items'][0];
        $snippet = $item['snippet'];
        $stats = $item['statistics'] ?? [];
        
        return [
            'title' => $snippet['title'] ?? '',
            'description' => $snippet['description'] ?? '',
            'channelTitle' => $snippet['channelTitle'] ?? '',
            'publishedAt' => $snippet['publishedAt'] ?? '',
            'tags' => $snippet['tags'] ?? [],
            'categoryId' => $snippet['categoryId'] ?? '',
            'defaultLanguage' => $snippet['defaultLanguage'] ?? '',
            'viewCount' => $stats['viewCount'] ?? 0,
            'likeCount' => $stats['likeCount'] ?? 0,
            'commentCount' => $stats['commentCount'] ?? 0,
            'thumbnails' => $snippet['thumbnails'] ?? []
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
    ];
    
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
        }
    }
    return false;
}

// Function to analyze description content
function analyzeDescription($description) {
    if (empty($description)) {
        return null;
    }
    
    $analysis = [];
    $analysis['length'] = strlen($description);
    $analysis['wordCount'] = str_word_count($description);
    $analysis['lineCount'] = substr_count($description, "\n") + 1;
    
    // Extract URLs
    preg_match_all('/https?:\/\/[^\s\r\n]+/', $description, $matches);
    $analysis['urls'] = $matches[0];
    $analysis['urlCount'] = count($matches[0]);
    
    // Extract hashtags
    preg_match_all('/#[\w\p{L}]+/u', $description, $hashMatches);
    $analysis['hashtags'] = array_unique($hashMatches[0]);
    $analysis['hashtagCount'] = count($analysis['hashtags']);
    
    // Extract mentions
    preg_match_all('/@[\w\p{L}]+/u', $description, $mentionMatches);
    $analysis['mentions'] = array_unique($mentionMatches[0]);
    $analysis['mentionCount'] = count($analysis['mentions']);
    
    return $analysis;
}

// Handle form submission
$videoData = null;
$error = '';
$descriptionAnalysis = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    
    if (empty($videoUrl)) {
        $error = 'Please enter a YouTube video URL.';
    } else {
        $videoId = extractVideoId($videoUrl);
        
        if (!$videoId) {
            $error = 'Invalid YouTube video URL. Please enter a valid YouTube URL.';
        } else {
            $videoData = extractVideoData($videoId, $apiKey);
            if (!$videoData) {
                $error = 'Unable to fetch video data. Please check the URL and try again.';
            } else {
                $descriptionAnalysis = analyzeDescription($videoData['description']);
            }
        }
    }
}
?>
    <title>Free YouTube Description Extractor 2026 - Extract Video Descriptions</title>
    <meta name="description" content="Extract YouTube video descriptions instantly from any video URL. Professional description extraction tool for content analysis and research (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Description Extractor",
        "description": "Extract YouTube video descriptions instantly from any video URL. Professional description extraction tool for content analysis and research.",
        "url": "https://www.thiyagi.com/youtube-description-extractor",
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
            "name": "YouTube Description Extractor",
            "item": "https://www.thiyagi.com/youtube-description-extractor"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "Why extract YouTube video descriptions?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Extracting video descriptions helps with content analysis, SEO research, competitor study, and understanding successful content strategies used by other creators in your niche."
            }
        },{
            "@type": "Question",
            "name": "Can I extract descriptions from any YouTube video?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can extract descriptions from any public YouTube video. Private, unlisted, or age-restricted videos may not be accessible through this tool."
            }
        },{
            "@type": "Question",
            "name": "What can I learn from video descriptions?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Video descriptions reveal SEO keywords, hashtags, links, calls-to-action, content structure, and engagement strategies that successful creators use to grow their channels."
            }
        }]
    }
    </script>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Description Extractor</h1>
            <p class="text-gray-600">Extract and analyze YouTube video descriptions for content research and SEO insights</p>
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
                    <p class="text-gray-500 text-sm mt-1">We'll extract the complete description and analyze its content</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Extract Description
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
                    <!-- Video Information -->
                    <div class="bg-blue-50 p-4 rounded-lg border border-blue-200 mb-6">
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">Video Information</h3>
                        <div class="space-y-2 text-sm">
                            <p><span class="font-medium text-blue-700">Title:</span> <?= htmlspecialchars($videoData['title']) ?></p>
                            <p><span class="font-medium text-blue-700">Channel:</span> <?= htmlspecialchars($videoData['channelTitle']) ?></p>
                            <?php if (!empty($videoData['publishedAt'])): ?>
                            <p><span class="font-medium text-blue-700">Published:</span> <?= date('F j, Y', strtotime($videoData['publishedAt'])) ?></p>
                            <?php endif; ?>
                            <div class="grid md:grid-cols-3 gap-4 mt-3">
                                <p><span class="font-medium text-blue-700">Views:</span> <?= number_format($videoData['viewCount']) ?></p>
                                <p><span class="font-medium text-blue-700">Likes:</span> <?= number_format($videoData['likeCount']) ?></p>
                                <p><span class="font-medium text-blue-700">Comments:</span> <?= number_format($videoData['commentCount']) ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Description Analysis -->
                    <?php if (!empty($descriptionAnalysis)): ?>
                    <div class="bg-green-50 p-4 rounded-lg border border-green-200 mb-6">
                        <h3 class="text-lg font-semibold text-green-800 mb-3">📊 Description Analysis</h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 text-sm">
                            <div class="bg-white p-3 rounded border">
                                <p class="font-medium text-green-700">Length</p>
                                <p class="text-2xl font-bold text-green-600"><?= number_format($descriptionAnalysis['length']) ?></p>
                                <p class="text-xs text-green-500">characters</p>
                            </div>
                            <div class="bg-white p-3 rounded border">
                                <p class="font-medium text-blue-700">Words</p>
                                <p class="text-2xl font-bold text-blue-600"><?= number_format($descriptionAnalysis['wordCount']) ?></p>
                                <p class="text-xs text-blue-500">word count</p>
                            </div>
                            <div class="bg-white p-3 rounded border">
                                <p class="font-medium text-purple-700">URLs</p>
                                <p class="text-2xl font-bold text-purple-600"><?= $descriptionAnalysis['urlCount'] ?></p>
                                <p class="text-xs text-purple-500">links found</p>
                            </div>
                            <div class="bg-white p-3 rounded border">
                                <p class="font-medium text-pink-700">Hashtags</p>
                                <p class="text-2xl font-bold text-pink-600"><?= $descriptionAnalysis['hashtagCount'] ?></p>
                                <p class="text-xs text-pink-500">hashtags used</p>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Extracted Description -->
                    <?php if (!empty($videoData['description'])): ?>
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">📝 Video Description</h3>
                            <button onclick="copyDescription()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-sm transition duration-200">
                                Copy Description
                            </button>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg border max-h-96 overflow-y-auto">
                            <pre class="whitespace-pre-wrap text-sm text-gray-800 font-mono leading-relaxed" id="description-text"><?= htmlspecialchars($videoData['description']) ?></pre>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 text-yellow-700 p-4 mb-6">
                        <p>This video has no description or the description is empty.</p>
                    </div>
                    <?php endif; ?>

                    <!-- Extracted Elements -->
                    <?php if (!empty($descriptionAnalysis)): ?>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- URLs Found -->
                        <?php if (!empty($descriptionAnalysis['urls'])): ?>
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h4 class="font-semibold text-blue-800 mb-3">🔗 URLs Found (<?= count($descriptionAnalysis['urls']) ?>)</h4>
                            <div class="space-y-2 max-h-40 overflow-y-auto">
                                <?php foreach ($descriptionAnalysis['urls'] as $url): ?>
                                <div class="bg-white p-2 rounded border text-xs">
                                    <a href="<?= htmlspecialchars($url) ?>" target="_blank" class="text-blue-600 hover:text-blue-800 break-all">
                                        <?= htmlspecialchars($url) ?>
                                    </a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Hashtags Found -->
                        <?php if (!empty($descriptionAnalysis['hashtags'])): ?>
                        <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                            <h4 class="font-semibold text-purple-800 mb-3">📌 Hashtags Found (<?= count($descriptionAnalysis['hashtags']) ?>)</h4>
                            <div class="flex flex-wrap gap-2 max-h-40 overflow-y-auto">
                                <?php foreach ($descriptionAnalysis['hashtags'] as $hashtag): ?>
                                <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs font-medium">
                                    <?= htmlspecialchars($hashtag) ?>
                                </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Video Tags -->
                    <?php if (!empty($videoData['tags'])): ?>
                    <div class="mt-6 bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                        <h4 class="font-semibold text-yellow-800 mb-3">🏷️ Video Tags (<?= count($videoData['tags']) ?>)</h4>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($videoData['tags'] as $tag): ?>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs font-medium">
                                <?= htmlspecialchars($tag) ?>
                            </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Why Extract YouTube Descriptions?</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium text-blue-800 mb-3">🎯 Content Research</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Analyze competitor content strategies
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Study successful description formats
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Extract SEO keywords and hashtags
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Understand engagement tactics
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-green-800 mb-3">📊 SEO Analysis</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Discover trending keywords
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Find popular hashtag combinations
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Analyze link building strategies
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Study call-to-action patterns
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Description Optimization Tips</h2>
            <div class="prose max-w-none text-gray-700">
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center p-4 bg-blue-50 rounded-lg">
                        <div class="text-blue-600 text-2xl mb-2">📝</div>
                        <h4 class="font-medium text-blue-800 mb-2">First 125 Characters</h4>
                        <p class="text-blue-700 text-sm">Most important content should be in the first few lines</p>
                    </div>
                    <div class="text-center p-4 bg-green-50 rounded-lg">
                        <div class="text-green-600 text-2xl mb-2">🔗</div>
                        <h4 class="font-medium text-green-800 mb-2">Strategic Links</h4>
                        <p class="text-green-700 text-sm">Include relevant links to drive traffic and engagement</p>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-lg">
                        <div class="text-purple-600 text-2xl mb-2">🏷️</div>
                        <h4 class="font-medium text-purple-800 mb-2">Smart Hashtags</h4>
                        <p class="text-purple-700 text-sm">Use 3-5 relevant hashtags for better discoverability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyDescription() {
            const descriptionText = document.getElementById('description-text').textContent;
            
            navigator.clipboard.writeText(descriptionText).then(function() {
                showCopyMessage('Description copied to clipboard!');
            }).catch(function() {
                // Fallback for older browsers
                const textArea = document.createElement('textarea');
                textArea.value = descriptionText;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                showCopyMessage('Description copied to clipboard!');
            });
        }

        function showCopyMessage(message) {
            const notification = document.createElement('div');
            notification.textContent = message;
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transform transition-transform duration-300';
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 2000);
        }
    </script>
</body>
<?php include 'footer.php';?>
</html>