<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
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
	
	td {
		border: 2px solid black;
	}
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
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
}
echo '</table>';
} else { echo '0 results'; }

$conn->close();
?>
</table>
</body>
</html>