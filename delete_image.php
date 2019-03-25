<?php

$id = $_GET['id'];

$dbname = "recipelists";
$conn = mysqli_connect("localhost", "root", "", $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM images WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
   mysqli_close($conn);
   header('Location: image.php');
   exit;
} else {
   echo "Error deleting record";
}

?>