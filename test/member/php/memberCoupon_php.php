<table class="table table-hover" "table table-border" >
	<?php
		if (isset($_SESSION['email'])){
			$User=$_SESSION['email'];
		}

		$sql = "SELECT `CouponID`,`Name`,`UploadDate`,`CouponState`,`ExpiryDate`,`Price`,`UploadID` ,`Requirement`FROM `coupon` WHERE `UploadID`='$User'";
		$result=mysqli_query($conn,$sql);
		//
		echo "<tr>";
		echo "<td>CouponID</td>";
		echo "<td>Name</td>";
		echo "<td>UploadDate</td>";
		echo "<td>CouponState</td>";
		echo "<td>ExpiryDate</td>";
		echo "<td>Price</td>";
		echo "<td>Requirement</td>";
		echo "<td>操作</td>";
		echo "</tr>";
		//
		while($row = mysqli_fetch_array($result)){
		   	$CouponID=$row['CouponID'];
		   	$Name=$row['Name'];
		   	$UploadDate=$row['UploadDate'];
		   	$CouponState=$row['CouponState'];
		   	$ExpiryDate=$row['ExpiryDate'];
		   	$Price=$row['Price'];
		   	$UploadID=$row['UploadID'];
		   	$Requirement=$row['Requirement'];

		   	//
			echo "<tr>";
			echo "<td>$CouponID</td>";
			echo "<td>$Name</td>";
			echo "<td>$UploadDate</td>";

			if ($CouponState=='0') {	//販售中
		    	echo "<td bgcolor=Green>販售中</td>";
			}

			if ($CouponState=='1'){		//售出
				echo "<td bgcolor=Red>售出</td>";
			}

			if ($CouponState=='2'){		//下架中
				echo "<td bgcolor=Yellow>下架中</td>";
			}

			if ($CouponState=='3'){		//預約中
				echo "<td bgcolor=#f2f2f2>預約中</td>";
			}

			echo "<td>$ExpiryDate</td>";
			echo "<td>$Price</td>";
			echo "<td>$Requirement</td>";

			echo "<td>";
			if (isset($_SESSION['email']))
			{
				echo "<button onclick=\"location.href='../member/php/ModifyState_to_0_php.php?state={$CouponState}&ID={$CouponID}&Email={$UploadID}'\">上架</button>";
				echo "<button onclick=\"location.href='../member/php/ModifyState_to_2_php.php?state={$CouponState}&ID={$CouponID}&Email={$UploadID}'\">下架</button>";
				echo "<button onclick=\"location.href='../member/ModifyCoupon.php?CouponID={$CouponID}'\">修改</button>";
				echo "<button onclick=\"location.href='../member/php/removeCoupon_php.php?CouponID={$CouponID}'\">刪除</button>";
			}
			echo "</td>";
			echo "</tr>";
			//
		}
	?>
</table>
