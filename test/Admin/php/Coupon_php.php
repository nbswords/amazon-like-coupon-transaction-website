<div class="table">
	<table border="1">
	<?php
		$sql = "SELECT `CouponID`,`Name`,`UploadDate`,`CouponState`,`UploadID`,`ExpiryDate` FROM `coupon`";
		$result=mysqli_query($conn,$sql);
		echo "<tr>";
		echo "<td>CouponID</td>";
		echo "<td>Name</td>";
		echo "<td>UploadDate</td>";
		echo "<td>CouponState</td>";
		echo "<td>UploadID</td>";
		echo "<td>ExpiryDate</td>";
		echo "<td>Modify</td>";
		echo "</tr>";
		while($row = mysqli_fetch_array($result)){
		   	$CouponID=$row['CouponID'];
		   	$Name=$row['Name'];
		   	$UploadDate=$row['UploadDate'];
		   	$CouponState=$row['CouponState'];
		   	$UploadID=$row['UploadID'];
		   	$ExpiryDate=$row['ExpiryDate'];
			echo "<tr>";
			echo "<td>$CouponID</td>";
			echo "<td>$Name</td>";
			echo "<td>$UploadDate</td>";
			if ($CouponState=='0') {	//販售中
		    echo "<td bgcolor=Green></td>";
			}

			if ($CouponState=='1'){		//售出
				echo "<td bgcolor=Red></td>";
			}
			if ($CouponState=='2'){		//下架中
				echo "<td bgcolor=Yellow></td>";
			}
			echo "<td>$UploadID</td>";
			echo "<td>$ExpiryDate</td>";
			echo "<td>";
			echo "<button onclick=\"location.href='./php/ModifyState_to_0_php.php?state={$CouponState}&ID={$CouponID}&Email={$UploadID}'\">上架</button>";
			echo "<button onclick=\"location.href='./php/ModifyState_to_2_php.php?state={$CouponState}&ID={$CouponID}&Email={$UploadID}'\">下架</button>";
			echo "</td>";
			echo "</tr>";
		    }
	?>
	</table>
	</div>

<style type="text/css">
	.table{
		position: absolute;
		left: 150px;
		top: 175px;
	}
</style>
