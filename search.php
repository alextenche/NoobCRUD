<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>

<body>
	<center>
	<form method="get" action="search.php">
		<input type="text" name="search"/>
		<input type="submit" name="submit" value="search database"/>
    </form>
	</center>	
	<hr>
	
	<?php
	
	if(isset($_REQUEST['submit'])){
		
		$search = $_GET['search'];
		$terms = explode(" ",$search);
		$query = "SELECT * FROM users WHERE ";
		
		$i = 0;
		foreach(){}
	
	} else {
		echo "Please type any word for serch.";
	}
	
	
	
	
	
	
	
	
	?>
	
	
</body>
</html>
