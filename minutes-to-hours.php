<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Minutes to Hours Converter 2026 | Time Conversion Tool | Free Calculator';
$description = 'Convert minutes to hours instantly with our 2026 accurate time converter. Perfect for scheduling, duration calculations, and time management with real-time results.';
$keywords = 'minutes to hours converter 2026, time conversion calculator, minute hour converter, time duration calculator, scheduling tool';
$canonical = 'https://www.thiyagi.com/minutes-to-hours';

$meta_tags = '<title>' . htmlspecialchars($title) . '</title>' . "\n";
$meta_tags .= '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
$meta_tags .= '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' . "\n";

// Replace the canonical URL and add our meta tags
$header_content = str_replace(
    $meta_tags,
    $header_content
);

echo $header_content;
?>

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Minutes to Hours Converter 2026 | Time Conversion Tool | Free Calculator">
<meta property="og:description" content="Convert minutes to hours instantly with our 2026 accurate time converter. Perfect for scheduling, duration calculations, and time management with real-time results.">
<meta property="og:url" content="https://www.thiyagi.com/minutes-to-hours">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi Tools">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Minutes to Hours Converter 2026 | Time Conversion Tool | Free Calculator">
<meta name="twitter:description" content="Convert minutes to hours instantly with our 2026 accurate time converter. Perfect for scheduling, duration calculations, and time management with real-time results.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-6">
                <i class="fas fa-clock text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Minutes to Hours Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert minutes to hours instantly with our simple time converter. Perfect for time calculations, scheduling, and duration measurements.
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
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter minutes"
                           step="any">
                </div>

                <!-- Arrow -->
                <div class="flex justify-center">
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-arrow-right text-blue-600 text-xl"></i>
                    </div>
                </div>

                <!-- Output -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Hours</label>
                    <input type="text" 
                           id="hoursResult" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-semibold text-blue-600"
                           placeholder="Result in hours"
                           readonly>
                </div>
            </div>

            <!-- Live Conversion Display -->
            <div class="mt-8 text-center">
                <div class="bg-blue-50 rounded-lg p-4">
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">60 minutes = 1 hour</span>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Minutes</h3>
                <p class="text-gray-600 mb-4">
                    A minute is a unit of time equal to 60 seconds. It's commonly used for measuring 
                    short durations, appointments, and everyday time calculations.
                </p>
                <p class="text-sm text-blue-800"><strong>1 minute = 60 seconds</strong></p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Hours</h3>
                <p class="text-gray-600 mb-4">
                    An hour is a period of time equal to 60 minutes or 3,600 seconds. 
                    It's the standard unit for measuring longer durations and time periods.
                </p>
                <p class="text-sm text-blue-800"><strong>1 hour = 60 minutes = 3,600 seconds</strong></p>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Minutes to Hours Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">30 minutes</div>
                    <div class="text-gray-600">= 0.5 hours</div>
                </div>
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">60 minutes</div>
                    <div class="text-gray-600">= 1 hour</div>
                </div>
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">90 minutes</div>
                    <div class="text-gray-600">= 1.5 hours</div>
                </div>
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">120 minutes</div>
                    <div class="text-gray-600">= 2 hours</div>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Time Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="hours-to-minutes" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Hours to Minutes</div>
                </a>
                <a href="seconds-to-milliseconds" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Seconds to Milliseconds</div>
                </a>
                <a href="milliseconds-to-seconds" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Milliseconds to Seconds</div>
                </a>
                <a href="age-calculator" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Age Calculator</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertMinutesToHours() {
    const minutes = parseFloat(document.getElementById('minutesInput').value);
    
    if (isNaN(minutes) || minutes < 0) {
        document.getElementById('hoursResult').value = '';
        document.getElementById('liveConversion').textContent = '60 minutes = 1 hour';
        return;
    }
    
    // 1 hour = 60 minutes, so hours = minutes / 60
    const hours = minutes / 60;
    
    document.getElementById('hoursResult').value = hours.toFixed(4);
    
    // Update live conversion display
    if (minutes === 1) {
        document.getElementById('liveConversion').textContent = '1 minute = 0.0167 hours';
    } else {
        document.getElementById('liveConversion').textContent = `${minutes} minutes = ${hours.toFixed(4)} hours`;
    }
}

// Add event listener for real-time conversion
document.getElementById('minutesInput').addEventListener('input', convertMinutesToHours);

// Initial conversion
convertMinutesToHours();
</script>

<?php include 'footer.php'; ?>
</body>
</html>
