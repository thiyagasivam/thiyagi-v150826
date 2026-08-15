<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Millimeter to Pixel X Converter 2026 - Display Calculator | Thiyagi</title>
<meta name="description" content="Free online millimeter to pixel X converter 2026. Convert mm to px instantly with accurate display and print measurements.">
<meta name="keywords" content="millimeter to pixel converter 2026, mm to px, display converter, print calculator, screen resolution">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Millimeter to Pixel X Converter 2026 - Display Calculator">
<meta property="og:description" content="Free online millimeter to pixel X converter 2026. Convert mm to px instantly with accurate display measurements.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/millimeter-to-pixel-x.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Millimeter to Pixel X Converter 2026 - Display Calculator">
<meta name="twitter:description" content="Free online millimeter to pixel X converter 2026. Convert mm to px instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-desktop text-purple-600 mr-3"></i>
                Millimeter to Pixel X Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert millimeters to pixels instantly for display design, printing, and web development
            </p>
        </div>

        <!-- DPI Selector -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="flex flex-wrap items-center gap-4">
                <label for="dpiSelect" class="font-medium text-gray-700">
                    <i class="fas fa-cog text-purple-600 mr-2"></i>Display DPI:
                </label>
                <select id="dpiSelect" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500">
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
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500"
                    placeholder="Custom DPI"
                    style="display: none;"
                    min="1"
                >
            </div>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Millimeter Input -->
                <div class="space-y-2">
                    <label for="millimeterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-purple-600 mr-2"></i>Millimeters (mm)
                    </label>
                    <input
                        type="number"
                        id="millimeterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter millimeters"
                        step="any"
                    >
                </div>

                <!-- Pixel Output -->
                <div class="space-y-2">
                    <label for="pixelOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-th text-purple-600 mr-2"></i>Pixels (px)
                    </label>
                    <input
                        type="number"
                        id="pixelOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Pixels result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-purple-600 mr-3"></i>Quick Reference (96 DPI)
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 mm</div>
                    <div class="text-sm text-gray-600">= 3.78 px</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">5 mm</div>
                    <div class="text-sm text-gray-600">= 18.9 px</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">10 mm</div>
                    <div class="text-sm text-gray-600">= 37.8 px</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">25.4 mm</div>
                    <div class="text-sm text-gray-600">= 96 px</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-purple-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between millimeters and pixels based on display DPI (dots per inch).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Pixels = (Millimeters × DPI) ÷ 25.4<br>
                    Millimeters = (Pixels × 25.4) ÷ DPI
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Web design layouts</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Print design conversion</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Mobile app development</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Display calibration</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Image sizing</li>
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

function convertMillimeterToPixel() {
    const millimeter = parseFloat(document.getElementById('millimeterInput').value);
    const dpi = getCurrentDpi();
    
    if (!isNaN(millimeter)) {
        const pixel = (millimeter * dpi) / 25.4; // 1 inch = 25.4 mm
        document.getElementById('pixelOutput').value = pixel.toFixed(2);
    } else {
        document.getElementById('pixelOutput').value = '';
    }
}

function convertPixelToMillimeter() {
    const pixel = parseFloat(document.getElementById('pixelOutput').value);
    const dpi = getCurrentDpi();
    
    if (!isNaN(pixel)) {
        const millimeter = (pixel * 25.4) / dpi; // 1 inch = 25.4 mm
        document.getElementById('millimeterInput').value = millimeter.toFixed(4);
    } else {
        document.getElementById('millimeterInput').value = '';
    }
}

function swapValues() {
    const millimeterValue = document.getElementById('millimeterInput').value;
    const pixelValue = document.getElementById('pixelOutput').value;
    
    document.getElementById('millimeterInput').value = pixelValue;
    document.getElementById('pixelOutput').value = millimeterValue;
}

function clearValues() {
    document.getElementById('millimeterInput').value = '';
    document.getElementById('pixelOutput').value = '';
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
    convertMillimeterToPixel();
});

// Add event listeners
document.getElementById('millimeterInput').addEventListener('input', convertMillimeterToPixel);
document.getElementById('pixelOutput').addEventListener('input', convertPixelToMillimeter);
document.getElementById('customDpi').addEventListener('input', convertMillimeterToPixel);
</script>

<?php include 'footer.php'; ?>
