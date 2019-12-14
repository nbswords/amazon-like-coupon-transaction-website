<?php include("readdb_php.php")?>
<?php
   ob_start();
   session_start();
?>
<?php
	$Buyer=$_SESSION['email'];
	$CouponID=$_GET["CouponID"];
	$Star=$_POST["Star"];
	$Comment=$_POST["Comment"];
	echo "$Buyer";
	echo "$CouponID";
	echo "$Star";
	echo "$Comment";
	$sql="UPDATE `traderecord` SET `Star` = '$Star', `Comment` = '$Comment' WHERE `traderecord`.`Buyer`='$Buyer' AND `traderecord`.`TradeCouponID` = '$CouponID'";
	$result=mysqli_query($conn,$sql);
	

	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	else{
		echo "已回覆";
		header('Location:../MemberTrade.php');
	}
?>
