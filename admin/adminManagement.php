<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<script> window.location.assign('/adminHomePage.html'); </script>";
} else {
    echo "<script> window.location.assign('/index.php'); </script>";
}
?>
