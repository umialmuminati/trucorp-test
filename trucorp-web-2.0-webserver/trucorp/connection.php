<?php 

$conn = mysqli_connect("172.18.0.2","root","123","Trucorp");

function query($query) {
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

?>

