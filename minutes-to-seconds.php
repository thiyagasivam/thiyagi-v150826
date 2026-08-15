<?php include 'header.php'; ?>
<title>Minutes to Seconds Converter 2026 | Time Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert minutes to seconds instantly with our 2026 accurate time converter. Perfect for precise timing, sports calculations, and duration measurements.">
<meta name="keywords" content="minutes to seconds converter 2026, time conversion calculator, minute second converter, timing calculator, sports timer">

<div class="min-h-screen bg-gradient-to-br from-purple-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-600 text-white rounded-full mb-6">
                <i class="fas fa-stopwatch text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Minutes to Seconds Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert minutes to seconds instantly with our precise time converter. Perfect for timing, sports calculations, and precise duration measurements.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Minutes</label>
                    <input type="number" 
                           id="minutesInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                           placeholder="Enter minutes"
                           step="any">
                </div>

                <!-- Arrow -->
                <div class="flex justify-center">
                    <div class="bg-purple-100 p-3 rounded-full">
                        <i class="fas fa-arrow-right text-purple-600 text-xl"></i>
                    </div>
                </div>

                <!-- Output -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Seconds</label>
                    <input type="text" 
                           id="secondsResult" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-semibold text-purple-600"
                           placeholder="Result in seconds"
                           readonly>
                </div>
            </div>

            <!-- Live Conversion Display -->
            <div class="mt-8 text-center">
                <div class="bg-purple-50 rounded-lg p-4">
                    <span class="text-2xl font-bold text-purple-800" id="liveConversion">1 minute = 60 seconds</span>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Time Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="seconds-to-milliseconds" class="p-3 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <div class="text-sm font-medium text-purple-800">Seconds to Milliseconds</div>
                </a>
                <a href="milliseconds-to-seconds" class="p-3 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <div class="text-sm font-medium text-purple-800">Milliseconds to Seconds</div>
                </a>
                <a href="hours-to-minutes" class="p-3 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <div class="text-sm font-medium text-purple-800">Hours to Minutes</div>
                </a>
                <a href="minutes-to-hours" class="p-3 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <div class="text-sm font-medium text-purple-800">Minutes to Hours</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertMinutesToSeconds() {
    const minutes = parseFloat(document.getElementById('minutesInput').value);
    
    if (isNaN(minutes) || minutes < 0) {
        document.getElementById('secondsResult').value = '';
        document.getElementById('liveConversion').textContent = '1 minute = 60 seconds';
        return;
    }
    
    // 1 minute = 60 seconds
    const seconds = minutes * 60;
    
    document.getElementById('secondsResult').value = seconds.toFixed(2);
    
    // Update live conversion display
    if (minutes === 1) {
        document.getElementById('liveConversion').textContent = '1 minute = 60 seconds';
    } else {
        document.getElementById('liveConversion').textContent = `${minutes} minutes = ${seconds.toFixed(2)} seconds`;
    }
}

// Add event listener for real-time conversion
document.getElementById('minutesInput').addEventListener('input', convertMinutesToSeconds);

// Initial conversion
convertMinutesToSeconds();
</script>

<?php include 'footer.php'; ?>
</body>
</html>
