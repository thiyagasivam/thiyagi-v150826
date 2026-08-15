<?php
// Set UTF-8 encoding for proper Tamil character display
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<meta charset='UTF-8'>";
echo "<style>
    body { font-family: 'Noto Sans Tamil', Arial, sans-serif; }
    .tamil-text { font-family: 'Noto Sans Tamil', 'Latha', 'Vijaya', sans-serif; }
</style>";
echo "<h2>Debug Information</h2>";

echo "Debug: Starting page...<br>";

// Database connection
$host = "127.0.0.1:3306";
$dbname = "u662933183_servicecenter";
$username = "u662933183_servicecenter";
$password = "e^?al5veVS6";

echo "Debug: Database credentials set...<br>";

try {
    echo "Debug: Attempting database connection...<br>";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set charset to utf8mb4 for proper Tamil character support
    $pdo->exec("SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdo->exec("SET CHARACTER SET utf8mb4");
    $pdo->exec("SET character_set_connection=utf8mb4");
    
    echo "Debug: Database connected successfully with UTF8MB4 support!<br>";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if table exists
try {
    echo "Debug: Checking if thirukkural table exists...<br>";
    $check_table = $pdo->query("SHOW TABLES LIKE 'thirukkural'");
    if ($check_table->rowCount() > 0) {
        echo "Debug: thirukkural table exists!<br>";
        
        // Check table structure
        $structure = $pdo->query("DESCRIBE thirukkural");
        echo "Debug: Table structure:<br>";
        $columns = [];
        while ($row = $structure->fetch()) {
            $columns[] = $row['Field'];
            echo "- " . $row['Field'] . " (" . $row['Type'] . ")<br>";
        }
        
        echo "Debug: Available columns: " . implode(', ', $columns) . "<br>";
        
        // Check row count
        $count = $pdo->query("SELECT COUNT(*) FROM thirukkural")->fetchColumn();
        echo "Debug: Total rows in table: " . $count . "<br>";
        
        if ($count > 0) {
            // Show first row using any available column for ordering
            $first_column = $columns[0];
            $first_row = $pdo->query("SELECT * FROM thirukkural ORDER BY `$first_column` LIMIT 1")->fetch(PDO::FETCH_ASSOC);
            echo "Debug: First row data:<br>";
            foreach ($first_row as $key => $value) {
                $display_value = $value;
                if (strlen($value) > 200) {
                    $display_value = mb_substr($value, 0, 200, 'UTF-8') . '...';
                }
                echo "- <strong>$key:</strong> <span class='tamil-text'>" . htmlspecialchars($display_value, ENT_QUOTES, 'UTF-8') . "</span><br>";
            }
        } else {
            echo "Debug: Table is empty!<br>";
        }
    } else {
        echo "Debug: thirukkural table does NOT exist!<br>";
        
        // Show all tables
        $tables = $pdo->query("SHOW TABLES");
        echo "Debug: Available tables:<br>";
        while ($table = $tables->fetch()) {
            echo "- " . $table[0] . "<br>";
        }
    }
} catch(PDOException $e) {
    echo "Debug: Error checking table: " . $e->getMessage() . "<br>";
}

echo "Debug: Script completed successfully!<br>";
?>