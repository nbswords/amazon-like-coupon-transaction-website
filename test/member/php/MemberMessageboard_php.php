<table class="table table-hover" "table table-border"style="width:90%">
<?php
	$receive=$_SESSION['email'];
	$sql = "SELECT `CouponName`,`MessageContent`,`MessageTime`,`Sender` FROM `messageboard` WHERE `receive`='$receive' ORDER BY `MessageTime`";
	$result=mysqli_query($conn,$sql);
	while(  $row=mysqli_fetch_array($result) ){
		$CouponID=$row['CouponName'];
		$MessageContent=$row['MessageContent'];
		$MessageTime=$row['MessageTime'];
		$Sender=$row['Sender'];
		echo "留言：";
		echo "<form action='../member/php/Replycomment_php.php?CouponID={$CouponID}&receive={$Sender}&MessageTime={$MessageTime}' method='post'>";
		echo "CouponID: ";
		echo "$CouponID<br>";
		echo "Sender: ";
		echo "$Sender<br>";
		echo "MessageContent: ";
		echo "$MessageContent<br>";
		echo "MessageTime:";
		echo "$MessageTime<br><br>";

		$sql1 = "SELECT `CouponName`,`MessageContent`,`MessageTime`,`Sender`,`receive`FROM `messageboard` WHERE `Sender`='$receive' AND `CouponName`='$CouponID' ORDER BY `MessageTime` desc";

		$result1=mysqli_query($conn,$sql1);
		echo "--------------------------------------------------------------------------------";
		echo "<br>回信：<br>";
		while($row1=mysqli_fetch_array($result1)){
			$CouponID1=$row1['CouponName'];
			$MessageContent1=$row1['MessageContent'];
			$MessageTime1=$row1['MessageTime'];
			$receive1=$row1['receive'];
			echo "CouponID: ";
			echo "$CouponID1<br>";
			echo "receive: ";
			echo "$receive1<br>";
			echo "MessageContent: ";
			echo "$MessageContent1<br>";
			echo "MessageTime:";
			echo "$MessageTime1<br>";
			echo "<br>";
		}
		echo "--------------------------------------------------------------------------------";
		echo "<input type='text' id='comment' style='padding:10px;width:615px;height: 50px' name='comment'>";
		echo "<br>";
		echo "<br>";
		echo "<input id = 'submit-button' type='submit' name='submit'value='回覆'></br>";
		echo "</form>";
		echo "<br>";
		}
?>
</table>
