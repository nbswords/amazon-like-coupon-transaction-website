<?php include"../php/readdb_php.php";?>
<?php
	$state = $_GET["state"];
	$ID = $_GET["ID"];
	$Email = $_GET["Email"];

	if (isset($_GET['state'])) 
	{
		//
		$sql = "UPDATE `coupon` SET `CouponState` = '0' WHERE `coupon`.`CouponID` = '$ID' AND `coupon`.`UploadID` = '$Email'";
		//
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
			if ($conn->query($sql) === TRUE) {
				echo "Modify successfully 記得弄鏈接";
			} 
			else {
				echo "Error remove record: " . $conn->error;
			}
		}
	}	
?>
