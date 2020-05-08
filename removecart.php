<?php
session_start();
$remove=$_GET['removecart'];
unset($_SESSION['cart_id']);
header('location:viewcart.php');
?>