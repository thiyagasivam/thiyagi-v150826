
<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
$tariff_slabs = [
    ['min' => 1, 'max' => 50, 'rate' => 1.25],
    ['min' => 51, 'max' => 100, 'rate' => 2.00],
    ['min' => 101, 'max' => 200, 'rate' => 3.00],
    ['min' => 201, 'max' => 300, 'rate' => 4.00],
    ['min' => 301, 'max' => 400, 'rate' => 5.00],
    ['min' => 401, 'max' => PHP_INT_MAX, 'rate' => 6.00]
];
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$breakdown = [];
$total = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0) {
    $remaining_units = $units;
    foreach ($tariff_slabs as $slab) {
        if ($remaining_units <= 0) break;
        $slab_min = $slab['min'];
        $slab_max = $slab['max'];
        $slab_rate = $slab['rate'];
        $slab_units = min($remaining_units, $slab_max - $slab_min + 1);
        if ($units < $slab_min) $slab_units = 0;
        $slab_cost = $slab_units * $slab_rate;
        if ($slab_units > 0) {
            $breakdown[] = [
                'range' => ($slab_min == 1 ? '1' : $slab_min) . ' - ' . ($slab_max == PHP_INT_MAX ? 'Above' : $slab_max),
                'units' => $slab_units,
                'rate' => $slab_rate,
                'cost' => $slab_cost
            ];
            $total += $slab_cost;
            $remaining_units -= $slab_units;
        }
    }
}
?>
  <title>Bihar Electricity Bill Calculator 2026 – NBPDCL & SBPDCL</title>
  <meta name="description" content="Instantly calculate your electricity bill for Bihar with the 2026 NBPDCL/SBPDCL tariff.">
  
  <style>
    @media print {
      .no-print { display: none; }
    }
  </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-100">
  <div class="container mx-auto py-10 px-4 max-w-4xl">
    <h1 class="text-3xl font-bold text-center mb-2 text-blue-600">Bihar Electricity Bill Calculator 2026</h1>
    <p class="text-center text-gray-600 mb-8">Calculate your NBPDCL & SBPDCL electricity bill using the latest 2026 tariff rates</p>
    <div class="bg-white shadow-md rounded-lg mb-8 overflow-hidden">
      <div class="px-6 py-4">
        <form id="calculator-form" method="POST" class="space-y-4">
          <div>
            <label for="units" class="block text-gray-700 text-sm font-bold mb-2">Enter Units Consumed</label>
            <input type="number" id="units" name="units" min="0" value="<?= htmlspecialchars($units) ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="e.g., 250" required>
          </div>
          <div class="flex space-x-3">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Calculate Bill</button>
            <button type="reset" onclick="document.getElementById('units').value=''" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Reset</button>
          </div>
        </form>
      </div>
    </div>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0): ?>
    <div class="bg-white shadow-md rounded-lg mb-8 overflow-hidden">
      <div class="px-6 py-4">
        <h4 class="text-xl font-semibold mb-4 text-gray-800">Bill Calculation Details</h4>
        <p class="text-gray-700"><strong>Total Units:</strong> <?= $units ?></p>
        <p class="text-lg font-bold text-blue-600"><strong>Total Bill Amount:</strong> ₹<?= number_format($total, 2) ?></p>
        <h5 class="mt-6 mb-2 text-lg font-medium text-gray-800">Slab-wise Breakdown</h5>
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab Range</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/unit)</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cost (₹)</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php foreach ($breakdown as $item): ?>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item['range'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item['units'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= number_format($item['rate'], 2) ?></td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= number_format($item['cost'], 2) ?></td>
              </tr>
              <?php endforeach; ?>
              <tr class="bg-gray-50 font-bold">
                <td colspan="3" class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Total</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹<?= number_format($total, 2) ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mt-6 text-right no-print">
          <button onclick="window.print()" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Print Bill</button>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <script>
    // Optional auto-submit while typing
    document.addEventListener('DOMContentLoaded', function() {
      const input = document.getElementById('units');
      const form = document.getElementById('calculator-form');
      if (input) {
        input.addEventListener('input', function() {
          if (this.value.length > 0 && !isNaN(this.value)) {
            form.requestSubmit();
          }
        });
      }
    });
  </script>

<!-- State Electricity Bill Calculators Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Indian State Electricity Bill Calculators</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php
        $calculators = [
            ["Bihar", "https://www.thiyagi.com/electricity-board/bihar-electricity-bill-calculator"],
            ["Goa", "https://www.thiyagi.com/electricity-board/goa-electricity-bill-calculator"],
            ["Delhi", "https://www.thiyagi.com/electricity-board/delhi-electricity-bill-calculator"],
            ["Himachal Pradesh", "https://www.thiyagi.com/electricity-board/hpsebl-electricity-bill-calculator"],
            ["Kerala", "https://www.thiyagi.com/electricity-board/kseb-bill-calculator"],
            ["Uttar Pradesh", "https://www.thiyagi.com/electricity-board/uppcl-bill-calculator"],
            ["Karnataka", "https://www.thiyagi.com/electricity-board/karnataka-electricity-bill-calculator"],
            ["Haryana", "https://www.thiyagi.com/electricity-board/haryana-electricity-bill-calculator"],
            ["Nagaland", "https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator"],
            ["Jharkhand", "https://www.thiyagi.com/electricity-board/jbvnl-electricity-bill-calculator"],
            ["Uttarakhand", "https://www.thiyagi.com/electricity-board/upcl-electricity-bill-calculator-uttarakhand"],
            ["Assam", "https://www.thiyagi.com/electricity-board/apdcl-electricity-bill-calculator"],
            ["Andaman", "https://www.thiyagi.com/electricity-board/andaman-electricity-bill-calculator"],
            ["Ladakh", "https://www.thiyagi.com/electricity-board/ladakh-electricity-bill-calculator"],
            ["West Bengal", "https://www.thiyagi.com/electricity-board/wbsedcl-bill-calculator"],
            ["Tripura", "https://www.thiyagi.com/electricity-board/tsecl-electricity-bill-calculator"],
            ["Telangana", "https://www.thiyagi.com/electricity-board/tsspdcl-electricity-bill-calculator"],
            ["Tamil Nadu", "https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator"],
            ["Manipur", "https://www.thiyagi.com/electricity-board/manipur-electricity-bill-calculator"],
            ["Chhattisgarh", "https://www.thiyagi.com/electricity-board/cspdcl-electricity-bill-calculator"],
            ["Madhya Pradesh", "https://www.thiyagi.com/electricity-board/mp-electricity-bill-calculator"],
            ["Punjab", "https://www.thiyagi.com/electricity-board/pspcl-bill-calculator"],
            ["Sikkim", "https://www.thiyagi.com/electricity-board/sikkim-electricity-bill-calculator"],
            ["Odisha", "https://www.thiyagi.com/electricity-board/odisha-electricity-bill-calculator"],
            ["Rajasthan", "https://www.thiyagi.com/electricity-board/rajasthan-electricity-bill-calculator"],
            ["Gujarat", "https://www.thiyagi.com/electricity-board/gujarat-electricity-bill-calculator"],
            ["Meghalaya", "https://www.thiyagi.com/electricity-board/meghalaya-electricity-bill-calculator"],
            ["Andhra Pradesh", "https://www.thiyagi.com/electricity-board/apspdcl-electricity-bill-calculator"],
            ["Jammu & Kashmir", "https://www.thiyagi.com/electricity-board/jpdcl-electricity-bill-calculator-kashmir"],
            ["Mizoram", "https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator"]
        ];

        foreach ($calculators as $calc) {
            echo '<div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300 ease-in-out">';
            echo '<div class="px-4 py-5 sm:p-6">';
            echo '<h3 class="text-lg leading-6 font-medium text-gray-900 mb-2">' . htmlspecialchars($calc[0]) . '</h3>';
            echo '<a href="' . htmlspecialchars($calc[1]) . '" target="_blank" class="inline-block bg-blue-500 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded transition duration-150 ease-in-out">Calculate Bill</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

</body>
<?php include '../footer.php';?>
</html>