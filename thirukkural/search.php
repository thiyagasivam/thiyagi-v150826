<?php
header('Content-Type: application/json');

// Database connection
$host = "127.0.0.1:3306";
$dbname = "u662933183_servicecenter";
$username = "u662933183_servicecenter";
$password = "e^?al5veVS6";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(['error' => 'Database connection failed']);
    exit;
}

$search_term = $_GET['q'] ?? '';

if (empty($search_term)) {
    echo json_encode([]);
    exit;
}

// Search in multiple fields
$sql = "SELECT * FROM thirukkural 
        WHERE kural LIKE :search 
           OR muVaradharasanarexplanation LIKE :search 
           OR solomonpaapaiyaexplanation LIKE :search 
           OR kalaignarexplanation LIKE :search 
           OR couplet LIKE :search 
           OR english_explanation LIKE :search 
           OR transliteration LIKE :search
        ORDER BY id 
        LIMIT 50";

$stmt = $pdo->prepare($sql);
$search_param = '%' . $search_term . '%';
$stmt->bindValue(':search', $search_param);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
?>