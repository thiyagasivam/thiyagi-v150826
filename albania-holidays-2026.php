<?php include 'header.php';?>

<?php
$year = 2026;
$countryCode = 'AL';
$apiUrl = "https://date.nager.at/api/v3/PublicHolidays/{$year}/{$countryCode}";

// Fetch holidays data
$holidays = json_decode(file_get_contents($apiUrl), true);

// Set page title
$pageTitle = "Albania Public Holidays 2026 - Complete List & Dates";
?>
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="Official list of Albania’s 2026 public holidays with dates. Includes bank holidays, festivals, and key dates for travel planning. Always up-to-date!">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🇦🇱</text></svg>">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .albania-flag {
            background: linear-gradient(180deg, #E41D25 0%, #E41D25 50%, #000 50%, #000 100%);
        }
    </style>

<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="albania-flag text-white shadow-md">
            <div class="container mx-auto px-4 py-6">
                <div class="flex items-center justify-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 6" class="w-8 h-5">
                        <rect width="9" height="6" fill="#E41D25"/>
                        <rect width="6" height="6" fill="black"/>
                        <path d="M5.8 4L5 3l0.8-1H4.5L5 1 4.5 0H3l0.5 1L3 2h1.3L3.5 3l0.8 1L5 3l-0.8 1H6L5.5 5 6 6h1.5L7 5l0.5 1V4z" fill="gold"/>
                    </svg>
                    <h1 class="text-xl md:text-2xl font-bold"><?php echo $pageTitle; ?></h1>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <?php foreach ($holidays as $holiday): ?>
                    <div class="border-b border-gray-200 last:border-b-0">
                        <div class="p-4 hover:bg-gray-50 transition-colors duration-150">
                            <div class="flex flex-col sm:flex-row sm:items-center">
                                <div class="w-24 flex-shrink-0 mb-2 sm:mb-0">
                                    <span class="inline-block px-2 py-1 bg-red-100 text-red-800 rounded text-sm font-medium">
                                        <?php echo date('M j', strtotime($holiday['date'])); ?>
                                    </span>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="text-lg font-semibold text-gray-800"><?php echo $holiday['name']; ?></h3>
                                    <p class="text-gray-600"><?php echo $holiday['localName']; ?></p>
                                </div>
                                <div class="mt-2 sm:mt-0 sm:ml-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium <?php echo $holiday['fixed'] ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800'; ?>">
                                        <?php echo $holiday['fixed'] ? 'Fixed Date' : 'Variable Date'; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <!-- Footer -->
        
    </div>
</body>
<?php include 'footer.php';?>
</html>
