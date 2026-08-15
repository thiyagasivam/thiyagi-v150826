<?php
/**
 * Central DB connection for bikes module.
 *
 * Prefer environment variables in production:
 * BIKES_DB_HOST, BIKES_DB_USER, BIKES_DB_PASSWORD, BIKES_DB_NAME
 */
function getBikesDbConnection() {
    $host = getenv('BIKES_DB_HOST') ?: '127.0.0.1:3306';
    $user = getenv('BIKES_DB_USER') ?: 'u662933183_bikes';
    $password = getenv('BIKES_DB_PASSWORD') ?: 'ptzrz5K6V;';
    $database = getenv('BIKES_DB_NAME') ?: 'u662933183_bikes';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die('Bikes DB connection failed: ' . $conn->connect_error);
    }

    $conn->set_charset('utf8mb4');
    return $conn;
}
