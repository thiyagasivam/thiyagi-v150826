<?php
// Build current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

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
    'name' => 'RTO Details',
    'item' => 'https://www.thiyagi.com/rto-details/'
  ]
];

$breadcrumbSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => $items
];

$webPageSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'CollectionPage',
  'name' => 'RTO Offices & Contact Details',
  'url' => $currentUrl,
  'description' => 'Search Regional Transport Offices (RTO) by city or RTO number, view addresses and open map links.'
];
?>
<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>
<script type="application/ld+json">
<?php echo json_encode($webPageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>
