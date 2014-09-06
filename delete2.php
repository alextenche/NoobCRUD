<?php

	$link = mysqli_connect("localhost", "root", "termopane", "testsite")or die("problem with connection...");

	$result = mysqli_query($link, "DELETE FROM users WHERE id='".$_REQUEST['id']."'");

	echo "The user has been deleted succesfully";
	
	mysqli_close($link);
	
	include('links.php');

?>