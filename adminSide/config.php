<?php
// Load environment variables if .env file exists
if (file_exists(dirname(__DIR__) . '/.env')) {
    $envVars = parse_ini_file(dirname(__DIR__) . '/.env');
    foreach ($envVars as $key => $value) {
        $_ENV[$key] = $value;
    }
}

// Database configuration - use environment variables if available
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_USER', $_ENV['DB_USER'] ?? 'root');
define('DB_PASS', $_ENV['DB_PASS'] ?? '');
define('DB_NAME', $_ENV['DB_NAME'] ?? 'restaurantdb');

// Create Connection
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connection
if ($link->connect_error) { // if not Connection
    die('Connection Failed: ' . $link->connect_error); // kills the Connection OR terminate execution
}
?>
