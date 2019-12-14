<?php include("readdb_php.php")?>
<?php
   ob_start();
   session_start();
?>
<?php
	$sender=$_SESSION['email'];
	$CouponID=$_GET["CouponID"];
	$receive=$_GET["receive"];
	$MessageTime=$_GET["MessageTime"];
	$Replycomment=$_POST["comment"];

	$sql = "INSERT INTO `messageboard` (`CouponName`, `MessageContent`, `MessageTime`, `Sender`,`receive`) VALUES ('$CouponID', '$Replycomment', CURRENT_TIMESTAMP, '$sender','$receive')";
	$result=mysqli_query($conn,$sql);

	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	else{
		echo "已回复";
		header('Location:../MemberFollow&Messageboard.php');
	}
?>
