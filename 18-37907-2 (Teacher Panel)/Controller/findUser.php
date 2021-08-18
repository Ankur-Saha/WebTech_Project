<?php
	include'../Model/db.php';
	session_start();
	$name = $_REQUEST['user_name'];


	$conn = dbConnection();
	$sql = "select * from student where name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						
						<td>Student Name</td>
						<td>Username</td>
						<td>Email </td>
						
						
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= 	"<tr>
							
							<td>{$row['name']}</td>
							<td>{$row['username']}</td>
							<td>{$row['email']}</td>
						</tr>";
	} 

	$response .= "</table>";

	echo $response;

?>