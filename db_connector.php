<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_cookbook";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);