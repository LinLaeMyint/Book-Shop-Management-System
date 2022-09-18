<?php
    session_start();

    $id=$_GET['book_id'];
    $_SESSION['cart'][$id]++;
    header("location:ShowAll.php");

?>