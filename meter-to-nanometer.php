<?php include 'header.php';?>


    <title>Meter to Nanometer Converter 2026 - Free Online Calculator</title>
    <meta name="description" content="Convert meters to nanometers with our free 2026 online calculator. Instant conversion between meters and nanometers with accurate results.">
    <meta name="keywords" content="meter to nanometer converter 2026, length converter, meter conversion, nanometer calculator 2026">
<body>ml>
    <title>Meter to Nanometer Converter - Length Conversion Calculator</title>
    <meta name="description" content="Convert meters to nanometers with our free online calculator. Accurate length conversion between meters and nanometers for scientific calculations.">
    <meta name="keywords" content="meter to nanometer, m to nm, length converter, nanometer calculator">

<div class="min-h-screen bg-gradient-to-br from-purple-50 to-pink-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Meter to Nanometer Converter</h1>
            <p class="text-lg text-gray-600">Convert meters to nanometers for precise scientific measurements</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Meters Input -->
                <div class="space-y-2">
                    <label for="meters" class="block text-sm font-medium text-gray-700">
                        Meters (m)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="meters"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Enter meters"
                            step="any"
                            oninput="convertToNanometers()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">m</span>
                    </div>
                </div>

                <!-- Nanometers Output -->
                <div class="space-y-2">
                    <label for="nanometers" class="block text-sm font-medium text-gray-700">
                        Nanometers (nm)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="nanometers"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                            placeholder="Nanometers result"
                            step="any"
                            oninput="convertToMeters()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">nm</span>
                    </div>
                </div>
            </div>

            <!-- Clear Button -->
            <div class="text-center mt-6">
                <button
                    onclick="clearInputs()"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300"
                >
                    Clear
                </button>
            </div>
        </div>

        <!-- Quick Convert Buttons -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Quick Convert</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <button onclick="setAndConvert(0.000001)" class="bg-purple-100 hover:bg-purple-200 p-3 rounded-lg transition duration-300">
                    1 μm
                </button>
                <button onclick="setAndConvert(0.001)" class="bg-purple-100 hover:bg-purple-200 p-3 rounded-lg transition duration-300">
                    1 mm
                </button>
                <button onclick="setAndConvert(0.01)" class="bg-purple-100 hover:bg-purple-200 p-3 rounded-lg transition duration-300">
                    1 cm
                </button>
                <button onclick="setAndConvert(1)" class="bg-purple-100 hover:bg-purple-200 p-3 rounded-lg transition duration-300">
                    1 m
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Meter to Nanometer Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    The conversion between meters and nanometers is crucial in nanotechnology, physics, chemistry, 
                    and materials science where extremely small measurements are required.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 meter = 1,000,000,000 nanometers (10⁹ nm)</strong><br>
                    Nanometers = Meters × 1,000,000,000
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 meter = 1 × 10⁹ nanometers</li>
                    <li>0.001 m (1 mm) = 1,000,000 nm</li>
                    <li>0.01 m (1 cm) = 10,000,000 nm</li>
                    <li>0.000001 m (1 μm) = 1,000 nm</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Scale Reference</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>DNA double helix width: ~2.5 nm</li>
                    <li>Gold atom diameter: ~0.288 nm</li>
                    <li>Visible light wavelength: 380-750 nm</li>
                    <li>Virus size: typically 20-400 nm</li>
                    <li>Semiconductor processes: 5-14 nm</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Nanotechnology and materials science</li>
                    <li>Semiconductor manufacturing</li>
                    <li>Optical and photonic applications</li>
                    <li>Molecular biology and genetics</li>
                    <li>Surface roughness measurements</li>
                    <li>Thin film thickness analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToNanometers() {
    const meters = parseFloat(document.getElementById('meters').value);
    if (!isNaN(meters)) {
        const nanometers = meters * 1000000000;
        document.getElementById('nanometers').value = nanometers.toFixed(2);
    } else {
        document.getElementById('nanometers').value = '';
    }
}

function convertToMeters() {
    const nanometers = parseFloat(document.getElementById('nanometers').value);
    if (!isNaN(nanometers)) {
        const meters = nanometers / 1000000000;
        document.getElementById('meters').value = meters.toExponential(6);
    } else {
        document.getElementById('meters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('meters').value = value;
    convertToNanometers();
}

function clearInputs() {
    document.getElementById('meters').value = '';
    document.getElementById('nanometers').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
