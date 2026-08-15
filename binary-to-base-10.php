<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Binary to Base 10 Converter 2026 - Binary to Decimal Calculator | Thiyagi</title>
<meta name="description" content="Free online Binary to Base 10 converter 2026. Convert binary to decimal and decimal to binary instantly with accurate number system conversion for programming.">
<meta name="keywords" content="binary to base 10 converter 2026, binary to decimal, number system converter, programming tools, computer science, digital systems">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Binary to Base 10 Converter 2026 - Binary to Decimal Calculator">
<meta property="og:description" content="Free online Binary to Base 10 converter 2026. Convert binary to decimal and decimal to binary instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/binary-to-base-10.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Binary to Base 10 Converter 2026 - Binary to Decimal Calculator">
<meta name="twitter:description" content="Free online Binary to Base 10 converter 2026. Convert binary to decimal and decimal to binary instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-code text-green-600 mr-3"></i>
                Binary to Base 10 Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between binary and decimal number systems for programming, computer science, and digital electronics
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Binary Input -->
                <div class="space-y-4">
                    <label for="binaryInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microchip text-green-600 mr-2"></i>Binary (Base 2)
                    </label>
                    <input
                        type="text"
                        id="binaryInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl font-mono"
                        placeholder="Enter binary number (e.g., 1010)"
                        pattern="[01]*"
                    >
                    <div class="text-sm text-gray-500">
                        Only 0 and 1 digits allowed
                    </div>
                </div>

                <!-- Decimal Input -->
                <div class="space-y-4">
                    <label for="decimalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-calculator text-emerald-600 mr-2"></i>Decimal (Base 10)
                    </label>
                    <input
                        type="number"
                        id="decimalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter decimal number"
                        min="0"
                        step="1"
                    >
                    <div class="text-sm text-gray-500">
                        Non-negative integers only
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
            </div>

            <!-- Calculation Steps -->
            <div class="mt-6 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg">
                <div id="steps" class="text-sm text-gray-700">
                    Calculation steps will appear here
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
                    class="flex-1 min-w-[140px] bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Number System Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Number System Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Binary</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Decimal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2 font-mono">0</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">1</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">10</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">11</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">100</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">101</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">110</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">111</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">7</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 font-mono">1000</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8</td>
                            </tr>
                            <tr>
                                <td class="py-2 font-mono">1111</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Powers of 2 Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-superscript text-green-600 mr-3"></i>Powers of 2 Reference
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Binary Place Values:</strong><br>
                        • 2⁰ = 1 (rightmost bit)<br>
                        • 2¹ = 2<br>
                        • 2² = 4<br>
                        • 2³ = 8<br>
                        • 2⁴ = 16<br>
                        • 2⁵ = 32<br>
                        • 2⁶ = 64<br>
                        • 2⁷ = 128
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Common Binary Values:</strong><br>
                        • 8-bit max: 11111111 = 255<br>
                        • 16-bit max: 65,535<br>
                        • 32-bit max: 4,294,967,295<br>
                        • 1 KB = 1024 = 10000000000₂
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Programming Applications:</strong><br>
                        • Bit manipulation<br>
                        • Memory addressing<br>
                        • Digital logic design<br>
                        • Network protocols
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Number Systems
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Binary:</strong> Base 2 (0, 1)</li>
                    <li><strong>Decimal:</strong> Base 10 (0-9)</li>
                    <li><strong>Conversion:</strong> Positional notation</li>
                    <li><strong>Usage:</strong> Computer systems</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Conversion Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Binary uses powers of 2</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Right-to-left place values</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Only 0 and 1 in binary</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Practice with small numbers</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Programming:</strong> Data representation</li>
                    <li><strong>Electronics:</strong> Digital circuits</li>
                    <li><strong>Computing:</strong> Machine language</li>
                    <li><strong>Networking:</strong> Address systems</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function isValidBinary(binary) {
    return /^[01]+$/.test(binary) && binary.length > 0;
}

function convertBinaryToDecimal(binary) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (binary === '') {
        document.getElementById('decimalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('steps').innerHTML = 'Calculation steps will appear here';
        isUpdating = false;
        return;
    }
    
    if (!isValidBinary(binary)) {
        document.getElementById('result').innerHTML = '<span class="text-red-600">Invalid binary number! Use only 0 and 1.</span>';
        document.getElementById('steps').innerHTML = '';
        isUpdating = false;
        return;
    }
    
    let decimal = 0;
    let stepsHtml = '<strong>Binary to Decimal Conversion:</strong><br>';
    stepsHtml += `Binary: ${binary}<br><br>`;
    stepsHtml += 'Calculation: ';
    
    for (let i = 0; i < binary.length; i++) {
        const bit = parseInt(binary[binary.length - 1 - i]);
        const power = i;
        const value = bit * Math.pow(2, power);
        decimal += value;
        
        if (bit === 1) {
            stepsHtml += `${bit} × 2^${power}`;
            if (i < binary.length - 1) {
                stepsHtml += ' + ';
            }
        }
    }
    
    stepsHtml += `<br>= ${decimal}`;
    
    document.getElementById('decimalInput').value = decimal;
    document.getElementById('result').innerHTML = `
        <i class="fas fa-equals text-green-600 mr-2"></i>
        <strong>${binary}₂ = ${decimal}₁₀</strong>
    `;
    document.getElementById('steps').innerHTML = stepsHtml;
    
    isUpdating = false;
}

function convertDecimalToBinary(decimal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (decimal === '' || isNaN(decimal)) {
        document.getElementById('binaryInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('steps').innerHTML = 'Calculation steps will appear here';
        isUpdating = false;
        return;
    }
    
    const num = parseInt(decimal);
    if (num < 0) {
        document.getElementById('result').innerHTML = '<span class="text-red-600">Please enter a non-negative integer.</span>';
        document.getElementById('steps').innerHTML = '';
        isUpdating = false;
        return;
    }
    
    if (num === 0) {
        document.getElementById('binaryInput').value = '0';
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${num}₁₀ = 0₂</strong>
        `;
        document.getElementById('steps').innerHTML = '<strong>Decimal to Binary Conversion:</strong><br>0 in decimal = 0 in binary';
        isUpdating = false;
        return;
    }
    
    const binary = num.toString(2);
    
    let stepsHtml = '<strong>Decimal to Binary Conversion:</strong><br>';
    stepsHtml += `Decimal: ${num}<br><br>`;
    stepsHtml += 'Division by 2 method:<br>';
    
    let tempNum = num;
    let divisions = [];
    while (tempNum > 0) {
        const remainder = tempNum % 2;
        const quotient = Math.floor(tempNum / 2);
        divisions.push({quotient, remainder, number: tempNum});
        tempNum = quotient;
    }
    
    divisions.forEach(div => {
        stepsHtml += `${div.number} ÷ 2 = ${div.quotient} remainder ${div.remainder}<br>`;
    });
    
    stepsHtml += `<br>Reading remainders from bottom to top: ${binary}`;
    
    document.getElementById('binaryInput').value = binary;
    document.getElementById('result').innerHTML = `
        <i class="fas fa-equals text-green-600 mr-2"></i>
        <strong>${num}₁₀ = ${binary}₂</strong>
    `;
    document.getElementById('steps').innerHTML = stepsHtml;
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('binaryInput').value = '';
    document.getElementById('decimalInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('steps').innerHTML = 'Calculation steps will appear here';
}

function swapValues() {
    const binaryValue = document.getElementById('binaryInput').value;
    const decimalValue = document.getElementById('decimalInput').value;
    
    document.getElementById('binaryInput').value = decimalValue;
    document.getElementById('decimalInput').value = binaryValue;
    
    if (decimalValue) {
        convertBinaryToDecimal(decimalValue);
    } else if (binaryValue) {
        convertDecimalToBinary(binaryValue);
    }
}

// Add event listeners
document.getElementById('binaryInput').addEventListener('input', function() {
    convertBinaryToDecimal(this.value);
});

document.getElementById('decimalInput').addEventListener('input', function() {
    convertDecimalToBinary(this.value);
});

// Restrict binary input to only 0 and 1
document.getElementById('binaryInput').addEventListener('keypress', function(e) {
    if (e.key !== '0' && e.key !== '1' && e.key !== 'Backspace' && e.key !== 'Delete' && e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') {
        e.preventDefault();
    }
});
</script>

<?php include 'footer.php'; ?>
