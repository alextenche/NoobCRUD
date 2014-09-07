<h3><center>
    <?php include('links.php');?>
</center></h3>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($name && $email && $password && $cpassword){
	if(strlen($password) > 3 ){
	if($password == $cpassword){
		$link = mysqli_connect("localhost", "root", "termopane", "testsite");	
		if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error();}
	
		$username = mysqli_query($link,"SELECT name FROM users WHERE name='$name'");
		$count = mysqli_num_rows($username);
		$remail = mysqli_query($link,"SELECT name FROM users WHERE email='$email'");
		$checkemail = mysqli_num_rows($remail);
		
		if($checkemail != 0){
			echo "This email is already registered! Please type another email.";
		} else {
			if( $count != 0 ){
				echo "This name is already registered! Please type another name.";
			} else {
				mysqli_query($link,"INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
				echo "You have succesfully registred";
			}
		}
	} else {
		echo "Your passwords don't match";
	}
	} else {echo "Yur password is too short! You need to type a password betwen 4 and 15 characters";}
} else {
	echo "you have to complete the form!";
}
	
include('links.php');	
?>