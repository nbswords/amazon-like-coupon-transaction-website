<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

		<title>MemberCoupon</title>
	</head>
<body bgcolor="#f2f2f2">
	<?php include("../couponPage/php/readdb_php.php")?>
    <?php include("./includes/navigation.php");?>
    <div class="pageDiv">
    	<div class="Coupon_Index_list">
    		<div class="table">
    			<br>
    			<div class="button" >
    				<?php echo "<button onclick=\"location.href='./AddCoupon.php'\">新增Coupon</button>";?>
					</div>
    			<br>
	    		<?php include("./php/memberCoupon_php.php")?>
	    	</div>
    	</div>
	</div>

</body>
</html>

<style type="text/css">
	body{
    	margin:0;
    }

	.pageDiv{
        width:1250px;
        margin-left:auto; 
        margin-right:auto;
        text-align:left;
    }

	.Coupon_Index_list{
		position: relative;
		height:1080px;
		width: 900px;
		background:white;
		border-radius:10px;
		text-align:center;
	}

	.table{
		position: relative;
		left:85px;
		top:30px;
	}

	.button{
		position: absolute;
		left: 100px;
	}

</style>
