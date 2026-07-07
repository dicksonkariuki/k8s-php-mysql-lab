<?php

$host = getenv('DB_HOST') ?: 'mysql';
$username = "root";
$password = "root123";
$database = "studentdb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>