<table border="1">
	<?php
		if (isset($_SESSION['email'])){
			$User=$_SESSION['email'];
		}
		
		$sql = "SELECT c.`CouponID`,c.`Name`,c.`UploadDate`,c.`CouponState`,c.`ExpiryDate`,c.`Price`,c.`UploadID` ,c.`Requirement`FROM `coupon` c,`follow`f WHERE c.`CouponID`=f.`CouponID` AND f.`FollowUser`='$User'";
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
				echo "<button onclick=\"location.href='../member/php/cancleFollow_php.php?CouponID={$CouponID}'\">取消追踪</button>";
				echo"<button onclick=\"location.href='../CouponPage/CouponPage.php?CouponID={$CouponID}'\">更多</button>";
			}
			echo "</td>";
			echo "</tr>";
			//
		}
	?>
</table>

