<?php
	if (isset($_SESSION['email'])){
		$Sender=$_SESSION['email'];
		$CouponID=$_SESSION['CouponID'];

		$sql = "SELECT `CouponName`,`MessageContent`,`MessageTime`,`Sender`,`receive`FROM `messageboard` WHERE `Sender`='$Sender' AND `CouponID`='$CouponID'";
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($result)){
			$CouponID=$row['CouponName'];
			$MessageContent=$row['MessageContent'];
			$MessageTime=$row['MessageTime'];
			$receive=$row['receive'];
			echo "CouponID: ";
			echo "$CouponID<br>";
			echo "receive: ";
			echo "$receive<br>";
			echo "MessageContent: ";
			echo "$MessageContent<br>";
			echo "MessageTime:";
			echo "$MessageTime<br>";
			echo "<br>";
		}
	}
?>
