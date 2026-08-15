<?php include 'header.php';?>


    <title>Newton Meter to Inch Pound Converter 2026 - Torque Conversion Calculator</title>
    <meta name="description" content="Convert Newton meters to inch pounds with our free 2026 online calculator. Perfect for automotive, engineering, and mechanical applications.">
    <meta name="keywords" content="newton meter to inch pound converter 2026, torque converter, automotive calculator, mechanical engineering 2026">

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-slate-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-wrench text-gray-600 mr-3"></i>
                Newton Meter to Inch Pound Converter
            </h1>
            <p class="text-lg text-gray-600">Convert torque from Newton meters to inch pounds for automotive work</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Newton Meters Input -->
                <div class="space-y-4">
                    <label for="newtonMeters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-wrench text-gray-600 mr-2"></i>
                        Newton Meters (N·m)
                    </label>
                    <input type="number" id="newtonMeters" 
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-gray-500 focus:outline-none text-lg"
                           placeholder="Enter Newton meters value" 
                           oninput="convertToInchPounds()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">1 N·m</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">5 N·m</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">10 N·m</button>
                        <button onclick="setAndConvert(50)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">50 N·m</button>
                    </div>
                </div>

                <!-- Inch Pounds Output -->
                <div class="space-y-4">
                    <label for="inchPounds" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-cog text-slate-600 mr-2"></i>
                        Inch Pounds (in·lb)
                    </label>
                    <input type="number" id="inchPounds" 
                           class="w-full px-4 py-3 border-2 border-slate-300 rounded-lg focus:border-slate-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in inch pounds" 
                           oninput="convertToNewtonMeters()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> inch pounds = Newton meters × 8.8507</p>
                        <p><strong>Note:</strong> 1 N·m = 8.8507 in·lb</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-slate-500 text-white rounded-lg hover:bg-slate-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Newton Meters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-wrench text-gray-600 mr-2"></i>
                    About Newton Meters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The Newton meter is the SI unit of torque and moment.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard metric torque unit</li>
                        <li>Used in engineering worldwide</li>
                        <li>1 N·m = 1 kg·m²/s²</li>
                        <li>Symbol: N·m or Nm</li>
                    </ul>
                </div>
            </div>

            <!-- About Inch Pounds -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cog text-slate-600 mr-2"></i>
                    About Inch Pounds
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The inch pound is an imperial unit of torque commonly used in the US.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Common in automotive work</li>
                        <li>Used for small fasteners</li>
                        <li>1 in·lb = 1/12 foot pound</li>
                        <li>Symbol: in·lb or in-lb</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Torque Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Newton Meters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Inch Pounds</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 N·m</td>
                            <td class="border border-gray-300 px-4 py-2">8.85 in·lb</td>
                            <td class="border border-gray-300 px-4 py-2">Small screws</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5 N·m</td>
                            <td class="border border-gray-300 px-4 py-2">44.25 in·lb</td>
                            <td class="border border-gray-300 px-4 py-2">Electronics</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 N·m</td>
                            <td class="border border-gray-300 px-4 py-2">88.51 in·lb</td>
                            <td class="border border-gray-300 px-4 py-2">Small bolts</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">25 N·m</td>
                            <td class="border border-gray-300 px-4 py-2">221.27 in·lb</td>
                            <td class="border border-gray-300 px-4 py-2">Medium fasteners</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Mechanical Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Inch Pounds = Newton Meters × 8.8507</p>
                        <p>Newton Meters = Inch Pounds ÷ 8.8507</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Automotive fastener specs</li>
                        <li>• Electronics assembly</li>
                        <li>• Precision mechanical work</li>
                        <li>• Torque wrench settings</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToInchPounds() {
    const newtonMeters = parseFloat(document.getElementById('newtonMeters').value);
    if (!isNaN(newtonMeters)) {
        const inchPounds = newtonMeters * 8.8507;
        document.getElementById('inchPounds').value = inchPounds.toFixed(4);
    } else {
        document.getElementById('inchPounds').value = '';
    }
}

function convertToNewtonMeters() {
    const inchPounds = parseFloat(document.getElementById('inchPounds').value);
    if (!isNaN(inchPounds)) {
        const newtonMeters = inchPounds / 8.8507;
        document.getElementById('newtonMeters').value = newtonMeters.toFixed(6);
    } else {
        document.getElementById('newtonMeters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('newtonMeters').value = value;
    convertToInchPounds();
}

function swapValues() {
    const newtonMeters = document.getElementById('newtonMeters').value;
    const inchPounds = document.getElementById('inchPounds').value;
    
    document.getElementById('newtonMeters').value = inchPounds;
    document.getElementById('inchPounds').value = newtonMeters;
    
    if (inchPounds) {
        convertToInchPounds();
    }
}

function clearInputs() {
    document.getElementById('newtonMeters').value = '';
    document.getElementById('inchPounds').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
