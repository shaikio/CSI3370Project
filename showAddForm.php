<!-- 
 this is a partial page
 purpose is to show the "Add Recipe" form
 even though the file extension is .php, all of the code is html.
 -->
<html>
	<title> Search </title>
<head>
	<link rel="stylesheet" type="text/css" href="custom-styles.css">
</head>

<body>
<div id="topmost-part"> <h1 id="after-login-heading"> Make Your Cookbook </h1> </div>
<div class="menu-container">
<span class="menu-item"> Welcome, <?php
session_start();
echo $_SESSION['username']; ?>. <a href="logout.php"> Logout </a></span>
| <span class="menu-item"><a href="showProfilePage.php"> Profile </a> </span> | <span class="menu-item"><a href="showSearchForm.php"> Search </a> </span> |
 <span class="menu-item"><a href="showAddForm.php"> Add New Recipe </a></span> |
 <span class="menu-item"><a href="yourRecipes.php"> Your Recipes </a></span> |
    <span class="menu-item"><a href="image.php"> Gallery of Cooked Recipes </a></span>
</div>
<div id="form-container">
	<h2>Add a recipe</h2>
	<p>Fill out all of the fields and submit</p>
	<form action="processAddItem.php">
		<label for="add-recipe-title"> Recipe Title: </label>
		<input type="text" name="recipeTitle" class="search-textbox" id="add-recipe-title"><br>
		
		<label for="add-recipe-ingredients"> Recipe Ingredients: </label>
		<textarea name="recipeIngredients" class="search-textbox" id="add-recipe-ingredients"></textarea><br>
		
		<label for="add-recipe-instructions"> Recipe Instructions: </label>
		<textarea name="recipeInstructions" class="search-textbox" id="add-recipe-instructions"></textarea><br>
		<button type="submit" class="search-or-add-button">Add</button>
	</form>
</div>
</body>
</html>

<!--
This page manages the logic between the database and the site for adding recipes.
!-->