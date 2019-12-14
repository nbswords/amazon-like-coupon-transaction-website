<?php //目前有問題
	$ClickRate=$ClickRate+1;
	$sql1="UPDATE `coupon` SET `ClickRate` = '$ClickRate' WHERE `coupon`.`CouponID` = '$CouponID' AND `coupon`.`UploadID` = '$UploadID'";
	if ($conn->query($sql1) === TRUE)
	{echo " ";}
?>