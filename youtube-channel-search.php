<?php include 'header.php';?>

<?php
/**
 * YouTube Channel Search Tool - Enhanced Version
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to search for YouTube channels with detailed information
function searchYouTubeChannels($query, $apiKey, $maxResults = 20) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&type=channel&q=" . urlencode($query) . "&maxResults=$maxResults&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return [];
    }
    
    $data = json_decode($response, true);
    
    if (!isset($data['items'])) {
        return [];
    }
    
    // Get detailed channel information for each result
    $channelIds = [];
    foreach ($data['items'] as $item) {
        $channelIds[] = $item['id']['channelId'];
    }
    
    // Batch request for channel statistics
    $channelDetails = [];
    if (!empty($channelIds)) {
        $detailsUrl = "https://www.googleapis.com/youtube/v3/channels?part=statistics,snippet&id=" . implode(',', $channelIds) . "&key=$apiKey";
        $detailsResponse = @file_get_contents($detailsUrl);
        
        if ($detailsResponse !== false) {
            $detailsData = json_decode($detailsResponse, true);
            if (isset($detailsData['items'])) {
                foreach ($detailsData['items'] as $channel) {
                    $channelDetails[$channel['id']] = $channel;
                }
            }
        }
    }
    
    // Merge search results with detailed information
    $enhancedResults = [];
    foreach ($data['items'] as $item) {
        $channelId = $item['id']['channelId'];
        $result = [
            'channelId' => $channelId,
            'title' => $item['snippet']['title'],
            'description' => $item['snippet']['description'],
            'thumbnails' => $item['snippet']['thumbnails'],
            'publishedAt' => $item['snippet']['publishedAt'],
            'subscriberCount' => 0,
            'viewCount' => 0,
            'videoCount' => 0,
            'hiddenSubscriberCount' => false,
            'customUrl' => '',
            'country' => ''
        ];
        
        // Add detailed statistics if available
        if (isset($channelDetails[$channelId])) {
            $details = $channelDetails[$channelId];
            $stats = $details['statistics'] ?? [];
            $snippet = $details['snippet'] ?? [];
            
            $result['subscriberCount'] = $stats['subscriberCount'] ?? 0;
            $result['viewCount'] = $stats['viewCount'] ?? 0;
            $result['videoCount'] = $stats['videoCount'] ?? 0;
            $result['hiddenSubscriberCount'] = $stats['hiddenSubscriberCount'] ?? false;
            $result['customUrl'] = $snippet['customUrl'] ?? '';
            $result['country'] = $snippet['country'] ?? '';
        }
        
        $enhancedResults[] = $result;
    }
    
    return $enhancedResults;
}

// Function to get trending categories/suggestions
function getTrendingCategories() {
    return [
        'Technology' => ['Tech Reviews', 'Gaming', 'Programming', 'AI & Machine Learning', 'Gadgets'],
        'Entertainment' => ['Movies', 'TV Shows', 'Comedy', 'Music', 'Celebrity News'],
        'Education' => ['Science', 'History', 'Language Learning', 'Mathematics', 'Online Courses'],
        'Lifestyle' => ['Fitness', 'Cooking', 'Travel', 'Fashion', 'DIY'],
        'Business' => ['Entrepreneurship', 'Marketing', 'Finance', 'Productivity', 'Leadership'],
        'Creative' => ['Art Tutorials', 'Photography', 'Design', 'Crafts', 'Animation']
    ];
}

// Handle form submission
$channels = [];
$searchQuery = '';
$error = '';
$sortBy = 'relevance';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchQuery = trim($_POST['search_query'] ?? '');
    $sortBy = $_POST['sort_by'] ?? 'relevance';
    
    if (empty($searchQuery)) {
        $error = 'Please enter a search query.';
    } else {
        $channels = searchYouTubeChannels($searchQuery, $apiKey);
        
        if (empty($channels)) {
            $error = 'No channels found for this query. Try different keywords.';
        } else {
            // Sort channels based on selected criteria
            switch ($sortBy) {
                case 'subscribers':
                    usort($channels, function($a, $b) {
                        return $b['subscriberCount'] - $a['subscriberCount'];
                    });
                    break;
                case 'views':
                    usort($channels, function($a, $b) {
                        return $b['viewCount'] - $a['viewCount'];
                    });
                    break;
                case 'videos':
                    usort($channels, function($a, $b) {
                        return $b['videoCount'] - $a['videoCount'];
                    });
                    break;
                case 'recent':
                    usort($channels, function($a, $b) {
                        return strtotime($b['publishedAt']) - strtotime($a['publishedAt']);
                    });
                    break;
                // 'relevance' is default API ordering
            }
        }
    }
}

$trendingCategories = getTrendingCategories();
?>
    <title>Free YouTube Channel Search 2026 - Discover Channels by Keywords</title>
    <meta name="description" content="Search and discover YouTube channels by keywords and topics. Find channels with detailed statistics including subscribers, views, and video counts (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Channel Search",
        "description": "Search and discover YouTube channels by keywords and topics. Find channels with detailed statistics including subscribers, views, and video counts.",
        "url": "https://www.thiyagi.com/youtube-channel-search",
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
            "name": "YouTube Channel Search",
            "item": "https://www.thiyagi.com/youtube-channel-search"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How can I find YouTube channels by topic?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Enter keywords related to your topic of interest in the search box. Our tool will find relevant channels and display them with detailed statistics including subscriber counts, total views, and video counts."
            }
        },{
            "@type": "Question",
            "name": "Can I sort search results by popularity?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can sort results by relevance, subscriber count, total views, video count, or channel creation date to find the most suitable channels for your needs."
            }
        },{
            "@type": "Question",
            "name": "What information do I get about each channel?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For each channel, you'll see the channel name, description, subscriber count, total views, video count, creation date, and direct links to visit the channel."
            }
        }]
    }
    </script>

    <script>
        function searchByCategory(query) {
            document.getElementById('search_query').value = query;
            document.getElementById('searchForm').submit();
        }

        function copyChannelId(channelId) {
            navigator.clipboard.writeText(channelId).then(function() {
                showNotification('Channel ID copied to clipboard!', 'success');
            }, function(err) {
                showNotification('Failed to copy Channel ID', 'error');
            });
        }

        function copyChannelUrl(channelId) {
            const url = `https://www.youtube.com/channel/${channelId}`;
            navigator.clipboard.writeText(url).then(function() {
                showNotification('Channel URL copied to clipboard!', 'success');
            }, function(err) {
                showNotification('Failed to copy Channel URL', 'error');
            });
        }

        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        function exportResults() {
            const channels = <?= json_encode($channels) ?>;
            if (channels.length === 0) {
                showNotification('No results to export', 'error');
                return;
            }
            
            let csvContent = "data:text/csv;charset=utf-8,";
            csvContent += "Channel Name,Channel ID,Subscribers,Views,Videos,Created Date,Channel URL\n";
            
            channels.forEach(channel => {
                const row = [
                    `"${channel.title.replace(/"/g, '""')}"`,
                    channel.channelId,
                    channel.subscriberCount,
                    channel.viewCount,
                    channel.videoCount,
                    channel.publishedAt.split('T')[0],
                    `https://www.youtube.com/channel/${channel.channelId}`
                ].join(',');
                csvContent += row + "\n";
            });
            
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", `youtube_channels_search_${new Date().toISOString().split('T')[0]}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            showNotification('Results exported successfully!', 'success');
        }
    </script>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Channel Search</h1>
            <p class="text-gray-600">Discover YouTube channels by keywords and topics with detailed statistics</p>
        </header>

        <form method="POST" id="searchForm" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="search_query" class="block text-gray-700 font-medium mb-2">Search for YouTube Channels:</label>
                    <input type="text" name="search_query" id="search_query" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="Enter keywords, topics, or channel names"
                           value="<?= htmlspecialchars($searchQuery) ?>"
                           required>
                    <p class="mt-1 text-sm text-gray-600">Examples: "tech reviews", "cooking tutorials", "fitness motivation"</p>
                </div>
                
                <div class="mb-6">
                    <label for="sort_by" class="block text-gray-700 font-medium mb-2">Sort Results By:</label>
                    <select name="sort_by" id="sort_by" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="relevance" <?= $sortBy === 'relevance' ? 'selected' : '' ?>>Relevance</option>
                        <option value="subscribers" <?= $sortBy === 'subscribers' ? 'selected' : '' ?>>Most Subscribers</option>
                        <option value="views" <?= $sortBy === 'views' ? 'selected' : '' ?>>Most Views</option>
                        <option value="videos" <?= $sortBy === 'videos' ? 'selected' : '' ?>>Most Videos</option>
                        <option value="recent" <?= $sortBy === 'recent' ? 'selected' : '' ?>>Newest Channels</option>
                    </select>
                </div>
                
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        🔍 Search Channels
                    </button>
                    <button type="button" onclick="document.getElementById('search_query').value = ''; document.getElementById('sort_by').value = 'relevance';" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <!-- Trending Categories -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">🔥 Trending Categories</h2>
                <div class="space-y-4">
                    <?php foreach ($trendingCategories as $category => $topics): ?>
                    <div>
                        <h3 class="font-medium text-gray-700 mb-2"><?= htmlspecialchars($category) ?>:</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($topics as $topic): ?>
                            <button onclick="searchByCategory('<?= htmlspecialchars($topic) ?>')" 
                                    class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium py-1 px-3 rounded-full transition duration-200">
                                <?= htmlspecialchars($topic) ?>
                            </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php if (!empty($channels) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Search Results</h2>
                    <?php if (!empty($channels)): ?>
                    <div class="flex space-x-2">
                        <span class="text-sm text-gray-600">Found <?= count($channels) ?> channels</span>
                        <button onclick="exportResults()" 
                                class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium py-1 px-3 rounded transition duration-200">
                            📊 Export CSV
                        </button>
                    </div>
                    <?php endif; ?>
                </div>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($channels)): ?>
                    <div class="space-y-6">
                        <?php foreach ($channels as $index => $channel): ?>
                        <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 hover:shadow-lg transition duration-200">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="<?= htmlspecialchars($channel['thumbnails']['medium']['url'] ?? $channel['thumbnails']['default']['url']) ?>" 
                                         alt="<?= htmlspecialchars($channel['title']) ?>" 
                                         class="w-16 h-16 rounded-full border-2 border-gray-300">
                                    <div class="text-center mt-1 text-xs text-gray-600">#<?= $index + 1 ?></div>
                                </div>
                                
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-start justify-between">
                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold text-gray-800 mb-1">
                                                <?= htmlspecialchars($channel['title']) ?>
                                            </h3>
                                            <?php if (!empty($channel['customUrl'])): ?>
                                            <p class="text-blue-600 text-sm font-medium mb-2">@<?= htmlspecialchars($channel['customUrl']) ?></p>
                                            <?php endif; ?>
                                            
                                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-3 text-sm">
                                                <div class="bg-blue-100 p-2 rounded text-center">
                                                    <div class="font-bold text-blue-800"><?= number_format($channel['subscriberCount']) ?></div>
                                                    <div class="text-blue-600 text-xs">Subscribers</div>
                                                    <?php if ($channel['hiddenSubscriberCount']): ?>
                                                    <div class="text-blue-500 text-xs">Hidden</div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="bg-green-100 p-2 rounded text-center">
                                                    <div class="font-bold text-green-800"><?= number_format($channel['viewCount']) ?></div>
                                                    <div class="text-green-600 text-xs">Total Views</div>
                                                </div>
                                                <div class="bg-purple-100 p-2 rounded text-center">
                                                    <div class="font-bold text-purple-800"><?= number_format($channel['videoCount']) ?></div>
                                                    <div class="text-purple-600 text-xs">Videos</div>
                                                </div>
                                                <div class="bg-yellow-100 p-2 rounded text-center">
                                                    <div class="font-bold text-yellow-800"><?= date('M Y', strtotime($channel['publishedAt'])) ?></div>
                                                    <div class="text-yellow-600 text-xs">Created</div>
                                                </div>
                                            </div>
                                            
                                            <?php if (!empty($channel['description'])): ?>
                                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                                                <?= htmlspecialchars(substr($channel['description'], 0, 200)) ?><?= strlen($channel['description']) > 200 ? '...' : '' ?>
                                            </p>
                                            <?php endif; ?>
                                            
                                            <div class="flex flex-wrap gap-2">
                                                <a href="https://www.youtube.com/channel/<?= htmlspecialchars($channel['channelId']) ?>" 
                                                   target="_blank" 
                                                   class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium py-1 px-3 rounded transition duration-200">
                                                    📺 Visit Channel
                                                </a>
                                                <button onclick="copyChannelId('<?= htmlspecialchars($channel['channelId']) ?>')" 
                                                        class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-1 px-3 rounded transition duration-200">
                                                    📋 Copy ID
                                                </button>
                                                <button onclick="copyChannelUrl('<?= htmlspecialchars($channel['channelId']) ?>')" 
                                                        class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium py-1 px-3 rounded transition duration-200">
                                                    🔗 Copy URL
                                                </button>
                                                <?php if (!empty($channel['country'])): ?>
                                                <span class="bg-gray-200 text-gray-800 text-sm font-medium py-1 px-3 rounded">
                                                    🌍 <?= htmlspecialchars($channel['country']) ?>
                                                </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Why Use Our Channel Search?</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="text-blue-600 text-3xl mb-2">📊</div>
                    <h3 class="font-medium text-blue-800 mb-2">Detailed Statistics</h3>
                    <p class="text-blue-700 text-sm">Get subscriber counts, view totals, and video counts for each channel</p>
                </div>
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <div class="text-green-600 text-3xl mb-2">🎯</div>
                    <h3 class="font-medium text-green-800 mb-2">Smart Filtering</h3>
                    <p class="text-green-700 text-sm">Sort results by relevance, popularity, or recency to find perfect matches</p>
                </div>
                <div class="text-center p-4 bg-purple-50 rounded-lg">
                    <div class="text-purple-600 text-3xl mb-2">📈</div>
                    <h3 class="font-medium text-purple-800 mb-2">Export Results</h3>
                    <p class="text-purple-700 text-sm">Export channel data to CSV for analysis and competitor research</p>
                </div>
            </div>
        </div>

        <!-- Educational Content -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Channel Research Tips</h2>
            <div class="grid md:grid-cols-2 gap-6 text-sm">
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Search Strategies:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Broad Keywords:</strong> Start with general topics like "cooking" or "tech"</li>
                        <li><strong>Specific Niches:</strong> Use detailed terms like "vegan recipes" or "mobile app development"</li>
                        <li><strong>Language Variations:</strong> Try different ways to describe the same topic</li>
                        <li><strong>Trending Topics:</strong> Use our category suggestions for popular searches</li>
                        <li><strong>Competitor Analysis:</strong> Search for similar channels in your niche</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Evaluation Criteria:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Subscriber Count:</strong> Indicates audience size and reach</li>
                        <li><strong>Engagement Rate:</strong> Views per video relative to subscribers</li>
                        <li><strong>Upload Consistency:</strong> Regular content creation schedule</li>
                        <li><strong>Content Quality:</strong> Professional thumbnails and descriptions</li>
                        <li><strong>Niche Authority:</strong> Specialized focus vs. general content</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>