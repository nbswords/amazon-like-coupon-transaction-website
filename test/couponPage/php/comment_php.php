<?php include("readdb_php.php")?>
<?php
   ob_start();
   session_start();
?>
<?php
	$sender=$_SESSION['email'];
	$CouponID=$_SESSION["CouponID"];
	$comment =$_POST["comment"];
	$sql = "SELECT `CouponID`,`Name`,`UploadDate`,`CouponState`,`UploadID`,`ExpiryDate`,`ClickRate` FROM `coupon`WHERE `CouponID`='$CouponID'";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$receive=$row['UploadID'];
	}

	if($sender!=$receive){
		$sql="INSERT INTO `messageboard` (`CouponName`, `MessageContent`, `MessageTime`, `Sender`, `receive`) VALUES ('$CouponID', '$comment', CURRENT_TIMESTAMP, '$sender', '$receive')";
		$result=mysqli_query($conn,$sql);

		if (!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}

		else{
			header('Location:../Index.php');
		}
	}

	else{
		echo "<button onclick=\"location.href='../Index.php'\">無法為自己的商品留言</button>";
	}
	
?>
