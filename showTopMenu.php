<!-- 
This is a partial page.  The purpose is to (1) Start the HTML page (2) set the CSS styles (3) Show the app title
(4) show the navigation menu.
 -->

<html>
	<title>Your Cookbook</title>
<head>
	<link rel="stylesheet" type="text/css" href="custom-styles.css">
</head>

<body>
<div id="topmost-part"> <h1 id="after-login-heading"> Make Your Cookbook </h1> </div>
<div class="menu-container">
<span class="menu-item"> Welcome, <?php
session_start();
echo $_SESSION['username']; ?>. <a href="logout.php"> Logout </a></span>
| <span class="menu-item"><a href="showProfilePage.php"> Profile </a> </span> | <span class="menu-item">
 <span class="menu-item"><a href="showSearchForm.php"> Search </a></span> |
 <span class="menu-item"><a href="showAddForm.php"> Add New Recipe </a></span> | 
 <span class="menu-item"><a href="yourRecipes.php"> Your Recipes </a></span> |
    <span class="menu-item"><a href="image.php"> Gallary of Cooked Recipes </a></span>
</div>

</body>
</html>