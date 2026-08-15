<?php include 'header.php';?>

<?php
// Facebook Video Downloader
function downloadFacebookVideo($url) {
    // Note: Facebook's terms of service prohibit unauthorized downloading of content
    // This is a conceptual example only - in practice you would need proper API access
    
    $result = [
        'success' => false,
        'message' => '',
        'title' => '',
        'thumbnail' => '',
        'download_url' => ''
    ];
    
    // Validate URL
    if (!preg_match('/https?:\/\/(www\.)?facebook\.com\/(.+)/i', $url)) {
        $result['message'] = 'Please enter a valid Facebook video URL';
        return $result;
    }
    
    // In a real implementation, you would use an API or service here
    // This is just a placeholder to demonstrate the concept
    
    // Simulate successful extraction (remove in production)
    $result['success'] = true;
    $result['title'] = 'Sample Facebook Video';
    $result['thumbnail'] = 'https://via.placeholder.com/300x200';
    $result['download_url'] = 'https://example.com/sample.mp4';
    $result['message'] = 'Video extracted successfully';
    
    return $result;
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['video_url'])) {
    $videoUrl = trim($_POST['video_url']);
    $result = downloadFacebookVideo($videoUrl);
}
?>

    <title>Free Facebook Video Downloader 2026 - Save Videos in HD (No Watermark)</title>
<meta name="description" content="Download Facebook videos in HD quality for free (2026). Save reels, stories, and public posts without watermark - Fast & easy!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #4267B2 0%, #3b5998 100%);
        }
        .video-preview {
            aspect-ratio: 16/9;
        }
        .download-btn {
            transition: all 0.3s ease;
        }
        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <header class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Facebook Video Downloader</h1>
            <p class="text-gray-600">Download videos from Facebook in HD quality for free</p>
        </header>

        <!-- Main Form -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="gradient-bg p-4 text-white">
                <h2 class="text-xl font-semibold">Paste Facebook Video URL</h2>
            </div>
            
            <div class="p-6">
                <form method="POST" class="space-y-4">
                    <div>
                        <label for="video_url" class="block text-gray-700 mb-2">Facebook Video Link</label>
                        <input 
                            type="url" 
                            name="video_url" 
                            id="video_url" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                            placeholder="https://www.facebook.com/..." 
                            required
                        >
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg download-btn"
                    >
                        Extract Video
                    </button>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <?php if ($result !== null): ?>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="gradient-bg p-4 text-white">
                    <h2 class="text-xl font-semibold">Download Options</h2>
                </div>
                
                <div class="p-6">
                    <?php if ($result['success']): ?>
                        <div class="space-y-6">
                            <!-- Video Preview -->
                            <div class="bg-black rounded-lg overflow-hidden video-preview flex items-center justify-center">
                                <img src="<?php echo htmlspecialchars($result['thumbnail']); ?>" alt="Video thumbnail" class="max-w-full max-h-full">
                            </div>
                            
                            <!-- Video Info -->
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($result['title']); ?></h3>
                                <p class="text-green-600 font-medium"><?php echo htmlspecialchars($result['message']); ?></p>
                            </div>
                            
                            <!-- Download Button -->
                            <div>
                                <a 
                                    href="<?php echo htmlspecialchars($result['download_url']); ?>" 
                                    class="block w-full bg-green-500 hover:bg-green-600 text-white text-center font-bold py-3 px-4 rounded-lg download-btn"
                                    download
                                >
                                    Download HD Video
                                </a>
                            </div>
                            
                            <!-- Instructions -->
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-blue-800 mb-2">How to download:</h4>
                                <ol class="list-decimal list-inside space-y-1 text-gray-700">
                                    <li>Click the download button above</li>
                                    <li>Right-click the video and select "Save video as"</li>
                                    <li>Choose your download location and save</li>
                                </ol>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="bg-red-50 p-4 rounded-lg">
                            <p class="text-red-600 font-medium"><?php echo htmlspecialchars($result['message']); ?></p>
                            <p class="text-gray-700 mt-2">Please check the URL and try again.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Features Section -->
        <div class="mt-12 grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-blue-500 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Easy to Use</h3>
                <p class="text-gray-600">Just paste the URL and download. No registration required.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-blue-500 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">Mobile Friendly</h3>
                <p class="text-gray-600">Works on all devices - smartphones, tablets and computers.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="text-blue-500 mb-3">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg mb-2">High Quality</h3>
                <p class="text-gray-600">Download videos in HD quality without any loss.</p>
            </div>
        </div>
    </div>
    
   
</body>
<?php include 'footer.php';?>

</html>
