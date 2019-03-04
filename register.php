<?php
	
	$username = "root";
	$password = "";
	$hostname = "localhost";
	$dbname = "your_cookbook";
	
	$selected = mysqli_connect($hostname, $username, $password, $dbname);
	
	
	if(isset($_POST['user_name']) && isset($_POST['user_password'])){
		$user = $_POST['user_name'];
		$pass = $_POST['user_password'];

		$query = "SELECT * FROM users_table WHERE user_name='$user'";
		$result = mysqli_query($selected, $query);
		if(mysqli_num_rows($result) > 0 ) { //check if there is already an entry for that username
			echo "Username already exists!";
		}else{
			$query = "INSERT INTO users_table (user_name, user_password) VALUES ('$user', '$pass')";
			$result = mysqli_query($selected, $query);
			header("location:index.php");
		}
	}
	mysqli_close($selected);
	
?>

