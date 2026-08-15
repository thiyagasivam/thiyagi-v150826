<?php include 'header.php'; ?>
<title>Milligram per Liter to PPM Converter 2026 | Concentration Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert milligrams per liter to parts per million instantly with our 2026 accurate concentration converter. Perfect for water testing and chemical analysis.">
<meta name="keywords" content="mg/l to ppm converter 2026, concentration conversion calculator, milligram liter ppm converter, water testing, chemical analysis">

<div class="min-h-screen bg-gradient-to-br from-purple-50 to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-600 text-white rounded-full mb-6">
                <i class="fas fa-vial text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Milligram per Liter to PPM Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert milligrams per liter (mg/L) to parts per million (ppm) instantly. Essential for water quality testing and chemical analysis.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">mg/L</label>
                    <input type="number" 
                           id="mglInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                           placeholder="Enter mg/L"
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
                    <label class="block text-sm font-medium text-gray-700">Parts Per Million (ppm)</label>
                    <div class="relative">
                        <input type="text" 
                               id="ppmResult" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-medium"
                               readonly>
                        <button onclick="copyResult()" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-purple-600">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Live Conversion Display -->
            <div class="mt-8 p-4 bg-purple-50 rounded-lg">
                <div class="text-center">
                    <span class="text-2xl font-bold text-purple-800" id="liveConversion">1 mg/L = 1 ppm (for water)</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About mg/L</h3>
                <p class="text-gray-600 mb-4">
                    Milligrams per liter (mg/L) is a unit of concentration expressing the mass of a substance 
                    dissolved in a given volume of solution. Commonly used in water quality analysis.
                </p>
                <div class="bg-purple-50 p-3 rounded-lg">
                    <p class="text-sm text-purple-800"><strong>1 mg/L = 1 milligram per 1000 mL</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About PPM</h3>
                <p class="text-gray-600 mb-4">
                    Parts per million (ppm) is a dimensionless unit expressing the ratio of one part substance 
                    to one million parts of the solution. For water solutions, 1 mg/L equals 1 ppm.
                </p>
                <div class="bg-purple-50 p-3 rounded-lg">
                    <p class="text-sm text-purple-800"><strong>1 ppm = 1 part in 1,000,000 parts</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common mg/L to ppm Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-purple-50 rounded-lg">
                    <div class="font-bold text-purple-800">1 mg/L</div>
                    <div class="text-sm text-gray-600">1 ppm</div>
                </div>
                <div class="text-center p-3 bg-purple-50 rounded-lg">
                    <div class="font-bold text-purple-800">5 mg/L</div>
                    <div class="text-sm text-gray-600">5 ppm</div>
                </div>
                <div class="text-center p-3 bg-purple-50 rounded-lg">
                    <div class="font-bold text-purple-800">10 mg/L</div>
                    <div class="text-sm text-gray-600">10 ppm</div>
                </div>
                <div class="text-center p-3 bg-purple-50 rounded-lg">
                    <div class="font-bold text-purple-800">100 mg/L</div>
                    <div class="text-sm text-gray-600">100 ppm</div>
                </div>
            </div>
        </div>

        <!-- Important Note -->
        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6 mb-12">
            <div class="flex items-start">
                <i class="fas fa-exclamation-triangle text-yellow-600 mt-1 mr-3"></i>
                <div>
                    <h4 class="font-semibold text-yellow-800 mb-2">Important Note</h4>
                    <p class="text-yellow-700 text-sm">
                        This conversion assumes a water solution with density ≈ 1 g/mL. For other solvents or solutions with 
                        significantly different densities, the conversion factor may vary. Always verify for specific applications.
                    </p>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Water Quality Testing</h4>
                    <p class="text-sm text-blue-700">Measuring pollutants, minerals, and chemicals in drinking water</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Environmental Monitoring</h4>
                    <p class="text-sm text-green-700">Tracking contaminants in rivers, lakes, and groundwater</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Laboratory Analysis</h4>
                    <p class="text-sm text-purple-700">Chemical analysis and solution preparation</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Concentration Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                
                
            </div>
        </div>
    </div>
</div>

<script>
function convertMgLToPPM() {
    const mgl = parseFloat(document.getElementById('mglInput').value);
    
    if (isNaN(mgl) || mgl < 0) {
        document.getElementById('ppmResult').value = '';
        document.getElementById('liveConversion').textContent = '1 mg/L = 1 ppm (for water)';
        return;
    }
    
    // For water solutions: 1 mg/L = 1 ppm (density ≈ 1 g/mL)
    const ppm = mgl;
    
    document.getElementById('ppmResult').value = ppm.toFixed(6);
    document.getElementById('liveConversion').textContent = `${mgl} mg/L = ${ppm.toFixed(6)} ppm`;
}

function copyResult() {
    const result = document.getElementById('ppmResult');
    result.select();
    document.execCommand('copy');
    
    // Show success message
    const button = event.target;
    const original = button.innerHTML;
    button.innerHTML = '<i class="fas fa-check text-green-600"></i>';
    setTimeout(() => {
        button.innerHTML = original;
    }, 1000);
}

// Add event listener for real-time conversion
document.getElementById('mglInput').addEventListener('input', convertMgLToPPM);

// Initialize with default conversion
convertMgLToPPM();
</script>

<?php include 'footer.php'; ?>
