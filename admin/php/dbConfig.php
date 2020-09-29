<?php
// Database configuration
$dbHost     = "localhost:3306";
$dbUsername = "tax55389_phay.tran99";
$dbPassword = "Phaytran#1@@";
$dbName     = "tax55389_taxitaigiarehcm";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}