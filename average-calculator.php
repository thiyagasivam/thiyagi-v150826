<?php include 'header.php';?>


<?php
// Enhanced Calculator Class
class AdvancedCalculator {
    
    public static function parseNumbers($input) {
        // Allow multiple separators: comma, space, newline, semicolon
        $input = preg_replace('/[^\d\.\-\+\s,;\n]/', '', $input);
        $numbers = preg_split('/[\s,;\n]+/', trim($input));
        $numbers = array_filter(array_map('floatval', $numbers), function($n) {
            return is_numeric($n);
        });
        return array_values($numbers);
    }
    
    public static function calculateMean($numbers) {
        if (empty($numbers)) return null;
        return array_sum($numbers) / count($numbers);
    }
    
    public static function calculateMedian($numbers) {
        if (empty($numbers)) return null;
        sort($numbers);
        $count = count($numbers);
        $middle = floor(($count - 1) / 2);
        
        if ($count % 2) {
            return $numbers[$middle];
        } else {
            return ($numbers[$middle] + $numbers[$middle + 1]) / 2;
        }
    }
    
    public static function calculateMode($numbers) {
        if (empty($numbers)) return null;
        
        $frequency = array_count_values($numbers);
        $maxFreq = max($frequency);
        $modes = array_keys($frequency, $maxFreq);
        
        if (count($modes) == count($numbers)) {
            return "No mode"; // All numbers appear equally
        }
        
        return $modes;
    }
    
    public static function calculateRange($numbers) {
        if (empty($numbers)) return null;
        return max($numbers) - min($numbers);
    }
    
    public static function calculateStandardDeviation($numbers) {
        if (empty($numbers) || count($numbers) < 2) return null;
        
        $mean = self::calculateMean($numbers);
        $variance = array_sum(array_map(function($x) use ($mean) {
            return pow($x - $mean, 2);
        }, $numbers)) / count($numbers);
        
        return sqrt($variance);
    }
    
    public static function calculateAll($input) {
        $numbers = self::parseNumbers($input);
        
        if (empty($numbers)) {
            return ['error' => 'Please enter valid numbers'];
        }
        
        return [
            'numbers' => $numbers,
            'count' => count($numbers),
            'sum' => array_sum($numbers),
            'mean' => self::calculateMean($numbers),
            'median' => self::calculateMedian($numbers),
            'mode' => self::calculateMode($numbers),
            'range' => self::calculateRange($numbers),
            'min' => min($numbers),
            'max' => max($numbers),
            'std_dev' => self::calculateStandardDeviation($numbers)
        ];
    }
}

// Handle form submission
$results = null;
$input = '';
$calculation_type = 'all';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['numbers'] ?? '';
    $calculation_type = $_POST['calc_type'] ?? 'all';
    $results = AdvancedCalculator::calculateAll($input);
}
?>

    <title>Advanced Statistics Calculator 2026 - Mean, Median, Mode & Standard Deviation</title>
    <meta name="description" content="Complete statistical calculator with mean, median, mode, range, standard deviation in 2026. Mobile-responsive design with instant calculations. Free online statistics tool for students & professionals!">
    <meta name="keywords" content="statistics calculator, mean calculator, median calculator, mode calculator, standard deviation, range calculator, average calculator, math tools 2026">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Advanced Statistics Calculator 2026 - Complete Math Tool">
    <meta property="og:description" content="Calculate mean, median, mode, range & standard deviation instantly. Mobile-responsive statistical calculator.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://thiyagi.com/average-calculator.php">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced Statistics Calculator 2026">
    <meta name="twitter:description" content="Complete statistical calculator with instant results and mobile-responsive design.">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Advanced Statistics Calculator",
        "description": "Complete statistical calculator for mean, median, mode, range, and standard deviation calculations",
        "url": "https://thiyagi.com/average-calculator.php",
        "applicationCategory": "EducationalApplication",
        "operatingSystem": "Any",
        "offers": {
            "@type": "Offer",
            "price": "0"
        }
    }
    </script>
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        'primary-dark': '#4f46e5',
                    }
                }
            }
        }
    </script>
    <style>
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .number-badge {
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .input-group {
            position: relative;
        }
        .char-counter {
            position: absolute;
            bottom: -20px;
            right: 0;
            font-size: 12px;
            color: #6b7280;
        }
        .copy-btn {
            transition: all 0.2s ease;
        }
        .copy-btn:hover {
            background-color: #10b981;
            transform: scale(1.05);
        }
        .process-animation {
            animation: pulse 0.5s ease-in-out;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    </style>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                📊 Advanced Statistics Calculator
            </h1>
            <p class="text-xl text-gray-600 mb-6">
                Calculate mean, median, mode, range & standard deviation instantly
            </p>
            <div class="flex flex-wrap justify-center gap-2 mb-4">
                <span class="px-3 py-1 bg-primary text-white text-sm rounded-full">Mean</span>
                <span class="px-3 py-1 bg-green-500 text-white text-sm rounded-full">Median</span>
                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Mode</span>
                <span class="px-3 py-1 bg-purple-500 text-white text-sm rounded-full">Range</span>
                <span class="px-3 py-1 bg-red-500 text-white text-sm rounded-full">Std Dev</span>
            </div>
        </div>

        <!-- Calculator Form -->
        <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 mb-8">
            <form method="POST" class="space-y-6">
                <div class="input-group">
                    <label for="numbers" class="block text-lg font-semibold text-gray-700 mb-2">
                        📝 Enter Numbers
                    </label>
                    <textarea 
                        name="numbers" 
                        id="numbers" 
                        rows="4"
                        class="w-full p-4 border-2 border-gray-300 rounded-lg focus:border-primary focus:outline-none resize-none text-lg"
                        placeholder="Enter numbers separated by commas, spaces, or new lines:&#10;Example: 10, 20, 30, 40, 50&#10;Or: 10 20 30 40 50&#10;Or one per line"
                        required
                        oninput="updateCharCount()"><?php echo htmlspecialchars($input); ?></textarea>
                    <div class="char-counter" id="charCount">0 characters</div>
                </div>
                
                <div class="grid md:grid-cols-3 gap-4">
                    <button type="submit" class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105 flex items-center justify-center">
                        🔢 Calculate All Stats
                    </button>
                    <button type="button" onclick="loadSample()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105 flex items-center justify-center">
                        📊 Load Sample Data
                    </button>
                    <button type="button" onclick="clearInput()" class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105 flex items-center justify-center">
                        🗑️ Clear Input
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Results Section -->
        <?php if ($results !== null && !isset($results['error'])): ?>
        <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 mb-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-800">📈 Statistical Results</h2>
                <button onclick="copyAllResults()" class="copy-btn bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-200">
                    📋 Copy Results
                </button>
            </div>
            
            <!-- Data Summary -->
            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                <h3 class="text-lg font-semibold mb-2">📊 Data Summary</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                    <div>
                        <div class="text-2xl font-bold text-primary"><?php echo $results['count']; ?></div>
                        <div class="text-sm text-gray-600">Numbers</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-green-500"><?php echo number_format($results['sum'], 2); ?></div>
                        <div class="text-sm text-gray-600">Sum</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-blue-500"><?php echo number_format($results['min'], 2); ?></div>
                        <div class="text-sm text-gray-600">Minimum</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-red-500"><?php echo number_format($results['max'], 2); ?></div>
                        <div class="text-sm text-gray-600">Maximum</div>
                    </div>
                </div>
            </div>

            <!-- Statistical Measures -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Mean -->
                <div class="stat-card bg-gradient-to-br from-primary to-primary-dark text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold">📊 Mean (Average)</h3>
                        <button onclick="copyToClipboard('<?php echo number_format($results['mean'], 6); ?>')" class="text-white hover:text-yellow-300">📋</button>
                    </div>
                    <div class="text-3xl font-bold mb-2"><?php echo number_format($results['mean'], 2); ?></div>
                    <div class="text-sm opacity-90">Arithmetic average of all values</div>
                </div>

                <!-- Median -->
                <div class="stat-card bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold">📍 Median</h3>
                        <button onclick="copyToClipboard('<?php echo number_format($results['median'], 6); ?>')" class="text-white hover:text-yellow-300">📋</button>
                    </div>
                    <div class="text-3xl font-bold mb-2"><?php echo number_format($results['median'], 2); ?></div>
                    <div class="text-sm opacity-90">Middle value when sorted</div>
                </div>

                <!-- Mode -->
                <div class="stat-card bg-gradient-to-br from-blue-500 to-blue-600 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold">🎯 Mode</h3>
                        <button onclick="copyToClipboard('<?php echo is_array($results['mode']) ? implode(', ', $results['mode']) : $results['mode']; ?>')" class="text-white hover:text-yellow-300">📋</button>
                    </div>
                    <div class="text-2xl font-bold mb-2">
                        <?php 
                        if (is_array($results['mode'])) {
                            echo implode(', ', array_map(function($m) { return number_format($m, 2); }, $results['mode']));
                        } else {
                            echo $results['mode'];
                        }
                        ?>
                    </div>
                    <div class="text-sm opacity-90">Most frequently occurring value(s)</div>
                </div>

                <!-- Range -->
                <div class="stat-card bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold">📏 Range</h3>
                        <button onclick="copyToClipboard('<?php echo number_format($results['range'], 6); ?>')" class="text-white hover:text-yellow-300">📋</button>
                    </div>
                    <div class="text-3xl font-bold mb-2"><?php echo number_format($results['range'], 2); ?></div>
                    <div class="text-sm opacity-90">Difference between max and min</div>
                </div>

                <!-- Standard Deviation -->
                <div class="stat-card bg-gradient-to-br from-red-500 to-red-600 text-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold">📐 Std Deviation</h3>
                        <button onclick="copyToClipboard('<?php echo number_format($results['std_dev'], 6); ?>')" class="text-white hover:text-yellow-300">📋</button>
                    </div>
                    <div class="text-3xl font-bold mb-2"><?php echo number_format($results['std_dev'], 2); ?></div>
                    <div class="text-sm opacity-90">Measure of data spread</div>
                </div>

                <!-- Numbers List -->
                <div class="stat-card bg-gradient-to-br from-gray-600 to-gray-700 text-white p-6 rounded-lg shadow-lg md:col-span-2 lg:col-span-1">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-lg font-semibold">🔢 Numbers Used</h3>
                        <button onclick="copyToClipboard('<?php echo implode(', ', $results['numbers']); ?>')" class="text-white hover:text-yellow-300">📋</button>
                    </div>
                    <div class="text-sm max-h-20 overflow-y-auto">
                        <?php foreach ($results['numbers'] as $i => $num): ?>
                            <span class="number-badge inline-block bg-white bg-opacity-20 rounded px-2 py-1 m-1">
                                <?php echo number_format($num, 2); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-sm opacity-90 mt-2">Sorted: <?php echo implode(', ', array_map(function($n) { return number_format($n, 1); }, $results['numbers'])); ?></div>
                </div>
            </div>
        </div>
        <?php elseif ($results !== null && isset($results['error'])): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-8">
            <strong>Error:</strong> <?php echo htmlspecialchars($results['error']); ?>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark px-6 py-4">
                <h2 class="text-2xl font-bold text-white">🚀 Calculator Features</h2>
            </div>
            <div class="p-6">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">📊</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Complete Statistics</h3>
                        <p class="text-gray-600 text-sm">Mean, median, mode, range & standard deviation</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">📱</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Mobile Responsive</h3>
                        <p class="text-gray-600 text-sm">Works perfectly on all devices</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">⚡</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Instant Results</h3>
                        <p class="text-gray-600 text-sm">Real-time calculations as you type</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">📋</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Copy Results</h3>
                        <p class="text-gray-600 text-sm">One-click copy for each statistic</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">🔢</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Flexible Input</h3>
                        <p class="text-gray-600 text-sm">Multiple separators supported</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">📈</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Visual Results</h3>
                        <p class="text-gray-600 text-sm">Color-coded statistical measures</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- How to Use Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-6 py-4">
                <h2 class="text-2xl font-bold text-white">📖 How to Use This Calculator</h2>
            </div>
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">🎯 Quick Steps:</h3>
                        <ol class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">1</span>
                                Enter your numbers in the text area
                            </li>
                            <li class="flex items-start">
                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">2</span>
                                Use commas, spaces, or new lines to separate numbers
                            </li>
                            <li class="flex items-start">
                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">3</span>
                                Click "Calculate All Stats" to get results
                            </li>
                            <li class="flex items-start">
                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">4</span>
                                Copy individual results or all at once
                            </li>
                        </ol>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">📊 Statistical Definitions:</h3>
                        <div class="space-y-3 text-sm">
                            <div class="border-l-4 border-primary pl-3">
                                <strong>Mean:</strong> The arithmetic average (sum ÷ count)
                            </div>
                            <div class="border-l-4 border-green-500 pl-3">
                                <strong>Median:</strong> The middle value when numbers are sorted
                            </div>
                            <div class="border-l-4 border-blue-500 pl-3">
                                <strong>Mode:</strong> The most frequently occurring number(s)
                            </div>
                            <div class="border-l-4 border-purple-500 pl-3">
                                <strong>Range:</strong> The difference between max and min values
                            </div>
                            <div class="border-l-4 border-red-500 pl-3">
                                <strong>Standard Deviation:</strong> Measures how spread out the data is
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Examples Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-green-600 px-6 py-4">
                <h2 class="text-2xl font-bold text-white">💡 Example Calculations</h2>
            </div>
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-3">📊 Example 1: Test Scores</h3>
                        <div class="bg-gray-50 p-4 rounded-lg mb-3">
                            <p class="font-mono text-sm">85, 92, 78, 90, 88, 95, 82</p>
                        </div>
                        <div class="text-sm space-y-1">
                            <p><strong>Mean:</strong> 87.14 (average score)</p>
                            <p><strong>Median:</strong> 88 (middle score)</p>
                            <p><strong>Range:</strong> 17 (95 - 78)</p>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-3">💰 Example 2: Sales Data</h3>
                        <div class="bg-gray-50 p-4 rounded-lg mb-3">
                            <p class="font-mono text-sm">1200, 1500, 1300, 1600, 1400, 1800, 1100</p>
                        </div>
                        <div class="text-sm space-y-1">
                            <p><strong>Mean:</strong> $1,414 (average sales)</p>
                            <p><strong>Median:</strong> $1,400 (middle value)</p>
                            <p><strong>Range:</strong> $700 (highest - lowest)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Enhanced Functionality -->
    <script>
        // Character counter
        function updateCharCount() {
            const input = document.getElementById('numbers');
            const counter = document.getElementById('charCount');
            const length = input.value.length;
            counter.textContent = `${length} characters`;
            
            if (length > 1000) {
                counter.classList.add('text-red-500');
                counter.classList.remove('text-gray-500');
            } else {
                counter.classList.add('text-gray-500');
                counter.classList.remove('text-red-500');
            }
        }

        // Load sample data
        function loadSample() {
            const samples = [
                "85, 92, 78, 90, 88, 95, 82, 76, 89, 93",
                "1200, 1500, 1300, 1600, 1400, 1800, 1100, 1250, 1750, 1350",
                "23.5, 24.1, 22.8, 25.3, 23.9, 24.7, 22.2, 25.8, 23.3, 24.4",
                "5 10 15 20 25 30 35 40 45 50",
                "100\n200\n150\n300\n250\n180\n220\n280\n190\n240"
            ];
            
            const randomSample = samples[Math.floor(Math.random() * samples.length)];
            document.getElementById('numbers').value = randomSample;
            updateCharCount();
        }

        // Clear input
        function clearInput() {
            document.getElementById('numbers').value = '';
            updateCharCount();
        }

        // Copy to clipboard function
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                showCopyFeedback();
            }).catch(function(err) {
                console.error('Could not copy text: ', err);
            });
        }

        // Copy all results
        function copyAllResults() {
            <?php if ($results && !isset($results['error'])): ?>
            const resultsText = `Statistical Analysis Results:
Numbers: <?php echo implode(', ', $results['numbers']); ?>
Count: <?php echo $results['count']; ?>
Sum: <?php echo number_format($results['sum'], 2); ?>
Mean: <?php echo number_format($results['mean'], 6); ?>
Median: <?php echo number_format($results['median'], 6); ?>
Mode: <?php echo is_array($results['mode']) ? implode(', ', $results['mode']) : $results['mode']; ?>
Range: <?php echo number_format($results['range'], 6); ?>
Minimum: <?php echo number_format($results['min'], 2); ?>
Maximum: <?php echo number_format($results['max'], 2); ?>
Standard Deviation: <?php echo number_format($results['std_dev'], 6); ?>`;
            
            copyToClipboard(resultsText);
            <?php endif; ?>
        }

        // Show copy feedback
        function showCopyFeedback() {
            // Create temporary feedback element
            const feedback = document.createElement('div');
            feedback.textContent = '✓ Copied to clipboard!';
            feedback.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transition-all duration-300';
            document.body.appendChild(feedback);
            
            // Remove feedback after 2 seconds
            setTimeout(() => {
                feedback.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(feedback);
                }, 300);
            }, 2000);
        }

        // Real-time validation
        document.getElementById('numbers').addEventListener('input', function() {
            updateCharCount();
            
            // Basic validation feedback
            const value = this.value.trim();
            if (value) {
                // Remove invalid characters and show preview
                const numbers = value.replace(/[^\d\.\-\+\s,;\n]/g, '');
                if (numbers !== value) {
                    // Could show a subtle hint about invalid characters
                }
            }
        });

        // Initialize character counter
        document.addEventListener('DOMContentLoaded', function() {
            updateCharCount();
        });

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl/Cmd + Enter to calculate
            if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
                e.preventDefault();
                document.querySelector('form').submit();
            }
            
            // Ctrl/Cmd + K to clear
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                clearInput();
            }
        });

        // Mobile-friendly touch interactions
        document.querySelectorAll('.stat-card').forEach(card => {
            card.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.98)';
            });
            
            card.addEventListener('touchend', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Auto-focus on input for better UX
        window.addEventListener('load', function() {
            const input = document.getElementById('numbers');
            if (input && !input.value) {
                input.focus();
            }
        });
    </script>

</body>

<?php include 'footer.php';?>

</html>
