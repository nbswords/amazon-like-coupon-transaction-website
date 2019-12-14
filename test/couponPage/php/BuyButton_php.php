<?php include("readdb_php.php")?>
<?php
   ob_start();
   session_start();
?>
<?php
	if (isset($_SESSION['email'])){
		$Buyer=$_SESSION['email'];
	}

	$CouponID = $_GET["CouponID"];
	$Buyer = $_SESSION['email'];
	$sql = "SELECT `CouponID`,`Name`,`UploadID`,`Price`,`CouponState` FROM `coupon` WHERE `CouponID`='$CouponID'";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$CouponID=$row['CouponID'];
		$Name=$row['Name'];
		$UploadID=$row['UploadID'];
		$Price=$row['Price'];
		$State=$row['CouponState'];
	}
	
	$sql = "SELECT `Email`,`Points` FROM `user` WHERE `user`.`Email` = '$Buyer'";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$Email=$row['Email'];
		$Points=$row['Points'];
	}

	if ($Points >= $Price) {
		$Points=$Points-$Price;
		$sql1 = "UPDATE `user` SET `Points` = '$Points' WHERE `user`.`Email` = '$Buyer'";
		$sql2 = "UPDATE `coupon` SET `CouponState` = '1' WHERE `coupon`.`CouponID` = '$CouponID' AND `coupon`.`UploadID` = '$UploadID'";
		$sql3 = "INSERT INTO `traderecord` (`Buyer`, `Seller`, `Star`, `Comment`, `TradeTime`, `TradeCouponID`) VALUES ('$Buyer', '$UploadID', NULL, NULL, CURRENT_TIMESTAMP, '$CouponID')";//
		$sql4="UPDATE `user`,`coupon` SET `user`.`Points`=`user`.`Points`+'$Price' WHERE `coupon`.`CouponID` = '$CouponID' AND `coupon`.`UploadID` = '$UploadID' AND `coupon`.`UploadID`=`user`.`Email`";

		if (!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}

		else{
			if ($conn->query($sql1) === TRUE AND $conn->query($sql2) === TRUE AND $conn->query($sql3) === TRUE AND $conn->query($sql4) === TRUE ){
				header('Location:../Index.php');
			} 
		}	
	}

	else{
		echo "無法購買！點數不夠";
		echo "<button onclick=\"location.href='../Index.php'\">回到主頁</button>";
	}

	
?>
