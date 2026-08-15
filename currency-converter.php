
<?php 
// Currency Converter - Page specific head content
$page_title = "Currency Converter | Real-time Exchange Rates | Free Currency Calculator";
$page_description = "Convert currencies instantly with real-time exchange rates. Support for 50+ currencies including USD, EUR, GBP, INR. Free online currency converter tool.";
$page_keywords = "currency converter, exchange rates, currency calculator, real time rates, money converter, forex converter, international currency";
$canonical_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Include your header
include('header.php'); 
?>

<!-- Enhanced Meta Tags for Currency Converter -->
<title>Currency Converter | Real-time Exchange Rates | Free Currency Calculator</title>
<meta name="description" content="Convert currencies instantly with real-time exchange rates. Support for 50+ currencies including USD, EUR, GBP, INR. Free online currency converter tool.">
<meta name="keywords" content="currency converter, exchange rates, currency calculator, real time rates, money converter, forex converter, international currency">
<meta name="author" content="Thiyagi">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/currency-converter">
<meta property="og:title" content="Currency Converter | Real-time Exchange Rates | Free Currency Calculator">
<meta property="og:description" content="Convert currencies instantly with real-time exchange rates. Support for 50+ currencies including USD, EUR, GBP, INR. Free online currency converter tool.">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta property="og:locale" content="en_US">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.thiyagi.com/currency-converter">
<meta property="twitter:title" content="Currency Converter | Real-time Exchange Rates | Free Currency Calculator">
<meta property="twitter:description" content="Convert currencies instantly with real-time exchange rates. Support for 50+ currencies including USD, EUR, GBP, INR. Free online currency converter tool.">
<meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
<meta property="twitter:creator" content="@thiyagi">

<!-- Additional Meta Tags -->
<meta name="theme-color" content="#00C851">
<meta name="msapplication-TileColor" content="#00C851">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Currency Converter">

<!-- Canonical URL -->

<!-- JSON-LD Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "Currency Converter",
    "description": "Convert currencies instantly with real-time exchange rates. Support for 50+ currencies including USD, EUR, GBP, INR.",
    "url": "https://www.thiyagi.com/currency-converter",
    "applicationCategory": "Finance Tool",
    "operatingSystem": "Web Browser",
    "permissions": "Free to use",
    "author": {
        "@type": "Person",
        "name": "Thiyagi"
    },
    "provider": {
        "@type": "Organization",
        "name": "Thiyagi.com",
        "url": "https://www.thiyagi.com"
    },
    "dateModified": "2026-08-22",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    }
}
</script>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="./" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
            <span class="text-gray-600">Currency Converter</span>
        </div>
    </div>
</nav>

<?php
// Set default values
$amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 1;
$from_currency = isset($_POST['from_currency']) ? $_POST['from_currency'] : 'USD';
$to_currency = isset($_POST['to_currency']) ? $_POST['to_currency'] : 'EUR';
$result = '';
$error = '';

// Countries with flags (Top 50 + Major currencies)
$currencies = [
    'USD' => ['name' => 'US Dollar', 'flag' => '🇺🇸'],
    'EUR' => ['name' => 'Euro', 'flag' => '🇪🇺'],
    'JPY' => ['name' => 'Japanese Yen', 'flag' => '🇯🇵'],
    'GBP' => ['name' => 'British Pound', 'flag' => '🇬🇧'],
    'AUD' => ['name' => 'Australian Dollar', 'flag' => '🇦🇺'],
    'CAD' => ['name' => 'Canadian Dollar', 'flag' => '🇨🇦'],
    'CHF' => ['name' => 'Swiss Franc', 'flag' => '🇨🇭'],
    'CNY' => ['name' => 'Chinese Yuan', 'flag' => '🇨🇳'],
    'INR' => ['name' => 'Indian Rupee', 'flag' => '🇮🇳'],
    'SGD' => ['name' => 'Singapore Dollar', 'flag' => '🇸🇬'],
    'MYR' => ['name' => 'Malaysian Ringgit', 'flag' => '🇲🇾'],
    'THB' => ['name' => 'Thai Baht', 'flag' => '🇹🇭'],
    'IDR' => ['name' => 'Indonesian Rupiah', 'flag' => '🇮🇩'],
    'KRW' => ['name' => 'South Korean Won', 'flag' => '🇰🇷'],
    'AED' => ['name' => 'UAE Dirham', 'flag' => '🇦🇪'],
    'SAR' => ['name' => 'Saudi Riyal', 'flag' => '🇸🇦'],
    'TRY' => ['name' => 'Turkish Lira', 'flag' => '🇹🇷'],
    'ZAR' => ['name' => 'South African Rand', 'flag' => '🇿🇦'],
    'BRL' => ['name' => 'Brazilian Real', 'flag' => '🇧🇷'],
    'MXN' => ['name' => 'Mexican Peso', 'flag' => '🇲🇽'],
    'RUB' => ['name' => 'Russian Ruble', 'flag' => '🇷🇺'],
    'SEK' => ['name' => 'Swedish Krona', 'flag' => '🇸🇪'],
    'NOK' => ['name' => 'Norwegian Krone', 'flag' => '🇳🇴'],
    'DKK' => ['name' => 'Danish Krone', 'flag' => '🇩🇰'],
    'PLN' => ['name' => 'Polish Zloty', 'flag' => '🇵🇱'],
    'HKD' => ['name' => 'Hong Kong Dollar', 'flag' => '🇭🇰'],
    'NZD' => ['name' => 'New Zealand Dollar', 'flag' => '🇳🇿'],
    'PHP' => ['name' => 'Philippine Peso', 'flag' => '🇵🇭'],
    'VND' => ['name' => 'Vietnamese Dong', 'flag' => '🇻🇳'],
    'BDT' => ['name' => 'Bangladeshi Taka', 'flag' => '🇧🇩'],
    'PKR' => ['name' => 'Pakistani Rupee', 'flag' => '🇵🇰'],
    'ILS' => ['name' => 'Israeli Shekel', 'flag' => '🇮🇱'],
    'EGP' => ['name' => 'Egyptian Pound', 'flag' => '🇪🇬'],
    'CLP' => ['name' => 'Chilean Peso', 'flag' => '🇨🇱'],
    'COP' => ['name' => 'Colombian Peso', 'flag' => '🇨🇴'],
    'PEN' => ['name' => 'Peruvian Sol', 'flag' => '🇵🇪'],
    'ARS' => ['name' => 'Argentine Peso', 'flag' => '🇦🇷'],
    'CZK' => ['name' => 'Czech Koruna', 'flag' => '🇨🇿'],
    'HUF' => ['name' => 'Hungarian Forint', 'flag' => '🇭🇺'],
    'RON' => ['name' => 'Romanian Leu', 'flag' => '🇷🇴'],
    'NGN' => ['name' => 'Nigerian Naira', 'flag' => '🇳🇬'],
    'KES' => ['name' => 'Kenyan Shilling', 'flag' => '🇰🇪'],
    'GHS' => ['name' => 'Ghanaian Cedi', 'flag' => '🇬🇭'],
    'LKR' => ['name' => 'Sri Lankan Rupee', 'flag' => '🇱🇰'],
    'NPR' => ['name' => 'Nepalese Rupee', 'flag' => '🇳🇵'],
    'UAH' => ['name' => 'Ukrainian Hryvnia', 'flag' => '🇺🇦'],
    'QAR' => ['name' => 'Qatari Riyal', 'flag' => '🇶🇦'],
    'OMR' => ['name' => 'Omani Rial', 'flag' => '🇴🇲'],
    'KWD' => ['name' => 'Kuwaiti Dinar', 'flag' => '🇰🇼']
];

// Process conversion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $api_url = "https://api.frankfurter.app/latest?amount=$amount&from=$from_currency&to=$to_currency";
        $response = file_get_contents($api_url);
        
        if ($response === FALSE) {
            throw new Exception("Service temporarily unavailable. Please try again later.");
        }
        
        $data = json_decode($response, true);
        if (!isset($data['rates'][$to_currency])) {
            throw new Exception("Invalid currency pair selected");
        }
        
        $converted_amount = number_format($data['rates'][$to_currency], 4);
        $result = "<div class='result-box'>
            <div class='result-amount'>{$amount} {$from_currency} {$currencies[$from_currency]['flag']}</div>
            <div class='equals-sign'>=</div>
            <div class='result-amount'>{$converted_amount} {$to_currency} {$currencies[$to_currency]['flag']}</div>
        </div>";
    } catch (Exception $e) {
        $error = "<div class='error-box'>{$e->getMessage()}</div>";
    }
}
?>

<div class="currency-converter-page">
    <div class="container">
        <h1 class="page-title">Currency Converter</h1>
        <p class="page-subtitle">Real-time exchange rates using Frankfurter API</p>
        
        <div class="converter-card">
            <form method="POST" class="converter-form">
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" name="amount" 
                           value="<?= htmlspecialchars($amount) ?>" 
                           min="0.01" step="0.0001" required
                           inputmode="decimal">
                </div>
                
                <div class="currency-selectors">
                    <div class="form-group">
                        <label for="from_currency">From</label>
                        <select id="from_currency" name="from_currency" required>
                            <?php foreach ($currencies as $code => $currency): ?>
                                <option value="<?= $code ?>" <?= $from_currency === $code ? 'selected' : '' ?>>
                                    <?= "{$currency['flag']} {$code} - {$currency['name']}" ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="swap-currencies" onclick="swapCurrencies()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16 17.01V10h-2v7.01h-3L15 21l4-3.99h-3zM9 3L5 6.99h3V14h2V6.99h3L9 3z"/>
                        </svg>
                    </div>
                    
                    <div class="form-group">
                        <label for="to_currency">To</label>
                        <select id="to_currency" name="to_currency" required>
                            <?php foreach ($currencies as $code => $currency): ?>
                                <option value="<?= $code ?>" <?= $to_currency === $code ? 'selected' : '' ?>>
                                    <?= "{$currency['flag']} {$code} - {$currency['name']}" ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="convert-button">
                    Convert Now
                </button>
            </form>
            
            <?php if ($result): ?>
                <div class="conversion-result">
                    <?= $result ?>
                </div>
            <?php endif; ?>
            
            <?php if ($error): ?>
                <div class="error-message">
                    <?= $error ?>
                </div>
            <?php endif; ?>
            
            <!--<div class="api-credit">-->
            <!--    <p>Exchange rates provided by <a href="https://frankfurter.dev" target="_blank">Frankfurter.app</a></p>-->
            <!--</div>-->
        </div>
    </div>
</div>

<!-- About Currency Converter Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-info-circle text-blue-600 mr-3"></i>
            About Currency Converter
        </h2>
        <div class="prose max-w-none text-gray-700">
            <p class="text-lg mb-6">
                Our Currency Converter provides real-time exchange rates for over 50 major world currencies. 
                Perfect for travelers, businesses, and anyone needing accurate currency conversion with live market rates 
                updated throughout the day.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                        <i class="fas fa-exchange-alt mr-2 text-blue-500"></i>
                        Real-time Rates
                    </h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Live exchange rates from reliable sources</li>
                        <li>• Updated multiple times daily</li>
                        <li>• Support for 50+ major currencies</li>
                        <li>• Accurate to 4 decimal places</li>
                        <li>• No registration required</li>
                        <li>• Completely free to use</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                        <i class="fas fa-globe mr-2 text-green-500"></i>
                        Supported Currencies
                    </h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Major world currencies (USD, EUR, GBP)</li>
                        <li>• Asian currencies (INR, CNY, JPY, KRW)</li>
                        <li>• Middle Eastern currencies (AED, SAR, QAR)</li>
                        <li>• European currencies (CHF, SEK, NOK)</li>
                        <li>• Emerging market currencies</li>
                        <li>• Cryptocurrency support coming soon</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-star text-yellow-500 mr-3"></i>
            Why Choose Our Currency Converter?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-green-500 text-4xl mb-4">⚡</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Real-time Rates</h3>
                <p class="text-gray-600 text-sm">Live exchange rates updated throughout the day for accuracy</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-blue-500 text-4xl mb-4">🌍</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">50+ Currencies</h3>
                <p class="text-gray-600 text-sm">Support for major world currencies with country flags</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-purple-500 text-4xl mb-4">🔄</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Easy Swap</h3>
                <p class="text-gray-600 text-sm">One-click currency swap for quick reverse calculations</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-red-500 text-4xl mb-4">💰</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">100% Free</h3>
                <p class="text-gray-600 text-sm">No registration, no limits, completely free forever</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-yellow-500 text-4xl mb-4">📱</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Mobile Optimized</h3>
                <p class="text-gray-600 text-sm">Perfect experience on desktop, tablet, and mobile</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-indigo-500 text-4xl mb-4">🎯</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">High Precision</h3>
                <p class="text-gray-600 text-sm">Accurate to 4 decimal places for precise calculations</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-question-circle text-blue-600 mr-3"></i>
            Currency Converter FAQs
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">How accurate are the exchange rates?</h3>
                    <p class="text-gray-600">Our exchange rates are sourced from reliable financial data providers and updated multiple times daily to ensure accuracy for real-world transactions.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Which currencies are supported?</h3>
                    <p class="text-gray-600">We support over 50 major world currencies including USD, EUR, GBP, INR, CNY, JPY, and many more from around the globe.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Is the currency converter free to use?</h3>
                    <p class="text-gray-600">Yes, our currency converter is completely free to use with no registration required. You can perform unlimited conversions without any cost.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">How often are rates updated?</h3>
                    <p class="text-gray-600">Exchange rates are updated multiple times throughout the day to reflect current market conditions and provide you with the most accurate conversions.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Can I use this for business transactions?</h3>
                    <p class="text-gray-600">While our rates are highly accurate, we recommend checking with your bank or financial institution for official rates when conducting business transactions.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Does it work on mobile devices?</h3>
                    <p class="text-gray-600">Yes, our currency converter is fully responsive and works perfectly on smartphones, tablets, and desktop computers with an optimized mobile interface.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What is the swap currencies feature?</h3>
                    <p class="text-gray-600">The swap feature allows you to quickly reverse your conversion by switching the 'from' and 'to' currencies with a single click, making calculations faster.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Are there any conversion limits?</h3>
                    <p class="text-gray-600">No, there are no limits on the amount you can convert. You can calculate conversions for any amount from small change to large business transactions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Related Financial Tools -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-calculator text-green-600 mr-3"></i>
            Related Financial Tools
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="loan-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-blue-500 text-2xl mb-2">🏦</div>
                <h3 class="font-bold text-gray-700 text-sm">Loan Calculator</h3>
                <p class="text-gray-600 text-xs">Calculate loan payments</p>
            </a>
            <a href="emi-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-green-500 text-2xl mb-2">💳</div>
                <h3 class="font-bold text-gray-700 text-sm">EMI Calculator</h3>
                <p class="text-gray-600 text-xs">Calculate monthly EMIs</p>
            </a>
            <a href="compound-interest-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-purple-500 text-2xl mb-2">📈</div>
                <h3 class="font-bold text-gray-700 text-sm">Compound Interest</h3>
                <p class="text-gray-600 text-xs">Calculate compound interest</p>
            </a>
            <a href="sip-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-red-500 text-2xl mb-2">📊</div>
                <h3 class="font-bold text-gray-700 text-sm">SIP Calculator</h3>
                <p class="text-gray-600 text-xs">Calculate SIP returns</p>
            </a>
            <a href="fd-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-yellow-500 text-2xl mb-2">🏛️</div>
                <h3 class="font-bold text-gray-700 text-sm">FD Calculator</h3>
                <p class="text-gray-600 text-xs">Fixed deposit calculator</p>
            </a>
            <a href="rd-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-indigo-500 text-2xl mb-2">💰</div>
                <h3 class="font-bold text-gray-700 text-sm">RD Calculator</h3>
                <p class="text-gray-600 text-xs">Recurring deposit calculator</p>
            </a>
            <a href="ppf-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-pink-500 text-2xl mb-2">🎯</div>
                <h3 class="font-bold text-gray-700 text-sm">PPF Calculator</h3>
                <p class="text-gray-600 text-xs">PPF returns calculator</p>
            </a>
            <a href="home-loan-emi-calculator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-teal-500 text-2xl mb-2">🏠</div>
                <h3 class="font-bold text-gray-700 text-sm">Home Loan EMI</h3>
                <p class="text-gray-600 text-xs">Home loan calculator</p>
            </a>
        </div>
    </div>
</div>

<!-- Currency Exchange Tips -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
            Currency Exchange Tips & Best Practices
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-plane mr-2 text-blue-500"></i>
                    For Travelers
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Check exchange rates before traveling</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Compare rates from different providers</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Avoid airport currency exchanges when possible</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Use ATMs abroad for better rates</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-chart-line mr-2 text-green-500"></i>
                    For Business
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Monitor exchange rate trends</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Consider forward contracts for large transactions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Use our converter for quick estimates</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Verify rates with your bank for transactions</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
/* Font Awesome Icons */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

/* Base Styles */
.currency-converter-page {
    padding: 20px 0;
    font-family: 'Segoe UI', system-ui, sans-serif;
    background-color: #f8fafc;
    min-height: 100vh;
}

/* Enhanced Mobile Touch Targets */
.form-group input,
.form-group select,
.convert-button,
.swap-currencies {
    min-height: 44px; /* iOS recommended minimum touch target */
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

/* Improved Select Styling for Mobile */
.form-group select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 12px center;
    background-repeat: no-repeat;
    background-size: 16px;
    padding-right: 40px;
}

/*.container {*/
/*    max-width: 800px;*/
/*    margin: 0 auto;*/
/*    padding: 0 15px;*/
/*}*/

.page-title {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 5px;
}

.page-subtitle {
    text-align: center;
    color: #7f8c8d;
    margin-bottom: 30px;
}

/* Converter Card */
.converter-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    padding: 25px;
    margin-bottom: 30px;
}

/* Form Styles */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #2c3e50;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #3498db;
    outline: none;
}

/* Currency Selectors */
.currency-selectors {
    display: flex;
    align-items: flex-end;
    gap: 10px;
    margin-bottom: 20px;
}

.currency-selectors .form-group {
    flex: 1;
    margin-bottom: 0;
}

.swap-currencies {
    padding: 12px;
    background: #f1f5f9;
    border-radius: 8px;
    cursor: pointer;
    margin-bottom: 8px;
    transition: all 0.3s;
}

.swap-currencies:hover {
    background: #e2e8f0;
}

.swap-currencies svg {
    width: 24px;
    height: 24px;
    fill: #4b5563;
}

/* Button */
.convert-button {
    width: 100%;
    padding: 14px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
}

.convert-button:hover {
    background-color: #2980b9;
}

/* Results */
.conversion-result {
    margin-top: 25px;
    padding: 20px;
    background: #f8fafc;
    border-radius: 8px;
    border-left: 4px solid #3498db;
}

.result-box {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px 15px;
}

.result-amount {
    font-size: 20px;
    font-weight: 600;
    color: #2c3e50;
}

.equals-sign {
    font-size: 20px;
    color: #7f8c8d;
}

/* Error */
.error-message {
    margin-top: 20px;
    padding: 15px;
    background: #fef2f2;
    border-radius: 8px;
    border-left: 4px solid #ef4444;
    color: #dc2626;
}

/* API Credit */
.api-credit {
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
    color: #64748b;
}

.api-credit a {
    color: #3498db;
    text-decoration: none;
}

.api-credit a:hover {
    text-decoration: underline;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    /* Main Container */
    .currency-converter-page {
        padding: 10px 0;
    }
    
    /* Page Titles */
    .page-title {
        font-size: 2rem;
        margin-bottom: 10px;
    }
    
    .page-subtitle {
        font-size: 0.9rem;
        margin-bottom: 20px;
    }
    
    /* Converter Card */
    .converter-card {
        padding: 20px 15px;
        margin: 0 10px 20px;
    }
    
    /* Currency Selectors */
    .currency-selectors {
        flex-direction: column;
        gap: 15px;
    }
    
    .swap-currencies {
        align-self: center;
        transform: rotate(90deg);
        margin: 10px 0;
        padding: 10px;
    }
    
    /* Form Elements */
    .form-group input,
    .form-group select {
        padding: 12px;
        font-size: 16px; /* Prevents zoom on iOS */
    }
    
    .convert-button {
        padding: 16px;
        font-size: 18px;
        margin-top: 10px;
    }
    
    /* Results */
    .result-box {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .equals-sign {
        transform: rotate(90deg);
        padding: 10px 0;
        font-size: 24px;
    }
    
    .result-amount {
        font-size: 18px;
        padding: 10px;
    }
    
    /* Content Sections */
    .bg-white.rounded-lg, .bg-gray-50.rounded-lg {
        margin: 0 10px 20px;
        border-radius: 8px;
    }
    
    .p-8 {
        padding: 20px 15px;
    }
    
    /* Grid Layouts */
    .grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3,
    .grid.grid-cols-2.md\\:grid-cols-3.lg\\:grid-cols-4 {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .grid.grid-cols-1.lg\\:grid-cols-2 {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    /* Feature Cards */
    .text-center.p-6 {
        padding: 20px 15px;
    }
    
    /* FAQ Cards */
    .bg-gray-50.p-6 {
        padding: 15px;
        margin-bottom: 15px;
    }
    
    /* Related Tools */
    .grid.grid-cols-2 {
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }
    
    .p-4.border {
        padding: 12px 8px;
    }
    
    /* Typography */
    h1, .text-3xl {
        font-size: 1.8rem;
        line-height: 1.2;
    }
    
    h2, .text-2xl {
        font-size: 1.5rem;
        line-height: 1.3;
    }
    
    h3, .text-xl {
        font-size: 1.2rem;
        line-height: 1.4;
    }
    
    /* Spacing Adjustments */
    .mb-8 {
        margin-bottom: 20px;
    }
    
    .mb-6 {
        margin-bottom: 15px;
    }
    
    .mb-4 {
        margin-bottom: 10px;
    }
    
    /* Breadcrumb */
    .max-w-7xl.mx-auto.px-4 {
        padding-left: 15px;
        padding-right: 15px;
    }
    
    .flex.items-center.space-x-2.py-3.text-sm {
        flex-wrap: wrap;
        gap: 5px;
    }
}

/* Extra Small Screens */
@media (max-width: 480px) {
    .page-title {
        font-size: 1.6rem;
    }
    
    .converter-card {
        margin: 0 5px 15px;
        padding: 15px 10px;
    }
    
    .grid.grid-cols-2 {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .p-4.border {
        padding: 15px 10px;
    }
    
    h1, .text-3xl {
        font-size: 1.5rem;
    }
    
    h2, .text-2xl {
        font-size: 1.3rem;
    }
    
    .result-amount {
        font-size: 16px;
    }
    
    .convert-button {
        padding: 14px;
        font-size: 16px;
    }
}

/* Dark Mode */
@media (prefers-color-scheme: dark) {
    .converter-card {
        background: #1e293b;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }
    
    .page-title,
    .form-group label,
    .result-amount {
        color: #f8fafc;
    }
    
    .page-subtitle {
        color: #94a3b8;
    }
    
    .form-group input,
    .form-group select {
        background: #334155;
        border-color: #475569;
        color: #f8fafc;
    }
    
    .swap-currencies {
        background: #334155;
    }
    
    .swap-currencies svg {
        fill: #cbd5e1;
    }
    
    .conversion-result {
        background: #1e293b;
        border-left-color: #60a5fa;
    }
    
    .error-message {
        background: #450a0a;
        border-left-color: #f87171;
    }
}
</style>

<script>
function swapCurrencies() {
    const fromSelect = document.getElementById('from_currency');
    const toSelect = document.getElementById('to_currency');
    const tempValue = fromSelect.value;
    
    fromSelect.value = toSelect.value;
    toSelect.value = tempValue;
}
</script>

<?php 
// Include your footer
include('footer.php'); 
?>
