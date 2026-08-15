<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Days to Hours Converter 2026 | Time Conversion Tool | Free Calculator';
$description = 'Convert days to hours instantly with our 2026 accurate time converter. Perfect for project planning, scheduling, and duration calculations.';
$keywords = 'days to hours converter 2026, time conversion calculator, day hour converter, scheduling calculator, project planning';
$canonical = 'https://www.thiyagi.com/days-to-hours';

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

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-6">
                <i class="fas fa-calendar-day text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Days to Hours Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert days to hours instantly with our precise time converter. Perfect for project planning, scheduling, and duration calculations.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Days</label>
                    <input type="number" 
                           id="daysInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter days"
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 day = 24 hours</span>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Day to Hour Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                <div class="bg-blue-50 p-3 rounded-lg text-center">
                    <div class="font-semibold text-blue-800">1 Day</div>
                    <div class="text-blue-600">24 Hours</div>
                </div>
                <div class="bg-blue-50 p-3 rounded-lg text-center">
                    <div class="font-semibold text-blue-800">7 Days</div>
                    <div class="text-blue-600">168 Hours</div>
                </div>
                <div class="bg-blue-50 p-3 rounded-lg text-center">
                    <div class="font-semibold text-blue-800">30 Days</div>
                    <div class="text-blue-600">720 Hours</div>
                </div>
                <div class="bg-blue-50 p-3 rounded-lg text-center">
                    <div class="font-semibold text-blue-800">365 Days</div>
                    <div class="text-blue-600">8,760 Hours</div>
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
                <a href="minutes-to-hours" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Minutes to Hours</div>
                </a>
                <a href="minutes-to-seconds" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Minutes to Seconds</div>
                </a>
                <a href="seconds-to-milliseconds" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Seconds to Milliseconds</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertDaysToHours() {
    const days = parseFloat(document.getElementById('daysInput').value);
    
    if (isNaN(days) || days < 0) {
        document.getElementById('hoursResult').value = '';
        document.getElementById('liveConversion').textContent = '1 day = 24 hours';
        return;
    }
    
    // 1 day = 24 hours
    const hours = days * 24;
    
    document.getElementById('hoursResult').value = hours.toFixed(2);
    
    // Update live conversion display
    if (days === 1) {
        document.getElementById('liveConversion').textContent = '1 day = 24 hours';
    } else {
        document.getElementById('liveConversion').textContent = `${days} days = ${hours.toFixed(2)} hours`;
    }
}

// Add event listener for real-time conversion
document.getElementById('daysInput').addEventListener('input', convertDaysToHours);

// Initial conversion
convertDaysToHours();
</script>

<?php include 'footer.php'; ?>
</body>
</html>
