<?php include 'header.php';?>


<?php
// Image Converter Tool
error_reporting(0);

// Supported formats
$supportedFormats = [
    'jpg' => 'image/jpeg',
    'png' => 'image/png',
    'webp' => 'image/webp',
    'gif' => 'image/gif'
];

// Handle file conversion
$conversionResult = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $targetFormat = $_POST['format'];
    
    // Validate input
    if (!in_array($targetFormat, array_keys($supportedFormats))) {
        $error = "Invalid target format selected";
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = "File upload error: " . $file['error'];
    } else {
        // Get image info
        $imageInfo = getimagesize($file['tmp_name']);
        if (!$imageInfo) {
            $error = "Uploaded file is not a valid image";
        } else {
            // Create output filename
            $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
            $outputFilename = $originalName . '.' . $targetFormat;
            
            // Process image based on original format
            $originalType = $imageInfo[2];
            $success = false;
            
            try {
                switch ($originalType) {
                    case IMAGETYPE_JPEG:
                        $image = imagecreatefromjpeg($file['tmp_name']);
                        break;
                    case IMAGETYPE_PNG:
                        $image = imagecreatefrompng($file['tmp_name']);
                        break;
                    case IMAGETYPE_GIF:
                        $image = imagecreatefromgif($file['tmp_name']);
                        break;
                    case IMAGETYPE_WEBP:
                        $image = imagecreatefromwebp($file['tmp_name']);
                        break;
                    default:
                        throw new Exception("Unsupported image format");
                }
                
                // Convert and save
                $outputPath = 'converted/' . $outputFilename;
                switch ($targetFormat) {
                    case 'jpg':
                        $success = imagejpeg($image, $outputPath, 90);
                        break;
                    case 'png':
                        $success = imagepng($image, $outputPath, 9);
                        break;
                    case 'webp':
                        $success = imagewebp($image, $outputPath, 90);
                        break;
                    case 'gif':
                        $success = imagegif($image, $outputPath);
                        break;
                }
                
                imagedestroy($image);
                
                if ($success) {
                    $conversionResult = [
                        'filename' => $outputFilename,
                        'format' => $targetFormat,
                        'path' => $outputPath,
                        'size' => filesize($outputPath)
                    ];
                } else {
                    $error = "Conversion failed";
                }
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
        }
    }
}

// Create converted directory if it doesn't exist
if (!file_exists('converted')) {
    mkdir('converted', 0755, true);
}
?>

    <title>Free Image Converter 2026 - Change Photo Formats Online (JPG, PNG, WebP)</title>
<meta name="description" content="Convert between 50+ image formats instantly (2026). Transform JPG ↔ PNG, HEIC → WebP, or PDF to images - Bulk processing & quality control included!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .file-input-label {
            display: block;
            padding: 1.5rem;
            border: 2px dashed #cbd5e0;
            border-radius: 0.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        .file-input-label:hover {
            border-color: #4299e1;
            background-color: #ebf8ff;
        }
        .file-input-label.dragover {
            border-color: #4299e1;
            background-color: #ebf8ff;
        }
        .format-option {
            transition: all 0.2s;
        }
        .format-option:hover {
            transform: scale(1.05);
        }
        .format-option.selected {
            border-color: #4299e1;
            background-color: #ebf8ff;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Image Converter</h1>
            <p class="text-gray-600">Convert between JPG, PNG, WEBP, and GIF formats</p>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" enctype="multipart/form-data" class="p-6">
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Select Image</label>
                    <input type="file" name="image" id="image" accept="image/*" class="hidden" required>
                    <label for="image" id="file-input-label" class="file-input-label">
                        <div class="flex flex-col items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-600 font-medium" id="file-label">Click to upload or drag and drop</span>
                            <span class="text-sm text-gray-500 mt-1">Supports JPG, PNG, WEBP, GIF (Max 5MB)</span>
                        </div>
                    </label>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Convert To</label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                        <?php foreach ($supportedFormats as $format => $mime): ?>
                            <label class="format-option border rounded-lg p-3 text-center cursor-pointer">
                                <input type="radio" name="format" value="<?= $format ?>" class="hidden" <?= $format === 'jpg' ? 'checked' : '' ?>>
                                <div class="flex flex-col items-center">
                                    <span class="text-gray-700 font-medium"><?= strtoupper($format) ?></span>
                                </div>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                    Convert Image
                </button>
            </form>

            <?php if ($error): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mx-6 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700"><?= htmlspecialchars($error) ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($conversionResult): ?>
                <div class="border-t border-gray-200 p-6">
                    <div class="flex flex-col items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-500 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-1">Conversion Successful!</h3>
                        <p class="text-gray-600 mb-4">Your image has been converted to <?= strtoupper($conversionResult['format']) ?> format.</p>
                        
                        <div class="mb-4 p-3 bg-gray-100 rounded-lg">
                            <img src="<?= htmlspecialchars($conversionResult['path']) ?>" alt="Converted image" class="max-h-40 mx-auto">
                        </div>
                        
                        <div class="w-full max-w-xs">
                            <a href="<?= htmlspecialchars($conversionResult['path']) ?>" download class="block w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition duration-200 mb-2">
                                Download Converted Image
                            </a>
                            <p class="text-sm text-gray-500">File size: <?= round($conversionResult['size'] / 1024, 2) ?> KB</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </main>

        
    </div>

    <script>
        // Enhance file input UX
        const fileInput = document.getElementById('image');
        const fileLabel = document.getElementById('file-input-label');
        const fileText = document.getElementById('file-label');

        fileInput.addEventListener('change', function(e) {
            if (this.files.length) {
                fileText.textContent = this.files[0].name;
            }
        });

        // Drag and drop support
        fileLabel.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileLabel.classList.add('dragover');
        });

        fileLabel.addEventListener('dragleave', () => {
            fileLabel.classList.remove('dragover');
        });

        fileLabel.addEventListener('drop', (e) => {
            e.preventDefault();
            fileLabel.classList.remove('dragover');
            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                fileText.textContent = e.dataTransfer.files[0].name;
            }
        });

        // Format selection styling
        document.querySelectorAll('.format-option').forEach(option => {
            const radio = option.querySelector('input[type="radio"]');
            
            option.addEventListener('click', () => {
                document.querySelectorAll('.format-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                option.classList.add('selected');
                radio.checked = true;
            });
            
            if (radio.checked) {
                option.classList.add('selected');
            }
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
