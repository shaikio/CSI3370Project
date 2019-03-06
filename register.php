<<?php
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbname = "recipelists";

	session_start();
	
    $selected = mysqli_connect($hostname, $username, $password, $dbname);

    if(isset($_GET['user_name']) && isset($_GET['user_password'])){
        $user = $_GET['user_name'];
        $pass = $_GET['user_password'];
        $query = "SELECT * FROM 'users_table' WHERE user_name='$user'";
        $result = mysqli_query($selected, $query);
        if(mysqli_num_rows($result) > 0 ) {
            echo "User name already exists!";
        }else{
            $query = "INSERT INTO users_table (user_name, user_password) VALUES ('$user', '$pass')";
            $result = mysqli_query($selected, $query);
            header("location:index.php");
        }
    }
    mysqli_close($selected);
    
?>

