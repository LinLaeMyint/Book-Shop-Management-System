<?php
session_start();
unset($_SESSION['adminusername']);
header("Location:Login.php");
?>