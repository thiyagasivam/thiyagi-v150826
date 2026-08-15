<?php include 'header.php';?>

<?php
// Function to generate random password
function generatePassword($length, $includeUppercase, $includeLowercase, $includeNumbers, $includeSymbols) {
    $chars = '';
    $password = '';
    
    if ($includeUppercase) $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($includeLowercase) $chars .= 'abcdefghijklmnopqrstuvwxyz';
    if ($includeNumbers) $chars .= '0123456789';
    if ($includeSymbols) $chars .= '!@#$%^&*()_+-=[]{}|;:,.<>?';
    
    if (empty($chars)) {
        return 'Select at least one character type';
    }
    
    $charsLength = strlen($chars);
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $charsLength - 1)];
    }
    
    return $password;
}

// Handle form submission
$password = '';
$length = 12;
$includeUppercase = true;
$includeLowercase = true;
$includeNumbers = true;
$includeSymbols = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $length = isset($_POST['length']) ? (int)$_POST['length'] : 12;
    $includeUppercase = isset($_POST['uppercase']);
    $includeLowercase = isset($_POST['lowercase']);
    $includeNumbers = isset($_POST['numbers']);
    $includeSymbols = isset($_POST['symbols']);
    
    $password = generatePassword($length, $includeUppercase, $includeLowercase, $includeNumbers, $includeSymbols);
}
?>

    <title>2026 Inflation Calculator – Free & Accurate Price Conversion Tool</title>
<meta name="description" content="Use our free 2026 Inflation Calculator to compare purchasing power across years. Adjust prices for inflation, estimate future costs, and track economic trends easily!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .password-display {
            font-family: 'Courier New', monospace;
            letter-spacing: 1px;
        }
        .strength-meter {
            height: 6px;
            transition: width 0.3s ease;
        }
        .copy-btn:hover {
            transform: scale(1.05);
        }
        input[type="range"] {
            -webkit-appearance: none;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
        }
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            background: #4299e1;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Random Password Generator</h1>
            <p class="text-gray-600">Generate strong, secure passwords for your online accounts</p>
        </header>

        <main class="bg-white rounded-lg shadow-md p-6">
            <form method="POST" class="space-y-6">
                <!-- Password Display -->
                <div class="flex items-stretch">
                    <input type="text" 
                           id="password" 
                           value="<?php echo htmlspecialchars($password); ?>" 
                           readonly 
                           class="password-display flex-grow px-4 py-3 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50 font-medium text-gray-800">
                    <button type="button" 
                            onclick="copyPassword()" 
                            class="copy-btn bg-blue-500 hover:bg-blue-600 text-white px-4 rounded-r-lg transition duration-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                        <span class="ml-2 hidden sm:inline">Copy</span>
                    </button>
                </div>

                <!-- Password Strength -->
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Password Strength</span>
                        <span id="strength-text" class="text-sm font-medium"><?php echo $password ? 'Strong' : ''; ?></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div id="strength-meter" class="strength-meter bg-green-500 rounded-full h-2" style="width: <?php echo $password ? '100%' : '0%'; ?>"></div>
                    </div>
                </div>

                <!-- Length Slider -->
                <div>
                    <label for="length" class="block text-sm font-medium text-gray-700 mb-2">
                        Password Length: <span id="length-value"><?php echo $length; ?></span>
                    </label>
                    <input type="range" 
                           id="length" 
                           name="length" 
                           min="6" 
                           max="32" 
                           value="<?php echo $length; ?>" 
                           class="w-full" 
                           oninput="document.getElementById('length-value').textContent = this.value">
                </div>

                <!-- Character Options -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="uppercase" 
                               name="uppercase" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" 
                               <?php echo $includeUppercase ? 'checked' : ''; ?>>
                        <label for="uppercase" class="ml-2 block text-sm text-gray-700">
                            Uppercase Letters (A-Z)
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="lowercase" 
                               name="lowercase" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" 
                               <?php echo $includeLowercase ? 'checked' : ''; ?>>
                        <label for="lowercase" class="ml-2 block text-sm text-gray-700">
                            Lowercase Letters (a-z)
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="numbers" 
                               name="numbers" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" 
                               <?php echo $includeNumbers ? 'checked' : ''; ?>>
                        <label for="numbers" class="ml-2 block text-sm text-gray-700">
                            Numbers (0-9)
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" 
                               id="symbols" 
                               name="symbols" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" 
                               <?php echo $includeSymbols ? 'checked' : ''; ?>>
                        <label for="symbols" class="ml-2 block text-sm text-gray-700">
                            Symbols (!@#$%^&*)
                        </label>
                    </div>
                </div>

                <!-- Generate Button -->
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                    Generate New Password
                </button>
            </form>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Password Strength Tips</h2>
            <ul class="space-y-2 text-gray-700">
                <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Use at least 12 characters (longer is better)</span>
                </li>
                <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Include uppercase, lowercase, numbers and symbols</span>
                </li>
                <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Avoid common words or personal information</span>
                </li>
                <li class="flex items-start">
                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Use a unique password for each account</span>
                </li>
            </ul>
        </section>
    </div>

    <script>
        function copyPassword() {
            const passwordField = document.getElementById('password');
            passwordField.select();
            document.execCommand('copy');
            
            // Show copied notification
            const copyBtn = document.querySelector('.copy-btn');
            copyBtn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="ml-2 hidden sm:inline">Copied!</span>
            `;
            
            setTimeout(() => {
                copyBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                    <span class="ml-2 hidden sm:inline">Copy</span>
                `;
            }, 2000);
        }
    </script>
</body>
<?php include 'footer.php';?>
</html>
