<?php include 'header.php';?>


<?php
// Function to extract video URL from Reddit post
function extractRedditVideo($url) {
    // Check if URL is valid Reddit URL
    if (!preg_match('/^https?:\/\/(www\.)?reddit\.com\/r\/.+\/comments\/.+/i', $url)) {
        return ['error' => 'Invalid Reddit URL. Please enter a valid Reddit post URL.'];
    }

    // Add .json to the URL to get the JSON data
    $jsonUrl = rtrim($url, '/') . '.json';
    
    // Get the JSON data
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $jsonUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);
    
    if (json_last_error() !== JSON_ERROR_NONE || !isset($data[0]['data']['children'][0]['data'])) {
        return ['error' => 'Could not fetch video information. Please try another post.'];
    }

    $postData = $data[0]['data']['children'][0]['data'];
    
    // Check if post is a video
    if ($postData['is_video']) {
        $videoUrl = $postData['media']['reddit_video']['fallback_url'];
        $thumbnail = $postData['thumbnail'];
        $title = $postData['title'];
        
        // Remove query parameters from video URL
        $videoUrl = strtok($videoUrl, '?');
        
        return [
            'video_url' => $videoUrl,
            'thumbnail' => $thumbnail,
            'title' => $title,
            'success' => true
        ];
    } else {
        return ['error' => 'This post does not contain a video.'];
    }
}

// Handle form submission
$result = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $redditUrl = $_POST['reddit_url'] ?? '';
    if (!empty($redditUrl)) {
        $result = extractRedditVideo($redditUrl);
    } else {
        $result = ['error' => 'Please enter a Reddit URL'];
    }
}
?>

    <title>Reddit Video Downloader - Save HD Videos for Free (2026)</title>
<meta name="description" content="Download Reddit videos in HD/4K for free in 2026. Fast, no registration needed. Works on all devices - save videos from any subreddit easily!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .download-btn {
            background: linear-gradient(135deg, #FF4500 0%, #FF8C00 100%);
            transition: all 0.3s ease;
        }
        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 69, 0, 0.2);
        }
        .video-preview {
            max-height: 400px;
        }
        @media (max-width: 640px) {
            .video-preview {
                max-height: 250px;
            }
        }
    </style>

<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Reddit Video Downloader</h1>
            <p class="text-lg text-gray-600">Download videos from any Reddit post in MP4 format</p>
        </header>

        <main class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <form method="POST" class="space-y-4">
                    <div>
                        <label for="reddit_url" class="block text-gray-700 font-medium mb-2">Reddit Video URL</label>
                        <input 
                            type="url" 
                            name="reddit_url" 
                            id="reddit_url" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500" 
                            placeholder="https://www.reddit.com/r/..." 
                            required
                            value="<?= isset($_POST['reddit_url']) ? htmlspecialchars($_POST['reddit_url']) : '' ?>"
                        >
                    </div>
                    <button type="submit" class="w-full download-btn text-white font-bold py-3 px-4 rounded-lg">
                        Extract Video
                    </button>
                </form>
            </div>

            <?php if (!empty($result)): ?>
                <?php if (isset($result['error'])): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded">
                        <p><?= htmlspecialchars($result['error']) ?></p>
                    </div>
                <?php elseif (isset($result['success']) && $result['success']): ?>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4"><?= htmlspecialchars($result['title']) ?></h2>
                        
                        <div class="mb-6">
                            <video controls class="w-full video-preview rounded-lg bg-black">
                                <source src="<?= htmlspecialchars($result['video_url']) ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a 
                                href="<?= htmlspecialchars($result['video_url']) ?>" 
                                download="reddit-video-<?= time() ?>.mp4" 
                                class="download-btn text-white font-bold py-3 px-6 rounded-lg text-center"
                            >
                                Download MP4
                            </a>
                            <div class="flex-1">
                                <label for="video-url" class="block text-gray-700 font-medium mb-2">Direct Video URL</label>
                                <div class="flex">
                                    <input 
                                        type="text" 
                                        id="video-url" 
                                        class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none" 
                                        value="<?= htmlspecialchars($result['video_url']) ?>" 
                                        readonly
                                    >
                                    <button 
                                        onclick="copyToClipboard('video-url')" 
                                        class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-r-lg border border-l-0 border-gray-300"
                                    >
                                        Copy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </main>

        <section class="max-w-2xl mx-auto mt-12 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">How to Download Reddit Videos</h2>
            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                <li>Copy the URL of the Reddit post containing the video</li>
                <li>Paste the URL in the input field above</li>
                <li>Click "Extract Video" button</li>
                <li>Download the video using the download button</li>
            </ol>
        </section>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            element.select();
            element.setSelectionRange(0, 99999);
            document.execCommand("copy");
            
            // Show tooltip or alert
            alert("Copied to clipboard!");
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
