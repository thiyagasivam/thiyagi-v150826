<?php
// Get current page URL
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Extract state/region name from URL (e.g., "andaman-electricity-bill-calculator" → "Andaman")
$pageSlug = basename($_SERVER['REQUEST_URI'], '.php');
$stateName = ucfirst(str_replace('-', ' ', explode('-electricity', $pageSlug)[0]));

// Generate breadcrumb schema
$breadcrumbSchema = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Home",
            "item" => "https://www.thiyagi.com/"
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Electricity Board",
            "item" => "https://www.thiyagi.com/electricity-board/"
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => $stateName . " Electricity Bill Calculator",
            "item" => $currentUrl
        ]
    ]
];
?>
<?php
// Extract state name from URL (e.g., "andaman-electricity-bill-calculator" → "Andaman")
$pageSlug = basename($_SERVER['REQUEST_URI']);
$stateName = ucfirst(str_replace('-', ' ', explode('-electricity', $pageSlug)[0]));

// Generate dynamic schema
$calculatorSchema = [
    "@context" => "https://schema.org",
    "@type" => "WebApplication",
    "name" => "$stateName Electricity Bill Calculator",
    "url" => "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
    "applicationCategory" => "CalculatorApplication",
    "operatingSystem" => "Web Browser",
    "description" => "Calculate your electricity bill in $stateName based on current tariff rates."
];
?>

<script type="application/ld+json">
<?php echo json_encode($calculatorSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>