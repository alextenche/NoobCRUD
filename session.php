<?php
$time = time();
$date = date('d F, Y, g: i: s a');
echo "Today is ".$date;

if(!isset($_SESSION['name'])){
	echo "not a session";
} else {
	$dir = "profiles/" . $_SESSION['name'] . "/images/";
	$open = opendir($dir);
		
	while(($file = readdir($open)) != false){
		if(($file != ".") && ($file != "..") && ($file != "Thumbs.db")){
			echo "<img border='1' width='70' height='70' src='$dir/$file'/>";
		}
	}
	echo "&nbsp;<b>" . $_SESSION['name'] . "</b>" . "'s session<br><a href='logout.php'>Logout</a><hr>";
}?>