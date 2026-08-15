<?php
require_once __DIR__ . '/includes/db_bikes.php';

$connFactory = 'getBikesDbConnection';
if (!function_exists($connFactory)) {
	die('Bikes DB helper not loaded.');
}

$conn = $connFactory();
$result = $conn->query('SELECT DATABASE() AS db_name');
$row = $result ? $result->fetch_assoc() : null;

header('Content-Type: text/plain; charset=utf-8');
echo "Bikes DB connection: OK\n";
echo 'Active database: ' . ($row['db_name'] ?? 'unknown') . "\n";

$conn->close();
