<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "mysql-16581fa0-jaxpacleb2004-86fc.c.aivencloud.com";
$port = 14390;
$dbname = "defaultdb";
$username = "avnadmin";
$password = "AVNS_MKKwQt-EzNpWQTVb0kz";

// Create connection without SSL
$conn = mysqli_connect($host, $username, $password, $dbname, $port);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

// Query your table
$result = mysqli_query($conn, "SELECT * FROM students");
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Return JSON
header("Content-Type: application/json");
echo json_encode($data);

mysqli_close($conn);
?>
