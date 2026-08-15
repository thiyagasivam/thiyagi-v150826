<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Microsecond to Second Converter 2026 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online microsecond to second converter 2026. Convert μs to s instantly with accurate time conversion for scientific and technical calculations.">
<meta name="keywords" content="microsecond to second converter 2026, μs to s, time converter, scientific calculator, precision timing">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Microsecond to Second Converter 2026 - Time Calculator">
<meta property="og:description" content="Free online microsecond to second converter 2026. Convert μs to s instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/microsecond-to-second.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Microsecond to Second Converter 2026 - Time Calculator">
<meta name="twitter:description" content="Free online microsecond to second converter 2026. Convert μs to s instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-clock text-cyan-600 mr-3"></i>
                Microsecond to Second Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert microseconds to seconds instantly for precision timing and scientific calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Microseconds Input -->
                <div class="space-y-2">
                    <label for="microsecondsInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-cyan-600 mr-2"></i>Microseconds (μs)
                    </label>
                    <input
                        type="number"
                        id="microsecondsInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Enter microseconds"
                        step="any"
                    >
                </div>

                <!-- Seconds Output -->
                <div class="space-y-2">
                    <label for="secondsOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-clock text-cyan-600 mr-2"></i>Seconds (s)
                    </label>
                    <input
                        type="number"
                        id="secondsOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Seconds result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-cyan-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">1,000,000 μs</div>
                    <div class="text-sm text-gray-600">= 1 s</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">100,000 μs</div>
                    <div class="text-sm text-gray-600">= 0.1 s</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">10,000 μs</div>
                    <div class="text-sm text-gray-600">= 0.01 s</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">1,000 μs</div>
                    <div class="text-sm text-gray-600">= 0.001 s</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-cyan-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between microseconds and seconds. One second equals 1,000,000 microseconds.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Seconds = Microseconds ÷ 1,000,000<br>
                    Microseconds = Seconds × 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Computer science timing</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Scientific measurements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Electronics engineering</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Signal processing</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Performance analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMicrosecondsToSeconds() {
    const microseconds = parseFloat(document.getElementById('microsecondsInput').value);
    if (!isNaN(microseconds)) {
        const seconds = microseconds / 1000000; // 1 s = 1,000,000 μs
        document.getElementById('secondsOutput').value = seconds.toFixed(10);
    } else {
        document.getElementById('secondsOutput').value = '';
    }
}

function convertSecondsToMicroseconds() {
    const seconds = parseFloat(document.getElementById('secondsOutput').value);
    if (!isNaN(seconds)) {
        const microseconds = seconds * 1000000; // 1 s = 1,000,000 μs
        document.getElementById('microsecondsInput').value = microseconds.toFixed(2);
    } else {
        document.getElementById('microsecondsInput').value = '';
    }
}

function swapValues() {
    const microsecondsValue = document.getElementById('microsecondsInput').value;
    const secondsValue = document.getElementById('secondsOutput').value;
    
    document.getElementById('microsecondsInput').value = secondsValue;
    document.getElementById('secondsOutput').value = microsecondsValue;
}

function clearValues() {
    document.getElementById('microsecondsInput').value = '';
    document.getElementById('secondsOutput').value = '';
}

// Add event listeners
document.getElementById('microsecondsInput').addEventListener('input', convertMicrosecondsToSeconds);
document.getElementById('secondsOutput').addEventListener('input', convertSecondsToMicroseconds);
</script>

<?php include 'footer.php'; ?>
