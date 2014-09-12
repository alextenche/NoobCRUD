<?php
if(isset($_COOKIE['testsite'])){
	
	header('Location:enter.php');
	
} else {

	echo "
	<!doctype html>
	<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Home</title>
	</head>
	<body>
		<h1><center>Welcome to CRUD control center</center></h1>
		<center>Please login...</center>
		<div align='center'>
			<form method='post' action='login.php'>
			<table border='0' width='10%'>
				<tr>
					<td>Name:</td>
					<td><input type='text' name='name' maxlength='15'/></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type='password' name='password' maxlength='15'/><td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type='password' name='password' maxlength='15'/><td>
				</tr>
			</table>
			<p>
				<input type='submit' value='login'/>
			</p>
			</form>
		<a href='form.php'>Register?</a>
	</div>


</body>
</html>

}
?>