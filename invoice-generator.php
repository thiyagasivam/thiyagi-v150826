<?php
// Advanced Invoice Generator PHP Backend
session_start();
include 'header.php';

// Enhanced Invoice Generator Class
class InvoiceGenerator {
    
    public static function generateInvoiceNumber() {
        return 'INV-' . date('Y') . '-' . strtoupper(uniqid());
    }
    
    public static function calculateItemTotal($quantity, $rate, $discount = 0) {
        $subtotal = $quantity * $rate;
        return $subtotal - ($subtotal * $discount / 100);
    }
    
    public static function calculateTax($amount, $taxRate) {
        return $amount * ($taxRate / 100);
    }
    
    public static function formatCurrency($amount, $currency = 'USD') {
        $symbols = [
            'USD' => '$',
            'EUR' => '€',
            'GBP' => '£',
            'INR' => '₹',
            'CAD' => 'C$',
            'AUD' => 'A$'
        ];
        
        $symbol = $symbols[$currency] ?? '$';
        return $symbol . number_format($amount, 2);
    }
    
    public static function getPaymentTerms() {
        return [
            'net_7' => 'Net 7 days',
            'net_15' => 'Net 15 days',
            'net_30' => 'Net 30 days',
            'net_45' => 'Net 45 days',
            'net_60' => 'Net 60 days',
            'due_on_receipt' => 'Due on receipt',
            'cash_on_delivery' => 'Cash on delivery'
        ];
    }
    
    public static function getInvoiceTemplates() {
        return [
            'professional' => 'Professional Blue',
            'modern' => 'Modern Green',
            'classic' => 'Classic Black',
            'creative' => 'Creative Purple',
            'minimal' => 'Minimal Gray'
        ];
    }
}

// Initialize enhanced invoice data
if (!isset($_SESSION['invoice'])) {
    $_SESSION['invoice'] = [
        'invoice_number' => InvoiceGenerator::generateInvoiceNumber(),
        'date' => date('Y-m-d'),
        'due_date' => date('Y-m-d', strtotime('+30 days')),
        'currency' => 'USD',
        'payment_terms' => 'net_30',
        'template' => 'professional',
        'from' => [
            'name' => 'Your Company Name',
            'address' => '123 Business Street',
            'city' => 'Cityville',
            'state' => 'ST',
            'zip' => '12345',
            'country' => 'United States',
            'email' => 'contact@yourcompany.com',
            'phone' => '(123) 456-7890',
            'website' => 'www.yourcompany.com',
            'tax_id' => 'TAX123456789',
            'logo' => ''
        ],
        'to' => [
            'name' => 'Client Name',
            'company' => 'Client Company Inc.',
            'address' => '456 Client Avenue',
            'city' => 'Client City',
            'state' => 'CC',
            'zip' => '67890',
            'country' => 'United States',
            'email' => 'client@example.com',
            'phone' => '(987) 654-3210'
        ],
        'items' => [
            [
                'description' => 'Website Design & Development',
                'quantity' => 1,
                'rate' => 1200.00,
                'discount' => 0,
                'tax' => 1
            ],
            [
                'description' => 'Annual Hosting & Maintenance',
                'quantity' => 12,
                'rate' => 25.00,
                'discount' => 10,
                'tax' => 1
            ]
        ],
        'tax_rate' => 10,
        'discount_rate' => 0,
        'shipping' => 0,
        'notes' => 'Thank you for your business! We appreciate your prompt payment.',
        'terms' => 'Payment is due within 30 days of invoice date. Late payments may incur a 1.5% monthly service charge.',
        'bank_details' => [
            'bank_name' => 'Example Bank',
            'account_name' => 'Your Company Name',
            'account_number' => '1234567890',
            'routing_number' => '987654321',
            'swift_code' => 'EXBKUS33'
        ]
    ];
}

// Enhanced form handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save_invoice'])) {
        // Save invoice details with validation
        if (isset($_POST['invoice'])) {
            $_SESSION['invoice'] = array_merge($_SESSION['invoice'], $_POST['invoice']);
        }
    } elseif (isset($_POST['add_item'])) {
        // Add new item with enhanced fields
        $_SESSION['invoice']['items'][] = [
            'description' => 'New Item',
            'quantity' => 1,
            'rate' => 0,
            'discount' => 0,
            'tax' => 1
        ];
    } elseif (isset($_POST['duplicate_item'])) {
        // Duplicate existing item
        $index = intval($_POST['duplicate_item']);
        if (isset($_SESSION['invoice']['items'][$index])) {
            $_SESSION['invoice']['items'][] = $_SESSION['invoice']['items'][$index];
        }
    } elseif (isset($_POST['remove_item'])) {
        // Remove item
        $index = intval($_POST['remove_item']);
        if (isset($_SESSION['invoice']['items'][$index])) {
            array_splice($_SESSION['invoice']['items'], $index, 1);
        }
    } elseif (isset($_POST['load_template'])) {
        // Load predefined template
        $template = $_POST['template_type'];
        $_SESSION['invoice']['template'] = $template;
    } elseif (isset($_POST['generate_pdf'])) {
        // Generate PDF (placeholder - would use a library like TCPDF or Dompdf)
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="invoice_'.$_SESSION['invoice']['invoice_number'].'.pdf"');
        // In a real implementation, you would generate the PDF here
        exit;
    } elseif (isset($_POST['reset_invoice'])) {
        // Reset invoice
        unset($_SESSION['invoice']);
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    } elseif (isset($_POST['save_template'])) {
        // Save as template (placeholder for future implementation)
        $message = "Template saved successfully!";
    }
}

// Enhanced calculations
$subtotal = 0;
$total_discount = 0;
$total_tax = 0;

foreach ($_SESSION['invoice']['items'] as $item) {
    $item_subtotal = $item['quantity'] * $item['rate'];
    $item_discount = $item_subtotal * ($item['discount'] / 100);
    $item_after_discount = $item_subtotal - $item_discount;
    
    $subtotal += $item_subtotal;
    $total_discount += $item_discount;
    
    if ($item['tax']) {
        $total_tax += InvoiceGenerator::calculateTax($item_after_discount, $_SESSION['invoice']['tax_rate']);
    }
}

$subtotal_after_discount = $subtotal - $total_discount;
$shipping = $_SESSION['invoice']['shipping'] ?? 0;
$total = $subtotal_after_discount + $total_tax + $shipping;
?>

<title>Professional Invoice Generator 2026 - Multi-Currency, Tax & Discount Support</title>
    <meta name="description" content="Advanced invoice generator with multiple currencies, automatic calculations, discount support, professional templates & PDF export. Free online invoicing tool for businesses in 2026.">
    <meta name="keywords" content="invoice generator, bill creator, professional invoices, tax calculator, discount invoices, PDF invoices, business billing, invoice templates 2026">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Professional Invoice Generator 2026 - Advanced Business Tool">
    <meta property="og:description" content="Create professional invoices with multiple currencies, automatic tax calculations, and customizable templates.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://thiyagi.com/invoice-generator.php">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Professional Invoice Generator 2026">
    <meta name="twitter:description" content="Advanced invoice generator with multi-currency support and professional templates.">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Professional Invoice Generator",
        "description": "Advanced invoice generator for businesses with multi-currency support, tax calculations, and professional templates",
        "url": "https://thiyagi.com/invoice-generator.php",
        "applicationCategory": "BusinessApplication",
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
                        primary: '#3b82f6',
                        'primary-dark': '#2563eb',
                        'invoice-blue': '#1e40af',
                        'invoice-green': '#059669',
                    }
                }
            }
        }
    </script>
    <style>
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; color: black !important; }
            .container { width: 100% !important; max-width: 100% !important; padding: 0 !important; margin: 0 !important; }
            .invoice-container { box-shadow: none !important; border: none !important; }
        }
        
        .invoice-container { min-height: 29.7cm; }
        .item-row:hover .action-buttons { opacity: 1; }
        .action-buttons { opacity: 0; transition: opacity 0.2s ease; }
        
        .template-professional { background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%); }
        .template-modern { background: linear-gradient(135deg, #059669 0%, #047857 100%); }
        .template-classic { background: linear-gradient(135deg, #374151 0%, #1f2937 100%); }
        .template-creative { background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%); }
        .template-minimal { background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%); }
        
        .currency-symbol { font-weight: bold; color: #059669; }
        .calculation-highlight { background: rgba(59, 130, 246, 0.1); padding: 2px 6px; border-radius: 4px; }
        
        .fade-in { animation: fadeIn 0.5s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        
        .hover-scale { transition: transform 0.2s ease; }
        .hover-scale:hover { transform: scale(1.02); }
        
        .notification { position: fixed; top: 20px; right: 20px; z-index: 1000; padding: 12px 24px; border-radius: 8px; color: white; font-weight: 500; }
        .notification.success { background-color: #10b981; }
        .notification.error { background-color: #ef4444; }
    </style>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                🧾 Professional Invoice Generator
            </h1>
            <p class="text-xl text-gray-600 mb-6">
                Create professional invoices with advanced features, multiple currencies & instant calculations
            </p>
            <div class="flex flex-wrap justify-center gap-2 mb-4">
                <span class="px-3 py-1 bg-primary text-white text-sm rounded-full">Multi-Currency</span>
                <span class="px-3 py-1 bg-green-500 text-white text-sm rounded-full">Tax Calculator</span>
                <span class="px-3 py-1 bg-purple-500 text-white text-sm rounded-full">Discounts</span>
                <span class="px-3 py-1 bg-red-500 text-white text-sm rounded-full">PDF Export</span>
                <span class="px-3 py-1 bg-indigo-500 text-white text-sm rounded-full">Templates</span>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 no-print">
            <button onclick="loadSampleInvoice()" class="bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-file-import text-2xl mb-2"></i>
                <div class="text-sm font-medium">Load Sample</div>
            </button>
            <button onclick="showTemplateModal()" class="bg-purple-500 hover:bg-purple-600 text-white p-4 rounded-lg transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-palette text-2xl mb-2"></i>
                <div class="text-sm font-medium">Templates</div>
            </button>
            <button onclick="calculateTotals()" class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-lg transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-calculator text-2xl mb-2"></i>
                <div class="text-sm font-medium">Calculate</div>
            </button>
            <button onclick="previewInvoice()" class="bg-indigo-500 hover:bg-indigo-600 text-white p-4 rounded-lg transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-eye text-2xl mb-2"></i>
                <div class="text-sm font-medium">Preview</div>
            </button>
        </div>
        
        <form method="POST" class="no-print">
            <!-- Enhanced Invoice Details -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8 hover-scale">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">📋 Invoice Configuration</h2>
                    <button type="button" onclick="generateNewNumber()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-all duration-200">
                        🔄 New Number
                    </button>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="md:col-span-1">
                        <label class="block text-gray-700 font-semibold mb-2">📄 Invoice Number</label>
                        <input type="text" name="invoice[invoice_number]" value="<?= htmlspecialchars($_SESSION['invoice']['invoice_number']) ?>" 
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">📅 Invoice Date</label>
                        <input type="date" name="invoice[date]" value="<?= htmlspecialchars($_SESSION['invoice']['date']) ?>" 
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">⏰ Due Date</label>
                        <input type="date" name="invoice[due_date]" value="<?= htmlspecialchars($_SESSION['invoice']['due_date']) ?>" 
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">💰 Currency</label>
                        <select name="invoice[currency]" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            <option value="USD" <?= $_SESSION['invoice']['currency'] == 'USD' ? 'selected' : '' ?>>🇺🇸 USD ($)</option>
                            <option value="EUR" <?= $_SESSION['invoice']['currency'] == 'EUR' ? 'selected' : '' ?>>🇪🇺 EUR (€)</option>
                            <option value="GBP" <?= $_SESSION['invoice']['currency'] == 'GBP' ? 'selected' : '' ?>>🇬🇧 GBP (£)</option>
                            <option value="INR" <?= $_SESSION['invoice']['currency'] == 'INR' ? 'selected' : '' ?>>🇮🇳 INR (₹)</option>
                            <option value="CAD" <?= $_SESSION['invoice']['currency'] == 'CAD' ? 'selected' : '' ?>>🇨🇦 CAD (C$)</option>
                            <option value="AUD" <?= $_SESSION['invoice']['currency'] == 'AUD' ? 'selected' : '' ?>>🇦🇺 AUD (A$)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">📊 Tax Rate (%)</label>
                        <input type="number" name="invoice[tax_rate]" value="<?= htmlspecialchars($_SESSION['invoice']['tax_rate']) ?>" 
                               min="0" max="100" step="0.01" placeholder="10.00"
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">🚚 Shipping</label>
                        <input type="number" name="invoice[shipping]" value="<?= htmlspecialchars($_SESSION['invoice']['shipping'] ?? 0) ?>" 
                               min="0" step="0.01" placeholder="0.00"
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">⏱️ Payment Terms</label>
                        <select name="invoice[payment_terms]" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            <?php foreach (InvoiceGenerator::getPaymentTerms() as $key => $term): ?>
                            <option value="<?= $key ?>" <?= ($_SESSION['invoice']['payment_terms'] ?? 'net_30') == $key ? 'selected' : '' ?>><?= $term ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Business Information -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6 hover-scale">
                    <div class="flex items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">🏢 Your Business (From)</h2>
                        <button type="button" onclick="loadBusinessTemplate()" class="ml-auto bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm transition-all duration-200">
                            📋 Template
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">🏷️ Business Name</label>
                                <input type="text" name="invoice[from][name]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['name']) ?>" 
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">🆔 Tax ID</label>
                                <input type="text" name="invoice[from][tax_id]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['tax_id'] ?? '') ?>" 
                                       placeholder="TAX123456789"
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">📍 Street Address</label>
                            <input type="text" name="invoice[from][address]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['address']) ?>" 
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">🏙️ City</label>
                                <input type="text" name="invoice[from][city]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['city']) ?>" 
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">🗺️ State</label>
                                <input type="text" name="invoice[from][state]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['state']) ?>" 
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">📮 ZIP Code</label>
                                <input type="text" name="invoice[from][zip]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['zip']) ?>" 
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">🌍 Country</label>
                                <input type="text" name="invoice[from][country]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['country'] ?? '') ?>" 
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">📧 Email</label>
                                <input type="email" name="invoice[from][email]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['email']) ?>" 
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">📞 Phone</label>
                                <input type="tel" name="invoice[from][phone]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['phone']) ?>" 
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">🌐 Website</label>
                                <input type="url" name="invoice[from][website]" value="<?= htmlspecialchars($_SESSION['invoice']['from']['website'] ?? '') ?>" 
                                       placeholder="www.yoursite.com"
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800">To (Client)</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Name</label>
                            <input type="text" name="invoice[to][name]" value="<?= htmlspecialchars($_SESSION['invoice']['to']['name']) ?>" 
                                   class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Address</label>
                            <input type="text" name="invoice[to][address]" value="<?= htmlspecialchars($_SESSION['invoice']['to']['address']) ?>" 
                                   class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label class="block text-gray-700 mb-2">City</label>
                                <input type="text" name="invoice[to][city]" value="<?= htmlspecialchars($_SESSION['invoice']['to']['city']) ?>" 
                                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">State</label>
                                <input type="text" name="invoice[to][state]" value="<?= htmlspecialchars($_SESSION['invoice']['to']['state']) ?>" 
                                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">ZIP</label>
                                <input type="text" name="invoice[to][zip]" value="<?= htmlspecialchars($_SESSION['invoice']['to']['zip']) ?>" 
                                       class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email" name="invoice[to][email]" value="<?= htmlspecialchars($_SESSION['invoice']['to']['email']) ?>" 
                                   class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Items</h2>
                    <button type="submit" name="add_item" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <i class="fas fa-plus mr-2"></i>Add Item
                    </button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2 px-4">Description</th>
                                <th class="text-right py-2 px-4">Qty</th>
                                <th class="text-right py-2 px-4">Rate</th>
                                <th class="text-right py-2 px-4">Discount %</th>
                                <th class="text-right py-2 px-4">Tax</th>
                                <th class="text-right py-2 px-4">Amount</th>
                                <th class="text-right py-2 px-4"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['invoice']['items'] as $index => $item): ?>
                            <?php 
                            $item_subtotal = $item['quantity'] * $item['rate'];
                            $item_discount = $item_subtotal * (($item['discount'] ?? 0) / 100);
                            $item_final = $item_subtotal - $item_discount;
                            ?>
                            <tr class="border-b item-row hover:bg-gray-50">
                                <td class="py-2 px-4">
                                    <input type="text" name="invoice[items][<?= $index ?>][description]" 
                                           value="<?= htmlspecialchars($item['description']) ?>" 
                                           class="w-full px-2 py-1 border rounded focus:outline-none focus:ring-1 focus:ring-primary">
                                </td>
                                <td class="py-2 px-4">
                                    <input type="number" name="invoice[items][<?= $index ?>][quantity]" 
                                           value="<?= htmlspecialchars($item['quantity']) ?>" min="1" step="1"
                                           class="w-16 px-2 py-1 border rounded focus:outline-none focus:ring-1 focus:ring-primary text-right">
                                </td>
                                <td class="py-2 px-4">
                                    <input type="number" name="invoice[items][<?= $index ?>][rate]" 
                                           value="<?= htmlspecialchars($item['rate']) ?>" min="0" step="0.01"
                                           class="w-20 px-2 py-1 border rounded focus:outline-none focus:ring-1 focus:ring-primary text-right">
                                </td>
                                <td class="py-2 px-4">
                                    <input type="number" name="invoice[items][<?= $index ?>][discount]" 
                                           value="<?= htmlspecialchars($item['discount'] ?? 0) ?>" min="0" max="100" step="0.01"
                                           class="w-16 px-2 py-1 border rounded focus:outline-none focus:ring-1 focus:ring-primary text-right">
                                </td>
                                <td class="py-2 px-4">
                                    <select name="invoice[items][<?= $index ?>][tax]" 
                                            class="w-16 px-2 py-1 border rounded focus:outline-none focus:ring-1 focus:ring-primary">
                                        <option value="0" <?= ($item['tax'] ?? 1) == 0 ? 'selected' : '' ?>>No</option>
                                        <option value="1" <?= ($item['tax'] ?? 1) == 1 ? 'selected' : '' ?>>Yes</option>
                                    </select>
                                </td>
                                <td class="py-2 px-4 text-right">
                                    <?= InvoiceGenerator::formatCurrency($item_final, $_SESSION['invoice']['currency']) ?>
                                </td>
                                <td class="py-2 px-4 text-right">
                                    <button type="submit" name="remove_item" value="<?= $index ?>" 
                                            class="remove-item opacity-0 text-red-500 hover:text-red-700 transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Notes & Terms</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 mb-2">Notes</label>
                        <textarea name="invoice[notes]" rows="3" 
                                  class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($_SESSION['invoice']['notes']) ?></textarea>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Terms</label>
                        <textarea name="invoice[terms]" rows="3" 
                                  class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($_SESSION['invoice']['terms']) ?></textarea>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-between gap-4 mb-6 no-print">
                <button type="submit" name="save_invoice" 
                        class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition flex-1">
                    <i class="fas fa-save mr-2"></i>Save Invoice
                </button>
                <button type="submit" name="generate_pdf" 
                        class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 transition flex-1">
                    <i class="fas fa-file-pdf mr-2"></i>Generate PDF
                </button>
                <button type="submit" name="reset_invoice" 
                        class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-600 transition flex-1">
                    <i class="fas fa-trash-alt mr-2"></i>Reset Invoice
                </button>
            </div>
        </form>

        <!-- Invoice Preview -->
        <div class="invoice-container bg-white rounded-lg shadow-md p-8 mb-6">
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800"><?= htmlspecialchars($_SESSION['invoice']['from']['name']) ?></h2>
                    <p class="text-gray-600"><?= htmlspecialchars($_SESSION['invoice']['from']['address']) ?></p>
                    <p class="text-gray-600"><?= htmlspecialchars($_SESSION['invoice']['from']['city']) ?>, <?= htmlspecialchars($_SESSION['invoice']['from']['state']) ?> <?= htmlspecialchars($_SESSION['invoice']['from']['zip']) ?></p>
                    <p class="text-gray-600"><?= htmlspecialchars($_SESSION['invoice']['from']['email']) ?></p>
                    <p class="text-gray-600"><?= htmlspecialchars($_SESSION['invoice']['from']['phone']) ?></p>
                </div>
                <div class="text-right">
                    <h1 class="text-3xl font-bold text-blue-600 mb-2">INVOICE</h1>
                    <p class="text-gray-600"><span class="font-semibold">Invoice #:</span> <?= htmlspecialchars($_SESSION['invoice']['invoice_number']) ?></p>
                    <p class="text-gray-600"><span class="font-semibold">Date:</span> <?= date('F j, Y', strtotime($_SESSION['invoice']['date'])) ?></p>
                    <p class="text-gray-600"><span class="font-semibold">Due Date:</span> <?= date('F j, Y', strtotime($_SESSION['invoice']['due_date'])) ?></p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Bill To:</h3>
                    <p class="text-gray-600 font-semibold"><?= htmlspecialchars($_SESSION['invoice']['to']['name']) ?></p>
                    <p class="text-gray-600"><?= htmlspecialchars($_SESSION['invoice']['to']['address']) ?></p>
                    <p class="text-gray-600"><?= htmlspecialchars($_SESSION['invoice']['to']['city']) ?>, <?= htmlspecialchars($_SESSION['invoice']['to']['state']) ?> <?= htmlspecialchars($_SESSION['invoice']['to']['zip']) ?></p>
                    <p class="text-gray-600"><?= htmlspecialchars($_SESSION['invoice']['to']['email']) ?></p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Payment Method:</h3>
                    <p class="text-gray-600">Bank Transfer</p>
                    <p class="text-gray-600">Account Name: <?= htmlspecialchars($_SESSION['invoice']['from']['name']) ?></p>
                    <p class="text-gray-600">Account Number: XXXX-XXXX-XXXX</p>
                    <p class="text-gray-600">Bank Name: Example Bank</p>
                </div>
            </div>

            <div class="mb-8">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="text-left py-3 px-4 border">Description</th>
                            <th class="text-right py-3 px-4 border">Qty</th>
                            <th class="text-right py-3 px-4 border">Rate</th>
                            <th class="text-right py-3 px-4 border">Discount</th>
                            <th class="text-right py-3 px-4 border">Tax</th>
                            <th class="text-right py-3 px-4 border">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['invoice']['items'] as $item): ?>
                        <?php 
                        $item_subtotal = $item['quantity'] * $item['rate'];
                        $item_discount = $item_subtotal * (($item['discount'] ?? 0) / 100);
                        $item_after_discount = $item_subtotal - $item_discount;
                        ?>
                        <tr class="border-b">
                            <td class="py-3 px-4 border"><?= htmlspecialchars($item['description']) ?></td>
                            <td class="py-3 px-4 border text-right"><?= htmlspecialchars($item['quantity']) ?></td>
                            <td class="py-3 px-4 border text-right"><?= InvoiceGenerator::formatCurrency($item['rate'], $_SESSION['invoice']['currency']) ?></td>
                            <td class="py-3 px-4 border text-right"><?= ($item['discount'] ?? 0) ?>%</td>
                            <td class="py-3 px-4 border text-right"><?= ($item['tax'] ?? 1) ? 'Yes' : 'No' ?></td>
                            <td class="py-3 px-4 border text-right"><?= InvoiceGenerator::formatCurrency($item_after_discount, $_SESSION['invoice']['currency']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end">
                <div class="w-full md:w-1/3">
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="font-semibold">Subtotal:</span>
                            <span><?= InvoiceGenerator::formatCurrency($subtotal, $_SESSION['invoice']['currency']) ?></span>
                        </div>
                        <?php if ($total_discount > 0): ?>
                        <div class="flex justify-between text-green-600">
                            <span class="font-semibold">Discount:</span>
                            <span>-<?= InvoiceGenerator::formatCurrency($total_discount, $_SESSION['invoice']['currency']) ?></span>
                        </div>
                        <?php endif; ?>
                        <div class="flex justify-between">
                            <span class="font-semibold">Tax (<?= $_SESSION['invoice']['tax_rate'] ?>%):</span>
                            <span><?= InvoiceGenerator::formatCurrency($total_tax, $_SESSION['invoice']['currency']) ?></span>
                        </div>
                        <?php if ($shipping > 0): ?>
                        <div class="flex justify-between">
                            <span class="font-semibold">Shipping:</span>
                            <span><?= InvoiceGenerator::formatCurrency($shipping, $_SESSION['invoice']['currency']) ?></span>
                        </div>
                        <?php endif; ?>
                        <div class="flex justify-between border-t pt-2">
                            <span class="font-bold">Total:</span>
                            <span class="font-bold"><?= InvoiceGenerator::formatCurrency($total, $_SESSION['invoice']['currency']) ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Notes</h3>
                    <p class="text-gray-600"><?= nl2br(htmlspecialchars($_SESSION['invoice']['notes'])) ?></p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Terms</h3>
                    <p class="text-gray-600"><?= nl2br(htmlspecialchars($_SESSION['invoice']['terms'])) ?></p>
                </div>
            </div>
        </div>

        <div class="text-center no-print">
            <button onclick="window.print()" class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary-dark transition">
                <i class="fas fa-print mr-2"></i>Print Invoice
            </button>
        </div>
    </div>

    <!-- Enhanced JavaScript Functionality -->
    <script>
        // Generate new invoice number
        function generateNewNumber() {
            const now = new Date();
            const year = now.getFullYear();
            const random = Math.random().toString(36).substr(2, 6).toUpperCase();
            document.querySelector('input[name="invoice[invoice_number]"]').value = `INV-${year}-${random}`;
        }

        // Load sample business data
        function loadBusinessTemplate() {
            // Sample business data
            const sampleData = {
                'invoice[from][name]': 'TechCorp Solutions',
                'invoice[from][address]': '123 Innovation Drive',
                'invoice[from][city]': 'Silicon Valley',
                'invoice[from][state]': 'CA',
                'invoice[from][zip]': '94000',
                'invoice[from][country]': 'United States',
                'invoice[from][email]': 'billing@techcorp.com',
                'invoice[from][phone]': '(555) 123-4567',
                'invoice[from][website]': 'www.techcorp.com',
                'invoice[from][tax_id]': 'TAX123456789'
            };
            
            Object.keys(sampleData).forEach(key => {
                const element = document.querySelector(`input[name="${key}"]`);
                if (element) {
                    element.value = sampleData[key];
                }
            });
        }

        // Load sample invoice
        function loadSampleInvoice() {
            // Auto-fill some sample data
            generateNewNumber();
            
            // Set dates
            const today = new Date();
            const dueDate = new Date(today.getTime() + (30 * 24 * 60 * 60 * 1000)); // 30 days from now
            
            document.querySelector('input[name="invoice[date]"]').value = today.toISOString().split('T')[0];
            document.querySelector('input[name="invoice[due_date]"]').value = dueDate.toISOString().split('T')[0];
            
            // Sample client data
            document.querySelector('input[name="invoice[to][name]"]').value = 'Acme Corporation';
            document.querySelector('input[name="invoice[to][company]"]').value = 'Acme Corp Ltd.';
            document.querySelector('input[name="invoice[to][email]"]').value = 'accounting@acmecorp.com';
            
            showNotification('Sample invoice data loaded!', 'success');
        }

        // Calculate totals (for real-time updates)
        function calculateTotals() {
            let subtotal = 0;
            const rows = document.querySelectorAll('.item-row');
            
            rows.forEach(row => {
                const qty = parseFloat(row.querySelector('input[name*="[quantity]"]').value) || 0;
                const rate = parseFloat(row.querySelector('input[name*="[rate]"]').value) || 0;
                const discount = parseFloat(row.querySelector('input[name*="[discount]"]').value) || 0;
                
                const itemTotal = qty * rate;
                const discountAmount = itemTotal * (discount / 100);
                const finalAmount = itemTotal - discountAmount;
                
                subtotal += finalAmount;
                
                // Update the amount display in the row
                const amountCell = row.querySelector('td:nth-last-child(2)');
                if (amountCell) {
                    amountCell.textContent = formatCurrency(finalAmount);
                }
            });
            
            console.log('Subtotal calculated:', subtotal);
        }

        // Format currency (basic client-side version)
        function formatCurrency(amount) {
            const currency = document.querySelector('select[name="invoice[currency]"]').value || 'USD';
            const symbols = {
                'USD': '$',
                'EUR': '€',
                'GBP': '£',
                'INR': '₹',
                'CAD': 'C$',
                'AUD': 'A$'
            };
            
            return (symbols[currency] || '$') + amount.toFixed(2);
        }

        // Show template modal (placeholder)
        function showTemplateModal() {
            alert('Template selection feature - select from Professional, Modern, Classic, Creative, or Minimal templates');
        }

        // Preview invoice
        function previewInvoice() {
            document.querySelector('.invoice-container').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }

        // Show notifications
        function showNotification(message, type = 'success') {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            // Fade out after 3 seconds
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    if (notification.parentNode) {
                        document.body.removeChild(notification);
                    }
                }, 300);
            }, 3000);
        }

        // Add real-time calculation listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listeners to quantity, rate, and discount inputs
            document.addEventListener('input', function(e) {
                if (e.target.matches('input[name*="[quantity]"], input[name*="[rate]"], input[name*="[discount]"]')) {
                    calculateTotals();
                }
            });
            
            // Auto-save functionality (placeholder)
            let saveTimeout;
            document.addEventListener('input', function(e) {
                if (e.target.form && e.target.form.method === 'POST') {
                    clearTimeout(saveTimeout);
                    saveTimeout = setTimeout(() => {
                        console.log('Auto-save triggered');
                    }, 2000);
                }
            });
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
