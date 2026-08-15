<?php include 'header.php'; ?>
<title>Confidence Interval Calculator 2026 | Statistical Analysis Tool</title>
<meta name="description" content="Calculate confidence intervals for mean, proportion, and difference of means. Professional statistical analysis tool with 90%, 95%, and 99% confidence levels.">

<?php
/**
 * Advanced Confidence Interval Calculator 2026
 * Professional statistical analysis tool
 */

class AdvancedConfidenceIntervalCalculator {
    public $calculationTypes = [
        'mean' => [
            'name' => 'Mean (�)',
            'description' => 'Confidence interval for population mean',
            'fields' => ['sampleMean', 'standardDeviation', 'sampleSize']
        ],
        'proportion' => [
            'name' => 'Proportion (p)',
            'description' => 'Confidence interval for population proportion',
            'fields' => ['sampleProportion', 'sampleSize']
        ],
        'difference_means' => [
            'name' => 'Difference of Means',
            'description' => 'Confidence interval for difference between two means',
            'fields' => ['mean1', 'mean2', 'std1', 'std2', 'n1', 'n2']
        ]
    ];
    
    public $confidenceLevels = [
        90 => ['name' => '90%', 'alpha' => 0.10, 'z_value' => 1.645],
        95 => ['name' => '95%', 'alpha' => 0.05, 'z_value' => 1.96],
        98 => ['name' => '98%', 'alpha' => 0.02, 'z_value' => 2.326],
        99 => ['name' => '99%', 'alpha' => 0.01, 'z_value' => 2.576]
    ];
    
    // t-distribution table for small samples
    private $tTable = [
        1 => [90 => 6.314, 95 => 12.706, 98 => 31.821, 99 => 63.657],
        2 => [90 => 2.920, 95 => 4.303, 98 => 6.965, 99 => 9.925],
        3 => [90 => 2.353, 95 => 3.182, 98 => 4.541, 99 => 5.841],
        5 => [90 => 2.015, 95 => 2.571, 98 => 3.365, 99 => 4.032],
        10 => [90 => 1.812, 95 => 2.228, 98 => 2.764, 99 => 3.169],
        15 => [90 => 1.753, 95 => 2.131, 98 => 2.602, 99 => 2.947],
        20 => [90 => 1.725, 95 => 2.086, 98 => 2.528, 99 => 2.845],
        30 => [90 => 1.697, 95 => 2.042, 98 => 2.457, 99 => 2.750]
    ];
    
    public function validateInput($data) {
        $errors = [];
        $calculationType = $data['calculation_type'] ?? '';
        
        if (!isset($this->calculationTypes[$calculationType])) {
            $errors[] = "Invalid calculation type selected.";
            return $errors;
        }
        
        $requiredFields = $this->calculationTypes[$calculationType]['fields'];
        
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || $data[$field] === '') {
                $errors[] = ucfirst(str_replace(['_', 'sample'], [' ', 'Sample '], $field)) . " is required.";
                continue;
            }
            
            $value = floatval($data[$field]);
            
            // Field-specific validation
            switch ($field) {
                case 'sampleSize':
                case 'n1':
                case 'n2':
                    if ($value < 1 || $value != intval($value)) {
                        $errors[] = ucfirst(str_replace('_', ' ', $field)) . " must be a positive integer.";
                    }
                    break;
                
                case 'sampleProportion':
                    if ($value < 0 || $value > 1) {
                        $errors[] = "Sample proportion must be between 0 and 1.";
                    }
                    break;
                
                case 'standardDeviation':
                case 'std1':
                case 'std2':
                    if ($value <= 0) {
                        $errors[] = ucfirst(str_replace('_', ' ', $field)) . " must be positive.";
                    }
                    break;
            }
        }
        
        $confidenceLevel = floatval($data['confidence_level'] ?? 0);
        if (!isset($this->confidenceLevels[$confidenceLevel])) {
            $errors[] = "Invalid confidence level selected.";
        }
        
        return $errors;
    }
    
    public function calculate($data) {
        $errors = $this->validateInput($data);
        if (!empty($errors)) {
            return ['success' => false, 'errors' => $errors];
        }
        
        $calculationType = $data['calculation_type'];
        $confidenceLevel = floatval($data['confidence_level']);
        $alpha = $this->confidenceLevels[$confidenceLevel]['alpha'];
        
        switch ($calculationType) {
            case 'mean':
                return $this->calculateMeanInterval($data, $alpha);
            case 'proportion':
                return $this->calculateProportionInterval($data, $alpha);
            case 'difference_means':
                return $this->calculateDifferenceMeansInterval($data, $alpha);
            default:
                return ['success' => false, 'errors' => ['Unknown calculation type.']];
        }
    }
    
    private function calculateMeanInterval($data, $alpha) {
        $sampleMean = floatval($data['sampleMean']);
        $standardDeviation = floatval($data['standardDeviation']);
        $sampleSize = intval($data['sampleSize']);
        
        $standardError = $standardDeviation / sqrt($sampleSize);
        
        if ($sampleSize >= 30) {
            $criticalValue = $this->getZCriticalValue($alpha);
            $distribution = 'Normal (n = 30)';
        } else {
            $df = $sampleSize - 1;
            $criticalValue = $this->getTCriticalValue($df, $alpha);
            $distribution = "t-distribution (df = $df)";
        }
        
        $marginOfError = $criticalValue * $standardError;
        $lowerBound = $sampleMean - $marginOfError;
        $upperBound = $sampleMean + $marginOfError;
        
        return [
            'success' => true,
            'result' => [
                'lower_bound' => $lowerBound,
                'upper_bound' => $upperBound,
                'point_estimate' => $sampleMean,
                'margin_of_error' => $marginOfError,
                'standard_error' => $standardError,
                'critical_value' => $criticalValue,
                'distribution' => $distribution,
                'confidence_level' => (1 - $alpha) * 100
            ]
        ];
    }
    
    private function calculateProportionInterval($data, $alpha) {
        $sampleProportion = floatval($data['sampleProportion']);
        $sampleSize = intval($data['sampleSize']);
        
        $np = $sampleSize * $sampleProportion;
        $nq = $sampleSize * (1 - $sampleProportion);
        
        if ($np < 5 || $nq < 5) {
            return [
                'success' => false, 
                'errors' => ["Normal approximation not valid. Need np = 5 and n(1-p) = 5."]
            ];
        }
        
        $standardError = sqrt(($sampleProportion * (1 - $sampleProportion)) / $sampleSize);
        $criticalValue = $this->getZCriticalValue($alpha);
        $marginOfError = $criticalValue * $standardError;
        
        $lowerBound = max(0, $sampleProportion - $marginOfError);
        $upperBound = min(1, $sampleProportion + $marginOfError);
        
        return [
            'success' => true,
            'result' => [
                'lower_bound' => $lowerBound,
                'upper_bound' => $upperBound,
                'point_estimate' => $sampleProportion,
                'margin_of_error' => $marginOfError,
                'standard_error' => $standardError,
                'critical_value' => $criticalValue,
                'distribution' => 'Normal approximation',
                'confidence_level' => (1 - $alpha) * 100
            ]
        ];
    }
    
    private function calculateDifferenceMeansInterval($data, $alpha) {
        $mean1 = floatval($data['mean1']);
        $mean2 = floatval($data['mean2']);
        $std1 = floatval($data['std1']);
        $std2 = floatval($data['std2']);
        $n1 = intval($data['n1']);
        $n2 = intval($data['n2']);
        
        $pointEstimate = $mean1 - $mean2;
        $standardError = sqrt(($std1 * $std1 / $n1) + ($std2 * $std2 / $n2));
        $criticalValue = $this->getZCriticalValue($alpha);
        $marginOfError = $criticalValue * $standardError;
        
        $lowerBound = $pointEstimate - $marginOfError;
        $upperBound = $pointEstimate + $marginOfError;
        
        return [
            'success' => true,
            'result' => [
                'lower_bound' => $lowerBound,
                'upper_bound' => $upperBound,
                'point_estimate' => $pointEstimate,
                'margin_of_error' => $marginOfError,
                'standard_error' => $standardError,
                'critical_value' => $criticalValue,
                'distribution' => 'Normal approximation',
                'confidence_level' => (1 - $alpha) * 100
            ]
        ];
    }
    
    private function getZCriticalValue($alpha) {
        $confidenceLevel = (1 - $alpha) * 100;
        return $this->confidenceLevels[$confidenceLevel]['z_value'] ?? 1.96;
    }
    
    private function getTCriticalValue($df, $alpha) {
        $confidenceLevel = (1 - $alpha) * 100;
        
        $closestDf = $this->findClosestDf($df);
        
        if (isset($this->tTable[$closestDf][$confidenceLevel])) {
            return $this->tTable[$closestDf][$confidenceLevel];
        }
        
        return $this->getZCriticalValue($alpha);
    }
    
    private function findClosestDf($df) {
        $availableDf = array_keys($this->tTable);
        
        if ($df <= 1) return 1;
        if ($df >= 30) return 30;
        
        $closest = $availableDf[0];
        foreach ($availableDf as $available) {
            if (abs($df - $available) < abs($df - $closest)) {
                $closest = $available;
            }
        }
        
        return $closest;
    }
}

// Process form submission
$calculator = new AdvancedConfidenceIntervalCalculator();
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $calculator->calculate($_POST);
}
?>

<main class="container mx-auto px-4 py-8 max-w-6xl">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            <i class="fas fa-chart-line text-blue-600 mr-3"></i>
            Advanced Confidence Interval Calculator 2026
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Professional statistical analysis tool for calculating confidence intervals with multiple distributions
        </p>
    </div>

    <?php if ($result && !$result['success']): ?>
        <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-circle text-red-400"></i>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Input Errors:</h3>
                    <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                        <?php foreach ($result['errors'] as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Calculator Configuration</h2>
                
                <form method="POST" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Calculation Type</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <?php foreach ($calculator->calculationTypes as $type => $info): ?>
                                <div class="relative">
                                    <input type="radio" name="calculation_type" value="<?php echo $type; ?>" 
                                           id="calc_<?php echo $type; ?>" 
                                           class="sr-only peer"
                                           <?php echo (isset($_POST['calculation_type']) && $_POST['calculation_type'] === $type) ? 'checked' : ''; ?>
                                           onchange="updateFormFields()">
                                    <label for="calc_<?php echo $type; ?>" 
                                           class="flex flex-col p-4 bg-white border-2 border-gray-200 rounded-lg cursor-pointer hover:bg-blue-50 peer-checked:border-blue-500 peer-checked:bg-blue-50 transition-all">
                                        <span class="font-medium text-gray-900"><?php echo $info['name']; ?></span>
                                        <span class="text-sm text-gray-500 mt-1"><?php echo $info['description']; ?></span>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Confidence Level</label>
                        <div class="grid grid-cols-4 gap-2">
                            <?php foreach ($calculator->confidenceLevels as $level => $info): ?>
                                <div class="relative">
                                    <input type="radio" name="confidence_level" value="<?php echo $level; ?>" 
                                           id="conf_<?php echo $level; ?>" 
                                           class="sr-only peer"
                                           <?php echo (isset($_POST['confidence_level']) && floatval($_POST['confidence_level']) == $level) ? 'checked' : ($level == 95 ? 'checked' : ''); ?>>
                                    <label for="conf_<?php echo $level; ?>" 
                                           class="flex justify-center items-center p-3 bg-white border-2 border-gray-200 rounded-lg cursor-pointer hover:bg-blue-50 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-checked:text-white transition-all">
                                        <span class="font-medium"><?php echo $info['name']; ?></span>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Dynamic Form Fields -->
                    <div id="dynamic-fields" class="space-y-4">
                        <p class="text-gray-500 italic">Please select a calculation type above.</p>
                    </div>

                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium py-3 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all">
                        <i class="fas fa-calculator mr-2"></i>
                        Calculate Confidence Interval
                    </button>
                </form>
            </div>
        </div>

        <!-- Results Panel -->
        <div>
            <?php if ($result && $result['success']): ?>
                <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">
                        <i class="fas fa-chart-bar text-green-600 mr-2"></i>
                        Results
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800 mb-2">Confidence Interval</h4>
                            <div class="text-2xl font-bold text-green-900">
                                [<?php echo number_format($result['result']['lower_bound'], 4); ?>, 
                                 <?php echo number_format($result['result']['upper_bound'], 4); ?>]
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-3 text-sm">
                            <div class="bg-gray-50 p-3 rounded">
                                <span class="font-medium text-gray-600">Point Estimate:</span>
                                <div class="font-bold text-gray-900"><?php echo number_format($result['result']['point_estimate'], 4); ?></div>
                            </div>
                            <div class="bg-gray-50 p-3 rounded">
                                <span class="font-medium text-gray-600">Margin of Error:</span>
                                <div class="font-bold text-gray-900"><?php echo number_format($result['result']['margin_of_error'], 4); ?></div>
                            </div>
                            <div class="bg-gray-50 p-3 rounded">
                                <span class="font-medium text-gray-600">Distribution:</span>
                                <div class="font-bold text-gray-900"><?php echo $result['result']['distribution']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                    Quick Guide
                </h3>
                
                <div class="space-y-3 text-sm text-gray-600">
                    <p><strong>Confidence intervals</strong> provide a range of plausible values for population parameters.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li><strong>Mean:</strong> Population mean estimation</li>
                        <li><strong>Proportion:</strong> Population proportion estimation</li>
                        <li><strong>Difference:</strong> Comparing two populations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    class ConfidenceIntervalCalculator {
        constructor() {
            this.calculationTypes = {
                'mean': {
                    'name': 'Mean (�)',
                    'fields': ['sampleMean', 'standardDeviation', 'sampleSize']
                },
                'proportion': {
                    'name': 'Proportion (p)',
                    'fields': ['sampleProportion', 'sampleSize']
                },
                'difference_means': {
                    'name': 'Difference of Means',
                    'fields': ['mean1', 'mean2', 'std1', 'std2', 'n1', 'n2']
                }
            };
            
            this.fieldLabels = {
                'sampleMean': 'Sample Mean (x�)',
                'standardDeviation': 'Standard Deviation (s)',
                'sampleSize': 'Sample Size (n)',
                'sampleProportion': 'Sample Proportion (p^)',
                'mean1': 'Sample Mean 1 (x�1)',
                'mean2': 'Sample Mean 2 (x�2)',
                'std1': 'Standard Deviation 1 (s1)',
                'std2': 'Standard Deviation 2 (s2)',
                'n1': 'Sample Size 1 (n1)',
                'n2': 'Sample Size 2 (n2)'
            };
        }
        
        updateFormFields() {
            const selectedType = document.querySelector('input[name="calculation_type"]:checked');
            const dynamicFields = document.getElementById('dynamic-fields');
            
            if (!selectedType) {
                dynamicFields.innerHTML = '<p class="text-gray-500 italic">Please select a calculation type above.</p>';
                return;
            }
            
            const calculationType = selectedType.value;
            const fields = this.calculationTypes[calculationType].fields;
            
            let html = '<div class="grid grid-cols-1 md:grid-cols-2 gap-4">';
            
            fields.forEach(field => {
                const label = this.fieldLabels[field];
                const step = field.includes('roportion') ? '0.001' : '0.01';
                const min = field.includes('Size') || field.includes('n1') || field.includes('n2') ? '1' : 
                           field.includes('roportion') ? '0' : '';
                const max = field.includes('roportion') ? '1' : '';
                
                html += `
                    <div>
                        <label for="${field}" class="block text-sm font-medium text-gray-700 mb-1">
                            ${label}
                        </label>
                        <input type="number" 
                               name="${field}" 
                               id="${field}"
                               step="${step}" 
                               ${min ? `min="${min}"` : ''}
                               ${max ? `max="${max}"` : ''}
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Enter ${label.toLowerCase()}"
                               required>
                    </div>
                `;
            });
            
            html += '</div>';
            
            dynamicFields.innerHTML = html;
        }
    }

    const ciCalc = new ConfidenceIntervalCalculator();

    // Initialize form fields on page load
    document.addEventListener('DOMContentLoaded', function() {
        updateFormFields();
    });

    function updateFormFields() {
        ciCalc.updateFormFields();
    }
</script>

<?php include 'footer.php'; ?>
