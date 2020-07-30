<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<script> window.location.assign('/adminPage.php'); </script>";
} else {
    echo "<script> window.location.assign('/login.php'); </script>";
}
?>
