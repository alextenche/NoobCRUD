<h3><center>
    <?php include('links.php');?>
</center></h3>

<?php
	$link = mysqli_connect("localhost","root","termopane","testsite");
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$result = mysqli_query($link,"SELECT * FROM users");
	
	while($row = mysqli_fetch_array($result)){
		echo $row['name'] . " " . $row['email'] . " " . $row['password'] ;
		echo "<br>";
	}
		
	mysqli_close($link);
?>

