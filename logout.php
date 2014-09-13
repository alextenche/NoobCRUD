<?php 
session_start();

session_destroy();
$expire = time() - 86400; // expire the cookie
setcookie('testsite', $_SESSION['name'], $expire);

echo "Session & Cookie destroyed";
header("Refresh:3; url=home.php");
?>