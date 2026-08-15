<?php
require_once __DIR__ . '/includes/db_bikes.php';

header('Content-Type: text/plain; charset=utf-8');

$isWebRun = isset($_GET['run']) && $_GET['run'] === '1';
$isCliRun = PHP_SAPI === 'cli' && in_array('--run', $argv ?? [], true);

if (!$isWebRun && !$isCliRun) {
    echo "Seeder ready for Keeway V302C.\n";
    echo "Run in browser: seed_bike_keeway_v302c.php?run=1\n";
    echo "Run in CLI: php seed_bike_keeway_v302c.php --run\n";
    exit;
}

$conn = getBikesDbConnection();
$conn->begin_transaction();

try {
    $brandName = 'Keeway';
    $brandSlug = 'keeway';

    $model = [
        'model_name' => 'V302C',
        'slug' => 'keeway-v302-c',
        'body_type' => 'Cruiser',
        'fuel_type' => 'Petrol - BS VI',
        'displacement_cc' => '298 cc',
        'ex_showroom_price' => '₹3.99 Lakhs*',
        'emi_info' => 'EMI starts at ₹13,300 for 3 Years',
        'hero_image_url' => 'https://bikecentral.b-cdn.net/media/models/keeway/hero/v302-c.jpg',
        'source_url' => 'https://www.bikecentral.in/keeway/v302-c/specifications',
        'source_name' => 'BikeCentral',
        'credit_text' => 'Source credit: BikeCentral',
    ];

    $highlights = [
        ['Model', 'Keeway V302C'],
        ['Body Type', 'Cruiser'],
        ['Fuel Type', 'Petrol - BS VI'],
        ['Displacement', '298 cc'],
        ['Length / Width / Height', '2120 / 836 / 1050 mm'],
        ['Ground Clearance', '158 mm'],
        ['Starting Price', '₹3.99 Lakhs'],
    ];

    $keyFeatures = [
        'Digital Console',
        'Slipper Clutch',
        '6-Speed Transmission',
        'Belt Drive',
        'Dual Channel ABS',
        'Side Stand Sensor',
    ];

    $variants = [
        ['V302C Standard Glossy Black', '₹3.99 Lakhs*', 'Disc', 'Tubeless', 'Alloy Wheel', 'https://bikecentral.b-cdn.net/media/models/keeway/v302-c/colors/glossy-black.jpg', 'Glossy Black'],
        ['V302C Standard Glossy Grey', '₹3.99 Lakhs*', 'Disc', 'Tubeless', 'Alloy Wheel', 'https://bikecentral.b-cdn.net/media/models/keeway/v302-c/colors/glossy-grey.jpg', 'Glossy Grey'],
        ['V302C Standard Glossy Red', '₹3.99 Lakhs*', 'Disc', 'Tubeless', 'Alloy Wheel', 'https://bikecentral.b-cdn.net/media/models/keeway/v302-c/colors/glossy-red.jpg', 'Glossy Red'],
    ];

    $colors = [
        ['Glossy Grey', 'https://bikecentral.b-cdn.net/media/models/keeway/v302-c/colors/glossy-grey.jpg'],
        ['Glossy Red', 'https://bikecentral.b-cdn.net/media/models/keeway/v302-c/colors/glossy-red.jpg'],
        ['Glossy Black', 'https://bikecentral.b-cdn.net/media/models/keeway/v302-c/colors/glossy-black.jpg'],
    ];

    $specs = [
        ['Dimension', 'Length / Width / Height', '2120 / 836 / 1050 mm'],
        ['Dimension', 'Ground Clearance', '158 mm'],
        ['Dimension', 'Wheelbase', '1420 mm'],
        ['Dimension', 'Seat (Length / Height)', '- / 690 mm'],
        ['Dimension', 'Fuel Tank', '15 L'],
        ['Dimension', 'Weight (Kerb / Gross)', '167 Kg / -'],

        ['Brake', 'Braking System', 'ABS'],
        ['Brake', 'Front Brake', 'Disc'],
        ['Brake', 'Rear Brake', 'Disc'],

        ['Suspension', 'Front Suspension', 'Upside-Down Forks'],
        ['Suspension', 'Rear Suspension', 'Pre-Load Adjustable Dual Shocks'],

        ['Tyres', 'Front Tyre', 'Tubeless 120/80-16'],
        ['Tyres', 'Rear Tyre', 'Tubeless 150/80-15'],
        ['Tyres', 'Wheel', 'Alloy Wheel'],

        ['Engine', 'Engine Type', 'V-Twin, Liquid-Cooled'],
        ['Engine', 'Valve System', '8-Valve, SOHC'],
        ['Engine', 'Bore / Stroke', '/'],
        ['Engine', 'Displacement', '298 cc'],
        ['Engine', 'Maximum Power', '29.5 BHP @ 8500 RPM'],
        ['Engine', 'Maximum Torque', '26.5 Nm @ 6500 RPM'],
        ['Engine', 'Fuel System', 'Fuel Injection'],
        ['Engine', 'Ignition System', 'Electronic Fuel Injection (EFI)'],
        ['Engine', 'Starting Mechanism', 'Self Start'],
        ['Engine', 'Cooling System', 'Liquid Cooled'],
        ['Engine', 'Clutch', 'Wet Multi-Plate'],
        ['Engine', 'Gearbox', '6-Speed'],

        ['Electrical', 'Electrical System', '12V DC'],
        ['Electrical', 'Head Light', 'LED'],
    ];

    $sourceUrls = [
        'https://www.bikecentral.in/keeway/v302-c',
        'https://www.bikecentral.in/keeway/v302-c/variants',
        'https://www.bikecentral.in/keeway/v302-c/specifications',
        'https://www.bikecentral.in/keeway/v302-c/colors',
    ];

    // Brand upsert
    $stmt = $conn->prepare('SELECT id FROM bike_brands WHERE slug = ? LIMIT 1');
    $stmt->bind_param('s', $brandSlug);
    $stmt->execute();
    $res = $stmt->get_result();
    $brandId = null;
    if ($row = $res->fetch_assoc()) {
        $brandId = (int)$row['id'];
    }
    $stmt->close();

    if (!$brandId) {
        $stmt = $conn->prepare('INSERT INTO bike_brands (name, slug) VALUES (?, ?)');
        $stmt->bind_param('ss', $brandName, $brandSlug);
        $stmt->execute();
        $brandId = (int)$stmt->insert_id;
        $stmt->close();
    }

    // Model upsert
    $stmt = $conn->prepare('SELECT id FROM bike_models WHERE slug = ? LIMIT 1');
    $stmt->bind_param('s', $model['slug']);
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
            $model['model_name'],
            $model['slug'],
            $model['body_type'],
            $model['fuel_type'],
            $model['displacement_cc'],
            $model['ex_showroom_price'],
            $model['emi_info'],
            $model['hero_image_url'],
            $model['source_url'],
            $model['source_name'],
            $model['credit_text']
        );
        $stmt->execute();
        $modelId = (int)$stmt->insert_id;
        $stmt->close();
    } else {
        $stmt = $conn->prepare('UPDATE bike_models SET brand_id=?, model_name=?, body_type=?, fuel_type=?, displacement_cc=?, ex_showroom_price=?, emi_info=?, hero_image_url=?, source_url=?, source_name=?, credit_text=? WHERE id=?');
        $stmt->bind_param(
            'issssssssssi',
            $brandId,
            $model['model_name'],
            $model['body_type'],
            $model['fuel_type'],
            $model['displacement_cc'],
            $model['ex_showroom_price'],
            $model['emi_info'],
            $model['hero_image_url'],
            $model['source_url'],
            $model['source_name'],
            $model['credit_text'],
            $modelId
        );
        $stmt->execute();
        $stmt->close();

        // Clear existing child rows for clean reseed
        $conn->query('DELETE FROM bike_highlights WHERE model_id=' . (int)$modelId);
        $conn->query('DELETE FROM bike_key_features WHERE model_id=' . (int)$modelId);
        $conn->query('DELETE FROM bike_variants WHERE model_id=' . (int)$modelId);
        $conn->query('DELETE FROM bike_colors WHERE model_id=' . (int)$modelId);
        $conn->query('DELETE FROM bike_specs WHERE model_id=' . (int)$modelId);
        $conn->query('DELETE FROM bike_source_snapshots WHERE model_id=' . (int)$modelId);
    }

    $stmt = $conn->prepare('INSERT INTO bike_highlights (model_id, label_name, label_value, sort_order) VALUES (?, ?, ?, ?)');
    $i = 1;
    foreach ($highlights as $row) {
        $stmt->bind_param('issi', $modelId, $row[0], $row[1], $i);
        $stmt->execute();
        $i++;
    }
    $stmt->close();

    $stmt = $conn->prepare('INSERT INTO bike_key_features (model_id, feature_name, sort_order) VALUES (?, ?, ?)');
    $i = 1;
    foreach ($keyFeatures as $feature) {
        $stmt->bind_param('isi', $modelId, $feature, $i);
        $stmt->execute();
        $i++;
    }
    $stmt->close();

    $stmt = $conn->prepare('INSERT INTO bike_variants (model_id, variant_name, ex_showroom_price, brake_type, tyre_type, wheel_type, image_url, color_name, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $i = 1;
    foreach ($variants as $v) {
        $stmt->bind_param('isssssssi', $modelId, $v[0], $v[1], $v[2], $v[3], $v[4], $v[5], $v[6], $i);
        $stmt->execute();
        $i++;
    }
    $stmt->close();

    $stmt = $conn->prepare('INSERT INTO bike_colors (model_id, color_name, image_url, sort_order) VALUES (?, ?, ?, ?)');
    $i = 1;
    foreach ($colors as $c) {
        $stmt->bind_param('issi', $modelId, $c[0], $c[1], $i);
        $stmt->execute();
        $i++;
    }
    $stmt->close();

    $stmt = $conn->prepare('INSERT INTO bike_specs (model_id, spec_group, spec_label, spec_value, sort_order) VALUES (?, ?, ?, ?, ?)');
    $i = 1;
    foreach ($specs as $s) {
        $stmt->bind_param('isssi', $modelId, $s[0], $s[1], $s[2], $i);
        $stmt->execute();
        $i++;
    }
    $stmt->close();

    $contentHash = hash('sha256', json_encode([$model, $highlights, $keyFeatures, $variants, $colors, $specs], JSON_UNESCAPED_UNICODE));
    $snapshotNotes = 'Seeded from BikeCentral Keeway V302C pages (overview/variants/specs/colors).';

    $stmt = $conn->prepare('INSERT INTO bike_source_snapshots (model_id, source_url, content_hash, notes) VALUES (?, ?, ?, ?)');
    foreach ($sourceUrls as $url) {
        $stmt->bind_param('isss', $modelId, $url, $contentHash, $snapshotNotes);
        $stmt->execute();
    }
    $stmt->close();

    $conn->commit();

    echo "Seed success\n";
    echo "Brand ID: {$brandId}\n";
    echo "Model ID: {$modelId}\n";
    echo "Inserted highlights: " . count($highlights) . "\n";
    echo "Inserted key features: " . count($keyFeatures) . "\n";
    echo "Inserted variants: " . count($variants) . "\n";
    echo "Inserted colors: " . count($colors) . "\n";
    echo "Inserted specs: " . count($specs) . "\n";
    echo "Inserted source snapshots: " . count($sourceUrls) . "\n";
} catch (Throwable $e) {
    $conn->rollback();
    http_response_code(500);
    echo 'Seed failed: ' . $e->getMessage() . "\n";
} finally {
    $conn->close();
}
