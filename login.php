<?php
session_start();

if($_POST){
	$_SESSION['name'] = $_POST['name'];
	$_SESSION['password'] = md5($_POST['password']);

	if($_SESSION['name'] && $_SESSION['password']){
		$link = mysqli_connect("localhost","root","termopane","testsite");
		
		$query = mysqli_query($link, "SELECT * FROM users WHERE name = '" . $_SESSION['name'] . "'");
		$numrows = mysqli_num_rows($query);
		
		if($numrows != 0){
			while($row = mysqli_fetch_assoc($query)){
				$dbname = $row['name'];
				$dbpassword = $row['password'];
			}
			if($_SESSION['name'] == $dbname){
				if($_SESSION['password'] == $dbpassword){
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
} else {
	echo "Access denied!";
	exit;
}
?>