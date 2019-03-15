<?php

require_once 'db_connector.php';

$searchForTitle = $_GET['recipeName'];
$searchForIngredients = $_GET['recipeIngredients'];
$searchForInstructions = $_GET['recipeInstructions'];

$sql_statement = "SELECT * FROM recipes_table WHERE recipe_title LIKE '%$searchForTitle%' AND
recipe_ingredients LIKE '%$searchForIngredients%' AND recipe_instructions LIKE '%$searchForInstructions%'";

if ($connection) {
	$result = mysqli_query($connection, $sql_statement);
	if ($result) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "recipe title " . $row['recipe_title'] . "<br>";
				echo "recipe ingredients " . $row['recipe_ingredients'] . "<br>";
				echo "recipe instructions " . $row['recipe_instructions'] . "<br>";
				echo "-----------------------<br>";
			}
	} else {
		echo "Error in SQL" . mysqli_error($connection);
	}
	
} else {
	echo "Error connecting" . mysqli_connect_error();
}



?>