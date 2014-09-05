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
	
	mysqli_query($link,"INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')");
	
	$registered = mysqli_affected_rows($link);
	echo "$registered was inserted";
	
	mysqli_close($link);
?>