<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gigabit to Megabit Converter 2026 - Gb to Mb Calculator | Thiyagi</title>
<meta name="description" content="Free online Gigabit to Megabit converter 2026. Convert Gb to Mb and Mb to Gb instantly with accurate data size conversion for networking and storage.">
<meta name="keywords" content="gigabit to megabit converter 2026, Gb to Mb, data converter, network speed, bandwidth converter, digital storage">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gigabit to Megabit Converter 2026 - Gb to Mb Calculator">
<meta property="og:description" content="Free online Gigabit to Megabit converter 2026. Convert Gb to Mb and Mb to Gb instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gigabit-to-megabit.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gigabit to Megabit Converter 2026 - Gb to Mb Calculator">
<meta name="twitter:description" content="Free online Gigabit to Megabit converter 2026. Convert Gb to Mb and Mb to Gb instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wifi text-cyan-600 mr-3"></i>
                Gigabit to Megabit Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between gigabits and megabits for network bandwidth and data transfer calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gigabit Input -->
                <div class="space-y-4">
                    <label for="gigabitInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-network-wired text-cyan-600 mr-2"></i>Gigabit (Gb)
                    </label>
                    <input
                        type="number"
                        id="gigabitInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter gigabits"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 Gb = 1,000 Mb
                    </div>
                </div>

                <!-- Megabit Input -->
                <div class="space-y-4">
                    <label for="megabitInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-signal text-teal-600 mr-2"></i>Megabit (Mb)
                    </label>
                    <input
                        type="number"
                        id="megabitInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter megabits"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 Mb = 0.001 Gb
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-cyan-50 to-teal-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear All
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Network Speed Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-cyan-600 mr-3"></i>Network Speed Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Gigabits</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Megabits</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 Gb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 Mb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 Gb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">500 Mb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1.0 Gb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 Mb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.5 Gb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,500 Mb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5.0 Gb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5,000 Mb</td>
                            </tr>
                            <tr>
                                <td class="py-2">10.0 Gb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 Mb</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Internet & Network Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-globe text-cyan-600 mr-3"></i>Internet & Network Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Home Internet Speeds:</strong><br>
                        • DSL: 1-50 Mb (0.001-0.05 Gb)<br>
                        • Cable: 10-1000 Mb (0.01-1 Gb)<br>
                        • Fiber: 100-10000 Mb (0.1-10 Gb)<br>
                        • Satellite: 12-100 Mb (0.012-0.1 Gb)
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Business Networks:</strong><br>
                        • Office LAN: 100-1000 Mb (0.1-1 Gb)<br>
                        • Enterprise WAN: 1-10 Gb<br>
                        • Data center: 10-100 Gb<br>
                        • Cloud connectivity: 1-40 Gb
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Mobile Networks:</strong><br>
                        • 3G: 0.384-42 Mb (0.0004-0.042 Gb)<br>
                        • 4G LTE: 5-300 Mb (0.005-0.3 Gb)<br>
                        • 5G: 100-10000 Mb (0.1-10 Gb)<br>
                        • WiFi 6: up to 9600 Mb (9.6 Gb)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-cyan-600 mr-2"></i>Digital Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Gigabit:</strong> 10⁹ bits</li>
                    <li><strong>Megabit:</strong> 10⁶ bits</li>
                    <li><strong>Conversion:</strong> 1 Gb = 1,000 Mb</li>
                    <li><strong>Symbol:</strong> Gb (gigabit), Mb (megabit)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Speed Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Gigabits for high-speed networks</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Megabits for consumer internet</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Consider actual vs theoretical speed</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Account for network overhead</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-server text-cyan-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Networking:</strong> Bandwidth planning</li>
                    <li><strong>ISP:</strong> Service tier specifications</li>
                    <li><strong>IT:</strong> Infrastructure design</li>
                    <li><strong>Gaming:</strong> Performance requirements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGigabitToMegabit(gigabits) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gigabits) && gigabits !== '') {
        const megabits = gigabits * 1000;
        document.getElementById('megabitInput').value = megabits.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${gigabits} Gb = ${megabits.toFixed(6)} Mb</strong>
        `;
    } else {
        document.getElementById('megabitInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMegabitToGigabit(megabits) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megabits) && megabits !== '') {
        const gigabits = megabits / 1000;
        document.getElementById('gigabitInput').value = gigabits.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${megabits} Mb = ${gigabits.toFixed(8)} Gb</strong>
        `;
    } else {
        document.getElementById('gigabitInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gigabitInput').value = '';
    document.getElementById('megabitInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const gigabitValue = document.getElementById('gigabitInput').value;
    const megabitValue = document.getElementById('megabitInput').value;
    
    document.getElementById('gigabitInput').value = megabitValue;
    document.getElementById('megabitInput').value = gigabitValue;
    
    if (megabitValue) {
        convertGigabitToMegabit(parseFloat(megabitValue));
    } else if (gigabitValue) {
        convertMegabitToGigabit(parseFloat(gigabitValue));
    }
}

// Add event listeners
document.getElementById('gigabitInput').addEventListener('input', function() {
    convertGigabitToMegabit(parseFloat(this.value));
});

document.getElementById('megabitInput').addEventListener('input', function() {
    convertMegabitToGigabit(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
