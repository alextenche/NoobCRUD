<?php

function mysqli_result($res, $row, $field=0) {
	$res->data_seek($row);
	$datarow = $res->fetch_array();
	return $datarow[$field];
}

$link = mysqli_connect("localhost", "root", "termopane", "testsite")or die("problem with connection...");

$per_page = 6;

$pages_query = mysqli_query($link, "SELECT COUNT('id') FROM users");
$pages = ceil(mysqli_result($pages_query, 0) / $per_page);

$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_page;
$query = mysqli_query($link, "SELECT name FROM users LIMIT $start, $per_page");

while($query_row = mysqli_fetch_assoc($query)){
	echo $query_row['name'].'<br>';
}

$prev = $page - 1;
$next = $page + 1;

if(!($page <= 1)){
	echo "<a href='pagination.php?page=$prev'>Prev</a> ";
}

if($pages >= 1){
	for($x=1; $x <= $pages; $x++){
		echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';	
	}
}

if(!($page >= $pages)){
	echo "<a href='pagination.php?page=$next'>Next</a> ";
}

?>