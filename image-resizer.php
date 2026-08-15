<?php include 'header.php';?>


<?php
// Image Resizer Functionality
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadDir = 'uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    $filename = uniqid() . '_' . basename($_FILES['image']['name']);
    $uploadPath = $uploadDir . $filename;
    $imageFileType = strtolower(pathinfo($uploadPath, PATHINFO_EXTENSION));
    
    // Check if image file is valid
    $check = getimagesize($_FILES['image']['tmp_name']);
    if ($check === false) {
        $error = "File is not an image.";
    } elseif ($_FILES['image']['size'] > 5000000) {
        $error = "Sorry, your file is too large (max 5MB).";
    } elseif (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        $error = "Only JPG, JPEG, PNG & GIF files are allowed.";
    } elseif (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
        // Process the image
        $width = isset($_POST['width']) ? intval($_POST['width']) : null;
        $height = isset($_POST['height']) ? intval($_POST['height']) : null;
        $maintainRatio = isset($_POST['maintain_ratio']);
        $outputFormat = $_POST['output_format'] ?? 'original';
        
        $result = resizeImage($uploadPath, $width, $height, $maintainRatio, $outputFormat);
        
        if ($result['success']) {
            $resizedImage = $result['path'];
            $originalSize = formatBytes(filesize($uploadPath));
            $resizedSize = formatBytes(filesize($resizedImage));
        } else {
            $error = $result['error'];
        }
    } else {
        $error = "Sorry, there was an error uploading your file.";
    }
}

function resizeImage($filePath, $width, $height, $maintainRatio, $outputFormat) {
    try {
        $imageInfo = getimagesize($filePath);
        $mime = $imageInfo['mime'];
        
        // Create image from file
        switch ($mime) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($filePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($filePath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($filePath);
                break;
            default:
                return ['success' => false, 'error' => 'Unsupported image format'];
        }
        
        $originalWidth = imagesx($image);
        $originalHeight = imagesy($image);
        
        // Calculate new dimensions if maintaining aspect ratio
        if ($maintainRatio && $width && $height) {
            $ratio = min($width/$originalWidth, $height/$originalHeight);
            $width = round($originalWidth * $ratio);
            $height = round($originalHeight * $ratio);
        } elseif ($maintainRatio && $width) {
            $ratio = $width / $originalWidth;
            $height = round($originalHeight * $ratio);
        } elseif ($maintainRatio && $height) {
            $ratio = $height / $originalHeight;
            $width = round($originalWidth * $ratio);
        } elseif (!$width && !$height) {
            $width = $originalWidth;
            $height = $originalHeight;
        }
        
        // Create new image
        $newImage = imagecreatetruecolor($width, $height);
        
        // Preserve transparency for PNG and GIF
        if ($mime == 'image/png' || $mime == 'image/gif') {
            imagecolortransparent($newImage, imagecolorallocatealpha($newImage, 0, 0, 0, 127));
            imagealphablending($newImage, false);
            imagesavealpha($newImage, true);
        }
        
        // Resize image
        imagecopyresampled($newImage, $image, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);
        
        // Determine output format
        $outputExt = pathinfo($filePath, PATHINFO_EXTENSION);
        if ($outputFormat !== 'original') {
            $outputExt = $outputFormat;
        }
        
        $resizedPath = 'uploads/resized_' . pathinfo($filePath, PATHINFO_FILENAME) . '.' . $outputExt;
        
        // Save image
        switch ($outputExt) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($newImage, $resizedPath, 90);
                break;
            case 'png':
                imagepng($newImage, $resizedPath, 9);
                break;
            case 'gif':
                imagegif($newImage, $resizedPath);
                break;
            default:
                return ['success' => false, 'error' => 'Unsupported output format'];
        }
        
        // Free memory
        imagedestroy($image);
        imagedestroy($newImage);
        
        return ['success' => true, 'path' => $resizedPath];
    } catch (Exception $e) {
        return ['success' => false, 'error' => $e->getMessage()];
    }
}

function formatBytes($bytes, $precision = 2) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . ' ' . $units[$pow];
}
?>

    <title>Free Image Resizer 2026 - Resize Photos to Any Dimensions Online</title>
<meta name="description" content="Instantly resize JPG, PNG, and WebP images to exact pixels or percentages (2026). Perfect for social media, websites, and documents - Bulk processing supported!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .file-upload-input {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .file-upload-label {
            display: block;
            padding: 1.5rem;
            border: 2px dashed #d1d5db;
            border-radius: 0.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        .file-upload-label:hover {
            border-color: #3b82f6;
            background-color: #f8fafc;
        }
        .preview-container {
            max-width: 100%;
            margin: 1rem 0;
        }
        .preview-image {
            max-width: 100%;
            max-height: 300px;
            display: block;
            margin: 0 auto;
        }
    </style>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Image Resizer Tool</h1>
                
                <form method="POST" enctype="multipart/form-data" class="space-y-6">
                    <div class="file-upload">
                        <input type="file" name="image" id="image" class="file-upload-input" accept="image/*" required>
                        <label for="image" class="file-upload-label">
                            <div class="flex flex-col items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="mt-2 text-sm text-gray-600">Click to upload an image</p>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
                            </div>
                        </label>
                    </div>
                    
                    <div id="preview-container" class="hidden preview-container">
                        <img id="preview-image" class="preview-image" src="#" alt="Preview">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="width" class="block text-sm font-medium text-gray-700 mb-1">Width (px)</label>
                            <input type="number" name="width" id="width" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Leave empty for auto">
                        </div>
                        <div>
                            <label for="height" class="block text-sm font-medium text-gray-700 mb-1">Height (px)</label>
                            <input type="number" name="height" id="height" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Leave empty for auto">
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" name="maintain_ratio" id="maintain_ratio" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" checked>
                        <label for="maintain_ratio" class="ml-2 block text-sm text-gray-700">Maintain aspect ratio</label>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Output Format</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                            <div class="flex items-center">
                                <input type="radio" name="output_format" id="original" value="original" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300" checked>
                                <label for="original" class="ml-2 block text-sm text-gray-700">Original</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="output_format" id="jpg" value="jpg" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                <label for="jpg" class="ml-2 block text-sm text-gray-700">JPG</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="output_format" id="png" value="png" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                <label for="png" class="ml-2 block text-sm text-gray-700">PNG</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="output_format" id="gif" value="gif" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                                <label for="gif" class="ml-2 block text-sm text-gray-700">GIF</label>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Resize Image
                    </button>
                </form>
                
                <?php if (isset($error)): ?>
                    <div class="mt-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?php echo htmlspecialchars($error); ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($resizedImage)): ?>
                    <div class="mt-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Resized Image</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex-1">
                                    <h3 class="text-lg font-medium text-gray-700 mb-2">Original</h3>
                                    <img src="<?php echo htmlspecialchars($uploadPath); ?>" class="max-w-full h-auto rounded border border-gray-200">
                                    <p class="mt-2 text-sm text-gray-600">Size: <?php echo htmlspecialchars($originalSize); ?></p>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-medium text-gray-700 mb-2">Resized</h3>
                                    <img src="<?php echo htmlspecialchars($resizedImage); ?>" class="max-w-full h-auto rounded border border-gray-200">
                                    <p class="mt-2 text-sm text-gray-600">Size: <?php echo htmlspecialchars($resizedSize); ?></p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="<?php echo htmlspecialchars($resizedImage); ?>" download class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Download Resized Image
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        // Image preview functionality
        document.getElementById('image').addEventListener('change', function(e) {
            const previewContainer = document.getElementById('preview-container');
            const previewImage = document.getElementById('preview-image');
            
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }
                
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
