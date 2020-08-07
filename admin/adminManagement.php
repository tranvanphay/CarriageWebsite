<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<script> window.location.assign('/admin/adminHomePage.html'); </script>";
} else {
    echo "<script> window.location.assign('/admin/index.php'); </script>";
}
?>
