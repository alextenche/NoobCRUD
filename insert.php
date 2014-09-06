<h3><center>
    <?php include('links.php');?>
</center></h3>

<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$link = mysqli_connect("localhost","root","termopane","testsite");
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$username = mysqli_query($link,"SELECT name FROM users WHERE name='$name'");
	$count = mysqli_num_rows($username);
	
	if( $count != 0 ){
		die("<b>ERROR: Name already exists! Please type another name</b>");
		include('links.php');
	}
	
	mysqli_query($link,"INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
	
	echo "You have succesfully registred";
	$registered = mysqli_affected_rows($link);
	echo "$registered was inserted";
	
	mysqli_close($link);
	include('links.php');
?>