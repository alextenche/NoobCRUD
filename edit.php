<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>

	<h3>Edit user: <?php echo $_REQUEST['names'];?></h3>
	
    <form enctype="multipart/form-data" method="post" action="change.php">
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
				<td width="30%">New Password: </td>
				<td><input type="text" name="newpassword" value=""></td>
			</tr>
		</table>
		<p>Change picture:<input type='file' name='newupload'/><p>
		<br>
		<input type="submit" name="submit" value="Save & Update" />
		<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>" />
    </form>
</body>
</html>

<?php include('links.php'); ?>
