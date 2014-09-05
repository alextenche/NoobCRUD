<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

	<h3><center>
		<?php include('links.php');?>
	</center></h3>
	
    <form method="post" action="insert.php">
        <fieldset>
            <legend>This is a test form in HTML5</legend>
			
            <label>Name: </label>
            <input type="text" name="name"><br>
                
            <label>Email: </label>
            <input type="text" name="email"><br>
			
			<label>Password: </label>
            <input type="password" name="password"><br>
			
             <p>
            <input type="submit" value="register">
			</p>
        </fieldset>
    </form>
</body>
</html>
