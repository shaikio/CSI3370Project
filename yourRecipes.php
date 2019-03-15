<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <link rel="stylesheet" type="text/css" href="custom-styles.css">
 <style>
  table {
   border: 5px solid black;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
   border: 2px solid black;
    }
  tr {
	background-color: white;	
	}
  td {
	border: 2px solid black;
	color: black;
	}
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
<div id="table-page-top">
	<div id="topmost-part"> <h1 id="after-login-heading"> Make Your Cookbook </h1> </div>
		<div class="menu-container">
			<span class="menu-item"> Welcome, <?php
			session_start();
			echo $_SESSION['username']; ?>. <a href="logout.php"> Logout </a></span>
			| <span class="menu-item"><a href="showProfilePage.php"> Profile </a> </span> | <span class="menu-item"><a href="showSearchForm.php"> Search </a> </span> |
			 <span class="menu-item"><a href="showAddForm.php"> Add New Recipe </a></span> |
			 <span class="menu-item"><a href="yourRecipes.php"> Your Recipes </a></span>
		</div>
</div>

<div id="recipe-table-listing">
 <table>
 <tr>
  <th>Recipe Name</th> <th> Recipe Ingredients </th> <th> Recipe Instructions </th>
 
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "recipelists");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM recipes_table";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['recipe_title'];
	echo "<td>" . $row['recipe_ingredients'];
	echo "<td>" . $row['recipe_instructions'];
	echo "<td>" . $row['id'];
	echo "<td><a href='delete.php?id=". $row['id']."'>Delete</a></td>";
}
echo '</table>';
} else { echo '0 results'; }

$conn->close();
?>
</table>
</div>
</body>
</html>