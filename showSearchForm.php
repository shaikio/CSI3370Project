<!-- 
 this is a partial page
 purpose is to show a search form under the top menu
 even though the file extension is .php, all of the code on this page is html
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
echo $_SESSION['username']; ?>. <a href="logout.php"> Logout</a></span>
	| <span class="menu-item"><a href="showProfilePage.php"> Profile </a> </span> | <span class="menu-item"><a href="showSearchForm.php"> Search </a> </span> |
	<span class="menu-item"><a href="showAddForm.php"> Add New Recipe</a></span>
</div>
<div id="form-container">
	<h2>Search for a recipe</h2>
	<p>Fill out any of these fields and search</p>
	<form action="searchRecipe.php">
		<label for="recipe-title"> Recipe Title: </label>
		<input type="text" name="recipeName" class="search-textbox" id="recipe-title"></input><br>
		
		<label for="ingredients" > Recipe Ingredients: </label>
		<textarea name="recipeIngredients" class="search-textbox" id="ingredients"></textarea><br>
		
		<label for="instructions" > Recipe Instructions: </label>
		<textarea name="recipeInstructions" class="search-textbox" id="instructions"></textarea><br>
	<button type="submit" class="search-or-add-button">Search</button>
	</form>
</div>
</body>
</html>

<!--
This page manages the logic between the database and the site for when users search for recipes.
!-->