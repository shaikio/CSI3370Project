<?php

$id = $_GET['id'];

echo("<script type='text/javascript'> prompt('What should its new recipe name be?', 'name here'); </script>");

$title = "meow";
$ingredients = "dog";
$instructions = "cat";

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