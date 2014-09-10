<?php 
session_start();

if(!isset($_SESSION['name'])){
	echo "Access Denided!";
	exit;
} else {
	include("session.php");
	include("links.php");
}?>