<?php
header('Content-Type: text/html; charset=UTF-8');
?>
    <title>Tamil Character Test</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Tamil:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Tamil', 'Latha', 'Vijaya', 'Tamil Sangam MN', sans-serif;
            padding: 20px;
            line-height: 1.8;
        }
        .test-section {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
    </style>
    <h1>Tamil Character Encoding Test</h1>
    
    <div class="test-section">
        <h2>Direct Tamil Text (Should display properly):</h2>
        <p style="font-size: 24px;">அகர முதல எழுத்தெல்லாம் ஆதி</p>
        <p style="font-size: 24px;">பகவன் முதற்றே உலகு</p>
    </div>
    
    <div class="test-section">
        <h2>Sample Thirukkural:</h2>
        <p style="font-size: 20px;">குறள் 1:</p>
        <p style="font-size: 24px; color: #b8860b;">
            அகர முதல எழுத்தெல்லாம் ஆதி<br>
            பகவன் முதற்றே உலகு
        </p>
    </div>
    
    <div class="test-section">
        <h2>Scholars' Names:</h2>
        <p>மு. வரதராசனார் விளக்கம்</p>
        <p>சாலமன் பாப்பையா விளக்கம்</p>
        <p>கலைஞர் விளக்கம்</p>
    </div>
    
    <div class="test-section">
        <h2>Browser & Database Info:</h2>
        <p><strong>Page Encoding:</strong> UTF-8</p>
        <p><strong>PHP Internal Encoding:</strong> <?php echo mb_internal_encoding(); ?></p>
        <p><strong>Current Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
    </div>

    <?php
    // Database test
    $host = "127.0.0.1:3306";
    $dbname = "u662933183_servicecenter";
    $username = "u662933183_servicecenter";
    $password = "e^?al5veVS6";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");
        
        echo '<div class="test-section">';
        echo '<h2>Database Connection Test:</h2>';
        echo '<p style="color: green;">✅ Database connected with UTF8MB4 support</p>';
        
        // Test if thirukkural table exists and has data
        $check_table = $pdo->query("SHOW TABLES LIKE 'thirukkural'");
        if ($check_table->rowCount() > 0) {
            echo '<p style="color: green;">✅ thirukkural table exists</p>';
            
            $count = $pdo->query("SELECT COUNT(*) FROM thirukkural")->fetchColumn();
            echo "<p>📊 Total rows: $count</p>";
            
            if ($count > 0) {
                // Get first row to test Tamil characters
                $first = $pdo->query("SELECT * FROM thirukkural LIMIT 1")->fetch(PDO::FETCH_ASSOC);
                echo '<h3>Sample Data from Database:</h3>';
                foreach ($first as $key => $value) {
                    if (strlen($value) > 0) {
                        $display = mb_substr($value, 0, 100, 'UTF-8');
                        echo "<p><strong>$key:</strong> $display</p>";
                    }
                }
            }
        } else {
            echo '<p style="color: red;">❌ thirukkural table does not exist</p>';
        }
        echo '</div>';
        
    } catch(PDOException $e) {
        echo '<div class="test-section">';
        echo '<h2>Database Error:</h2>';
        echo '<p style="color: red;">❌ ' . $e->getMessage() . '</p>';
        echo '</div>';
    }
    ?>
</body>
</html>