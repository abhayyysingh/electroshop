<?php
session_start();
$cart_id=$_GET['cart'];
echo $cart_id;

$cart=array($cart_id);

$_SESSION['cart_id']=$cart;
header("location:detail.php?row_id=$cart_id");
  ?>


