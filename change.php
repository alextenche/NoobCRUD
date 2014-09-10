<?php
session_start();

if(isset($_POST['submit'])){

	$mypic = $_FILES['newupload']['name'];
	$temp = $_FILES['newupload']['tmp_name'];
	$type = $_FILES['newupload']['type'];
	
	$id = $_REQUEST['id'];
	$newname = $_REQUEST['newname'];
	$newemail = $_REQUEST['newemail'];
	$newpassword = $_REQUEST['newpassword'];
	
	if(true){  //(type == "image/jpeg") || (type == "image/jpg") || (type == "image/bmp")
		
		if(($newname || $newemail) != ""){
		
			$link = mysqli_connect("localhost","root","termopane","testsite");
			mysqli_query($link, "UPDATE users SET name='$newname', email='$newemail' WHERE id = '$id'");
		} else {
			echo "You have to type a name and email";
		}
		if($newpassword != ""){
			$md5 = md5($newpassword);
			mysqli_query($link, "UPDATE users SET password='$md5' WHERE id = '$id'");
		}
			  
		echo "Your values have been updated successfuly!";
		mysqli_close($link);
	} else {
		echo "Please load a valid jpeg,jpg or bmp file!<br>";
	}
} else {
	echo "Not allowed";
}
?>