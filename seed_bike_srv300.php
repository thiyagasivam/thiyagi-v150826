<?php
require_once __DIR__ . '/includes/db_bikes.php';

header('Content-Type: text/plain; charset=utf-8');

$isWebRun = isset($_GET['run']) && $_GET['run'] === '1';
$isCliRun = PHP_SAPI === 'cli' && in_array('--run', $argv ?? [], true);
if (!$isWebRun && !$isCliRun) {
    echo "Seeder ready.\n";
    echo "Run in browser: seed_bike_srv300.php?run=1\n";
    echo "Run in CLI: php seed_bike_srv300.php --run\n";
    exit;
}

$conn = getBikesDbConnection();
$conn->begin_transaction();

try {
    $brandName = 'QJ Motor';
    $brandSlug = 'qj-motor';

    $model = [
        'model_name' => 'SRV 300',
        'slug' => 'qj-motor-srv-300',
        'body_type' => 'Cruiser',
        'fuel_type' => 'Petrol - BS VI',
        'displacement_cc' => '296 cc',
        'ex_showroom_price' => '₹3.29 Lakhs*',
        'emi_info' => 'EMI starts at ₹10,967 for 3 Years',
        'hero_image_url' => 'https://bikecentral.b-cdn.net/media/models/qj-motor/hero/srv-300.jpg',
        'source_url' => 'https://www.bikecentral.in/qj-motor/srv-300/specifications',
        'source_name' => 'BikeCentral',
        'credit_text' => 'Source credit: BikeCentral',
    ];

    $highlights = [
        ['Model', 'QJ Motor SRV 300'],
        ['Body Type', 'Cruiser'],
        ['Fuel Type', 'Petrol - BS VI'],
        ['Displacement', '296 cc'],
        ['Length / Width / Height', '2110 / 850 / 1100 mm'],
        ['Ground Clearance', '160 mm'],
        ['Starting Price', '₹3.29 Lakhs'],
    ];

    $keyFeatures = [
        'Digital Console',
        'USB Charger',
        'Dual Channel ABS',
        'Engine Kill Switch',
        'Side Stand Indicator',
        'Low Seat Height',
        'Hazard Lights',
        'Pass Switch',
    ];

    $variants = [
        ['SRV 300 STD 2.0 Black', '₹3.29 Lakhs*', 'Disc', 'Tubeless', 'Alloy Wheel', 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/black.jpg', 'Black'],
        ['SRV 300 STD 2.0 Red', '₹3.29 Lakhs*', 'Disc', 'Tubeless', 'Alloy Wheel', 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/red.jpg', 'Red'],
    ];

    $colors = [
        ['Red', 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/red.jpg'],
        ['Black', 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/black.jpg'],
    ];

    $specs = [
        ['Dimension', 'Length / Width / Height', '2110 / 850 / 1100 mm'],
        ['Dimension', 'Ground Clearance', '160 mm'],
        ['Dimension', 'Wheelbase', '1400 mm'],
        ['Dimension', 'Seat (Length / Height)', '- / 700 mm'],
        ['Dimension', 'Fuel Tank', '13.5 L'],
        ['Dimension', 'Weight (Kerb / Gross)', '164 Kg / -'],

        ['Brake', 'Braking System', 'ABS (Dual Channel)'],
        ['Brake', 'Front Brake', 'Disc'],
        ['Brake', 'Rear Brake', 'Disc'],

        ['Suspension', 'Front Suspension', 'Telescopic Upside-Down'],
        ['Suspension', 'Rear Suspension', 'Telescopic Coil Spring Oil Damped'],

        ['Tyres', 'Front Tyre', 'Tubeless 120/80-16'],
        ['Tyres', 'Rear Tyre', 'Tubeless 150/80-15'],
        ['Tyres', 'Wheel', 'Alloy Wheel'],

        ['Engine', 'Engine Type', 'V-Twin Cylinder, 4 Stroke, Liquid Cooled'],
        ['Engine', 'Valve System', 'SOHC, 8 valves'],
        ['Engine', 'Bore / Stroke', '/'],
        ['Engine', 'Displacement', '296 cc'],
        ['Engine', 'Maximum Power', '29.8 BHP @ 9000 RPM'],
        ['Engine', 'Maximum Torque', '26 Nm @ 5000 RPM'],
        ['Engine', 'Cooling System', 'Liquid Cooled'],
        ['Engine', 'Gearbox', '6-Speed'],

        ['Electrical', 'Head Light', 'Halogen'],
        ['Electrical', 'Tail Light', 'LED'],
        ['Electrical', 'Turn Signal Light', 'LED'],
        ['Electrical', 'Daytime Running Light', 'No'],
        ['Electrical', 'Low Fuel Indicator', 'Yes'],

        ['Features', 'Instrument Cluster', 'Yes (Digital)'],
        ['Features', 'Speedometer', 'Yes (Digital)'],
        ['Features', 'Odometer', 'Yes'],
        ['Features', 'Tripmeter', 'Yes (Digital)'],
        ['Features', 'Tachometer', 'Yes (Digital)'],
        ['Features', 'Fuel Gauge', 'Yes (Digital)'],
        ['Features', 'Clock', 'Yes'],
        ['Features', 'Gear Indicator', 'Yes'],
        ['Features', 'Push Button Start', 'Yes'],
        ['Features', 'Passenger Footrest', 'Yes'],
        ['Features', 'Seat Type', 'Yes (Single)'],

        ['Safety Features', 'Anti-lock Braking System', 'Yes (Dual Channel)'],
        ['Safety Features', 'Side Stand Alert', 'Yes'],
        ['Safety Features', 'Pass Light', 'Yes'],
        ['Safety Features', 'Hazard Warning Indicator', 'Yes'],
        ['Safety Features', 'Pillion Grabrail', 'Yes'],
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
        $brandId = $stmt->insert_id;
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
        $modelId = $stmt->insert_id;
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

        // Clear old child data for idempotent reseed
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

    // Snapshot log
    $snapshotNotes = 'Seeded from SRV 300 source pages.';
    $contentHash = hash('sha256', json_encode([$model, $highlights, $keyFeatures, $variants, $colors, $specs], JSON_UNESCAPED_UNICODE));
    $stmt = $conn->prepare('INSERT INTO bike_source_snapshots (model_id, source_url, content_hash, notes) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('isss', $modelId, $model['source_url'], $contentHash, $snapshotNotes);
    $stmt->execute();
    $stmt->close();

    $conn->commit();

    echo "Seed success\n";
    echo "Brand ID: " . $brandId . "\n";
    echo "Model ID: " . $modelId . "\n";
    echo "Inserted highlights: " . count($highlights) . "\n";
    echo "Inserted key features: " . count($keyFeatures) . "\n";
    echo "Inserted variants: " . count($variants) . "\n";
    echo "Inserted colors: " . count($colors) . "\n";
    echo "Inserted specs: " . count($specs) . "\n";
} catch (Throwable $e) {
    $conn->rollback();
    http_response_code(500);
    echo "Seed failed: " . $e->getMessage() . "\n";
} finally {
    $conn->close();
}
