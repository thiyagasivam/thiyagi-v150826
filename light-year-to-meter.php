<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Light Year to Meter Converter 2026 - ly to m Astronomical Distance Calculator | Thiyagi</title>
<meta name="description" content="Free online Light Year to Meter converter 2026. Convert ly to m and m to ly instantly with accurate astronomical distance conversion.">
<meta name="keywords" content="light year to meter converter 2026, ly to m, astronomical distance, space measurement calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Light Year to Meter Converter 2026 - ly to m Astronomical Distance Calculator">
<meta property="og:description" content="Free online Light Year to Meter converter 2026. Convert ly to m and m to ly instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/light-year-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Light Year to Meter Converter 2026 - ly to m Astronomical Distance Calculator">
<meta property="twitter:description" content="Free online Light Year to Meter converter 2026. Convert ly to m and m to ly instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-star text-indigo-600 mr-3"></i>
                Light Year to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between light years (ly) and meters (m) for astronomical distances, space exploration, stellar measurements, and cosmic scale calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Light Year Input -->
                <div class="space-y-4">
                    <label for="lightYearInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-rocket text-indigo-600 mr-2"></i>Light Years (ly)
                    </label>
                    <input
                        type="number"
                        id="lightYearInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter light years"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Distance light travels in one year
                    </div>
                </div>

                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-purple-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Base SI unit of length
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Distance Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Distance Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Light Years</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 ly</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">9.46×10¹⁵ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">4.37 ly</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.13×10¹⁶ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 ly</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.37×10¹⁷ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 ly</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">9.46×10¹⁷ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 ly</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">9.46×10¹⁸ m</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000 ly</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">9.46×10²⁰ m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Astronomical Objects -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-globe text-indigo-600 mr-3"></i>Astronomical Objects
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Nearest Stars:</strong><br>
                        • Proxima Centauri: 4.24 ly<br>
                        • Alpha Centauri A&B: 4.37 ly<br>
                        • Barnard's Star: 5.96 ly<br>
                        • Wolf 359: 7.86 ly
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Notable Distances:</strong><br>
                        • Sirius (brightest star): 8.6 ly<br>
                        • Vega: 25 ly<br>
                        • Polaris (North Star): 433 ly<br>
                        • Betelgeuse: 650 ly
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Galactic Scale:</strong><br>
                        • Milky Way diameter: ~100,000 ly<br>
                        • Galactic center: ~26,000 ly<br>
                        • Andromeda Galaxy: 2.5 million ly<br>
                        • Observable universe: 93 billion ly
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-indigo-600 mr-2"></i>Distance Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>ly:</strong> 9.461×10¹⁵ meters</li>
                    <li><strong>m:</strong> Base SI length unit</li>
                    <li><strong>Speed of light:</strong> 299,792,458 m/s</li>
                    <li><strong>One year:</strong> 365.25 days</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>ly for cosmic distances</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>m for scientific calculations</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Use scientific notation</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Consider relativistic effects</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-telescope text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Astronomy:</strong> Stellar distances</li>
                    <li><strong>Research:</strong> Cosmology studies</li>
                    <li><strong>Education:</strong> Space science</li>
                    <li><strong>Navigation:</strong> Space missions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function formatScientific(value) {
    if (value >= 1e15 || value <= 1e-15) {
        return value.toExponential(3);
    }
    return value.toLocaleString();
}

function convertLightYearToMeter(lightYear) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(lightYear) && lightYear !== '') {
        // 1 light year = 9.46073047×10^15 meters
        const meter = lightYear * 9.46073047e15;
        document.getElementById('meterInput').value = meter;
        
        const formattedMeter = formatScientific(meter);
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${lightYear} ly = ${formattedMeter} m</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMeterToLightYear(meter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meter) && meter !== '') {
        // 1 meter = 1.057×10^-16 light years
        const lightYear = meter / 9.46073047e15;
        document.getElementById('lightYearInput').value = lightYear.toFixed(20);
        
        const formattedMeter = formatScientific(meter);
        const formattedLightYear = formatScientific(lightYear);
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${formattedMeter} m = ${formattedLightYear} ly</strong>
        `;
    } else {
        document.getElementById('lightYearInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('lightYearInput').value = '';
    document.getElementById('meterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const lightYearValue = document.getElementById('lightYearInput').value;
    const meterValue = document.getElementById('meterInput').value;
    
    document.getElementById('lightYearInput').value = meterValue;
    document.getElementById('meterInput').value = lightYearValue;
    
    if (meterValue) {
        convertLightYearToMeter(parseFloat(meterValue));
    } else if (lightYearValue) {
        convertMeterToLightYear(parseFloat(lightYearValue));
    }
}

// Add event listeners
document.getElementById('lightYearInput').addEventListener('input', function() {
    convertLightYearToMeter(parseFloat(this.value));
});

document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToLightYear(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
