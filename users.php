<?php 
session_start();

if(!isset($_SESSION['name'])){
	echo "Access Denided!";
	exit;
} else {
	echo "<b>" . $_SESSION['name'] . "</b>" . "'s session<br><a href='logout.php'>Logout</a>";
	include("links.php");
}?>