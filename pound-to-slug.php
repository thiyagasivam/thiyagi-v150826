<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pound to Slug Converter 2026 - lb to slug Mass Calculator | Thiyagi</title>
<meta name="description" content="Free online Pound to Slug converter 2026. Convert lb to slug and slug to lb instantly with accurate mass conversion.">
<meta name="keywords" content="pound to slug converter 2026, lb to slug, mass conversion, engineering units calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pound to Slug Converter 2026 - lb to slug Mass Calculator">
<meta property="og:description" content="Free online Pound to Slug converter 2026. Convert lb to slug and slug to lb instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pound-to-slug.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pound to Slug Converter 2026 - lb to slug Mass Calculator">
<meta property="twitter:description" content="Free online Pound to Slug converter 2026. Convert lb to slug and slug to lb instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale text-slate-600 mr-3"></i>
                Pound to Slug Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pounds (lb) and slugs for engineering calculations, physics problems, mechanics, and imperial unit mass measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pound Input -->
                <div class="space-y-4">
                    <label for="poundInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-slate-600 mr-2"></i>Pounds (lb)
                    </label>
                    <input
                        type="number"
                        id="poundInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter pounds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Imperial unit of force/weight
                    </div>
                </div>

                <!-- Slug Input -->
                <div class="space-y-4">
                    <label for="slugInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-gray-600 mr-2"></i>Slugs
                    </label>
                    <input
                        type="number"
                        id="slugInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter slugs"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Imperial unit of mass
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-slate-50 to-gray-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-slate-500 hover:bg-slate-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Mass Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-slate-600 mr-3"></i>Mass Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Pounds</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Slugs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">32.17 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 slug</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">64.34 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 slugs</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">160.85 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 slugs</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">321.7 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 slugs</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,609 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 slugs</td>
                            </tr>
                            <tr>
                                <td class="py-2">3,217 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 slugs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-slate-600 mr-3"></i>Engineering Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Mechanical Systems:</strong><br>
                        • Car mass: 60-120 slugs (1,930-3,860 lb)<br>
                        • Engine block: 5-15 slugs (160-480 lb)<br>
                        • Motorcycle: 8-20 slugs (260-640 lb)<br>
                        • Boat hull: 30-200 slugs (965-6,435 lb)
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <strong>Structural Engineering:</strong><br>
                        • Steel beam: 1-10 slugs per foot<br>
                        • Concrete slab: 3-8 slugs per sq ft<br>
                        • Building materials: 0.1-20 slugs<br>
                        • Bridge components: 50-500 slugs
                    </div>
                    <div class="bg-zinc-50 p-3 rounded">
                        <strong>Physics Calculations:</strong><br>
                        • Newton's 2nd law: F = ma<br>
                        • Momentum: p = mv<br>
                        • Kinetic energy: KE = ½mv²<br>
                        • Inertia calculations
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-slate-600 mr-2"></i>Unit System
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>lb:</strong> Pound-force (weight)</li>
                    <li><strong>slug:</strong> Pound-mass (mass)</li>
                    <li><strong>Conversion:</strong> 1 slug = 32.174 lb</li>
                    <li><strong>Gravity:</strong> 32.174 ft/s² standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>lb for weight/force</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>slug for mass calculations</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Remember F = ma relationship</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Standard gravity = 32.174 ft/s²</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-tools text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> Structural analysis</li>
                    <li><strong>Physics:</strong> Dynamics problems</li>
                    <li><strong>Automotive:</strong> Vehicle calculations</li>
                    <li><strong>Aerospace:</strong> Mass properties</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPoundToSlug(pound) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pound) && pound !== '') {
        // 1 slug = 32.174 pounds-force (weight)
        // or 1 pound = 1/32.174 slugs
        const slug = pound / 32.174;
        document.getElementById('slugInput').value = slug.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${pound} lb = ${slug.toFixed(4)} slugs</strong>
        `;
    } else {
        document.getElementById('slugInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertSlugToPound(slug) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(slug) && slug !== '') {
        // 1 slug = 32.174 pounds-force
        const pound = slug * 32.174;
        document.getElementById('poundInput').value = pound.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${slug} slugs = ${pound.toFixed(3)} lb</strong>
        `;
    } else {
        document.getElementById('poundInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('poundInput').value = '';
    document.getElementById('slugInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const poundValue = document.getElementById('poundInput').value;
    const slugValue = document.getElementById('slugInput').value;
    
    document.getElementById('poundInput').value = slugValue;
    document.getElementById('slugInput').value = poundValue;
    
    if (slugValue) {
        convertPoundToSlug(parseFloat(slugValue));
    } else if (poundValue) {
        convertSlugToPound(parseFloat(poundValue));
    }
}

// Add event listeners
document.getElementById('poundInput').addEventListener('input', function() {
    convertPoundToSlug(parseFloat(this.value));
});

document.getElementById('slugInput').addEventListener('input', function() {
    convertSlugToPound(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
