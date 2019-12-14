<table class="table table-hover" "table table-border"style="width:90%">
	<?php
		$user=' ';
		$sql = "SELECT `CouponID`,`Name`,`UploadDate`,`CouponState`,`UploadID`,`ExpiryDate`,`Price` FROM `coupon`  ORDER BY `ClickRate` DESC";
		$result=mysqli_query($conn,$sql);

		echo "<tr>";
		echo "<td >商品名稱</td>";
		echo "<td>上傳日期</td>";
		echo "<td>目前狀態</td>";
		echo "<td>賣家</td>";
		echo "<td>期限</td>";
		echo "<td>價格</td>";
		echo "<td>操作</td>";
		echo "</tr>";

		while($row = mysqli_fetch_array($result)){
		   	$CouponID=$row['CouponID'];
		   	$Name=$row['Name'];
		   	$UploadDate=$row['UploadDate'];
		   	$CouponState=$row['CouponState'];
		   	$UploadID=$row['UploadID'];
		   	$ExpiryDate=$row['ExpiryDate'];
		   	$Price=$row['Price'];

			echo "<tr>";
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

			echo "<td>$UploadID</td>";
			echo "<td>$ExpiryDate</td>";
			echo "<td>$Price</td>";

			echo "<td>";

			if (isset($_SESSION['email'])){
				//是他的商品
				if($UploadID==$_SESSION['email']){
					echo "<button onclick=\"location.href='../member/memberCoupon.php'\">管理商品</button>";
				}
        //非販售中
				if ($CouponState!='0'){
					echo "<button>無法購買</button>";
					echo "<button onclick=\"location.href='./php/follow_php.php?CouponID={$CouponID}'\">追蹤</button>";
					echo "<button onclick=\"location.href='./CouponPage.php?CouponID={$CouponID}'\">更多</button>";
				}

				else{
					echo "<button onclick=\"location.href='./php/BuyButton_php.php?CouponID={$CouponID}'\">購買</button>";
					echo "<button onclick=\"location.href='./php/follow_php.php?CouponID={$CouponID}'\">追蹤</button>";
					echo "<button onclick=\"location.href='./CouponPage.php?CouponID={$CouponID}'\">更多</button>";
				}
			}
      //沒登入
			else{
				echo "Please Login!  ";

				echo "<button onclick=\"location.href='./CouponPage.php?CouponID={$CouponID}'\">更多</button>";
			}
			echo "</td>";

			echo "</tr>";
			//
		}
	?>
</table>
