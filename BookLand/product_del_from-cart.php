<?php session_start();
$id=$_GET['book_id'];
unset($_SESSION['cart'][$id]);
header("location:view-cart.php");

?>


