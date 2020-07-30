<?php
$servername = "localhost";
$username = "id14351042_phaytran";
$password = "|4-R)F>ix0nf3V8S";
$accountName = $_POST["username"];
$accountPassword = $_POST["password"];
$dbName = "id14351042_vantaitanthanh";

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
        echo "<script> window.location.assign('../admin/login.php'); </script>";

    }
    $conn->close();
}
?>
