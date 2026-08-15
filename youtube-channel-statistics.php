<?php include 'header.php';?>

<?php
/**
 * YouTube Channel Statistics Analyzer Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to extract channel info from various URL formats
function extractChannelInfo($input) {
    $input = trim($input);
    
    // Handle different URL formats
    $patterns = [
        // Channel ID (UC...)
        '/^UC[a-zA-Z0-9_-]{22}$/' => ['type' => 'id', 'value' => $input],
        // Full channel URL with ID
        '/youtube\.com\/channel\/(UC[a-zA-Z0-9_-]{22})/' => ['type' => 'id'],
        // Custom channel URL with @handle
        '/youtube\.com\/@([a-zA-Z0-9_.-]+)/' => ['type' => 'handle'],
        // Custom channel URL with /c/
        '/youtube\.com\/c\/([a-zA-Z0-9_-]+)/' => ['type' => 'custom'],
        // User URL (legacy)
        '/youtube\.com\/user\/([a-zA-Z0-9_-]+)/' => ['type' => 'user'],
    ];
    
    foreach ($patterns as $pattern => $info) {
        if (preg_match($pattern, $input, $matches)) {
            if (isset($matches[1])) {
                $info['value'] = $matches[1];
            }
            return $info;
        }
    }
    
    // If no pattern matches, assume it's a handle without @
    if (preg_match('/^[a-zA-Z0-9_.-]+$/', $input)) {
        return ['type' => 'handle', 'value' => $input];
    }
    
    return null;
}

// Function to get channel ID from handle or username
function getChannelIdFromHandle($handle, $apiKey) {
    // Try searching for the channel
    $searchUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" . urlencode($handle) . "&type=channel&key=$apiKey&maxResults=1";
    $response = @file_get_contents($searchUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);
    
    if (isset($data['items'][0]['id']['channelId'])) {
        return $data['items'][0]['id']['channelId'];
    }
    
    return null;
}

// Function to get comprehensive channel statistics
function getChannelStatistics($channelId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/channels?part=statistics,snippet,brandingSettings&id=$channelId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $channel = $data['items'][0];
        $snippet = $channel['snippet'];
        $stats = $channel['statistics'];
        $branding = $channel['brandingSettings'] ?? [];
        
        // Calculate engagement metrics
        $avgViewsPerVideo = $stats['videoCount'] > 0 ? 
            $stats['viewCount'] / $stats['videoCount'] : 0;
        
        $subscriberEngagementRate = $stats['subscriberCount'] > 0 ? 
            ($avgViewsPerVideo / $stats['subscriberCount']) * 100 : 0;
            
        return [
            'channelId' => $channel['id'],
            'title' => $snippet['title'],
            'description' => $snippet['description'] ?? '',
            'customUrl' => $snippet['customUrl'] ?? '',
            'publishedAt' => $snippet['publishedAt'],
            'country' => $snippet['country'] ?? 'Not specified',
            'defaultLanguage' => $snippet['defaultLanguage'] ?? 'Not specified',
            'thumbnails' => $snippet['thumbnails'] ?? [],
            'subscriberCount' => $stats['subscriberCount'] ?? 0,
            'viewCount' => $stats['viewCount'] ?? 0,
            'videoCount' => $stats['videoCount'] ?? 0,
            'hiddenSubscriberCount' => $stats['hiddenSubscriberCount'] ?? false,
            'avgViewsPerVideo' => round($avgViewsPerVideo),
            'subscriberEngagementRate' => round($subscriberEngagementRate, 2),
            'channelKeywords' => $branding['channel']['keywords'] ?? '',
            'channelTrailerVideo' => $branding['channel']['unsubscribedTrailer'] ?? ''
        ];
    }
    
    return null;
}

// Function to get recent videos for additional metrics
function getRecentVideos($channelId, $apiKey, $maxResults = 5) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=$channelId&type=video&order=date&maxResults=$maxResults&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return [];
    }
    
    $data = json_decode($response, true);
    $videos = [];
    
    if (isset($data['items'])) {
        foreach ($data['items'] as $item) {
            $videos[] = [
                'videoId' => $item['id']['videoId'],
                'title' => $item['snippet']['title'],
                'publishedAt' => $item['snippet']['publishedAt'],
                'thumbnails' => $item['snippet']['thumbnails']
            ];
        }
    }
    
    return $videos;
}

// Handle form submission
$channelData = null;
$recentVideos = [];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $channelInput = trim($_POST['channel_input'] ?? '');
    
    if (empty($channelInput)) {
        $error = 'Please enter a YouTube channel URL, handle, or ID.';
    } else {
        $channelInfo = extractChannelInfo($channelInput);
        
        if (!$channelInfo) {
            $error = 'Invalid YouTube channel format. Please check your input.';
        } else {
            $channelId = null;
            
            if ($channelInfo['type'] === 'id') {
                $channelId = $channelInfo['value'];
            } else {
                $channelId = getChannelIdFromHandle($channelInfo['value'], $apiKey);
            }
            
            if (!$channelId) {
                $error = 'Channel not found. Please check the URL or handle.';
            } else {
                $channelData = getChannelStatistics($channelId, $apiKey);
                if (!$channelData) {
                    $error = 'Unable to fetch channel data. Please try again.';
                } else {
                    $recentVideos = getRecentVideos($channelId, $apiKey);
                }
            }
        }
    }
}
?>
    <title>Free YouTube Channel Statistics Analyzer 2026 - Complete Channel Metrics</title>
    <meta name="description" content="Get detailed YouTube channel statistics including subscribers, views, videos count and engagement metrics. Professional analytics tool (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Channel Statistics Analyzer",
        "description": "Get detailed YouTube channel statistics including subscribers, views, videos count and engagement metrics. Professional analytics tool.",
        "url": "https://www.thiyagi.com/youtube-channel-statistics",
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
            "name": "YouTube Channel Statistics",
            "item": "https://www.thiyagi.com/youtube-channel-statistics"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What YouTube channel statistics can I analyze?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can analyze subscriber count, total views, video count, average views per video, engagement rates, channel creation date, and recent video performance metrics."
            }
        },{
            "@type": "Question",
            "name": "Can I analyze any YouTube channel?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can analyze any public YouTube channel using their channel URL, @handle, custom URL, or channel ID. Private or terminated channels cannot be analyzed."
            }
        },{
            "@type": "Question",
            "name": "How accurate are the YouTube statistics?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our tool uses YouTube's official Data API, providing real-time and accurate statistics directly from YouTube's servers. Data is as current as YouTube's public API allows."
            }
        }]
    }
    </script>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Channel Statistics Analyzer</h1>
            <p class="text-gray-600">Get comprehensive analytics and insights for any YouTube channel</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="channel_input" class="block text-gray-700 font-medium mb-2">Enter YouTube Channel Information:</label>
                    <input type="text" name="channel_input" id="channel_input" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="Channel URL, @handle, or Channel ID"
                           value="<?= htmlspecialchars($_POST['channel_input'] ?? '') ?>"
                           required>
                    <div class="mt-2 text-sm text-gray-600">
                        <p class="font-medium mb-1">Supported formats:</p>
                        <ul class="space-y-1 text-xs">
                            <li>• Channel URL: https://www.youtube.com/channel/UC...</li>
                            <li>• Handle: @channelhandle or https://www.youtube.com/@channelhandle</li>
                            <li>• Custom URL: https://www.youtube.com/c/channelname</li>
                            <li>• Channel ID: UC1234567890ABCDEF</li>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        📊 Analyze Channel
                    </button>
                    <button type="button" onclick="document.getElementById('channel_input').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($channelData) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Channel Analysis Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($channelData)): ?>
                    <!-- Channel Header -->
                    <div class="bg-gradient-to-r from-red-50 to-pink-50 p-6 rounded-lg border border-red-200 mb-6">
                        <div class="flex items-start space-x-4">
                            <?php if (!empty($channelData['thumbnails']['medium']['url'])): ?>
                            <img src="<?= htmlspecialchars($channelData['thumbnails']['medium']['url']) ?>" 
                                 alt="Channel Thumbnail" 
                                 class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                            <?php endif; ?>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($channelData['title']) ?></h3>
                                <?php if (!empty($channelData['customUrl'])): ?>
                                <p class="text-red-600 font-medium mb-1">@<?= htmlspecialchars($channelData['customUrl']) ?></p>
                                <?php endif; ?>
                                <div class="flex items-center space-x-4 text-sm text-gray-600">
                                    <span>📅 Created: <?= date('F j, Y', strtotime($channelData['publishedAt'])) ?></span>
                                    <span>🌍 Country: <?= htmlspecialchars($channelData['country']) ?></span>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($channelData['description'])): ?>
                        <div class="mt-4 pt-4 border-t border-red-200">
                            <p class="text-gray-700 text-sm line-clamp-3"><?= htmlspecialchars(substr($channelData['description'], 0, 200)) ?><?= strlen($channelData['description']) > 200 ? '...' : '' ?></p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Key Statistics -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-200 text-center">
                            <div class="text-blue-600 text-3xl mb-2">👥</div>
                            <div class="text-2xl font-bold text-blue-800"><?= number_format($channelData['subscriberCount']) ?></div>
                            <div class="text-blue-600 text-sm">Subscribers</div>
                            <?php if ($channelData['hiddenSubscriberCount']): ?>
                            <div class="text-xs text-blue-500 mt-1">Count Hidden by Channel</div>
                            <?php endif; ?>
                        </div>
                        <div class="bg-green-50 p-6 rounded-lg border border-green-200 text-center">
                            <div class="text-green-600 text-3xl mb-2">👁️</div>
                            <div class="text-2xl font-bold text-green-800"><?= number_format($channelData['viewCount']) ?></div>
                            <div class="text-green-600 text-sm">Total Views</div>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-lg border border-purple-200 text-center">
                            <div class="text-purple-600 text-3xl mb-2">🎬</div>
                            <div class="text-2xl font-bold text-purple-800"><?= number_format($channelData['videoCount']) ?></div>
                            <div class="text-purple-600 text-sm">Videos</div>
                        </div>
                        <div class="bg-yellow-50 p-6 rounded-lg border border-yellow-200 text-center">
                            <div class="text-yellow-600 text-3xl mb-2">📈</div>
                            <div class="text-2xl font-bold text-yellow-800"><?= number_format($channelData['avgViewsPerVideo']) ?></div>
                            <div class="text-yellow-600 text-sm">Avg Views/Video</div>
                        </div>
                    </div>

                    <!-- Engagement Metrics -->
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">📊 Engagement Metrics</h4>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white p-4 rounded-lg border">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Subscriber Engagement Rate</span>
                                    <span class="font-bold text-lg"><?= $channelData['subscriberEngagementRate'] ?>%</span>
                                </div>
                                <div class="mt-2 bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: <?= min(100, $channelData['subscriberEngagementRate']) ?>%"></div>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Videos per Month</span>
                                    <span class="font-bold text-lg">
                                        <?php 
                                        $monthsSinceCreation = max(1, (time() - strtotime($channelData['publishedAt'])) / (30 * 24 * 3600));
                                        echo round($channelData['videoCount'] / $monthsSinceCreation, 1);
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Channel Age</span>
                                    <span class="font-bold text-lg">
                                        <?php 
                                        $years = floor($monthsSinceCreation / 12);
                                        echo $years > 0 ? $years . ' years' : round($monthsSinceCreation, 1) . ' months';
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Videos -->
                    <?php if (!empty($recentVideos)): ?>
                    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200 mb-6">
                        <h4 class="text-lg font-semibold text-indigo-800 mb-4">🎥 Recent Videos</h4>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <?php foreach ($recentVideos as $video): ?>
                            <div class="bg-white p-4 rounded-lg border">
                                <?php if (!empty($video['thumbnails']['medium']['url'])): ?>
                                <img src="<?= htmlspecialchars($video['thumbnails']['medium']['url']) ?>" 
                                     alt="Video thumbnail" 
                                     class="w-full h-24 object-cover rounded mb-2">
                                <?php endif; ?>
                                <h5 class="font-medium text-sm text-gray-800 mb-1 line-clamp-2"><?= htmlspecialchars($video['title']) ?></h5>
                                <p class="text-xs text-gray-500"><?= date('M j, Y', strtotime($video['publishedAt'])) ?></p>
                                <a href="https://youtube.com/watch?v=<?= $video['videoId'] ?>" 
                                   target="_blank" 
                                   class="text-indigo-600 hover:text-indigo-800 text-xs font-medium">
                                    View Video →
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Channel Performance Analysis -->
                    <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                        <h4 class="text-lg font-semibold text-green-800 mb-4">🎯 Performance Analysis</h4>
                        <div class="grid md:grid-cols-2 gap-6 text-sm">
                            <div>
                                <h5 class="font-medium text-green-700 mb-2">Strengths:</h5>
                                <ul class="space-y-1 text-green-600">
                                    <?php if ($channelData['subscriberCount'] > 10000): ?>
                                    <li>• Strong subscriber base (<?= number_format($channelData['subscriberCount']) ?> subscribers)</li>
                                    <?php endif; ?>
                                    <?php if ($channelData['videoCount'] > 50): ?>
                                    <li>• Consistent content creation (<?= number_format($channelData['videoCount']) ?> videos)</li>
                                    <?php endif; ?>
                                    <?php if ($channelData['subscriberEngagementRate'] > 10): ?>
                                    <li>• High engagement rate (<?= $channelData['subscriberEngagementRate'] ?>%)</li>
                                    <?php endif; ?>
                                    <?php if ($channelData['avgViewsPerVideo'] > 1000): ?>
                                    <li>• Good average video performance</li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-medium text-green-700 mb-2">Growth Opportunities:</h5>
                                <ul class="space-y-1 text-green-600">
                                    <?php if ($channelData['subscriberEngagementRate'] < 5): ?>
                                    <li>• Improve engagement strategies</li>
                                    <?php endif; ?>
                                    <?php if ($channelData['videoCount'] < 20): ?>
                                    <li>• Increase content production frequency</li>
                                    <?php endif; ?>
                                    <?php if ($channelData['subscriberCount'] < 1000): ?>
                                    <li>• Focus on subscriber growth strategies</li>
                                    <?php endif; ?>
                                    <li>• Optimize video titles and thumbnails</li>
                                    <li>• Consistent upload schedule</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">YouTube Analytics Insights</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="text-blue-600 text-3xl mb-2">📊</div>
                    <h3 class="font-medium text-blue-800 mb-2">Competitor Analysis</h3>
                    <p class="text-blue-700 text-sm">Compare channel performance and identify growth opportunities</p>
                </div>
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <div class="text-green-600 text-3xl mb-2">📈</div>
                    <h3 class="font-medium text-green-800 mb-2">Growth Tracking</h3>
                    <p class="text-green-700 text-sm">Monitor subscriber and view count changes over time</p>
                </div>
                <div class="text-center p-4 bg-purple-50 rounded-lg">
                    <div class="text-purple-600 text-3xl mb-2">🎯</div>
                    <h3 class="font-medium text-purple-800 mb-2">Content Strategy</h3>
                    <p class="text-purple-700 text-sm">Analyze successful channels to improve your content strategy</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Understanding YouTube Metrics</h2>
            <div class="grid md:grid-cols-2 gap-6 text-sm">
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Key Metrics Explained:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Subscribers:</strong> Users who follow the channel</li>
                        <li><strong>Total Views:</strong> All-time video view count</li>
                        <li><strong>Video Count:</strong> Total uploaded videos</li>
                        <li><strong>Avg Views/Video:</strong> Total views ÷ video count</li>
                        <li><strong>Engagement Rate:</strong> Avg views ÷ subscribers</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Benchmark Ranges:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Good Engagement:</strong> 5-15% of subscribers</li>
                        <li><strong>Active Channel:</strong> 2+ videos per month</li>
                        <li><strong>Growing Channel:</strong> Consistent upload schedule</li>
                        <li><strong>Successful Channel:</strong> 1000+ subscribers</li>
                        <li><strong>High Performance:</strong> 10K+ avg views</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>