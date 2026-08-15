<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pixel X to Millimeter Converter 2026 - Display Calculator | Thiyagi</title>
<meta name="description" content="Free online pixel X to millimeter converter 2026. Convert px to mm instantly with accurate display and print measurements.">
<meta name="keywords" content="pixel to millimeter converter 2026, px to mm, display converter, print calculator, screen resolution">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pixel X to Millimeter Converter 2026 - Display Calculator">
<meta property="og:description" content="Free online pixel X to millimeter converter 2026. Convert px to mm instantly with accurate display measurements.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pixel-x-to-millimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pixel X to Millimeter Converter 2026 - Display Calculator">
<meta name="twitter:description" content="Free online pixel X to millimeter converter 2026. Convert px to mm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-blue-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-mobile-alt text-indigo-600 mr-3"></i>
                Pixel X to Millimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pixels to millimeters instantly for display design, printing, and web development
            </p>
        </div>

        <!-- DPI Selector -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="flex flex-wrap items-center gap-4">
                <label for="dpiSelect" class="font-medium text-gray-700">
                    <i class="fas fa-cog text-indigo-600 mr-2"></i>Display DPI:
                </label>
                <select id="dpiSelect" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                    <option value="72">72 DPI (Web Standard)</option>
                    <option value="96" selected>96 DPI (Windows Default)</option>
                    <option value="120">120 DPI (High DPI)</option>
                    <option value="144">144 DPI (Retina)</option>
                    <option value="300">300 DPI (Print Quality)</option>
                    <option value="custom">Custom DPI</option>
                </select>
                <input
                    type="number"
                    id="customDpi"
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500"
                    placeholder="Custom DPI"
                    style="display: none;"
                    min="1"
                >
            </div>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pixel Input -->
                <div class="space-y-2">
                    <label for="pixelInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-th text-indigo-600 mr-2"></i>Pixels (px)
                    </label>
                    <input
                        type="number"
                        id="pixelInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Enter pixels"
                        step="any"
                    >
                </div>

                <!-- Millimeter Output -->
                <div class="space-y-2">
                    <label for="millimeterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-indigo-600 mr-2"></i>Millimeters (mm)
                    </label>
                    <input
                        type="number"
                        id="millimeterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Millimeters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
            </div>
        </div>

        <!-- Quick Conversion Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-table text-indigo-600 mr-3"></i>Quick Reference (96 DPI)
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">96 px</div>
                    <div class="text-sm text-gray-600">= 25.4 mm</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">72 px</div>
                    <div class="text-sm text-gray-600">= 19.05 mm</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">48 px</div>
                    <div class="text-sm text-gray-600">= 12.7 mm</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">24 px</div>
                    <div class="text-sm text-gray-600">= 6.35 mm</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-indigo-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between pixels and millimeters based on display DPI (dots per inch).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Millimeters = (Pixels × 25.4) ÷ DPI<br>
                    Pixels = (Millimeters × DPI) ÷ 25.4
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Mobile app design</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Responsive web layouts</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Print to digital conversion</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Screen measurement</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>UI/UX development</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function getCurrentDpi() {
    const dpiSelect = document.getElementById('dpiSelect');
    const customDpi = document.getElementById('customDpi');
    
    if (dpiSelect.value === 'custom') {
        return parseFloat(customDpi.value) || 96;
    }
    return parseFloat(dpiSelect.value);
}

function convertPixelToMillimeter() {
    const pixel = parseFloat(document.getElementById('pixelInput').value);
    const dpi = getCurrentDpi();
    
    if (!isNaN(pixel)) {
        const millimeter = (pixel * 25.4) / dpi; // 1 inch = 25.4 mm
        document.getElementById('millimeterOutput').value = millimeter.toFixed(4);
    } else {
        document.getElementById('millimeterOutput').value = '';
    }
}

function convertMillimeterToPixel() {
    const millimeter = parseFloat(document.getElementById('millimeterOutput').value);
    const dpi = getCurrentDpi();
    
    if (!isNaN(millimeter)) {
        const pixel = (millimeter * dpi) / 25.4; // 1 inch = 25.4 mm
        document.getElementById('pixelInput').value = pixel.toFixed(2);
    } else {
        document.getElementById('pixelInput').value = '';
    }
}

function swapValues() {
    const pixelValue = document.getElementById('pixelInput').value;
    const millimeterValue = document.getElementById('millimeterOutput').value;
    
    document.getElementById('pixelInput').value = millimeterValue;
    document.getElementById('millimeterOutput').value = pixelValue;
}

function clearValues() {
    document.getElementById('pixelInput').value = '';
    document.getElementById('millimeterOutput').value = '';
}

// Handle DPI selection
document.getElementById('dpiSelect').addEventListener('change', function() {
    const customDpi = document.getElementById('customDpi');
    if (this.value === 'custom') {
        customDpi.style.display = 'block';
        customDpi.focus();
    } else {
        customDpi.style.display = 'none';
    }
    convertPixelToMillimeter();
});

// Add event listeners
document.getElementById('pixelInput').addEventListener('input', convertPixelToMillimeter);
document.getElementById('millimeterOutput').addEventListener('input', convertMillimeterToPixel);
document.getElementById('customDpi').addEventListener('input', convertPixelToMillimeter);
</script>

<?php include 'footer.php'; ?>
