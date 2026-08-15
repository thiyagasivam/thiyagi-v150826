<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Force Converter 2026 - Universal Force Calculator | Thiyagi</title>
<meta name="description" content="Free online force converter 2026. Convert between Newton, Pound-force, Kilogram-force, and Dyne instantly with accurate force conversion.">
<meta name="keywords" content="force converter 2026, newton pound-force, kilogram-force dyne, universal force calculator, physics converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Force Converter 2026 - Universal Force Calculator">
<meta property="og:description" content="Free online force converter 2026. Convert between all force units instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/force-converterl.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Force Converter 2026 - Universal Force Calculator">
<meta name="twitter:description" content="Free online force converter 2026. Convert between all force units instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fist-raised text-red-600 mr-3"></i>
                Universal Force Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between Newton, Pound-force, Kilogram-force, and Dyne instantly
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Newton -->
                <div class="space-y-2">
                    <label for="newtonInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-blue-600 mr-2"></i>Newton (N)
                    </label>
                    <input
                        type="number"
                        id="newtonInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="N"
                        step="any"
                    >
                </div>

                <!-- Pound-force -->
                <div class="space-y-2">
                    <label for="poundforceInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-dumbbell text-orange-600 mr-2"></i>Pound-force (lbf)
                    </label>
                    <input
                        type="number"
                        id="poundforceInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="lbf"
                        step="any"
                    >
                </div>

                <!-- Kilogram-force -->
                <div class="space-y-2">
                    <label for="kgforceInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-green-600 mr-2"></i>Kilogram-force (kgf)
                    </label>
                    <input
                        type="number"
                        id="kgforceInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="kgf"
                        step="any"
                    >
                </div>

                <!-- Dyne -->
                <div class="space-y-2">
                    <label for="dyneInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-atom text-purple-600 mr-2"></i>Dyne (dyn)
                    </label>
                    <input
                        type="number"
                        id="dyneInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="dyn"
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
            <!-- Common Forces -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Common Force Values
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Description</th>
                                <th class="text-center py-2">N</th>
                                <th class="text-center py-2">lbf</th>
                                <th class="text-center py-2">kgf</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Apple Weight</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0.225</td>
                                <td class="text-center">0.102</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Person Weight</td>
                                <td class="text-center">700</td>
                                <td class="text-center">157</td>
                                <td class="text-center">71.4</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Car Weight</td>
                                <td class="text-center">15000</td>
                                <td class="text-center">3372</td>
                                <td class="text-center">1530</td>
                            </tr>
                            <tr>
                                <td class="py-2">Rocket Thrust</td>
                                <td class="text-center">7500000</td>
                                <td class="text-center">1686000</td>
                                <td class="text-center">765000</td>
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
                        <strong>Newton to Pound-force:</strong><br>
                        lbf = N × 0.224809
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Newton to Kilogram-force:</strong><br>
                        kgf = N × 0.101972
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Newton to Dyne:</strong><br>
                        dyn = N × 100,000
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Pound-force to Newton:</strong><br>
                        N = lbf × 4.44822
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>Force Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Newton (N):</strong> SI unit of force</li>
                    <li><strong>Pound-force (lbf):</strong> Imperial unit</li>
                    <li><strong>Kilogram-force (kgf):</strong> Gravitational unit</li>
                    <li><strong>Dyne (dyn):</strong> CGS unit of force</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Engineering calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Physics problems</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Material testing</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Structural analysis</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Aerospace engineering</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Global Usage
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Newton:</strong> International standard</li>
                    <li><strong>Pound-force:</strong> USA, some industries</li>
                    <li><strong>Kilogram-force:</strong> Engineering applications</li>
                    <li><strong>Dyne:</strong> Scientific research</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertFromNewton(newton) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newton) && newton !== '') {
        const poundforce = newton * 0.224809;
        const kgforce = newton * 0.101972;
        const dyne = newton * 100000;
        
        document.getElementById('poundforceInput').value = poundforce.toFixed(6);
        document.getElementById('kgforceInput').value = kgforce.toFixed(6);
        document.getElementById('dyneInput').value = dyne.toFixed(2);
    } else {
        document.getElementById('poundforceInput').value = '';
        document.getElementById('kgforceInput').value = '';
        document.getElementById('dyneInput').value = '';
    }
    
    isUpdating = false;
}

function convertFromPoundforce(poundforce) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(poundforce) && poundforce !== '') {
        const newton = poundforce * 4.44822;
        const kgforce = newton * 0.101972;
        const dyne = newton * 100000;
        
        document.getElementById('newtonInput').value = newton.toFixed(6);
        document.getElementById('kgforceInput').value = kgforce.toFixed(6);
        document.getElementById('dyneInput').value = dyne.toFixed(2);
    } else {
        document.getElementById('newtonInput').value = '';
        document.getElementById('kgforceInput').value = '';
        document.getElementById('dyneInput').value = '';
    }
    
    isUpdating = false;
}

function convertFromKgforce(kgforce) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kgforce) && kgforce !== '') {
        const newton = kgforce * 9.80665;
        const poundforce = newton * 0.224809;
        const dyne = newton * 100000;
        
        document.getElementById('newtonInput').value = newton.toFixed(6);
        document.getElementById('poundforceInput').value = poundforce.toFixed(6);
        document.getElementById('dyneInput').value = dyne.toFixed(2);
    } else {
        document.getElementById('newtonInput').value = '';
        document.getElementById('poundforceInput').value = '';
        document.getElementById('dyneInput').value = '';
    }
    
    isUpdating = false;
}

function convertFromDyne(dyne) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(dyne) && dyne !== '') {
        const newton = dyne / 100000;
        const poundforce = newton * 0.224809;
        const kgforce = newton * 0.101972;
        
        document.getElementById('newtonInput').value = newton.toFixed(8);
        document.getElementById('poundforceInput').value = poundforce.toFixed(8);
        document.getElementById('kgforceInput').value = kgforce.toFixed(8);
    } else {
        document.getElementById('newtonInput').value = '';
        document.getElementById('poundforceInput').value = '';
        document.getElementById('kgforceInput').value = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('newtonInput').value = '';
    document.getElementById('poundforceInput').value = '';
    document.getElementById('kgforceInput').value = '';
    document.getElementById('dyneInput').value = '';
}

// Add event listeners
document.getElementById('newtonInput').addEventListener('input', function() {
    convertFromNewton(parseFloat(this.value));
});

document.getElementById('poundforceInput').addEventListener('input', function() {
    convertFromPoundforce(parseFloat(this.value));
});

document.getElementById('kgforceInput').addEventListener('input', function() {
    convertFromKgforce(parseFloat(this.value));
});

document.getElementById('dyneInput').addEventListener('input', function() {
    convertFromDyne(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
