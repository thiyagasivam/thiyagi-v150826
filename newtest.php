<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define variables and set to empty values
$fileUploaded = false;
$analysisResults = null;
$errorMessage = '';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["csvFile"])) {
    try {
        // Check for upload errors
        if ($_FILES["csvFile"]["error"] !== UPLOAD_ERR_OK) {
            throw new Exception("File upload error: " . $_FILES["csvFile"]["error"]);
        }
        
        // Check file type
        $fileType = strtolower(pathinfo($_FILES["csvFile"]["name"], PATHINFO_EXTENSION));
        if ($fileType !== "csv") {
            throw new Exception("Only CSV files are allowed.");
        }
        
        // Check file size (max 5MB)
        if ($_FILES["csvFile"]["size"] > 5000000) {
            throw new Exception("File is too large. Maximum size is 5MB.");
        }
        
        // Process the CSV file
        $tmpFilePath = $_FILES["csvFile"]["tmp_name"];
        
        // Verify the file is readable
        if (!is_readable($tmpFilePath)) {
            throw new Exception("Cannot read the uploaded file.");
        }
        
        $analysisResults = analyzeSearchTerms($tmpFilePath);
        $fileUploaded = true;
        
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}

/**
 * Analyzes the search term performance report
 * 
 * @param string $filePath Path to the CSV file
 * @return array Analysis results
 */
function analyzeSearchTerms($filePath) {
    $results = [
        'total_spend' => 0,
        'wasted_spend' => 0,
        'top_terms' => [],
        'negative_opportunities' => [],
        'conversion_stats' => []
    ];
    
    // Open the CSV file
    if (($handle = fopen($filePath, "r")) !== FALSE) {
        // Get headers and normalize them (remove BOM if present)
        $headers = fgetcsv($handle);
        if (isset($headers[0]) {
            $headers[0] = preg_replace('/^\xEF\xBB\xBF/', '', $headers[0]); // Remove BOM
        }
        
        // Map headers to lowercase for case-insensitive comparison
        $headerMap = array_flip(array_map('strtolower', $headers));
        
        // Required columns
        $requiredColumns = ['search term', 'cost', 'conversions', 'clicks'];
        foreach ($requiredColumns as $col) {
            if (!isset($headerMap[$col])) {
                throw new Exception("Missing required column: " . $col);
            }
        }
        
        // Process each row
        while (($data = fgetcsv($handle)) !== FALSE) {
            // Skip empty rows
            if (empty($data) || (count($data) == 1 && empty($data[0]))) {
                continue;
            }
            
            // Map data to headers
            $row = [];
            foreach ($headers as $index => $header) {
                $row[strtolower($header)] = isset($data[$index]) ? $data[$index] : '';
            }
            
            // Convert numeric values
            $cost = is_numeric($row['cost']) ? (float)$row['cost'] : 0;
            $conversions = is_numeric($row['conversions']) ? (float)$row['conversions'] : 0;
            $clicks = is_numeric($row['clicks']) ? (int)$row['clicks'] : 0;
            
            // Calculate total spend
            $results['total_spend'] += $cost;
            
            // Identify potentially wasted spend (example criteria)
            if ($conversions == 0 && $cost > 0.5) {
                $results['wasted_spend'] += $cost;
                $results['negative_opportunities'][] = [
                    'term' => $row['search term'],
                    'cost' => $cost,
                    'clicks' => $clicks
                ];
            }
            
            // Track top performing terms
            if ($conversions > 0) {
                $results['top_terms'][] = [
                    'term' => $row['search term'],
                    'cost' => $cost,
                    'conversions' => $conversions,
                    'cpa' => ($conversions > 0) ? ($cost / $conversions) : 0
                ];
            }
        }
        fclose($handle);
        
        // Sort top terms by conversions (descending)
        usort($results['top_terms'], function($a, $b) {
            return $b['conversions'] <=> $a['conversions'];
        });
        
        // Sort negative opportunities by cost (descending)
        usort($results['negative_opportunities'], function($a, $b) {
            return $b['cost'] <=> $a['cost'];
        });
        
        // Keep only top 10 of each
        $results['top_terms'] = array_slice($results['top_terms'], 0, 10);
        $results['negative_opportunities'] = array_slice($results['negative_opportunities'], 0, 10);
    } else {
        throw new Exception("Could not open the uploaded file.");
    }
    
    return $results;
}
?>

    <!-- [Previous head content remains the same] -->
    <style>
        /* [Previous CSS remains the same] */
        
        /* Add these new styles */
        #loadingIndicator {
            display: none;
            text-align: center;
            margin: 20px 0;
        }
        
        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top: 4px solid var(--primary-color);
            width: 30px;
            height: 30px;
            animation: spin 1s linear infinite;
            margin: 0 auto 10px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <div class="container">
        <!-- [Previous HTML remains the same until the form] -->
        
        <form id="uploadForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="upload-area" id="dropArea">
                <div class="upload-icon">📊</div>
                <h3>Upload Your Search Term Report</h3>
                <p>Drag and drop your CSV file here or</p>
                <input type="file" id="fileInput" name="csvFile" accept=".csv" style="display: none;" required>
                <button type="button" class="btn" onclick="document.getElementById('fileInput').click()">Select File</button>
                <p id="fileName" style="margin-top: 15px; font-size: 0.9rem; color: #666;"></p>
            </div>
            
            <?php if (!empty($errorMessage)): ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($errorMessage); ?>
                </div>
            <?php endif; ?>
            
            <div id="loadingIndicator">
                <div class="spinner"></div>
                <p>Analyzing your search terms...</p>
            </div>
            
            <div style="text-align: center; margin-bottom: 40px;">
                <button type="submit" class="btn" id="analyzeBtn" style="display: none;">Analyze Search Terms</button>
            </div>
        </form>
        
        <!-- [Rest of the HTML remains the same] -->
    </div>
    
    <script>
        // [Previous JavaScript remains the same]
        
        // Add this new code for form submission
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            // Show loading indicator
            document.getElementById('loadingIndicator').style.display = 'block';
            document.getElementById('analyzeBtn').disabled = true;
            
            // You could add a timeout here to ensure the loading indicator shows
            // before the form submits (especially for large files)
            setTimeout(function() {
                // The form will continue with its normal submission
            }, 100);
        });
        
        // Enhanced file input handling
        document.getElementById('fileInput').addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                const file = this.files[0];
                updateFileNameDisplay(file.name);
                
                // Additional validation
                if (file.size > 5000000) { // 5MB
                    alert('File is too large. Maximum size is 5MB.');
                    this.value = '';
                    document.getElementById('fileName').textContent = '';
                    document.getElementById('analyzeBtn').style.display = 'none';
                    return;
                }
                
                if (!file.name.toLowerCase().endsWith('.csv')) {
                    alert('Only CSV files are allowed.');
                    this.value = '';
                    document.getElementById('fileName').textContent = '';
                    document.getElementById('analyzeBtn').style.display = 'none';
                    return;
                }
            }
        });
    </script>
</body>
</html>