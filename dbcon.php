<?php
$host = "localhost";      // usually localhost
$user = "root";           // your DB username
$password = "";           // your DB password
$database = "eb_lms";     // your database name

// Create connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
