<?php
$name = $_POST['name'];
$password = $_POST['password'];

if($name && $password){
	$link = mysqli_connect("localhost","root","termopane","testsite");
	
	$query = mysqli_query($link, "SELECT * FROM users WHERE name = '$name'");
	$numrows = mysqli_num_rows($query);
	
	if($numrows != 0){
		while($row = mysqli_fetch_assoc($query)){
			$dbname = $row['name'];
			$dbpassword = $row['password'];
		}
		if($name == $dbname){
			if($password == $dbpassword){
				header("location: users.php");
			} else {
				echo "Your password is incorrect!";
			}
		} else {
			echo "Your name is incorrect!";
		}
	} else {
		echo "This name is not registered!";
	}
} else {
	echo "You have to type a name and password";
}
?>