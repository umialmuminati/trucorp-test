<?php 

require "connection.php";
$data_user = query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Trucorp</title>
</head>
<body>
<center>
	<h2>Trucorp - Users Data</h2>
	<hr>
	<br>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Kantor</th>
		</tr>
		
		<?php foreach($data_user as $row) { ?>
			<tr>
				<td><?php echo $row['ID']; ?></td>
				<td><?php echo $row['Nama']; ?></td>
				<td><?php echo $row['Kantor']; ?></td>
			</tr>
		<?php } ?>
	</table>
</center>
</body>
</html>
