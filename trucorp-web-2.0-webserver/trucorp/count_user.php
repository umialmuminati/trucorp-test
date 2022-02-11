<?php 

require 'connection.php';

function count_user($querydb) {
	global $conn;
	$result = mysqli_query($conn,$querydb);
	$num_rows = mysqli_num_rows($result);
	echo "There are $num_rows users in database\n";
}

$count_user = count_user("SELECT * FROM users");

?>