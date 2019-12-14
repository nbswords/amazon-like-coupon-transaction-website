<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		
		case "./member.php":
			$CURRENT_PAGE = "member"; 
			$PAGE_TITLE = "member";
			break;
		case "./Coupon.php":
			$CURRENT_PAGE = "Coupon"; 
			$PAGE_TITLE = "Coupon";
			break;
		default:
			$CURRENT_PAGE = "Admin";
			$PAGE_TITLE = "Admin main page";
	}
?>