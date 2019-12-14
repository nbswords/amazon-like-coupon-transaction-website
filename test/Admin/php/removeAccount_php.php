<?php
	$name = $_GET["name"];
	echo "$name";
	
	if (isset($_GET['name'])) 
	{
		$sql = "DELETE FROM `user` WHERE `user`.`Email` = '$name'";
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
			if ($conn->query($sql) === TRUE) {
				echo "Remove successfully";
			} 

			else {
				echo "Error remove record: " . $conn->error;
			}
		}
	}	
	
?>
