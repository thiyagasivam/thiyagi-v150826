<?php
$pageTitle = 'QJ Motor SRV 300 Price, Variants, Specs, Colors | Thiyagi';
$pageDescription = 'QJ Motor SRV 300 complete details including price, variants, specifications, colors, key features, and engine data.';
$pageKeywords = 'QJ Motor SRV 300, SRV 300 price, SRV 300 specifications, SRV 300 variants, SRV 300 colors';
include 'header.php';

$overview = [
    'price_ex_showroom' => '&#8377;3.29 Lakhs*',
    'emi_info' => 'EMI starts at &#8377;10,967 for 3 Years',
    'highlights' => [
        'Model' => 'QJ Motor SRV 300',
        'Body Type' => 'Cruiser',
        'Fuel Type' => 'Petrol - BS VI',
        'Displacement' => '296 cc',
        'Length / Width / Height' => '2110 / 850 / 1100 mm',
        'Ground Clearance' => '160 mm',
        'Starting Price' => '&#8377;3.29 Lakhs',
    ],
    'key_features' => [
        'Digital Console',
        'USB Charger',
        'Dual Channel ABS',
        'Engine Kill Switch',
        'Side Stand Indicator',
        'Low Seat Height',
        'Hazard Lights',
        'Pass Switch',
    ],
    'price_summary' => 'The price of QJ Motor SRV 300 starts at &#8377;3.29 Lakhs and goes up to &#8377;3.29 Lakhs.',
    'variant_count' => '1',
    'color_count' => '2',
    'hero_image' => 'https://bikecentral.b-cdn.net/media/models/qj-motor/hero/srv-300.jpg',
];

$variants = [
    [
        'variant_name' => 'SRV 300 STD 2.0 Black',
        'price_ex_showroom' => '&#8377;3.29 Lakhs*',
        'brake' => 'Disc',
        'tyre' => 'Tubeless',
        'wheel' => 'Alloy Wheel',
        'image' => 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/black.jpg',
    ],
    [
        'variant_name' => 'SRV 300 STD 2.0 Red',
        'price_ex_showroom' => '&#8377;3.29 Lakhs*',
        'brake' => 'Disc',
        'tyre' => 'Tubeless',
        'wheel' => 'Alloy Wheel',
        'image' => 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/red.jpg',
    ],
];

$colors = [
    [
        'name' => 'Red',
        'image' => 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/red.jpg',
    ],
    [
        'name' => 'Black',
        'image' => 'https://bikecentral.b-cdn.net/media/models/qj-motor/srv-300/colors/black.jpg',
    ],
];

$specifications = [
    'Dimension' => [
        'Length / Width / Height' => '2110 / 850 / 1100 mm',
        'Ground Clearance' => '160 mm',
        'Wheelbase' => '1400 mm',
        'Seat (Length / Height)' => '- / 700 mm',
        'Fuel Tank' => '13.5 L',
        'Weight (Kerb / Gross)' => '164 Kg / -',
    ],
    'Brake' => [
        'Braking System' => 'ABS (Dual Channel)',
        'Front Brake' => 'Disc',
        'Rear Brake' => 'Disc',
    ],
    'Suspension' => [
        'Front Suspension' => 'Telescopic Upside-Down',
        'Rear Suspension' => 'Telescopic Coil Spring Oil Damped',
    ],
    'Tyres' => [
        'Front Tyre' => 'Tubeless 120/80-16',
        'Rear Tyre' => 'Tubeless 150/80-15',
        'Wheel' => 'Alloy Wheel',
    ],
    'Engine' => [
        'Engine Type' => 'V-Twin Cylinder, 4 Stroke, Liquid Cooled',
        'Valve System' => 'SOHC, 8 valves',
        'Bore / Stroke' => '/',
        'Displacement' => '296 cc',
        'Maximum Power' => '29.8 BHP @ 9000 RPM',
        'Maximum Torque' => '26 Nm @ 5000 RPM',
        'Cooling System' => 'Liquid Cooled',
        'Gearbox' => '6-Speed',
    ],
    'Electrical' => [
        'Head Light' => 'Halogen',
        'Tail Light' => 'LED',
        'Turn Signal Light' => 'LED',
        'Daytime Running Light' => 'No',
        'Low Fuel Indicator' => 'Yes',
    ],
    'Features' => [
        'Instrument Cluster' => 'Yes (Digital)',
        'Speedometer' => 'Yes (Digital)',
        'Odometer' => 'Yes',
        'Tripmeter' => 'Yes (Digital)',
        'Tachometer' => 'Yes (Digital)',
        'Fuel Gauge' => 'Yes (Digital)',
        'Clock' => 'Yes',
        'Gear Indicator' => 'Yes',
        'Push Button Start' => 'Yes',
        'Passenger Footrest' => 'Yes',
        'Seat Type' => 'Yes (Single)',
    ],
    'Safety Features' => [
        'Anti-lock Braking System' => 'Yes (Dual Channel)',
        'Side Stand Alert' => 'Yes',
        'Pass Light' => 'Yes',
        'Hazard Warning Indicator' => 'Yes',
        'Pillion Grabrail' => 'Yes',
    ],
];
?>

<div class="bg-slate-50 min-h-screen">
    <section class="bg-gradient-to-r from-slate-900 via-blue-900 to-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-10">
            <p class="text-sm text-blue-100 mb-2">QJ Motor / SRV 300</p>
            <h1 class="text-3xl md:text-5xl font-bold mb-3">QJ Motor SRV 300</h1>
            <p class="text-lg text-blue-100 mb-6">Price, Variants, Specifications and Colors</p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-center">
                <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white/10 rounded-xl p-4">
                        <p class="text-xs uppercase tracking-wide text-blue-200">Ex-showroom Price</p>
                        <p class="text-2xl font-bold"><?php echo $overview['price_ex_showroom']; ?></p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-4">
                        <p class="text-xs uppercase tracking-wide text-blue-200">EMI</p>
                        <p class="text-sm font-semibold"><?php echo $overview['emi_info']; ?></p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-4">
                        <p class="text-xs uppercase tracking-wide text-blue-200">Variants / Colors</p>
                        <p class="text-2xl font-bold"><?php echo htmlspecialchars($overview['variant_count']); ?> / <?php echo htmlspecialchars($overview['color_count']); ?></p>
                    </div>
                </div>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                    <img src="<?php echo htmlspecialchars($overview['hero_image']); ?>" alt="QJ Motor SRV 300" class="w-full h-56 object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow p-5">
            <div class="flex flex-wrap gap-3 text-sm">
                <a href="#overview" class="px-4 py-2 rounded-lg bg-blue-50 text-blue-700 font-medium">Overview</a>
                <a href="#variants" class="px-4 py-2 rounded-lg bg-blue-50 text-blue-700 font-medium">Variants</a>
                <a href="#specifications" class="px-4 py-2 rounded-lg bg-blue-50 text-blue-700 font-medium">Specs</a>
                <a href="#colors" class="px-4 py-2 rounded-lg bg-blue-50 text-blue-700 font-medium">Colors</a>
            </div>
        </div>
    </section>

    <section id="overview" class="max-w-7xl mx-auto px-4 pb-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Overview</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Highlights</h3>
                <div class="space-y-3">
                    <?php foreach ($overview['highlights'] as $label => $value): ?>
                        <div class="flex justify-between gap-4 border-b border-slate-100 pb-2">
                            <span class="text-slate-600"><?php echo htmlspecialchars($label); ?></span>
                            <span class="font-medium text-slate-900 text-right"><?php echo $value; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Key Features</h3>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <?php foreach ($overview['key_features'] as $feature): ?>
                        <li class="bg-slate-50 rounded-lg px-3 py-2 text-slate-700">- <?php echo htmlspecialchars($feature); ?></li>
                    <?php endforeach; ?>
                </ul>
                <p class="mt-5 text-slate-600"><?php echo $overview['price_summary']; ?></p>
            </div>
        </div>
    </section>

    <section id="variants" class="max-w-7xl mx-auto px-4 pb-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Variants</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($variants as $variant): ?>
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="<?php echo htmlspecialchars($variant['image']); ?>" alt="<?php echo htmlspecialchars($variant['variant_name']); ?>" class="w-full h-52 object-cover" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-semibold text-lg text-slate-900 mb-2"><?php echo htmlspecialchars($variant['variant_name']); ?></h3>
                        <p class="text-blue-700 font-bold text-xl mb-3"><?php echo $variant['price_ex_showroom']; ?></p>
                        <div class="grid grid-cols-3 gap-2 text-sm">
                            <div class="bg-slate-50 rounded p-2"><span class="text-slate-500 block">Brake</span><span class="font-medium"><?php echo htmlspecialchars($variant['brake']); ?></span></div>
                            <div class="bg-slate-50 rounded p-2"><span class="text-slate-500 block">Tyre</span><span class="font-medium"><?php echo htmlspecialchars($variant['tyre']); ?></span></div>
                            <div class="bg-slate-50 rounded p-2"><span class="text-slate-500 block">Wheel</span><span class="font-medium"><?php echo htmlspecialchars($variant['wheel']); ?></span></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="specifications" class="max-w-7xl mx-auto px-4 pb-8">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Specifications</h2>
        <div class="space-y-5">
            <?php foreach ($specifications as $section => $rows): ?>
                <div class="bg-white rounded-xl shadow p-5">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4"><?php echo htmlspecialchars($section); ?></h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <?php foreach ($rows as $label => $value): ?>
                            <div class="flex justify-between gap-4 border-b border-slate-100 pb-2">
                                <span class="text-slate-600"><?php echo htmlspecialchars($label); ?></span>
                                <span class="font-medium text-slate-900 text-right"><?php echo htmlspecialchars($value); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="colors" class="max-w-7xl mx-auto px-4 pb-12">
        <h2 class="text-2xl font-bold text-slate-900 mb-4">Colors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <?php foreach ($colors as $color): ?>
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <img src="<?php echo htmlspecialchars($color['image']); ?>" alt="<?php echo htmlspecialchars($color['name']); ?>" class="w-full h-56 object-cover" loading="lazy">
                    <div class="p-4">
                        <p class="text-lg font-semibold text-slate-900"><?php echo htmlspecialchars($color['name']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 pb-12">
        <div class="bg-white border border-slate-200 rounded-xl p-4 text-sm text-slate-600">
            Source credit: Data compiled from BikeCentral.
            <a href="https://www.bikecentral.in/qj-motor/srv-300/specifications" target="_blank" rel="noopener noreferrer" class="text-blue-700 hover:underline font-medium">View original page</a>.
        </div>
    </section>
</div>

<?php include 'footer.php'; ?>
