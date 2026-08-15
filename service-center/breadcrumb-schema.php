<?php
// Current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Derive context (brand or main index)
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$parts = explode('/', $path);
$brandName = null;
$sectionUrl = 'https://www.thiyagi.com/service-center/';

$scIdx = array_search('service-center', $parts);
if ($scIdx !== false && isset($parts[$scIdx + 1]) && $parts[$scIdx + 1] !== '' && $parts[$scIdx + 1] !== 'index.php') {
    $brandSlug = $parts[$scIdx + 1];
    $brandName = ucwords(str_replace('-', ' ', $brandSlug));
}

$items = [
    [
        '@type' => 'ListItem',
        'position' => 1,
        'name' => 'Home',
        'item' => 'https://www.thiyagi.com/'
    ],
    [
        '@type' => 'ListItem',
        'position' => 2,
        'name' => 'Service Center',
        'item' => $sectionUrl
    ]
];

if ($brandName) {
    $items[] = [
        '@type' => 'ListItem',
        'position' => 3,
        'name' => $brandName . ' Service Centers',
        'item' => $currentUrl
    ];
}

$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $items
];

$pageName = $brandName ? ($brandName . ' Service Centers') : 'Service Centers Directory';
$webPageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $pageName,
    'url' => $currentUrl,
    'description' => $brandName
        ? ('Find authorized ' . $brandName . ' service centers and official support locations.')
        : 'Browse popular brands and find authorized service centers near you.'
];
?>
<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); ?>
</script>
<script type="application/ld+json">
<?php echo json_encode($webPageSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); ?>
</script>
