<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

	<h2>Register Form</h2>
	
    <form method="post" action="insert.php">
        <table border="0" width="60%">
			<tr>
				<td width="10%">Name:</td>
				<td><input type="text" name="name"/></td>
            </tr>
			<tr>
				<td width="10%">Email:</td>
				<td><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td  width="10%">Password: </td>
				<td><input type="password" name="password"/><td>
			</tr>
			<tr>
				<td  width="10%">Confirm Password: </td>
				<td><input type="password" name="cpassword"/></td>
			</tr>
		</table>
        <p>
			<input type="submit" value="register"/>
		</p>
     
    </form>
	
</body>
</html>
