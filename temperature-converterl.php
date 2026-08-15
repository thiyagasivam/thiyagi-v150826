<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Temperature Converter 2026 - Universal Temperature Calculator | Thiyagi</title>
<meta name="description" content="Free online temperature converter 2026. Convert Celsius, Fahrenheit, Kelvin, and Rankine instantly with accurate temperature conversion.">
<meta name="keywords" content="temperature converter 2026, celsius fahrenheit, kelvin rankine, universal temperature calculator, temperature conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Temperature Converter 2026 - Universal Temperature Calculator">
<meta property="og:description" content="Free online temperature converter 2026. Convert between all temperature scales instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/temperature-converterl.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Temperature Converter 2026 - Universal Temperature Calculator">
<meta name="twitter:description" content="Free online temperature converter 2026. Convert between all temperature scales instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-thermometer-half text-red-600 mr-3"></i>
                Universal Temperature Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between Celsius, Fahrenheit, Kelvin, and Rankine instantly
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Celsius -->
                <div class="space-y-2">
                    <label for="celsiusInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-quarter text-blue-600 mr-2"></i>Celsius (°C)
                    </label>
                    <input
                        type="number"
                        id="celsiusInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="°C"
                        step="any"
                    >
                </div>

                <!-- Fahrenheit -->
                <div class="space-y-2">
                    <label for="fahrenheitInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-half text-orange-600 mr-2"></i>Fahrenheit (°F)
                    </label>
                    <input
                        type="number"
                        id="fahrenheitInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="°F"
                        step="any"
                    >
                </div>

                <!-- Kelvin -->
                <div class="space-y-2">
                    <label for="kelvinInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-three-quarters text-green-600 mr-2"></i>Kelvin (K)
                    </label>
                    <input
                        type="number"
                        id="kelvinInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="K"
                        step="any"
                    >
                </div>

                <!-- Rankine -->
                <div class="space-y-2">
                    <label for="rankineInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-full text-purple-600 mr-2"></i>Rankine (°R)
                    </label>
                    <input
                        type="number"
                        id="rankineInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="°R"
                        step="any"
                    >
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
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Temperatures -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Common Temperatures
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Description</th>
                                <th class="text-center py-2">°C</th>
                                <th class="text-center py-2">°F</th>
                                <th class="text-center py-2">K</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Absolute Zero</td>
                                <td class="text-center">-273.15</td>
                                <td class="text-center">-459.67</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Water Freezes</td>
                                <td class="text-center">0</td>
                                <td class="text-center">32</td>
                                <td class="text-center">273.15</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Room Temperature</td>
                                <td class="text-center">20</td>
                                <td class="text-center">68</td>
                                <td class="text-center">293.15</td>
                            </tr>
                            <tr>
                                <td class="py-2">Water Boils</td>
                                <td class="text-center">100</td>
                                <td class="text-center">212</td>
                                <td class="text-center">373.15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Conversion Formulas -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-calculator text-red-600 mr-3"></i>Conversion Formulas
                </h2>
                <div class="space-y-4 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Celsius to Fahrenheit:</strong><br>
                        °F = (°C × 9/5) + 32
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Fahrenheit to Celsius:</strong><br>
                        °C = (°F - 32) × 5/9
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Celsius to Kelvin:</strong><br>
                        K = °C + 273.15
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Fahrenheit to Rankine:</strong><br>
                        °R = °F + 459.67
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>Temperature Scales
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Celsius:</strong> Water freezes at 0°C, boils at 100°C</li>
                    <li><strong>Fahrenheit:</strong> Water freezes at 32°F, boils at 212°F</li>
                    <li><strong>Kelvin:</strong> Absolute temperature scale starting at 0K</li>
                    <li><strong>Rankine:</strong> Absolute scale using Fahrenheit degrees</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Weather monitoring</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Cooking & baking</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Scientific research</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Engineering calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>HVAC systems</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Global Usage
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Celsius:</strong> Most countries worldwide</li>
                    <li><strong>Fahrenheit:</strong> USA, some Caribbean islands</li>
                    <li><strong>Kelvin:</strong> Scientific and engineering</li>
                    <li><strong>Rankine:</strong> Engineering (especially USA)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertFromCelsius(celsius) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(celsius) && celsius !== '') {
        const fahrenheit = (celsius * 9/5) + 32;
        const kelvin = celsius + 273.15;
        const rankine = fahrenheit + 459.67;
        
        document.getElementById('fahrenheitInput').value = fahrenheit.toFixed(2);
        document.getElementById('kelvinInput').value = kelvin.toFixed(2);
        document.getElementById('rankineInput').value = rankine.toFixed(2);
    } else {
        document.getElementById('fahrenheitInput').value = '';
        document.getElementById('kelvinInput').value = '';
        document.getElementById('rankineInput').value = '';
    }
    
    isUpdating = false;
}

function convertFromFahrenheit(fahrenheit) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(fahrenheit) && fahrenheit !== '') {
        const celsius = (fahrenheit - 32) * 5/9;
        const kelvin = celsius + 273.15;
        const rankine = fahrenheit + 459.67;
        
        document.getElementById('celsiusInput').value = celsius.toFixed(2);
        document.getElementById('kelvinInput').value = kelvin.toFixed(2);
        document.getElementById('rankineInput').value = rankine.toFixed(2);
    } else {
        document.getElementById('celsiusInput').value = '';
        document.getElementById('kelvinInput').value = '';
        document.getElementById('rankineInput').value = '';
    }
    
    isUpdating = false;
}

function convertFromKelvin(kelvin) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kelvin) && kelvin !== '') {
        const celsius = kelvin - 273.15;
        const fahrenheit = (celsius * 9/5) + 32;
        const rankine = fahrenheit + 459.67;
        
        document.getElementById('celsiusInput').value = celsius.toFixed(2);
        document.getElementById('fahrenheitInput').value = fahrenheit.toFixed(2);
        document.getElementById('rankineInput').value = rankine.toFixed(2);
    } else {
        document.getElementById('celsiusInput').value = '';
        document.getElementById('fahrenheitInput').value = '';
        document.getElementById('rankineInput').value = '';
    }
    
    isUpdating = false;
}

function convertFromRankine(rankine) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(rankine) && rankine !== '') {
        const fahrenheit = rankine - 459.67;
        const celsius = (fahrenheit - 32) * 5/9;
        const kelvin = celsius + 273.15;
        
        document.getElementById('celsiusInput').value = celsius.toFixed(2);
        document.getElementById('fahrenheitInput').value = fahrenheit.toFixed(2);
        document.getElementById('kelvinInput').value = kelvin.toFixed(2);
    } else {
        document.getElementById('celsiusInput').value = '';
        document.getElementById('fahrenheitInput').value = '';
        document.getElementById('kelvinInput').value = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('celsiusInput').value = '';
    document.getElementById('fahrenheitInput').value = '';
    document.getElementById('kelvinInput').value = '';
    document.getElementById('rankineInput').value = '';
}

// Add event listeners
document.getElementById('celsiusInput').addEventListener('input', function() {
    convertFromCelsius(parseFloat(this.value));
});

document.getElementById('fahrenheitInput').addEventListener('input', function() {
    convertFromFahrenheit(parseFloat(this.value));
});

document.getElementById('kelvinInput').addEventListener('input', function() {
    convertFromKelvin(parseFloat(this.value));
});

document.getElementById('rankineInput').addEventListener('input', function() {
    convertFromRankine(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
