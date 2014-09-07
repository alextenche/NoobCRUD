
<h3>Choose an ID to edit</h3>
<br>

<?php

$link = mysqli_connect("localhost", "root", "termopane", "testsite")or die("problem with connection...");

$per_page = 6;
$pages_query = mysqli_query($link, "SELECT COUNT('id') FROM users");
$pages = ceil(mysqli_result($pages_query, 0) / $per_page);

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_page;
$query = mysqli_query($link, "SELECT name FROM users LIMIT $start, $per_page");


$result = mysqli_query($link, "SELECT * FROM users");

echo "<table width=\"90%\" align=center border=2>";
echo "<tr><td width=\"40%\" align=center bgcolor=\"FFFF00\">ID</td>
<td width=\"40%\" align=center bgcolor=\"FFFF00\">NAME</td>
<td width=\"40%\" align=center bgcolor=\"FFFF00\">EMAIL</td>
<td width=\"40%\" align=center bgcolor=\"FFFF00\">PASSWORD</td></tr>";

while($row = mysqli_fetch_assoc($result)) {

	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$password = $row['password'];
	
echo "<tr><td align=center>
<a href=\"edit.php?ids=$id&names=$name&emails=$email&passwords=$password\">$id</a></td>
<td>$name</td><td><a href=\"emailto.php?emails=$email\">$email</a></td><td>$password</td></tr>";	
	
} echo "</table>";

	
mysqli_close($link);
include('links.php');
?>