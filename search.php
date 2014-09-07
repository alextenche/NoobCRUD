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
	<u>Results:</u>&nbsp;
	
	<?php
	
	if(isset($_REQUEST['submit'])){
		
		$search = $_GET['search'];
		$terms = explode(" ",$search); //returns an array
		$query = "SELECT * FROM users WHERE ";
		
		$i = 0;
		foreach($terms as $each){
			$i++;
			if($i==1){
				$query .= "name LIKE '%$each%' ";
			} else {
				$query .= "OR name LIKE '%$each%' ";
			}
		}
		
		$link = mysqli_connect("localhost", "root", "termopane", "testsite");	
		if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error();}
		
		$query = mysqli_query($link, $query);
		$num = mysqli_num_rows($query);
		
		if($num > 0 && $search != ""){
			
			echo "$num result(s) found for <b>$search</b>";
			
			while($row = mysqli_fetch_assoc($query)){
				$id = $row['id'];
				$name =$row['name'];
				$email =$row['email'];
				$password =$row['password'];
				
				echo "<br><h3>name: $name(id:$id)</h3>email: $email<br>$email<br>password: $password<br>";
			}
		} else {
			echo "No results found.";
		}
		
		mysqli_close($link);
	} else {
		echo "Please type any word for serch.";
	}
	
	
	
	
	
	
	
	include('links.php');
	?>
	
	
</body>
</html>
