<?php
$dbServer = "localhost"; 
$dbUsername = "root"; // this is the same username as phpMyAdmin 
$dbPassword = "root";  // this is the same password as phpMyAdmin
$dbName = "blog_cms";

// Create Connection 

$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

?>