<?php 
// Start session
session_start();

// PostgreSQL Database Connection Constants
define('DB_HOST', getenv('DB_HOST') ?: 'dpg-d7c1vh9o3t8c73csk44g-a');
define('DB_PORT', getenv('DB_PORT') ?: '5432');
define('DB_NAME', getenv('DB_NAME') ?: 'onlinefoodorder_sql');
define('DB_USER', getenv('DB_USER') ?: 'onlinefoodorder_sql_user');
define('DB_PASS', getenv('DB_PASS') ?: 'eKk4ei2LWgf3AnvxoS3OzEnnaVWtdwx7');

// Site URL - Update this for production
$site_url = getenv('SITE_URL') ?: 'postgresql://onlinefoodorder_sql_user:eKk4ei2LWgf3AnvxoS3OzEnnaVWtdwx7@dpg-d7c1vh9o3t8c73csk44g-a.oregon-postgres.render.com/onlinefoodorder_sql;
define('SITEURL', $site_url);

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
        die("Connection failed: " . $e->getMessage());
    }
}

// Global connection variable
$conn = getConnection();

// Set timezone
date_default_timezone_set('UTC');

// Function to execute queries
function executeQuery($sql, $params = []) {
    global $conn;
    $result = pg_query_params($conn, $sql, $params);
    if (!$result) {
        error_log("Query Error: " . pg_last_error($conn));
        return false;
    }
    return $result;
}

// Function to get last inserted ID
function getLastInsertId($table, $column = 'id') {
    global $conn;
    $result = pg_query($conn, "SELECT lastval() as id");
    $row = pg_fetch_assoc($result);
    return $row['id'];
}

// Function to escape strings (for backward compatibility)
function mysqli_real_escape_string($conn, $string) {
    return pg_escape_string($conn, $string);
}

// Function to fetch associative array
function mysqli_fetch_assoc($result) {
    return pg_fetch_assoc($result);
}

// Function to get number of rows
function mysqli_num_rows($result) {
    return pg_num_rows($result);
}

// Function to execute query (for backward compatibility)
function mysqli_query($conn, $sql) {
    return pg_query($conn, $sql);
}

// Function to get error
function mysqli_error($conn) {
    return pg_last_error($conn);
}

// Function to insert ID
function mysqli_insert_id($conn) {
    $result = pg_query($conn, "SELECT lastval() as id");
    $row = pg_fetch_assoc($result);
    return $row['id'];
}
?>