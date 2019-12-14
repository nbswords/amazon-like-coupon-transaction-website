<?php include("readdb_php.php")?>
<?php
   ob_start();
   session_start();
?>
<?php
	$CouponID=$_GET['CouponID'];
	$User=$_SESSION['email'];

	if (isset($_GET['CouponID']))
	{
		$sql = "DELETE FROM `follow` WHERE `CouponID`='$CouponID' AND `FollowUser`='$User'";

		if (!$conn){
			die("Connection failed: ". mysqli_connect_error());
		}

		else{
			if ($conn->query($sql) === TRUE) {
				echo "Remove successfully";
				header('Location:../MemberFollow.php');
			}

			else{
				echo "Error remove record: " . $conn->error;
			}
		}
	}
?>
