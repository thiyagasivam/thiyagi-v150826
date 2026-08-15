<?php include 'header.php';?>


<?php
// Handle image upload and cropping
$croppedImage = '';
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Validate image
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = mime_content_type($_FILES['image']['tmp_name']);
        
        if (!in_array($fileType, $allowedTypes)) {
            $error = 'Only JPG, PNG, and GIF images are allowed.';
        } else {
            // Process image
            try {
                $imageInfo = getimagesize($_FILES['image']['tmp_name']);
                $originalWidth = $imageInfo[0];
                $originalHeight = $imageInfo[1];
                
                // Get cropping parameters
                $x = (int)$_POST['x'];
                $y = (int)$_POST['y'];
                $width = (int)$_POST['width'];
                $height = (int)$_POST['height'];
                
                // Validate cropping parameters
                if ($x < 0 || $y < 0 || $width <= 0 || $height <= 0 || 
                    ($x + $width) > $originalWidth || ($y + $height) > $originalHeight) {
                    throw new Exception('Invalid cropping parameters');
                }
                
                // Create image resource based on type
                switch ($fileType) {
                    case 'image/jpeg':
                        $image = imagecreatefromjpeg($_FILES['image']['tmp_name']);
                        break;
                    case 'image/png':
                        $image = imagecreatefrompng($_FILES['image']['tmp_name']);
                        break;
                    case 'image/gif':
                        $image = imagecreatefromgif($_FILES['image']['tmp_name']);
                        break;
                }
                
                // Crop image
                $croppedImageResource = imagecrop($image, [
                    'x' => $x,
                    'y' => $y,
                    'width' => $width,
                    'height' => $height
                ]);
                
                if ($croppedImageResource !== false) {
                    // Save cropped image
                    $outputDir = 'uploads/';
                    if (!file_exists($outputDir)) {
                        mkdir($outputDir, 0755, true);
                    }
                    
                    $filename = uniqid('cropped_') . '.jpg';
                    $outputPath = $outputDir . $filename;
                    
                    imagejpeg($croppedImageResource, $outputPath, 90);
                    imagedestroy($croppedImageResource);
                    imagedestroy($image);
                    
                    $croppedImage = $outputPath;
                    $success = 'Image cropped successfully!';
                } else {
                    throw new Exception('Failed to crop image');
                }
            } catch (Exception $e) {
                $error = 'Error processing image: ' . $e->getMessage();
            }
        }
    } else {
        $error = 'Please select an image to upload.';
    }
}
?>

    <title>Free Image Cropper 2026 - Crop Photos to Exact Sizes Online</title>
<meta name="description" content="Precisely crop images to custom dimensions or preset ratios (1:1, 16:9, etc.) in 2026. Perfect for social media, product thumbnails, and profile pictures - No registration!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <style>
        .image-container {
            max-width: 100%;
            margin: 0 auto;
        }
        #imagePreview {
            max-width: 100%;
            max-height: 400px;
        }
        .cropper-container {
            margin: 20px auto;
        }
        .download-btn {
            transition: all 0.3s ease;
        }
        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Image Cropper Tool</h1>
                
                <?php if ($error): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        <?php echo htmlspecialchars($success); ?>
                    </div>
                <?php endif; ?>
                
                <form id="cropForm" method="POST" enctype="multipart/form-data" class="mb-6">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="image">
                            Upload Image (JPG, PNG, GIF)
                        </label>
                        <input type="file" name="image" id="image" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    
                    <div class="image-container hidden mb-4">
                        <img id="imagePreview" src="#" alt="Preview" class="mx-auto">
                    </div>
                    
                    <input type="hidden" name="x" id="x">
                    <input type="hidden" name="y" id="y">
                    <input type="hidden" name="width" id="width">
                    <input type="hidden" name="height" id="height">
                    
                    <div class="flex flex-wrap -mx-2 mb-4">
                        <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                            <label class="block text-gray-700 font-bold mb-2" for="aspectRatio">
                                Aspect Ratio
                            </label>
                            <select id="aspectRatio" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="free">Free</option>
                                <option value="1">Square (1:1)</option>
                                <option value="16/9">Widescreen (16:9)</option>
                                <option value="4/3">Standard (4:3)</option>
                                <option value="3/2">Classic (3:2)</option>
                                <option value="9/16">Portrait (9:16)</option>
                            </select>
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <label class="block text-gray-700 font-bold mb-2" for="outputSize">
                                Output Size
                            </label>
                            <select id="outputSize" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="original">Original Size</option>
                                <option value="800">800px (width)</option>
                                <option value="1200">1200px (width)</option>
                                <option value="1920">1920px (width)</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" id="cropBtn" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300 hidden">
                        Crop Image
                    </button>
                </form>
                
                <?php if ($croppedImage): ?>
                    <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Cropped Image</h2>
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="w-full md:w-1/2 mb-4 md:mb-0 md:pr-4">
                                <img src="<?php echo htmlspecialchars($croppedImage); ?>" alt="Cropped Image" class="w-full rounded-lg shadow-md">
                            </div>
                            <div class="w-full md:w-1/2">
                                <a href="<?php echo htmlspecialchars($croppedImage); ?>" download class="download-btn block w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg text-center transition duration-300">
                                    Download Cropped Image
                                </a>
                                <div class="mt-4">
                                    <label class="block text-gray-700 font-bold mb-2">Image URL:</label>
                                    <input type="text" value="<?php echo htmlspecialchars($croppedImage); ?>" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('image');
            const imagePreview = document.getElementById('imagePreview');
            const imageContainer = document.querySelector('.image-container');
            const cropBtn = document.getElementById('cropBtn');
            const aspectRatio = document.getElementById('aspectRatio');
            const outputSize = document.getElementById('outputSize');
            let cropper;
            
            imageInput.addEventListener('change', function(e) {
                if (e.target.files.length) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        imagePreview.src = event.target.result;
                        imageContainer.classList.remove('hidden');
                        cropBtn.classList.remove('hidden');
                        
                        if (cropper) {
                            cropper.destroy();
                        }
                        
                        // Initialize cropper
                        cropper = new Cropper(imagePreview, {
                            aspectRatio: NaN,
                            viewMode: 1,
                            autoCropArea: 0.8,
                            responsive: true,
                            guides: true,
                            background: false,
                            ready: function() {
                                updateHiddenInputs();
                            },
                            crop: function() {
                                updateHiddenInputs();
                            }
                        });
                        
                        // Set aspect ratio when changed
                        aspectRatio.addEventListener('change', function() {
                            const value = this.value;
                            if (value === 'free') {
                                cropper.setAspectRatio(NaN);
                            } else if (value.includes('/')) {
                                const [w, h] = value.split('/').map(Number);
                                cropper.setAspectRatio(w / h);
                            } else {
                                cropper.setAspectRatio(Number(value));
                            }
                        });
                    };
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
            
            function updateHiddenInputs() {
                const cropData = cropper.getData();
                document.getElementById('x').value = Math.round(cropData.x);
                document.getElementById('y').value = Math.round(cropData.y);
                document.getElementById('width').value = Math.round(cropData.width);
                document.getElementById('height').value = Math.round(cropData.height);
            }
            
            // Handle form submission
            document.getElementById('cropForm').addEventListener('submit', function(e) {
                if (!cropper) {
                    e.preventDefault();
                    alert('Please select an image first');
                    return false;
                }
                return true;
            });
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
