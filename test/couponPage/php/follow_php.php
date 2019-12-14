<?php include("readdb_php.php")?>
<?php
   ob_start();
   session_start();
?>
<?php
	if (isset($_SESSION['email'])){
		$FollowUser=$_SESSION['email'];
	}

	$CouponID = $_GET["CouponID"];
	$FollowUser = $_SESSION['email'];
	$sql = "INSERT INTO `follow` (`CouponID`, `FollowUser`) VALUES ('$CouponID', '$FollowUser')";

	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	else{
		if ($conn->query($sql) === TRUE){
			echo "追踪成功";
			echo "<input type ='button' onclick='history.back()'' value='回到上一頁''></input>";
		} 
	}	
?>
