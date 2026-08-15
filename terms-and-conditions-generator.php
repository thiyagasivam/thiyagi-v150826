<?php
// Advanced Terms and Conditions Generator
class TermsGenerator {
    
    // Generate terms based on template type
    public static function generateTerms($data) {
        $template = $data['template'] ?? 'basic';
        
        switch ($template) {
            case 'ecommerce':
                return self::generateEcommerceTerms($data);
            case 'saas':
                return self::generateSaasTerms($data);
            case 'blog':
                return self::generateBlogTerms($data);
            case 'app':
                return self::generateAppTerms($data);
            case 'marketplace':
                return self::generateMarketplaceTerms($data);
            default:
                return self::generateBasicTerms($data);
        }
    }
    
    // Basic website terms
    private static function generateBasicTerms($data) {
        $date = date('F j, Y');
        extract($data);
        
        return <<<TERMS
# Terms and Conditions

**Last Updated: {$date}**

## 1. Agreement to Terms

By accessing and using {$business_name} ("{$website_url}"), you accept and agree to be bound by the terms and provision of this agreement.

## 2. Definitions

- **Company** (referred to as "we", "us", or "our") refers to {$business_name}, a {$business_type} organized under the laws of {$country}.
- **Service** refers to the website and services provided by {$business_name}.
- **User** refers to anyone who accesses or uses our Service.

## 3. Use License

Permission is granted to temporarily access {$business_name} for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
- Modify or copy the materials
- Use the materials for commercial purposes or for public display
- Attempt to reverse engineer any software contained on the website
- Remove any copyright or proprietary notations from the materials

## 4. User Accounts

When you create an account with us, you must provide information that is accurate, complete, and current at all times. You are responsible for safeguarding the password and all activities under your account.

## 5. Content Standards

Users agree not to post content that:
- Is defamatory, obscene, or offensive
- Violates any intellectual property rights
- Contains malware or harmful code
- Promotes illegal activities
- Harasses or threatens others

## 6. Privacy Policy

Your privacy is important to us. Please review our Privacy Policy, which also governs your use of the Service.

## 7. Limitation of Liability

{$business_name} shall not be held liable for any damages that result from the use of, or the inability to use, the materials on this website.

## 8. Governing Law

These terms and conditions are governed by and construed in accordance with the laws of {$country}.

## 9. Changes to Terms

We reserve the right to revise these terms at any time without notice. By using this website, you are agreeing to be bound by the current version of these terms.

## 10. Contact Information

For questions about these Terms and Conditions, contact us at:
- Email: {$contact_email}
- Website: {$website_url}

---
*This document was generated on {$date} and is subject to change.*
TERMS;
    }
    
    // E-commerce specific terms
    private static function generateEcommerceTerms($data) {
        $date = date('F j, Y');
        extract($data);
        
        return <<<TERMS
# Terms and Conditions of Sale

**Last Updated: {$date}**

## 1. Company Information

{$business_name}, a {$business_type} registered in {$country}, operates the e-commerce website {$website_url}.

## 2. Product Information

All product descriptions, images, and prices are subject to change without notice. We strive for accuracy but cannot guarantee that all information is error-free.

## 3. Ordering Process

- Orders are subject to acceptance and availability
- We reserve the right to refuse or cancel orders
- Payment must be received before shipment
- All prices are in the currency displayed on the website

## 4. Payment Terms

We accept the following payment methods: [Specify payment methods]. Payment is due in full at the time of purchase.

## 5. Shipping and Delivery

- Shipping costs are calculated at checkout
- Delivery times are estimates and not guaranteed
- Risk of loss passes to the buyer upon delivery
- International shipping may be subject to customs duties

## 6. Returns and Refunds

- Items may be returned within 30 days of delivery
- Items must be in original condition
- Return shipping costs are the responsibility of the buyer
- Refunds will be processed within 5-10 business days

## 7. Product Warranties

Products are sold with manufacturer warranties where applicable. {$business_name} makes no additional warranties beyond those provided by manufacturers.

## 8. Limitation of Liability

Our liability is limited to the purchase price of the product. We are not liable for consequential or incidental damages.

## 9. Governing Law

These terms are governed by the laws of {$country}. Any disputes will be resolved in the courts of {$country}.

## 10. Contact Us

For questions about orders or these terms:
- Email: {$contact_email}
- Website: {$website_url}

---
*Generated on {$date} for {$business_name}*
TERMS;
    }
    
    // SaaS/Software specific terms
    private static function generateSaasTerms($data) {
        $date = date('F j, Y');
        extract($data);
        
        return <<<TERMS
# Software as a Service Terms of Use

**Last Updated: {$date}**

## 1. Service Description

{$business_name} provides software as a service through {$website_url}. These terms govern your use of our service.

## 2. Subscription and Billing

- Service is provided on a subscription basis
- Fees are billed in advance on a recurring basis
- All fees are non-refundable except as required by law
- We may change pricing with 30 days notice

## 3. User Data and Privacy

- You retain ownership of your data
- We may process your data to provide the service
- We implement reasonable security measures
- Data portability options are available upon request

## 4. Service Availability

- We aim for 99.9% uptime but cannot guarantee uninterrupted service
- Planned maintenance will be announced in advance
- We are not liable for service interruptions beyond our control

## 5. User Responsibilities

Users agree to:
- Provide accurate account information
- Use strong passwords and account security
- Not exceed usage limits or abuse the service
- Comply with all applicable laws

## 6. Intellectual Property

- We retain rights to our software and service
- You retain rights to your data and content
- Our trademarks and branding remain our property
- Feedback provided to us may be used to improve the service

## 7. Termination

- Either party may terminate with notice
- We may suspend accounts for terms violations
- Data export options available before termination
- Payment obligations survive termination

## 8. Support and Updates

- Support is provided according to your subscription level
- We may update the software without notice
- Breaking changes will be communicated in advance

## 9. Limitation of Liability

Our liability is limited to your subscription fees. We are not liable for data loss, business interruption, or consequential damages.

## 10. Contact Information

- Email: {$contact_email}
- Website: {$website_url}

---
*These terms are effective as of {$date} for {$business_name}*
TERMS;
    }
    
    // Blog/Content site terms
    private static function generateBlogTerms($data) {
        $date = date('F j, Y');
        extract($data);
        
        return <<<TERMS
# Terms of Use for Content Website

**Last Updated: {$date}**

## 1. About This Website

{$business_name} operates {$website_url}, a content website providing information and resources.

## 2. Content Usage

- Content is for informational purposes only
- You may share content with proper attribution
- Commercial use requires written permission
- We reserve all rights not explicitly granted

## 3. User-Generated Content

When you submit comments or content:
- You grant us license to use and display it
- You represent that you own the rights to submit it
- You agree not to submit harmful or illegal content
- We may moderate or remove content at our discretion

## 4. Comments Policy

Comments must be:
- Respectful and constructive
- Relevant to the topic
- Free from spam or promotional content
- Compliant with all applicable laws

## 5. Disclaimer

- Content is provided "as is" without warranties
- We do not guarantee accuracy or completeness
- Content should not be considered professional advice
- Always consult qualified professionals for specific situations

## 6. Copyright and DMCA

We respect intellectual property rights. If you believe content infringes your copyright, contact us with:
- Description of the copyrighted work
- Location of the infringing material
- Your contact information
- Statement of good faith belief

## 7. Advertising and Affiliates

This website may contain:
- Affiliate links for which we may receive compensation
- Advertisements from third parties
- Sponsored content clearly marked as such

## 8. External Links

Links to external websites are provided for convenience. We are not responsible for the content or practices of linked sites.

## 9. Modifications

We may update these terms and will post changes on this page. Continued use constitutes acceptance of updated terms.

## 10. Contact

- Email: {$contact_email}
- Website: {$website_url}

---
*Content terms effective {$date} for {$business_name}*
TERMS;
    }
    
    // Mobile App terms
    private static function generateAppTerms($data) {
        $date = date('F j, Y');
        extract($data);
        
        return <<<TERMS
# Mobile Application Terms of Use

**Last Updated: {$date}**

## 1. Application License

{$business_name} grants you a limited, non-exclusive license to use our mobile application available through app stores.

## 2. Device Requirements

- Compatible device and operating system required
- Internet connection may be required for some features
- Storage space required for app installation
- App store account required for download

## 3. App Store Terms

Your use is also subject to:
- Apple App Store terms (for iOS)
- Google Play Store terms (for Android)
- Other app store terms as applicable

## 4. User Accounts and Data

- Account registration may be required
- You're responsible for account security
- We may sync data across devices
- Backup your important data regularly

## 5. In-App Purchases

If available:
- Purchases are processed through app stores
- Refund policies follow app store guidelines
- Premium features may require subscription
- Auto-renewal terms apply to subscriptions

## 6. Push Notifications

- We may send notifications about app features
- You can disable notifications in device settings
- Emergency notifications may override settings

## 7. Location Services

If the app uses location:
- Location permissions are required
- Location data is used only for app functionality
- You can disable location services
- Location data is handled per our privacy policy

## 8. Updates and Support

- Updates distributed through app stores
- Older app versions may not be supported
- Support available through app or website
- Beta features may be unstable

## 9. Prohibited Uses

Do not:
- Reverse engineer the app
- Use the app for illegal purposes
- Attempt to bypass security measures
- Share account credentials

## 10. Termination

We may suspend app access for violations of these terms. Uninstalling the app terminates your license.

## Contact Information

- Email: {$contact_email}
- Website: {$website_url}
- App Support: Within the app settings

---
*Mobile app terms for {$business_name} effective {$date}*
TERMS;
    }
    
    // Marketplace terms
    private static function generateMarketplaceTerms($data) {
        $date = date('F j, Y');
        extract($data);
        
        return <<<TERMS
# Marketplace Terms and Conditions

**Last Updated: {$date}**

## 1. Marketplace Overview

{$business_name} operates an online marketplace at {$website_url} connecting buyers and sellers.

## 2. User Roles

**Buyers:**
- Browse and purchase items from sellers
- Communicate with sellers
- Leave reviews and ratings
- Report issues or violations

**Sellers:**
- List items for sale
- Process orders and handle shipping
- Provide customer service
- Maintain accurate product information

## 3. Seller Requirements

To sell on our marketplace:
- Complete seller verification process
- Provide accurate business information
- Maintain seller performance standards
- Comply with applicable laws and regulations

## 4. Listing Requirements

Product listings must:
- Accurately describe the item
- Include clear, honest photos
- List correct pricing and availability
- Comply with prohibited items policy

## 5. Transaction Process

- Buyers place orders directly with sellers
- Payment processing handled by our platform
- Sellers responsible for fulfillment and shipping
- Platform may hold funds pending delivery confirmation

## 6. Fees and Payments

- Marketplace commission applies to sales
- Payment processing fees may apply
- Sellers paid according to payment schedule
- Fee schedule available in seller dashboard

## 7. Reviews and Ratings

- Buyers may review purchases
- Reviews should be honest and relevant
- Fake reviews are prohibited
- We may remove inappropriate reviews

## 8. Dispute Resolution

For transaction disputes:
- Contact the other party first
- Use our dispute resolution process if needed
- Provide documentation to support your case
- Accept binding decision from arbitration

## 9. Prohibited Items

The following may not be sold:
- Illegal items or services
- Counterfeit or infringing products
- Hazardous materials
- Items requiring special licenses

## 10. Platform Rules

Users must:
- Provide accurate information
- Not circumvent platform fees
- Respect intellectual property rights
- Maintain professional conduct

## Contact and Support

- General inquiries: {$contact_email}
- Seller support: Available in seller dashboard
- Buyer support: Available in user account
- Website: {$website_url}

---
*Marketplace terms for {$business_name} last updated {$date}*
TERMS;
    }
    
    // Get template information
    public static function getTemplateInfo() {
        return [
            'basic' => [
                'name' => 'Basic Website',
                'description' => 'General terms for informational websites and basic online presence',
                'icon' => '🌐'
            ],
            'ecommerce' => [
                'name' => 'E-commerce Store',
                'description' => 'Comprehensive terms for online retail, shipping, returns, and payments',
                'icon' => '🛒'
            ],
            'saas' => [
                'name' => 'SaaS/Software',
                'description' => 'Terms for software services, subscriptions, and data handling',
                'icon' => '💻'
            ],
            'blog' => [
                'name' => 'Blog/Content Site',
                'description' => 'Terms for content websites, user comments, and copyright protection',
                'icon' => '📝'
            ],
            'app' => [
                'name' => 'Mobile App',
                'description' => 'Terms for mobile applications, app stores, and device permissions',
                'icon' => '📱'
            ],
            'marketplace' => [
                'name' => 'Marketplace',
                'description' => 'Terms for platforms connecting buyers and sellers with transaction handling',
                'icon' => '🏪'
            ]
        ];
    }
}

// Handle form submission
$result = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $data = [
            'business_name' => trim($_POST['business_name'] ?? ''),
            'business_type' => $_POST['business_type'] ?? '',
            'website_url' => trim($_POST['website_url'] ?? ''),
            'country' => $_POST['country'] ?? '',
            'contact_email' => trim($_POST['contact_email'] ?? ''),
            'template' => $_POST['template'] ?? 'basic',
        ];
        
        // Validate required fields
        $required = ['business_name', 'business_type', 'website_url', 'country', 'contact_email'];
        foreach ($required as $field) {
            if (empty($data[$field])) {
                throw new Exception("Please fill in all required fields");
            }
        }
        
        // Validate email
        if (!filter_var($data['contact_email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Please enter a valid email address");
        }
        
        // Validate URL
        if (!filter_var($data['website_url'], FILTER_VALIDATE_URL)) {
            throw new Exception("Please enter a valid website URL");
        }
        
        $result = [
            'terms' => TermsGenerator::generateTerms($data),
            'data' => $data,
            'template_info' => TermsGenerator::getTemplateInfo()[$data['template']],
            'word_count' => str_word_count(TermsGenerator::generateTerms($data)),
            'generated_at' => date('Y-m-d H:i:s')
        ];
        
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

$templates = TermsGenerator::getTemplateInfo();
?>

    <title>Terms & Conditions Generator 2026 - Professional Legal Document Creator</title>
    <meta name="description" content="Create professional Terms & Conditions with our advanced 2026 generator. Multiple templates for e-commerce, SaaS, blogs, apps & marketplaces. Legal compliance made easy for businesses.">
    <meta name="keywords" content="terms conditions generator 2026, legal document creator, terms of service generator, website legal documents, business legal templates, legal compliance tool">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/terms-and-conditions-generator">
    <meta property="og:title" content="Terms & Conditions Generator 2026 - Professional Legal Document Creator">
    <meta property="og:description" content="Advanced Terms & Conditions generator with multiple business templates. Create professional legal documents for compliance and protection.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/terms-and-conditions-generator">
    <meta property="twitter:title" content="Terms & Conditions Generator 2026 - Professional Legal Document Creator">
    <meta property="twitter:description" content="Professional legal document generator with business-specific templates and compliance features.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Terms & Conditions Generator 2026",
        "description": "Professional Terms and Conditions generator with business-specific templates for legal compliance and protection",
        "url": "https://www.thiyagi.com/terms-and-conditions-generator",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>
    
    <style>
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .template-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .template-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .template-card.selected {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .generate-animation {
            animation: generatePulse 1s ease-in-out;
        }
        @keyframes generatePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }
        .terms-output {
            font-family: 'Georgia', 'Times New Roman', serif;
            line-height: 1.6;
        }
        .legal-badge {
            animation: fadeIn 0.8s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
<body class="bg-gray-50">
    <!-- Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-200 px-4 py-3">
        <div class="max-w-6xl mx-auto">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Legal Tools</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">Terms & Conditions Generator</li>
            </ol>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">📋 Terms & Conditions Generator 2026</h1>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto">Create professional, legally-compliant Terms & Conditions with our advanced generator featuring business-specific templates, customizable clauses, and expert legal guidance.</p>
        </header>

        <!-- Template Selection -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-purple-600 to-blue-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🎯 Choose Your Business Type</h2>
                <p class="text-purple-100 mt-2">Select the template that best matches your business model</p>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="templateGrid">
                    <?php foreach ($templates as $key => $template): ?>
                    <div class="template-card bg-gray-50 p-6 rounded-lg border border-gray-200" data-template="<?= $key ?>">
                        <div class="text-center">
                            <div class="text-4xl mb-4"><?= $template['icon'] ?></div>
                            <h3 class="font-semibold text-gray-800 mb-2"><?= htmlspecialchars($template['name']) ?></h3>
                            <p class="text-gray-600 text-sm"><?= htmlspecialchars($template['description']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-green-600 to-teal-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">📝 Business Information</h2>
                <p class="text-green-100 mt-2">Provide your business details to customize the terms</p>
            </div>
            
            <form method="POST" id="termsForm" class="p-8">
                <input type="hidden" name="template" id="selectedTemplate" value="basic">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <label for="business_name" class="block text-gray-700 font-semibold mb-3 text-lg">🏢 Business Name *</label>
                        <input type="text" id="business_name" name="business_name" required
                               value="<?= htmlspecialchars($_POST['business_name'] ?? '') ?>"
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg form-input focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                               placeholder="Enter your business name">
                    </div>
                    
                    <div>
                        <label for="business_type" class="block text-gray-700 font-semibold mb-3 text-lg">⚖️ Business Type *</label>
                        <select id="business_type" name="business_type" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg form-input focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                            <option value="">Select business type</option>
                            <option value="LLC" <?= ($_POST['business_type'] ?? '') === 'LLC' ? 'selected' : '' ?>>LLC (Limited Liability Company)</option>
                            <option value="Corporation" <?= ($_POST['business_type'] ?? '') === 'Corporation' ? 'selected' : '' ?>>Corporation</option>
                            <option value="Sole Proprietorship" <?= ($_POST['business_type'] ?? '') === 'Sole Proprietorship' ? 'selected' : '' ?>>Sole Proprietorship</option>
                            <option value="Partnership" <?= ($_POST['business_type'] ?? '') === 'Partnership' ? 'selected' : '' ?>>Partnership</option>
                            <option value="LLP" <?= ($_POST['business_type'] ?? '') === 'LLP' ? 'selected' : '' ?>>LLP (Limited Liability Partnership)</option>
                            <option value="Nonprofit" <?= ($_POST['business_type'] ?? '') === 'Nonprofit' ? 'selected' : '' ?>>Nonprofit Organization</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="website_url" class="block text-gray-700 font-semibold mb-3 text-lg">🌐 Website URL *</label>
                        <input type="url" id="website_url" name="website_url" required
                               value="<?= htmlspecialchars($_POST['website_url'] ?? '') ?>"
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg form-input focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                               placeholder="https://example.com">
                    </div>
                    
                    <div>
                        <label for="country" class="block text-gray-700 font-semibold mb-3 text-lg">🏛️ Governing Jurisdiction *</label>
                        <select id="country" name="country" required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg form-input focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                            <option value="">Select jurisdiction</option>
                            <option value="United States" <?= ($_POST['country'] ?? '') === 'United States' ? 'selected' : '' ?>>United States</option>
                            <option value="United Kingdom" <?= ($_POST['country'] ?? '') === 'United Kingdom' ? 'selected' : '' ?>>United Kingdom</option>
                            <option value="Canada" <?= ($_POST['country'] ?? '') === 'Canada' ? 'selected' : '' ?>>Canada</option>
                            <option value="Australia" <?= ($_POST['country'] ?? '') === 'Australia' ? 'selected' : '' ?>>Australia</option>
                            <option value="Germany" <?= ($_POST['country'] ?? '') === 'Germany' ? 'selected' : '' ?>>Germany</option>
                            <option value="France" <?= ($_POST['country'] ?? '') === 'France' ? 'selected' : '' ?>>France</option>
                            <option value="Netherlands" <?= ($_POST['country'] ?? '') === 'Netherlands' ? 'selected' : '' ?>>Netherlands</option>
                            <option value="India" <?= ($_POST['country'] ?? '') === 'India' ? 'selected' : '' ?>>India</option>
                            <option value="Singapore" <?= ($_POST['country'] ?? '') === 'Singapore' ? 'selected' : '' ?>>Singapore</option>
                            <option value="New Zealand" <?= ($_POST['country'] ?? '') === 'New Zealand' ? 'selected' : '' ?>>New Zealand</option>
                        </select>
                    </div>
                    
                    <div class="md:col-span-2">
                        <label for="contact_email" class="block text-gray-700 font-semibold mb-3 text-lg">📧 Contact Email *</label>
                        <input type="email" id="contact_email" name="contact_email" required
                               value="<?= htmlspecialchars($_POST['contact_email'] ?? '') ?>"
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg form-input focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                               placeholder="legal@example.com">
                        <p class="text-gray-600 text-sm mt-2">💡 This email will be used for legal communications and user inquiries</p>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" 
                            class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-bold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                        🔨 Generate Terms & Conditions
                    </button>
                </div>
            </form>
        </div>

        <?php if (!empty($error)): ?>
        <!-- Error Display -->
        <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg mb-8">
            <div class="flex items-center">
                <span class="text-red-500 text-2xl mr-3">❌</span>
                <div>
                    <h3 class="text-red-800 font-semibold">Generation Error</h3>
                    <p class="text-red-700 mt-1"><?= htmlspecialchars($error) ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($result): ?>
        <!-- Generated Terms Display -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8 legal-badge">
            <div class="bg-gradient-to-r from-green-500 to-emerald-500 px-8 py-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-white flex items-center">
                            <span class="mr-3">✅</span> Generated Legal Document
                        </h2>
                        <p class="text-green-100 mt-1">Professional <?= htmlspecialchars($result['template_info']['name']) ?> Terms & Conditions</p>
                    </div>
                    <div class="text-right text-green-100">
                        <div class="text-2xl font-bold"><?= number_format($result['word_count']) ?></div>
                        <div class="text-sm">words</div>
                    </div>
                </div>
            </div>
            
            <div class="p-8">
                <!-- Document Stats -->
                <div class="grid md:grid-cols-4 gap-4 mb-8 pb-6 border-b border-gray-200">
                    <div class="text-center bg-blue-50 p-4 rounded-lg">
                        <div class="text-2xl font-bold text-blue-600"><?= $result['template_info']['icon'] ?></div>
                        <div class="text-sm text-blue-800"><?= htmlspecialchars($result['template_info']['name']) ?></div>
                    </div>
                    <div class="text-center bg-green-50 p-4 rounded-lg">
                        <div class="text-2xl font-bold text-green-600"><?= number_format($result['word_count']) ?></div>
                        <div class="text-sm text-green-800">Total Words</div>
                    </div>
                    <div class="text-center bg-purple-50 p-4 rounded-lg">
                        <div class="text-2xl font-bold text-purple-600"><?= substr_count($result['terms'], '##') ?></div>
                        <div class="text-sm text-purple-800">Sections</div>
                    </div>
                    <div class="text-center bg-orange-50 p-4 rounded-lg">
                        <div class="text-2xl font-bold text-orange-600">📅</div>
                        <div class="text-sm text-orange-800">Current Date</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <button onclick="copyToClipboard()" 
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 flex items-center">
                        📋 Copy to Clipboard
                    </button>
                    <button onclick="downloadAsText()" 
                            class="bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 flex items-center">
                        💾 Download as .txt
                    </button>
                    <button onclick="printDocument()" 
                            class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-200 flex items-center">
                        🖨️ Print Document
                    </button>
                </div>

                <!-- Generated Terms Content -->
                <div class="bg-gray-50 rounded-lg border-2 border-gray-200 overflow-hidden">
                    <div class="bg-gray-200 px-6 py-3 border-b border-gray-300">
                        <h3 class="font-semibold text-gray-800 flex items-center">
                            <span class="mr-2">📜</span> Legal Document Preview
                        </h3>
                    </div>
                    <div id="termsContent" class="terms-output p-8 max-h-96 overflow-y-auto bg-white">
                        <?= nl2br(htmlspecialchars($result['terms'])) ?>
                    </div>
                </div>

                <!-- Legal Disclaimer -->
                <div class="mt-8 p-6 bg-yellow-50 border-l-4 border-yellow-500 rounded-lg">
                    <div class="flex items-start">
                        <span class="text-yellow-600 text-2xl mr-3">⚖️</span>
                        <div>
                            <h4 class="font-semibold text-yellow-800 mb-2">Important Legal Disclaimer</h4>
                            <div class="text-yellow-700 text-sm space-y-2">
                                <p><strong>This is a template document:</strong> These terms are generated based on common legal practices but are not a substitute for professional legal advice.</p>
                                <p><strong>Customization required:</strong> You should review, modify, and customize these terms to fit your specific business needs and local laws.</p>
                                <p><strong>Legal consultation recommended:</strong> Consider consulting with a qualified attorney familiar with your jurisdiction's laws before using these terms on your website.</p>
                                <p><strong>No warranty:</strong> We provide no warranty regarding the legal adequacy or completeness of these terms for your specific situation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🚀 Professional Legal Document Features</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-4xl mb-4">📋</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Multiple Templates</h3>
                        <p class="text-gray-600 text-sm">Business-specific templates for various industries and models</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">⚖️</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Legal Compliance</h3>
                        <p class="text-gray-600 text-sm">Based on standard legal practices and requirements</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🎨</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Customizable Content</h3>
                        <p class="text-gray-600 text-sm">Personalized with your business information and details</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">💾</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Export Options</h3>
                        <p class="text-gray-600 text-sm">Copy, download, or print in various formats</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template Comparison -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">📚 Template Comparison Guide</h2>
            </div>
            <div class="p-8">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Template</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Best For</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Key Features</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Special Clauses</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">🌐 Basic Website</td>
                                <td class="py-3 px-4">Informational sites, portfolios</td>
                                <td class="py-3 px-4">General usage, content protection</td>
                                <td class="py-3 px-4">User accounts, comments policy</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">🛒 E-commerce</td>
                                <td class="py-3 px-4">Online stores, retail</td>
                                <td class="py-3 px-4">Payment, shipping, returns</td>
                                <td class="py-3 px-4">Product warranties, refund policy</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">💻 SaaS/Software</td>
                                <td class="py-3 px-4">Software services, subscriptions</td>
                                <td class="py-3 px-4">Subscriptions, data handling</td>
                                <td class="py-3 px-4">Service availability, data ownership</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">📝 Blog/Content</td>
                                <td class="py-3 px-4">Content sites, blogs, media</td>
                                <td class="py-3 px-4">Content usage, user submissions</td>
                                <td class="py-3 px-4">DMCA, affiliate disclosures</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">📱 Mobile App</td>
                                <td class="py-3 px-4">Mobile applications</td>
                                <td class="py-3 px-4">App store compliance, permissions</td>
                                <td class="py-3 px-4">In-app purchases, location services</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 font-medium">🏪 Marketplace</td>
                                <td class="py-3 px-4">Multi-vendor platforms</td>
                                <td class="py-3 px-4">Buyer/seller relations, transactions</td>
                                <td class="py-3 px-4">Dispute resolution, prohibited items</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Template selection functionality
        document.querySelectorAll('.template-card').forEach(card => {
            card.addEventListener('click', function() {
                // Remove selected class from all cards
                document.querySelectorAll('.template-card').forEach(c => c.classList.remove('selected'));
                // Add selected class to clicked card
                this.classList.add('selected');
                // Update hidden input
                document.getElementById('selectedTemplate').value = this.dataset.template;
            });
        });

        // Set default selection
        document.querySelector('[data-template="basic"]').classList.add('selected');

        // Copy to clipboard
        function copyToClipboard() {
            const termsText = document.getElementById('termsContent').innerText;
            navigator.clipboard.writeText(termsText).then(() => {
                showNotification('Terms & Conditions copied to clipboard!', 'success');
            }).catch(err => {
                console.error('Failed to copy text: ', err);
                showNotification('Failed to copy to clipboard', 'error');
            });
        }

        // Download as text file
        function downloadAsText() {
            const termsText = document.getElementById('termsContent').innerText;
            const blob = new Blob([termsText], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'terms-and-conditions.txt';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
            showNotification('Terms & Conditions downloaded!', 'success');
        }

        // Print document
        function printDocument() {
            const printContent = document.getElementById('termsContent').innerHTML;
            const printWindow = window.open('', '_blank');
            printWindow.document.write(`
                <html>
                        <title>Terms and Conditions</title>
                        <style>
                            body { font-family: Georgia, serif; line-height: 1.6; margin: 40px; }
                            h1, h2 { color: #333; }
                        </style>
                    <body>${printContent}</body>
                </html>
            `);
            printWindow.document.close();
            printWindow.print();
        }

        // Notification system
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg text-white z-50 ${
                type === 'success' ? 'bg-green-500' : 'bg-red-500'
            }`;
            notification.textContent = message;
            document.body.appendChild(notification);
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Form animation on submit
        document.getElementById('termsForm').addEventListener('submit', function() {
            const button = this.querySelector('button[type="submit"]');
            button.classList.add('generate-animation');
        });

        // Auto-scroll to results after generation
        <?php if ($result): ?>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const resultsSection = document.querySelector('.legal-badge');
                if (resultsSection) {
                    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 300);
        });
        <?php endif; ?>
    </script>
</body>
<?php include 'footer.php';?>
</html>
