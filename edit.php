<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>

	<h3>Edit user: <?php echo $_REQUEST['names'];?></h3>
	
    <form method="post" action="change.php">
		<table border="0" width="60%">
			<tr>
				<td width="30%">Name: </td>
				<td><input type="text" name="newname" value="<?php echo $_REQUEST['names'];?>"></td>
			</tr>
			<tr>
				<td width="30%">Email: </td>
				<td><input type="text" name="newemail" value="<?php echo $_REQUEST['emails'];?>"></td>
			</tr>	
			<tr>
				<td width="30%">Password: </td>
				<td><input type="text" name="newpassword" value="<?php echo $_REQUEST['passwords'];?>"></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Save & Update" />
		<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>" />
    </form>
</body>
</html>

<?php include('links.php'); ?>
