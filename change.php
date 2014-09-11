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
	
	if($newname && $newemail && $newpassword){
	
		if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z]+\.)+[a-zA-Z]{2,6}$/i", $newemail)){
		
			if(strlen($newpassword) > 4){
			
				$link = mysqli_connect("localhost","root","termopane","testsite");
				mysqli_query($link, "UPDATE users SET name='$newname', email='$newemail' WHERE id = '$id'");
				$md5 = md5($newpassword);
				mysqli_query($link, "UPDATE users SET password='$md5' WHERE id = '$id'");
				
				if(true){  //(type == "image/jpeg") || (type == "image/jpg") || (type == "image/bmp")
				
					$dir = "profiles/".$_SESSION['name']."/images";
					$files = 0;
					$handle = opendir($dir);
					
					while(($file = readdir($handle)) != false){  // while the directory exist
					
						if($file != "." && $file != ".." && $file != "Thumbs.db"){
							unlink($dir."/".$file);  // delete files or directory
							$files++;	
						}
					}
					closedir($handle);
					sleep(1);
					rename("profiles/".$_SESSION['name']."", "profiles/$newname");
					move_uploaded_file($temp, "profiles/$newname/images/$mypic");
					echo "Your values have been updated successfuly!";
					header('Refresh:2; url=logout.php');
				} else {
					echo "Please load a valid jpeg,jpg or bmp file!<br>";
				}
			} else {
				echo "The password needs to be larger than 4 charachters";
			}
		} else {
			echo "Please type a valid email!";
		}
	} else {
		echo "Please complete the form";
	}
} else {
	echo "Not allowed";
}
?>