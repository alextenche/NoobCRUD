<?php
$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newpassword = $_REQUEST['newpassword'];

$link = mysqli_connect("localhost","root","termopane","testsite");

mysqli_query($link, "UPDATE users SET name='$newname', email='$newemail', password='$newpassword'
			  WHERE id = '$id'");
			  
echo "Your values have been updated successfuly!";
mysqli_close($link);

include('links.php');
?>