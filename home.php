<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
	<h1><center>Welcome to CRUD control center</center></h1>
    <center>Please login...
	<form method="post" action="insert.php">
        <table border="0" width="10%">
			<tr>
				<td width="10%">Name:</td>
				<td><input type="text" name="name" maxlength="15"/></td>
            </tr>
			<tr>
				<td  width="10%">Password: </td>
				<td><input type="password" name="password" maxlength="15"/><td>
			</tr>
		</table>
        <p>
			<input type="submit" value="login"/>
		</p>
    </form>
	</center>

</body>
</html>
