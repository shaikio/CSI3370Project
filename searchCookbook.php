<?php

require_once 'db_connector.php';
echo '<div class="menu-container">
<div id="topmost-part"> <h1 id="after-login-heading"> Make Your Cookbook </h1> </div>
<div class="menu-container">
 <span class="menu-item"><a href="showProfilePage.php"> Profile </a> </span> | <span class="menu-item"><a href="showSearchForm.php"> Search </a> </span> |
 <span class="menu-item"><a href="showAddForm.php"> Add New Recipe </a></span> |
 <span class="menu-item"><a href="yourRecipes.php"> Your Recipes </a></span> |
 <span class="menu-item"><a href="image.php"> Gallery of Cooked Recipes </a></span>
</div>
</div>';

echo '<style type="text/css">
#topmost-part {
	background-color: black;
	padding-bottom: 20px;
	padding-top: 20px;
}

h2 {
	text-align: center;
}

#after-login-heading {
	color: green;
	padding-top: 15px;
	text-align: center;
}

body {
	background-color: tan;
}

.menu-container {
	color:#EEE;
  	background-color:#222;
  	padding:6px;
  	font-size:1.5em;
}

a:link {
	color: white;
	text-decoration: none;
}
	
a:hover {
	background-color: green;
	text-decoration: underline;
}

a:visited {
	color: white;
	text-decoration: none;
}

#table-of-results {
	text-align: center;
}

 </style>';
$searchForTitle = $_GET['recipeName'];
$searchForIngredients = $_GET['recipeIngredients'];
$searchForInstructions = $_GET['recipeInstructions'];

$sql_statement = "SELECT * FROM recipes_table WHERE recipe_title LIKE '%$searchForTitle%' AND
recipe_ingredients LIKE '%$searchForIngredients%' AND recipe_instructions LIKE '%$searchForInstructions%'";

if ($connection) {
	$result = mysqli_query($connection, $sql_statement);
	if ($result) {
				echo '<h2> Your Results (If Any) </h2>';
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div id="table-of-results">';
				echo "Recipe ID: " . $row['id'] . "<br>";
				echo "Recipe Title: " . $row['recipe_title'] . "<br>";
				echo "Recipe Ingredients: " . $row['recipe_ingredients'] . "<br>";
				echo "Recipe Instructions: " . $row['recipe_instructions'] . "<br>";
				echo "-----------------------<br>";
				echo '</div>';
			}	
	}
}
?>