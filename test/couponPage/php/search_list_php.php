<table class="table table-hover" "table table-border"style="width:90%">
	<?php
		$sql = "SELECT `CouponID`,`Name`,`UploadDate`,`CouponState`,`UploadID`,`ExpiryDate`,`Price` FROM `coupon` and $search";
		$result=mysqli_query($conn,$sql);
	?>
</table>
