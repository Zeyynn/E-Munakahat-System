<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'emuna';

// Create a new connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>