<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "id14351042_phaytran";
$dbPassword = "|4-R)F>ix0nf3V8S";
$dbName     = "id14351042_vantaitanthanh";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}