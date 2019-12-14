<?php
	$CouponID = $_GET["CouponID"];
	$sql = "SELECT `CouponName`,`MessageContent`,`MessageTime`,`Sender` FROM `messageboard`WHERE `CouponName`='$CouponID'";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		   	$CouponID=$row['CouponName'];
		   	$MessageContent=$row['MessageContent'];
		   	$MessageTime=$row['MessageTime'];
		   	$Sender=$row['Sender'];
		   	//
		   	echo "Sender:";
			echo "$Sender<br>";
			echo "MessageContent:";
			echo "$MessageContent<br>";
			echo "MessageTime:";
			echo "$MessageTime<br>";
			echo "<br>";
			//
	}
?>