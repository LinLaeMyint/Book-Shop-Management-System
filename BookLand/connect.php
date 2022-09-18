<?php 
// Connection variables
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "bookshop"; // MySQL Database name

// Connect to MySQL Database
$db1 = new mysqli($host, $user, $password, $database);

// Check connection
if ($db1->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>