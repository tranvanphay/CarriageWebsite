<?php
$servername = "localhost:3306";
$username = "tax55389_phay.tran99";
$password = "Phaytran#1@@";
$accountName = $_POST["username"];
$accountPassword = $_POST["password"];
$dbName = "tax55389_taxitaigiarehcm";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $sql = "SELECT * FROM `admin` where userName = '$accountName' and `password` = '$accountPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
       echo "<script> window.location.assign('../admin/adminManagement.php'); </script>";
    } else {
    echo '<script language="javascript">';
    echo 'alert("Login error!!!")';
    echo '</script>';
        echo "<script> window.location.assign('../admin/index.php'); </script>";

    }
    $conn->close();
}
?>
