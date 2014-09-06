<h3><center>
    <?php include('links.php');?>
</center></h3>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($name && $email && $password && $cpassword){	

	if($password == $cpassword){
	
		$link = mysqli_connect("localhost","root","termopane","testsite");	
		if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error();}
	
		$username = mysqli_query($link,"SELECT name FROM users WHERE name='$name'");
		$count = mysqli_num_rows($username);
	
		if( $count != 0 ){
			include('links.php');
			die("<b>ERROR: Name already exists! Please type another name</b>");
		}
	
		mysqli_query($link,"INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
	
		echo "You have succesfully registred";
		
	} else {
		echo "Your passwords don't match";
	}
	
} else {
	echo "you have to complete the form!";
}
	
include('links.php');	
?>