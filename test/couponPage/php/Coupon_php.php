<?php
	$CouponID = $_GET["CouponID"];
	$sql = "SELECT `CouponID`,`Name`,`UploadDate`,`CouponState`,`UploadID`,`ExpiryDate`,`ClickRate` FROM `coupon`WHERE `CouponID`='$CouponID'";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		   	$CouponID=$row['CouponID'];
		   	$Name=$row['Name'];
		   	$UploadDate=$row['UploadDate'];
		   	$CouponState=$row['CouponState'];
		   	$UploadID=$row['UploadID'];
		   	$ExpiryDate=$row['ExpiryDate'];
		   	$ClickRate=$row['ClickRate'];
		   	//
			echo "CouponID:";
			echo "$CouponID<br><br>";
			echo "Name:";
			echo "$Name<br><br>";
			echo "UploadDate:";
			echo "$UploadDate<br><br>";
			echo "UploadID:";
			echo "$UploadID<br><br>";
			echo "ExpiryDate:";
			echo "$ExpiryDate<br><br>";
			setcookie('CouponID',$CouponID);
            $_SESSION['CouponID']=$CouponID;

			if (isset($_SESSION['email'])){
				if($UploadID==$_SESSION['email'])
				{
					echo "<button onclick=\"location.href='../member/memberCoupon.php'\">管理商品</button>";
				}

				elseif ($CouponState!='0'){
					echo "<button>無法購買</button>";
					echo "<button onclick=\"location.href='./php/follow_php.php?CouponID={$CouponID}'\">追蹤</button>";
				}

				else{
					echo "<button onclick=\"location.href='./php/BuyButton_php.php?CouponID={$CouponID}'\">購買</button>";
					echo "<button onclick=\"location.href='./php/follow_php.php?CouponID={$CouponID}'\">追蹤</button>";
				}
			}

			else{
				echo "<button>無法購買/追蹤</button>";
			}
			//
	}
	include "./php/ClickRate_php.php";
?>

<style type="text/css">
* {
		font-family:Microsoft JhengHei;
		}
	.button{
		position: relative;
		top: -30px;
		left: 100px;
	}
</style>
