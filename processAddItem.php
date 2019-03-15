<?php 
session_start();
require_once 'db_connector.php';

$recipeTitle = $_GET['recipeTitle'];
$recipeIng = $_GET['recipeIngredients'];
$recipeIns = $_GET['recipeInstructions'];
$user_id = $_SESSION['userid'];

$sql_Statement = "INSERT INTO `recipes_table` (`recipe_title`, `recipe_ingredients`, `recipe_instructions`) VALUES ('$recipeTitle', '$recipeIng', '$recipeIns')";
echo '<script type="text/javascript">alert("Recipe added successfully!");</script>';

if ($connection) {
	$result = mysqli_query($connection, $sql_Statement);
	if ($result) {
		include('showAddForm.php');
	}
	else {
		echo "Error inserting recipe" . mysqli_error($connection);
	}
}
else {
	echo "Error connecting" . mysqli_connect_error();
}
?>

<!--
This page manages the addition of items logic between the database and the site for recipe adding purposes.
!-->
