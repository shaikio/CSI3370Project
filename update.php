<?php
$id = $_GET['id'];
$title = $_COOKIE["title"];
$ingredients = $_COOKIE["ingredients"];
$instructions = $_COOKIE["instructions"];

$dbname = "recipelists";
$conn = mysqli_connect("localhost", "root", "", $dbname);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE recipes_table SET recipe_title='$title', recipe_ingredients='$ingredients', recipe_instructions='$instructions' WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
   mysqli_close($conn);
   header('Location: yourRecipes.php');
   exit;
} else {
   echo "Error updating record";
}

?>