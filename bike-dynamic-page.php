<?php
if (!isset($bikeConfig) || !is_array($bikeConfig)) {
    http_response_code(500);
    echo 'Bike page configuration missing.';
    exit;
}

require_once __DIR__ . '/includes/db_bikes.php';

$slug = isset($bikeConfig['slug']) ? trim((string)$bikeConfig['slug']) : '';
$displayName = isset($bikeConfig['display_name']) ? trim((string)$bikeConfig['display_name']) : 'Bike';
$brandNameFallback = isset($bikeConfig['brand']) ? trim((string)$bikeConfig['brand']) : '';
$sourceUrl = isset($bikeConfig['bikecentral_url']) ? trim((string)$bikeConfig['bikecentral_url']) : '';

if ($slug === '') {
    http_response_code(500);
    echo 'Bike slug missing.';
    exit;
}

$model = null;
$highlights = [];
$keyFeatures = [];
$variants = [];
$colors = [];
$specsGrouped = [];
$errorMessage = '';

try {
    $conn = getBikesDbConnection();

    $stmt = $conn->prepare('SELECT bm.*, bb.name AS brand_name FROM bike_models bm INNER JOIN bike_brands bb ON bb.id = bm.brand_id WHERE bm.slug = ? LIMIT 1');
    $stmt->bind_param('s', $slug);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $model = $result->fetch_assoc();
    }
    $stmt->close();

    if ($model) {
        $stmt = $conn->prepare('SELECT label_name, label_value FROM bike_highlights WHERE model_id = ? ORDER BY sort_order ASC, id ASC');
        $stmt->bind_param('i', $model['id']);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $highlights[] = $row;
        }
        $stmt->close();

        $stmt = $conn->prepare('SELECT feature_name FROM bike_key_features WHERE model_id = ? ORDER BY sort_order ASC, id ASC');
        $stmt->bind_param('i', $model['id']);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $keyFeatures[] = $row['feature_name'];
        }
        $stmt->close();

        $stmt = $conn->prepare('SELECT variant_name, ex_showroom_price, brake_type, tyre_type, wheel_type, image_url, color_name FROM bike_variants WHERE model_id = ? ORDER BY sort_order ASC, id ASC');
        $stmt->bind_param('i', $model['id']);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $variants[] = $row;
        }
        $stmt->close();

        $stmt = $conn->prepare('SELECT color_name, image_url FROM bike_colors WHERE model_id = ? ORDER BY sort_order ASC, id ASC');
        $stmt->bind_param('i', $model['id']);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $colors[] = $row;
        }
        $stmt->close();

        $stmt = $conn->prepare('SELECT spec_group, spec_label, spec_value FROM bike_specs WHERE model_id = ? ORDER BY sort_order ASC, id ASC');
        $stmt->bind_param('i', $model['id']);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $group = $row['spec_group'] ?: 'General';
            if (!isset($specsGrouped[$group])) {
                $specsGrouped[$group] = [];
            }
            $specsGrouped[$group][] = $row;
        }
        $stmt->close();
    }

    $conn->close();
} catch (Throwable $e) {
    $errorMessage = $e->getMessage();
}

$brandName = $model['brand_name'] ?? $brandNameFallback;
$modelName = $model['model_name'] ?? $displayName;

$pageTitle = trim($modelName . ' Price, Specs, Variants, Colors | Thiyagi');
$pageDescription = trim('Check ' . $modelName . ' details including price, features, variants, colors, and specifications.');
$pageKeywords = trim(strtolower($modelName . ', ' . $slug . ', bike price, bike specifications, bike variants'));

include 'header.php';
?>

<div class="bg-slate-50 min-h-screen">
    <section class="bg-gradient-to-r from-slate-900 via-blue-900 to-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-10">
            <p class="text-sm text-blue-100 mb-2"><?php echo htmlspecialchars(trim($brandName . ' / ' . $modelName)); ?></p>
            <h1 class="text-3xl md:text-5xl font-bold mb-3"><?php echo htmlspecialchars(trim($brandName . ' ' . $modelName)); ?></h1>
            <p class="text-lg text-blue-100 mb-6">Price, Variants, Specifications and Colors</p>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="bg-white/10 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-blue-200">Ex-showroom Price</p>
                    <p class="text-xl font-bold"><?php echo htmlspecialchars($model['ex_showroom_price'] ?? 'Updating...'); ?></p>
                </div>
                <div class="bg-white/10 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-blue-200">Displacement</p>
                    <p class="text-xl font-bold"><?php echo htmlspecialchars($model['displacement_cc'] ?? 'Updating...'); ?></p>
                </div>
                <div class="bg-white/10 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-blue-200">Variants</p>
                    <p class="text-xl font-bold"><?php echo (int)count($variants); ?></p>
                </div>
                <div class="bg-white/10 rounded-xl p-4">
                    <p class="text-xs uppercase tracking-wide text-blue-200">Colors</p>
                    <p class="text-xl font-bold"><?php echo (int)count($colors); ?></p>
                </div>
            </div>

            <?php if (!empty($model['hero_image_url'])): ?>
                <div class="mt-6 bg-white rounded-xl overflow-hidden shadow-lg max-w-2xl">
                    <img src="<?php echo htmlspecialchars($model['hero_image_url']); ?>" alt="<?php echo htmlspecialchars(trim($brandName . ' ' . $modelName)); ?>" class="w-full h-72 object-cover" loading="lazy">
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-8">
        <?php if ($model === null): ?>
            <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4 text-yellow-900">
                Data for this bike is not in database yet. Run importer first, then refresh this page.
                <?php if ($sourceUrl !== ''): ?>
                    <div class="mt-2">
                        Source: <a class="text-blue-700 underline" href="<?php echo htmlspecialchars($sourceUrl); ?>" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars($sourceUrl); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($errorMessage !== ''): ?>
            <div class="bg-red-50 border border-red-200 rounded-xl p-4 text-red-800 mt-4">
                Database error: <?php echo htmlspecialchars($errorMessage); ?>
            </div>
        <?php endif; ?>
    </section>

    <section class="max-w-7xl mx-auto px-4 pb-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Highlights</h2>
        <div class="bg-white rounded-xl shadow p-6">
            <?php if (count($highlights) > 0): ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <?php foreach ($highlights as $row): ?>
                        <div class="flex justify-between gap-4 border-b border-slate-100 pb-2">
                            <span class="text-slate-600"><?php echo htmlspecialchars($row['label_name']); ?></span>
                            <span class="font-medium text-slate-900 text-right"><?php echo htmlspecialchars($row['label_value']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-slate-500">Highlights will appear after data import.</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 pb-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Key Features</h2>
        <div class="bg-white rounded-xl shadow p-6">
            <?php if (count($keyFeatures) > 0): ?>
                <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    <?php foreach ($keyFeatures as $feature): ?>
                        <li class="bg-slate-50 rounded-lg px-3 py-2 text-slate-700">- <?php echo htmlspecialchars($feature); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-slate-500">Features will appear after data import.</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 pb-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Variants</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php if (count($variants) > 0): ?>
                <?php foreach ($variants as $variant): ?>
                    <div class="bg-white rounded-xl shadow p-5">
                        <?php if (!empty($variant['image_url'])): ?>
                            <img src="<?php echo htmlspecialchars($variant['image_url']); ?>" alt="<?php echo htmlspecialchars($variant['variant_name']); ?>" class="w-full h-52 object-cover rounded-lg mb-4" loading="lazy">
                        <?php endif; ?>
                        <h3 class="font-semibold text-lg text-slate-900 mb-2"><?php echo htmlspecialchars($variant['variant_name']); ?></h3>
                        <p class="text-blue-700 font-bold text-xl mb-3"><?php echo htmlspecialchars($variant['ex_showroom_price'] ?: 'Updating...'); ?></p>
                        <div class="grid grid-cols-3 gap-2 text-sm">
                            <div class="bg-slate-50 rounded p-2"><span class="text-slate-500 block">Brake</span><span class="font-medium"><?php echo htmlspecialchars($variant['brake_type'] ?: '-'); ?></span></div>
                            <div class="bg-slate-50 rounded p-2"><span class="text-slate-500 block">Tyre</span><span class="font-medium"><?php echo htmlspecialchars($variant['tyre_type'] ?: '-'); ?></span></div>
                            <div class="bg-slate-50 rounded p-2"><span class="text-slate-500 block">Wheel</span><span class="font-medium"><?php echo htmlspecialchars($variant['wheel_type'] ?: '-'); ?></span></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="bg-white rounded-xl shadow p-5 text-slate-500">Variants will appear after data import.</div>
            <?php endif; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 pb-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Specifications</h2>
        <div class="space-y-5">
            <?php if (count($specsGrouped) > 0): ?>
                <?php foreach ($specsGrouped as $group => $rows): ?>
                    <div class="bg-white rounded-xl shadow p-5">
                        <h3 class="text-xl font-semibold text-slate-900 mb-4"><?php echo htmlspecialchars($group); ?></h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <?php foreach ($rows as $row): ?>
                                <div class="flex justify-between gap-4 border-b border-slate-100 pb-2">
                                    <span class="text-slate-600"><?php echo htmlspecialchars($row['spec_label']); ?></span>
                                    <span class="font-medium text-slate-900 text-right"><?php echo htmlspecialchars($row['spec_value']); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="bg-white rounded-xl shadow p-5 text-slate-500">Specifications will appear after data import.</div>
            <?php endif; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 pb-12">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Colors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php if (count($colors) > 0): ?>
                <?php foreach ($colors as $color): ?>
                    <div class="bg-white rounded-xl shadow p-4 overflow-hidden">
                        <?php if (!empty($color['image_url'])): ?>
                            <img src="<?php echo htmlspecialchars($color['image_url']); ?>" alt="<?php echo htmlspecialchars($color['color_name']); ?>" class="w-full h-48 object-cover rounded-lg mb-3" loading="lazy">
                        <?php endif; ?>
                        <p class="text-lg font-semibold text-slate-900"><?php echo htmlspecialchars($color['color_name']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="bg-white rounded-xl shadow p-5 text-slate-500">Color options will appear after data import.</div>
            <?php endif; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 pb-12">
        <div class="bg-white border border-slate-200 rounded-xl p-4 text-sm text-slate-600">
            Source credit: Data compiled from BikeCentral.
            <?php if ($sourceUrl !== ''): ?>
                <a href="<?php echo htmlspecialchars($sourceUrl); ?>" target="_blank" rel="noopener noreferrer" class="text-blue-700 hover:underline font-medium">View source</a>.
            <?php endif; ?>
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>
