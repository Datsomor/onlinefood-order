<?php 
// Start session
session_start();

// Load environment variables from .env file (for local development)
if (file_exists(__DIR__ . '/../.env')) {
    $lines = file(__DIR__ . '/../.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            putenv("$key=$value");
        }
    }
}

// PostgreSQL Database Connection Constants
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_PORT', getenv('DB_PORT') ?: '5432');
define('DB_NAME', getenv('DB_NAME') ?: 'onlinefoodorder');
define('DB_USER', getenv('DB_USER') ?: 'postgres');
define('DB_PASS', getenv('DB_PASS') ?: '');

// Site URL - Auto-detect for production
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$base_path = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('SITEURL', getenv('SITE_URL') ?: $protocol . $host . $base_path);

// PostgreSQL Connection Function
function getConnection() {
    $conn_string = "host=" . DB_HOST . " port=" . DB_PORT . " dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASS;
    
    try {
        $conn = pg_connect($conn_string);
        if (!$conn) {
            throw new Exception("Could not connect to PostgreSQL database");
        }
        return $conn;
    } catch (Exception $e) {
        // Log error and show user-friendly message
        error_log("Database connection error: " . $e->getMessage());
        die("Sorry, we're experiencing technical difficulties. Please try again later.");
    }
}

// Global connection variable
$conn = getConnection();

// Set timezone
date_default_timezone_set('UTC');

// Helper functions for backward compatibility
function mysqli_query($conn, $sql) {
    return pg_query($conn, $sql);
}

function mysqli_fetch_assoc($result) {
    return pg_fetch_assoc($result);
}

function mysqli_num_rows($result) {
    return pg_num_rows($result);
}

function mysqli_error($conn) {
    return pg_last_error($conn);
}

function mysqli_insert_id($conn) {
    $result = pg_query($conn, "SELECT lastval() as id");
    $row = pg_fetch_assoc($result);
    return $row['id'];
}

function mysqli_real_escape_string($conn, $string) {
    return pg_escape_string($conn, $string);
}

// Function to close connection (optional)
function mysqli_close($conn) {
    pg_close($conn);
}
?>