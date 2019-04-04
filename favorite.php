<?php
$id = $_GET['id'];
$favorite_status = $_COOKIE["favorite_status"];
$dbname = "recipelists";
$conn = mysqli_connect("localhost", "root", "", $dbname);

$sql = "UPDATE `recipes_table` SET favorite_status='$favorite_status' WHERE id ='$id'";
if (mysqli_query($conn, $sql)) {
   mysqli_close($conn);
   header('Location: yourRecipes.php');
   exit;
} else {
   echo "Error updating record";
}

?>