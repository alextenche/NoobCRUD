<?php

$link = mysqli_connect("localhost", "root", "termopane", "testsite")or die("problem with connection...");

$result = mysqli_query($link, "SELECT * FROM users");

echo "<table width=\"90%\" align=center border=2>";
echo "<tr><td width=\"40%\" align=center bgcolor=\"FFFF00\">ID</td>
<td width=\"40%\" align=center bgcolor=\"FFFF00\">NAME</td>
<td width=\"40%\" align=center bgcolor=\"FFFF00\">EMAIL</td>
<td width=\"40%\" align=center bgcolor=\"FFFF00\">PASSWORD</td></tr>";

while($row = mysqli_fetch_assoc($result)) {

	$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];
	
echo "<tr><td align=center>
<a href=\"edit.php?ids=$first&names=$second&emails=$third&passwords=$fourth\">$id</a></td>
<td>$name</td><td><a href=\"emailto.php?emails=$email\">$email</a></td><td>$password</td></tr>";	
	
} echo "</table>";

	
mysqli_close($link);
?>