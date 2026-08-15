<?php
require_once __DIR__ . '/includes/db_bikes.php';

header('Content-Type: text/plain; charset=utf-8');

$isWebRun = isset($_GET['run']) && $_GET['run'] === '1';
$isCliRun = PHP_SAPI === 'cli' && in_array('--run', $argv ?? [], true);

if (!$isWebRun && !$isCliRun) {
    echo "Batch importer ready.\n";
    echo "Run in browser: seed_bike_batch_10_urls.php?run=1\n";
    echo "Run in CLI: php seed_bike_batch_10_urls.php --run\n";
    exit;
}

$inputUrls = [
    'https://www.bikecentral.in/ktm/rc-200',
    'https://bikecentral.in/yamaha/mt-15-v2/',
    'https://www.bikecentral.in/bajaj/pulsar-ns-125/',
    'https://www.bikecentral.in/royal-enfield/hunter-350/',
    'https://www.bikecentral.in/royal-enfield/bullet-350',
    'https://www.bikecentral.in/royal-enfield/continental-gt-650/',
    'https://www.bikecentral.in/yamaha/xsr-155',
    'https://www.bikecentral.in/honda/sp-125/',
    'https://www.bikecentral.in/honda/activa-6g/',
    'https://www.bikecentral.in/royal-enfield/bullet-350/',
];

function normalizeBikeCentralUrl($url)
{
    $url = trim($url);
    if ($url === '') {
        return '';
    }

    if (stripos($url, 'http://') === 0) {
        $url = 'https://' . substr($url, 7);
    }

    if (stripos($url, 'https://') !== 0) {
        $url = 'https://' . ltrim($url, '/');
    }

    $parts = parse_url($url);
    if (!$parts || empty($parts['host']) || empty($parts['path'])) {
        return '';
    }

    $host = strtolower($parts['host']);
    if ($host === 'bikecentral.in') {
        $host = 'www.bikecentral.in';
    }

    $path = rtrim($parts['path'], '/');
    if ($path === '') {
        return '';
    }

    return 'https://' . $host . $path;
}

function fetchUrlContent($url)
{
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 20,
        CURLOPT_TIMEOUT => 35,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0 Safari/537.36',
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_HTTPHEADER => [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-US,en;q=0.9',
        ],
    ]);

    $body = curl_exec($ch);
    $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err = curl_error($ch);
    curl_close($ch);

    if ($body === false || $body === '' || $httpCode >= 400) {
        return [null, null, $err !== '' ? $err : ('HTTP ' . $httpCode)];
    }

    $title = '';
    if (preg_match('/<title[^>]*>(.*?)<\/title>/is', $body, $m)) {
        $title = html_entity_decode(trim(strip_tags($m[1])), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    return [$body, $title, null];
}

function htmlToPlainText($html)
{
    $clean = preg_replace('/<script\b[^>]*>.*?<\/script>/is', ' ', $html);
    $clean = preg_replace('/<style\b[^>]*>.*?<\/style>/is', ' ', $clean);
    $clean = html_entity_decode(strip_tags($clean), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $clean = preg_replace('/\s+/u', ' ', $clean);
    return trim($clean);
}

function extractBikeCdnUrls($html)
{
    $decoded = rawurldecode(html_entity_decode((string)$html, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    if (!preg_match_all('~https?://[^\s"<>]+bikecentral\.b-cdn\.net[^\s"<>]*~i', $decoded, $m)) {
        return [];
    }

    $urls = [];
    foreach ($m[0] as $url) {
        $clean = trim($url);
        $clean = preg_replace('/[)\],]+$/', '', $clean);
        if ($clean !== '') {
            $urls[$clean] = true;
        }
    }
    return array_keys($urls);
}

function extractHeroImageUrl($overviewHtml, $brandSlug, $modelSlugPart)
{
    $urls = extractBikeCdnUrls($overviewHtml);
    $brandMarker = '/media/models/' . strtolower($brandSlug) . '/hero/';
    foreach ($urls as $url) {
        if (stripos($url, $brandMarker) !== false) {
            return $url;
        }
    }

    $modelMarker = '/media/models/' . strtolower($brandSlug) . '/' . strtolower($modelSlugPart) . '/';
    foreach ($urls as $url) {
        if (stripos($url, $modelMarker) !== false) {
            return $url;
        }
    }

    return $urls[0] ?? null;
}

function extractImagesWithAlt($html)
{
    $rows = [];
    if (!preg_match_all('~<img[^>]*alt=["\']([^"\']+)["\'][^>]*src=["\']([^"\']+)["\'][^>]*>~i', (string)$html, $m, PREG_SET_ORDER)) {
        return $rows;
    }

    foreach ($m as $match) {
        $alt = trim(html_entity_decode($match[1], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        $src = rawurldecode(html_entity_decode($match[2], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        $imageUrl = null;

        if (preg_match('~https?://[^\s"<>]+bikecentral\.b-cdn\.net[^\s"<>]*~i', $src, $u)) {
            $imageUrl = $u[0];
        } else {
            parse_str((string)parse_url($src, PHP_URL_QUERY), $q);
            if (!empty($q['url']) && stripos((string)$q['url'], 'bikecentral.b-cdn.net') !== false) {
                $imageUrl = rawurldecode((string)$q['url']);
            }
        }

        if ($imageUrl) {
            $rows[] = ['alt' => $alt, 'image' => $imageUrl];
        }
    }

    return $rows;
}

function isLikelyColorName($name)
{
    $name = trim($name);
    if ($name === '' || mb_strlen($name, 'UTF-8') > 40) {
        return false;
    }

    if (preg_match('/(bluecorp|software|pvt|ltd|india|bikecentral|prices|specifications|variants|overview)/i', $name)) {
        return false;
    }

    return (bool)preg_match('/(Black|Blue|Red|Grey|Gray|White|Silver|Orange|Yellow|Green|Matt|Matte|Glossy|Metallic|Brown|Gold)/i', $name);
}

function slugToName($slug)
{
    return ucwords(str_replace('-', ' ', $slug));
}

function extractSingle($pattern, $text)
{
    if (preg_match($pattern, $text, $m)) {
        return trim($m[1]);
    }
    return '';
}

function extractAllUnique($pattern, $text)
{
    if (!preg_match_all($pattern, $text, $m)) {
        return [];
    }

    $items = [];
    foreach ($m[1] as $row) {
        $value = trim($row);
        if ($value !== '') {
            $items[$value] = true;
        }
    }
    return array_keys($items);
}

function clipText($value, $max = 255)
{
    $value = trim($value);
    if (mb_strlen($value, 'UTF-8') <= $max) {
        return $value;
    }
    return mb_substr($value, 0, $max, 'UTF-8');
}

function parseBikeData($baseUrl, $overviewText, $variantsText, $specsText, $colorsText, $title, $overviewHtml, $variantsHtml, $specsHtml, $colorsHtml)
{
    $parts = parse_url($baseUrl);
    $pathParts = array_values(array_filter(explode('/', trim($parts['path'] ?? '', '/'))));
    if (count($pathParts) < 2) {
        throw new RuntimeException('Unable to parse brand/model from URL: ' . $baseUrl);
    }

    $brandSlug = strtolower($pathParts[0]);
    $modelSlugPart = strtolower($pathParts[1]);
    $slug = $brandSlug . '-' . $modelSlugPart;

    $brandName = slugToName($brandSlug);
    $modelName = strtoupper($modelSlugPart) === $modelSlugPart ? $modelSlugPart : slugToName($modelSlugPart);

    if ($title !== '') {
        $titleMain = preg_split('/\s*[-|]\s*/', $title)[0] ?? '';
        $titleMain = trim($titleMain);
        if ($titleMain !== '') {
            $modelName = preg_replace('/^' . preg_quote($brandName, '/') . '\s*/i', '', $titleMain);
            $modelName = trim($modelName);
            if ($modelName === '') {
                $modelName = $titleMain;
            }
        }
    }

    $allText = trim($overviewText . ' ' . $variantsText . ' ' . $specsText . ' ' . $colorsText);

    $price = extractSingle('/(₹\s?[0-9][0-9.,]*\s*(?:Lakhs?|Crore|Onwards)?\*?)/u', $allText);
    $emi = extractSingle('/(EMI\s+starts\s+at\s+₹\s?[0-9][0-9,]*\s+for\s+[0-9]+\s+Years?)/iu', $allText);
    $bodyType = extractSingle('/Body\s*Type\s*([A-Za-z\- ]{3,40})/u', $overviewText);
    $fuelType = extractSingle('/Fuel\s*Type\s*([A-Za-z0-9\- ]{3,50})/u', $overviewText);
    $displacement = extractSingle('/Displacement\s*([0-9]{2,4}(?:\.[0-9]+)?\s*cc)/iu', $allText);

    $highlights = [];
    $highlightLabels = [
        'Model',
        'Body Type',
        'Fuel Type',
        'Displacement',
        'Length / Width / Height',
        'Ground Clearance',
        'Wheelbase',
        'Fuel Tank',
        'Starting Price',
    ];

    foreach ($highlightLabels as $label) {
        $value = '';
        if ($label === 'Model') {
            $value = trim($brandName . ' ' . $modelName);
        } elseif ($label === 'Starting Price') {
            $value = $price;
        } else {
            $pattern = '/' . preg_quote($label, '/') . '\\s*([^₹]{1,60}?)(?=\\s(?:Model|Body\\s*Type|Fuel\\s*Type|Displacement|Length\\s*\\/\\s*Width\\s*\\/\\s*Height|Ground\\s*Clearance|Wheelbase|Fuel\\s*Tank|Starting\\s*Price|Key\\s*Features|Prices|Specifications)\\b|$)/iu';
            $value = extractSingle($pattern, $overviewText . ' ' . $specsText);
        }

        $value = clipText($value, 255);
        if ($value !== '') {
            $highlights[] = [$label, $value];
        }
    }

    $features = [];
    $featureMatches = extractAllUnique('/•\s*([^•₹]{2,80})/u', $overviewText);
    foreach ($featureMatches as $feature) {
        $feature = clipText($feature, 180);
        if ($feature !== '' && stripos($feature, 'Key Features') === false) {
            $features[] = $feature;
        }
    }

    if (count($features) === 0) {
        $fallbackFeatures = ['Digital Console', 'ABS'];
        foreach ($fallbackFeatures as $f) {
            $features[] = $f;
        }
    }

    $variantRows = [];
    if (preg_match_all('/([A-Za-z0-9\- ]{2,80})\s+(₹\s?[0-9][0-9.,]*\s*(?:Lakhs?|Crore)?\*?)/u', $variantsText, $m, PREG_SET_ORDER)) {
        foreach ($m as $row) {
            $name = trim($row[1]);
            $vPrice = trim($row[2]);
            if ($name === '' || mb_strlen($name, 'UTF-8') < 3) {
                continue;
            }
            $variantRows[] = [clipText($name, 200), clipText($vPrice, 80), 'Disc', 'Tubeless', 'Alloy Wheel', null, null];
            if (count($variantRows) >= 8) {
                break;
            }
        }
    }

    if (count($variantRows) === 0) {
        $variantRows[] = [clipText($modelName . ' Standard', 200), clipText($price !== '' ? $price : 'Price On Request', 80), 'Disc', 'Tubeless', 'Alloy Wheel', null, null];
    }

    $colors = [];
    $colorMatches = extractAllUnique('/\b([A-Z][a-z]+(?:\s+[A-Z][a-z]+){0,2})\b/u', $colorsText);
    $colorStop = [
        'Colors', 'Color', 'Keeway', 'Ktm', 'Yamaha', 'Honda', 'Bajaj', 'Royal Enfield',
        'Specifications', 'Variants', 'Overview', 'Features', 'Prices', 'Model', 'India', 'Bikecentral'
    ];

    foreach ($colorMatches as $c) {
        $name = trim($c);
        if (in_array($name, $colorStop, true)) {
            continue;
        }
        if (mb_strlen($name, 'UTF-8') < 3 || mb_strlen($name, 'UTF-8') > 30) {
            continue;
        }
        if (!preg_match('/(Black|Blue|Red|Grey|Gray|White|Silver|Orange|Yellow|Green|Matt|Matte|Glossy|Metallic|Brown|Gold)/i', $name)) {
            continue;
        }
        $colors[$name] = true;
        if (count($colors) >= 8) {
            break;
        }
    }

    if (count($colors) === 0) {
        $colors['Standard Color'] = true;
    }

    $specLabels = [
        'Length / Width / Height', 'Ground Clearance', 'Wheelbase', 'Seat \(Length / Height\)', 'Fuel Tank',
        'Weight \(Kerb / Gross\)', 'Braking System', 'Front Brake', 'Rear Brake', 'Front Suspension',
        'Rear Suspension', 'Front Tyre', 'Rear Tyre', 'Wheel', 'Engine Type', 'Valve System', 'Bore / Stroke',
        'Displacement', 'Maximum Power', 'Maximum Torque', 'Fuel System', 'Ignition System',
        'Starting Mechanism', 'Cooling System', 'Clutch', 'Gearbox', 'Electrical System', 'Head Light',
        'Tail Light', 'Turn Signal Light', 'Low Fuel Indicator', 'Instrument Cluster', 'Speedometer',
        'Odometer', 'Tripmeter', 'Tachometer', 'Fuel Gauge', 'Clock', 'Gear Indicator', 'Push Button Start',
        'Passenger Footrest', 'Seat Type', 'Anti-lock Braking System', 'Side Stand Alert', 'Pass Light',
        'Hazard Warning Indicator', 'Pillion Grabrail'
    ];

    $specRows = [];
    $specSource = $specsText !== '' ? $specsText : $allText;
    $quotedLabels = array_map(function ($label) {
        return preg_quote(str_replace('\\', '', $label), '/');
    }, $specLabels);

    foreach ($specLabels as $labelPattern) {
        $cleanLabel = str_replace('\\', '', $labelPattern);
        $quotedLabel = preg_quote($cleanLabel, '/');
        $pattern = '/' . $quotedLabel . '\\s*([^₹]{1,120}?)(?=\\s(?:' . implode('|', $quotedLabels) . '|Dimension|Brake|Suspension|Tyres|Engine|Electrical|Features|Safety\\s*Features)\\b|$)/iu';
        $value = extractSingle($pattern, $specSource);
        $value = clipText($value, 255);
        if ($value === '') {
            continue;
        }

        $group = 'General';
        if (preg_match('/Length|Ground Clearance|Wheelbase|Seat|Fuel Tank|Weight/i', $cleanLabel)) {
            $group = 'Dimension';
        } elseif (preg_match('/Brake|Braking/i', $cleanLabel)) {
            $group = 'Brake';
        } elseif (preg_match('/Suspension/i', $cleanLabel)) {
            $group = 'Suspension';
        } elseif (preg_match('/Tyre|Wheel/i', $cleanLabel)) {
            $group = 'Tyres';
        } elseif (preg_match('/Engine|Valve|Bore|Power|Torque|Fuel System|Ignition|Cooling|Clutch|Gearbox|Displacement|Starting/i', $cleanLabel)) {
            $group = 'Engine';
        } elseif (preg_match('/Head Light|Tail Light|Electrical|Turn Signal|Low Fuel/i', $cleanLabel)) {
            $group = 'Electrical';
        } elseif (preg_match('/Instrument|Speedometer|Odometer|Tripmeter|Tachometer|Fuel Gauge|Clock|Gear Indicator|Push Button Start|Passenger Footrest|Seat Type/i', $cleanLabel)) {
            $group = 'Features';
        } elseif (preg_match('/Anti-lock|Side Stand|Pass Light|Hazard|Pillion/i', $cleanLabel)) {
            $group = 'Safety Features';
        }

        $key = $group . '|' . $cleanLabel;
        $specRows[$key] = [$group, $cleanLabel, $value];
    }

    if (count($specRows) === 0 && $displacement !== '') {
        $specRows['Engine|Displacement'] = ['Engine', 'Displacement', $displacement];
    }

    $heroImageUrl = extractHeroImageUrl($overviewHtml, $brandSlug, $modelSlugPart);

    $variantImages = extractImagesWithAlt($variantsHtml);
    for ($i = 0; $i < count($variantRows); $i++) {
        if (isset($variantImages[$i])) {
            $variantRows[$i][5] = $variantImages[$i]['image'];
            if (isLikelyColorName($variantImages[$i]['alt'])) {
                $variantRows[$i][6] = clipText($variantImages[$i]['alt'], 80);
            }
        }
    }

    $colorsMap = [];
    foreach (extractImagesWithAlt($colorsHtml) as $img) {
        $alt = trim($img['alt']);
        if (!isLikelyColorName($alt)) {
            continue;
        }
        $colorsMap[$alt] = $img['image'];
    }

    if (count($colorsMap) === 0) {
        foreach ($colors as $colorName => $_bool) {
            if (isLikelyColorName($colorName)) {
                $colorsMap[$colorName] = null;
            }
        }
    }

    if (count($colorsMap) === 0) {
        $colorsMap['Standard Color'] = null;
    }

    return [
        'brand_name' => $brandName,
        'brand_slug' => $brandSlug,
        'model_name' => $modelName,
        'slug' => $slug,
        'body_type' => clipText($bodyType, 80),
        'fuel_type' => clipText($fuelType, 80),
        'displacement_cc' => clipText($displacement, 40),
        'ex_showroom_price' => clipText($price, 80),
        'emi_info' => clipText($emi, 120),
        'hero_image_url' => $heroImageUrl,
        'source_url' => $baseUrl . '/specifications',
        'source_name' => 'BikeCentral',
        'credit_text' => 'Source credit: BikeCentral',
        'highlights' => array_values($highlights),
        'key_features' => array_values(array_unique($features)),
        'variants' => array_values($variantRows),
        'colors' => array_map(function ($name) use ($colorsMap) {
            return [$name, $colorsMap[$name]];
        }, array_keys($colorsMap)),
        'specs' => array_values($specRows),
    ];
}

function upsertBikeModel(mysqli $conn, array $modelData, array $sourceSnapshots)
{
    $stmt = $conn->prepare('SELECT id FROM bike_brands WHERE slug = ? LIMIT 1');
    $stmt->bind_param('s', $modelData['brand_slug']);
    $stmt->execute();
    $res = $stmt->get_result();
    $brandId = null;
    if ($row = $res->fetch_assoc()) {
        $brandId = (int)$row['id'];
    }
    $stmt->close();

    if (!$brandId) {
        $stmt = $conn->prepare('INSERT INTO bike_brands (name, slug) VALUES (?, ?)');
        $stmt->bind_param('ss', $modelData['brand_name'], $modelData['brand_slug']);
        $stmt->execute();
        $brandId = (int)$stmt->insert_id;
        $stmt->close();
    }

    $stmt = $conn->prepare('SELECT id FROM bike_models WHERE slug = ? LIMIT 1');
    $stmt->bind_param('s', $modelData['slug']);
    $stmt->execute();
    $res = $stmt->get_result();
    $modelId = null;
    if ($row = $res->fetch_assoc()) {
        $modelId = (int)$row['id'];
    }
    $stmt->close();

    if (!$modelId) {
        $stmt = $conn->prepare('INSERT INTO bike_models (brand_id, model_name, slug, body_type, fuel_type, displacement_cc, ex_showroom_price, emi_info, hero_image_url, source_url, source_name, credit_text) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->bind_param(
            'isssssssssss',
            $brandId,
            $modelData['model_name'],
            $modelData['slug'],
            $modelData['body_type'],
            $modelData['fuel_type'],
            $modelData['displacement_cc'],
            $modelData['ex_showroom_price'],
            $modelData['emi_info'],
            $modelData['hero_image_url'],
            $modelData['source_url'],
            $modelData['source_name'],
            $modelData['credit_text']
        );
        $stmt->execute();
        $modelId = (int)$stmt->insert_id;
        $stmt->close();
    } else {
        $stmt = $conn->prepare('UPDATE bike_models SET brand_id=?, model_name=?, body_type=?, fuel_type=?, displacement_cc=?, ex_showroom_price=?, emi_info=?, hero_image_url=?, source_url=?, source_name=?, credit_text=? WHERE id=?');
        $stmt->bind_param(
            'issssssssssi',
            $brandId,
            $modelData['model_name'],
            $modelData['body_type'],
            $modelData['fuel_type'],
            $modelData['displacement_cc'],
            $modelData['ex_showroom_price'],
            $modelData['emi_info'],
            $modelData['hero_image_url'],
            $modelData['source_url'],
            $modelData['source_name'],
            $modelData['credit_text'],
            $modelId
        );
        $stmt->execute();
        $stmt->close();

        $conn->query('DELETE FROM bike_highlights WHERE model_id=' . $modelId);
        $conn->query('DELETE FROM bike_key_features WHERE model_id=' . $modelId);
        $conn->query('DELETE FROM bike_variants WHERE model_id=' . $modelId);
        $conn->query('DELETE FROM bike_colors WHERE model_id=' . $modelId);
        $conn->query('DELETE FROM bike_specs WHERE model_id=' . $modelId);
        $conn->query('DELETE FROM bike_source_snapshots WHERE model_id=' . $modelId);
    }

    if (!empty($modelData['highlights'])) {
        $stmt = $conn->prepare('INSERT INTO bike_highlights (model_id, label_name, label_value, sort_order) VALUES (?, ?, ?, ?)');
        $i = 1;
        foreach ($modelData['highlights'] as $h) {
            $stmt->bind_param('issi', $modelId, $h[0], $h[1], $i);
            $stmt->execute();
            $i++;
        }
        $stmt->close();
    }

    if (!empty($modelData['key_features'])) {
        $stmt = $conn->prepare('INSERT INTO bike_key_features (model_id, feature_name, sort_order) VALUES (?, ?, ?)');
        $i = 1;
        foreach ($modelData['key_features'] as $f) {
            $stmt->bind_param('isi', $modelId, $f, $i);
            $stmt->execute();
            $i++;
        }
        $stmt->close();
    }

    if (!empty($modelData['variants'])) {
        $stmt = $conn->prepare('INSERT INTO bike_variants (model_id, variant_name, ex_showroom_price, brake_type, tyre_type, wheel_type, image_url, color_name, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $i = 1;
        foreach ($modelData['variants'] as $v) {
            $stmt->bind_param('isssssssi', $modelId, $v[0], $v[1], $v[2], $v[3], $v[4], $v[5], $v[6], $i);
            $stmt->execute();
            $i++;
        }
        $stmt->close();
    }

    if (!empty($modelData['colors'])) {
        $stmt = $conn->prepare('INSERT INTO bike_colors (model_id, color_name, image_url, sort_order) VALUES (?, ?, ?, ?)');
        $i = 1;
        foreach ($modelData['colors'] as $c) {
            $stmt->bind_param('issi', $modelId, $c[0], $c[1], $i);
            $stmt->execute();
            $i++;
        }
        $stmt->close();
    }

    if (!empty($modelData['specs'])) {
        $stmt = $conn->prepare('INSERT INTO bike_specs (model_id, spec_group, spec_label, spec_value, sort_order) VALUES (?, ?, ?, ?, ?)');
        $i = 1;
        foreach ($modelData['specs'] as $s) {
            $stmt->bind_param('isssi', $modelId, $s[0], $s[1], $s[2], $i);
            $stmt->execute();
            $i++;
        }
        $stmt->close();
    }

    $stmt = $conn->prepare('INSERT INTO bike_source_snapshots (model_id, source_url, content_hash, notes) VALUES (?, ?, ?, ?)');
    foreach ($sourceSnapshots as $sourceUrl => $snapshot) {
        $hash = hash('sha256', $snapshot['text']);
        $notes = $snapshot['notes'];
        $stmt->bind_param('isss', $modelId, $sourceUrl, $hash, $notes);
        $stmt->execute();
    }
    $stmt->close();

    return $modelId;
}

$uniqueUrls = [];
foreach ($inputUrls as $url) {
    $normalized = normalizeBikeCentralUrl($url);
    if ($normalized !== '') {
        $uniqueUrls[$normalized] = true;
    }
}

$urls = array_keys($uniqueUrls);
if (count($urls) === 0) {
    http_response_code(400);
    echo "No valid URLs supplied.\n";
    exit;
}

$conn = getBikesDbConnection();

$successCount = 0;
$failCount = 0;

foreach ($urls as $url) {
    $overviewUrl = $url;
    $variantsUrl = $url . '/variants';
    $specsUrl = $url . '/specifications';
    $colorsUrl = $url . '/colors';

    try {
        $conn->begin_transaction();

        [$overviewHtml, $overviewTitle, $err1] = fetchUrlContent($overviewUrl);
        [$variantsHtml, $_, $err2] = fetchUrlContent($variantsUrl);
        [$specsHtml, $__2, $err3] = fetchUrlContent($specsUrl);
        [$colorsHtml, $__3, $err4] = fetchUrlContent($colorsUrl);

        if ($overviewHtml === null) {
            throw new RuntimeException('Overview fetch failed for ' . $overviewUrl . ': ' . $err1);
        }

        $overviewText = htmlToPlainText($overviewHtml);
        $variantsText = $variantsHtml ? htmlToPlainText($variantsHtml) : '';
        $specsText = $specsHtml ? htmlToPlainText($specsHtml) : '';
        $colorsText = $colorsHtml ? htmlToPlainText($colorsHtml) : '';

        $modelData = parseBikeData(
            $url,
            $overviewText,
            $variantsText,
            $specsText,
            $colorsText,
            (string)$overviewTitle,
            (string)$overviewHtml,
            (string)$variantsHtml,
            (string)$specsHtml,
            (string)$colorsHtml
        );

        $sourceSnapshots = [
            $overviewUrl => [
                'text' => $overviewText,
                'notes' => clipText('Overview page text snapshot: ' . mb_substr($overviewText, 0, 2000, 'UTF-8'), 60000),
            ],
            $variantsUrl => [
                'text' => $variantsText,
                'notes' => clipText('Variants page text snapshot: ' . mb_substr($variantsText, 0, 2000, 'UTF-8'), 60000),
            ],
            $specsUrl => [
                'text' => $specsText,
                'notes' => clipText('Specifications page text snapshot: ' . mb_substr($specsText, 0, 2000, 'UTF-8'), 60000),
            ],
            $colorsUrl => [
                'text' => $colorsText,
                'notes' => clipText('Colors page text snapshot: ' . mb_substr($colorsText, 0, 2000, 'UTF-8'), 60000),
            ],
        ];

        $modelId = upsertBikeModel($conn, $modelData, $sourceSnapshots);

        $conn->commit();
        $successCount++;

        echo "Imported: " . $modelData['brand_name'] . ' ' . $modelData['model_name'] . " | slug=" . $modelData['slug'] . " | model_id=" . $modelId . "\n";
    } catch (Throwable $e) {
        $conn->rollback();
        $failCount++;
        echo "Failed: " . $url . " | " . $e->getMessage() . "\n";
    }
}

$conn->close();

echo "\nBatch import done\n";
echo "Total unique URLs: " . count($urls) . "\n";
echo "Success: " . $successCount . "\n";
echo "Failed: " . $failCount . "\n";
