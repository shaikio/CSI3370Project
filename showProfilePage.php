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
echo $_SESSION['username']; ?>. <a href="logout.php"> Logout</a></span>
| <span class="menu-item"><a href="showProfilePage.php"> Profile </a> </span> | <span class="menu-item"><a href="showSearchForm.php"> Search </a> </span> |
 <span class="menu-item"><a href="showAddForm.php"> Add New Recipe</a></span>
</div>

<div class="profile-grid">
	<div class="profileitem1">
		<label for="biography-textarea" class="profile-label"> Bio </label>
		<textarea rows="10" class="profile-textarea" id="biography-textarea"> </textarea>
	</div>
	
	<div class="profileitem2">
		<label for="gender" class="profile-label" id="gender-label"> Gender </label>
		<input type="radio" name="gender" value="Male" id="male"> Male
		<input type="radio" name="gender" value="Female" id="female"> Female
		<input type="radio" name="gender" value="Other" id="other"> Other
	</div>
	
	<div class="profileitem3">
		<label for="age" class="profile-label" id="age-label"> Age </label>
		<input type="text" class="profile-textarea" size="8px" id="age"> </input>
	</div>
	
	<div class="profileitem4">
		<label for="profile-selector" class="profile-label">Experience Level</label>
		<select id="profile-selector">
		  <option value="New to Cooking">New to Cooking</option>
		  <option value="A Little But Not Much Experience">A Little But Not Much Experience</option>
		  <option value="Very Experienced, But Not Professional">Very Experienced, But Not Professional</option>
		  <option value="Professional Chef"> Professional Chef</option>
		</select>
	</div>
	
	<div class="profileitem5">
		<label for="personal-favorites-textarea" id="favorite-food-label"> Favorite Types of Food </label>
		<textarea rows="10" cols="45" class="profile-textarea" id="favorites"> </textarea>
	</div>
	
	<div class="profileitem6">
		<button id="save-profile" onclick="saveChanges()"> Save All Changes </button>
	</div>
	
	<script>
	function saveChanges() {
		var biography = document.getElementById("biography-textarea").value;
		var age = document.getElementById("age").value;
		var favorites = document.getElementById("favorites").value;
		localStorage.setItem("bio", biography);
		localStorage.setItem("age", age);
		localStorage.setItem("favorites", favorites);
		alert("Profile saved!");
// PERFORMS RADIO BUTTON CHECK
		localStorage.setItem("gender1", false);
		localStorage.setItem("gender2", false);
		localStorage.setItem("gender3", false);
		if (document.getElementById("male").checked == true) {
		localStorage.setItem("gender1", "1");
		} else if (document.getElementById("female").checked == true) {
		localStorage.setItem("gender2", "1");			
		} else if (document.getElementById("other").checked == true) {
		localStorage.setItem("gender3", "1");
		}
// PERFORMS OPTION MENU CHECK
		localStorage.setItem("choice1", false);
		localStorage.setItem("choice2", false);
		localStorage.setItem("choice3", false);
		localStorage.setItem("choice4", false);
		var i = document.getElementById("profile-selector").selectedIndex;
		localStorage.setItem("choice", i);
	} 
		window.onload = function() { 
		document.getElementById("biography-textarea").value = localStorage.getItem("bio");
		if (localStorage.getItem("gender1") === "1") {
			document.getElementById("male").checked = true;
		} else if (localStorage.getItem("gender2") === "1") {
			document.getElementById("female").checked = true;
		} else if (localStorage.getItem("gender3") === "1") {
			document.getElementById("other").checked = true
		}
		document.getElementById("age").value = localStorage.getItem("age");
		document.getElementById("favorites").value = localStorage.getItem("favorites");
		document.getElementById("profile-selector").selectedIndex = localStorage.getItem("choice");
		}
	</script>
</div>
</body>
</html>

<!--
This page manages the GUI for the profile page, as well as the localstorage.
!-->