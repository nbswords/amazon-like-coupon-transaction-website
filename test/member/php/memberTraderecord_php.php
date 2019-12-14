<br>
<table border="1">
	<?php
		//購買記錄
		echo "購買記錄：<br>";
		if (isset($_SESSION['email'])){
			$User=$_SESSION['email'];
		}

		$sql = "SELECT c.`CouponID`,c.`Name`,t.`Seller`, c.`Price`, t.`TradeTime`,t.`Star`,t.`Comment` FROM `coupon` c, `traderecord` t WHERE c.`CouponID`=t.`TradeCouponID` AND t.`Buyer`='$User'";
		$result=mysqli_query($conn,$sql);
		//
		echo "<tr>";
		echo "<td>CouponID</td>";
		echo "<td>Name</td>";
		echo "<td>賣家</td>";
		echo "<td>交易日期</td>";
		echo "<td>交易金額</td>";
		echo "<td>星數</td>";
		echo "<td>評價</td>";
		echo "<td>操作</td>";
		echo "</tr>";
		//
		while($row = mysqli_fetch_array($result)){
		   	$CouponID=$row['CouponID'];
		   	$Name=$row['Name'];
		   	$Seller=$row['Seller'];
		   	$TradeTime=$row['TradeTime'];
		   	$Price=$row['Price'];
		   	$Comment=$row['Comment'];
		   	$Star=$row['Star'];
		   	$Buyer=$User;
		   	//
			echo "<tr>";
			echo "<td>$CouponID</td>";
			echo "<td>$Name</td>";
			echo "<td>$Seller</td>";
			echo "<td>$TradeTime</td>";
			echo "<td>$Price</td>";
			echo "<td>$Star</td>";
			echo "<td>$Comment</td>";
			
			if ($Star == NULL) {
				echo "<td>";
				echo"<button onclick=\"location.href='../member/TradeComment.php?CouponID={$CouponID}&Buyer={$Buyer}&Seller={$Seller}'\">評價該次交易</button>";
				echo "</td>";
			}

			else{
				echo "<td>";
				echo"<button>評價完成</button>";
				echo "</td>";
			}
			
			echo "</tr>";
			//
		}
	?>
</table>

<br>
<br>
<br>
<br>

<table border="1">
	<?php
		//販賣記錄
		echo "販賣：<br>";
		if (isset($_SESSION['email'])){
			$User=$_SESSION['email'];
		}

		$sql = "SELECT c.`CouponID`,c.`Name`,t.`Buyer`, c.`Price`, t.`TradeTime`,t.`Star`,t.`Comment` FROM `coupon` c, `traderecord` t WHERE c.`CouponID`=t.`TradeCouponID` AND t.`Seller`='$User'";
		$result=mysqli_query($conn,$sql);
		//
		echo "<tr>";
		echo "<td>CouponID</td>";
		echo "<td>Name</td>";
		echo "<td>買家</td>";
		echo "<td>交易日期</td>";
		echo "<td>交易金額</td>";
		echo "<td>星數</td>";
		echo "<td>評價</td>";
		echo "<td>操作</td>";
		echo "</tr>";
		//
		while($row = mysqli_fetch_array($result)){
		   	$CouponID=$row['CouponID'];
		   	$Name=$row['Name'];
		   	$Buyer=$row['Buyer'];
		   	$TradeTime=$row['TradeTime'];
		   	$Price=$row['Price'];
		   	$Comment=$row['Comment'];
		   	$Star=$row['Star'];
		   	$Buyer=$User;
		   	//
			echo "<tr>";
			echo "<td>$CouponID</td>";
			echo "<td>$Name</td>";
			echo "<td>$Buyer</td>";
			echo "<td>$TradeTime</td>";
			echo "<td>$Price</td>";
			echo "<td>$Star</td>";
			echo "<td>$Comment</td>";
			
			if ($Star == NULL) {
				echo "<td>";
				echo"<button>尚未評價</button>";
				echo "</td>";
			}

			else{
				echo "<td>";
				echo"<button>評價完成</button>";
				echo "</td>";
			}
			
			echo "</tr>";
			//
		}
	?>
</table>

