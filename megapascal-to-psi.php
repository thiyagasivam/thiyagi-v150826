<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Megapascal to PSI Converter 2026 | Pressure Conversion Tool | Free Calculator';
$description = 'Convert megapascals to pounds per square inch instantly with our 2026 accurate pressure converter. Perfect for engineering and industrial applications.';
$keywords = 'megapascal to psi converter 2026, pressure conversion calculator, mpa psi converter, engineering pressure, industrial calculator';
$canonical = 'https://www.thiyagi.com/megapascal-to-psi';

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

<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-indigo-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-600 text-white rounded-full mb-6">
                <i class="fas fa-compress-alt text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Megapascal to PSI Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert megapascals to pounds per square inch instantly. Perfect for engineering, hydraulics, and high-pressure applications.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Megapascals (MPa)</label>
                    <input type="number" 
                           id="mpaInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                           placeholder="Enter megapascals"
                           step="any">
                </div>

                <!-- Arrow -->
                <div class="flex justify-center">
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <i class="fas fa-arrow-right text-indigo-600 text-xl"></i>
                    </div>
                </div>

                <!-- Output -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">PSI (lbs/in²)</label>
                    <div class="relative">
                        <input type="text" 
                               id="psiResult" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-medium"
                               readonly>
                        <button onclick="copyResult()" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-indigo-600">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Live Conversion Display -->
            <div class="mt-8 p-4 bg-indigo-50 rounded-lg">
                <div class="text-center">
                    <span class="text-2xl font-bold text-indigo-800" id="liveConversion">1 MPa = 145.038 PSI</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Megapascals</h3>
                <p class="text-gray-600 mb-4">
                    The megapascal (MPa) is a metric unit of pressure equal to one million pascals. 
                    It's commonly used in engineering, materials science, and high-pressure applications.
                </p>
                <div class="bg-indigo-50 p-3 rounded-lg">
                    <p class="text-sm text-indigo-800"><strong>1 MPa = 1,000,000 Pa</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About PSI</h3>
                <p class="text-gray-600 mb-4">
                    PSI (pounds per square inch) is an imperial unit of pressure commonly used in the United States 
                    for tire pressure, hydraulic systems, and industrial applications.
                </p>
                <div class="bg-indigo-50 p-3 rounded-lg">
                    <p class="text-sm text-indigo-800"><strong>1 PSI = 6.895 kPa</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common MPa to PSI Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-indigo-50 rounded-lg">
                    <div class="font-bold text-indigo-800">0.1 MPa</div>
                    <div class="text-sm text-gray-600">14.5 PSI</div>
                </div>
                <div class="text-center p-3 bg-indigo-50 rounded-lg">
                    <div class="font-bold text-indigo-800">1 MPa</div>
                    <div class="text-sm text-gray-600">145 PSI</div>
                </div>
                <div class="text-center p-3 bg-indigo-50 rounded-lg">
                    <div class="font-bold text-indigo-800">10 MPa</div>
                    <div class="text-sm text-gray-600">1,450 PSI</div>
                </div>
                <div class="text-center p-3 bg-indigo-50 rounded-lg">
                    <div class="font-bold text-indigo-800">100 MPa</div>
                    <div class="text-sm text-gray-600">14,504 PSI</div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Hydraulic Systems</h4>
                    <p class="text-sm text-blue-700">High-pressure hydraulic equipment and machinery</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Materials Testing</h4>
                    <p class="text-sm text-green-700">Tensile strength and compression testing</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Engineering</h4>
                    <p class="text-sm text-purple-700">Structural analysis and pressure vessel design</p>
                </div>
            </div>
        </div>

        <!-- Pressure Ranges -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Typical Pressure Ranges</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-3">Low Pressure (0-1 MPa)</h4>
                    <div class="space-y-1 text-sm text-yellow-700">
                        <div>• Tire pressure: 0.2-0.3 MPa</div>
                        <div>• Water systems: 0.3-0.8 MPa</div>
                        <div>• HVAC systems: 0.1-0.5 MPa</div>
                    </div>
                </div>
                <div class="p-4 bg-red-50 rounded-lg">
                    <h4 class="font-semibold text-red-800 mb-3">High Pressure (1-100+ MPa)</h4>
                    <div class="space-y-1 text-sm text-red-700">
                        <div>• Hydraulic presses: 10-50 MPa</div>
                        <div>• High-pressure cleaning: 5-20 MPa</div>
                        <div>• Industrial processes: 50-200 MPa</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Pressure Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="psi-to-megapascal.php" class="p-3 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">
                    <div class="text-sm font-medium text-indigo-800">PSI to MPa</div>
                </a>
                <a href="kpa-to-psi.php" class="p-3 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">
                    <div class="text-sm font-medium text-indigo-800">kPa to PSI</div>
                </a>
                <a href="bar-to-psi.php" class="p-3 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">
                    <div class="text-sm font-medium text-indigo-800">Bar to PSI</div>
                </a>
                <a href="pascal-to-psi.php" class="p-3 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition-colors">
                    <div class="text-sm font-medium text-indigo-800">Pascal to PSI</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertMPaToPSI() {
    const mpa = parseFloat(document.getElementById('mpaInput').value);
    
    if (isNaN(mpa) || mpa < 0) {
        document.getElementById('psiResult').value = '';
        document.getElementById('liveConversion').textContent = '1 MPa = 145.038 PSI';
        return;
    }
    
    // 1 MPa = 145.037738 PSI
    const psi = mpa * 145.037738;
    
    document.getElementById('psiResult').value = psi.toFixed(3);
    document.getElementById('liveConversion').textContent = `${mpa} MPa = ${psi.toFixed(3)} PSI`;
}

function copyResult() {
    const result = document.getElementById('psiResult');
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
document.getElementById('mpaInput').addEventListener('input', convertMPaToPSI);

// Initialize with default conversion
convertMPaToPSI();
</script>

<?php include 'footer.php'; ?>
