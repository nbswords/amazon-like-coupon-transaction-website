<?php include("readdb_php.php")?>
<?php
	$CouponID=$_GET["CouponID"];
	
	if (isset($_GET['CouponID']))
	{
		$sql = "DELETE FROM `coupon` WHERE `CouponID`='$CouponID'";

		if (!$conn){
			die("Connection failed: ". mysqli_connect_error());
		}

		else{
			if ($conn->query($sql) === TRUE) {
				echo "Remove successfully";
				header('Location:../MemberCoupon.php');
			} 

			else{
				echo "Error remove record: " . $conn->error;
			}
		}
	}
?>
