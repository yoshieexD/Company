<?php
session_start();
require_once "../config/db.php";
if (isset($_SESSION['user_id']) != "") {
    header("location: ../page/home.php");
}
$findOne = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $_SESSION['user_email'] . "'  ");
if (!$findOne) {
    header('location: ../index.php');
}
?>