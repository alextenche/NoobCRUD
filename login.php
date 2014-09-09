<?php
$name = $_POST['name'];
$password = $POST['password'];

if($name && $password){
	$link = mysqli_connect("localhost","root","termopane","testsite");
	
	$query = mysqli_query($link, "SELECT * FROM users WHERE name = '$name'");
	$numrows = mysqli_num_rows($query);
} else {
	echo "You have to type a name and password";
}
?>