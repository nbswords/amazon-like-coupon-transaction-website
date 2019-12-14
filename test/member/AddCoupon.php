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
</head>
<title>AddCoupon</title>
</head>

<body bgcolor="#f2f2f2">
	<?php include("./php/readdb_php.php")?>
	<?php include("./includes/navigation.php");?>
	<div class="pageDiv">
		<div class="AddCoupon">
			<div class="table">
				<form class="form-horizontal" action="../member/php/AddCoupon_php.php" method="post">

					<div class="form-group">
						<label class="control-label col-sm-2">CouponName:</label><br>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="CouponName" name="CouponName" placeholder="CouponName">
						</div>

					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">CouponType:</label><br>
						<div class="col-sm-10">
							<select name="CouponType">
								　<option value="0">電子</option>
								　<option value="1">實體</option>
							</select>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2"> ExpiryDate:</label><br>
						<div class="col-sm-10">
							<input class="form-control" type="date" id="ExpiryDate" name="ExpiryDate" placeholder="ExpiryDate" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2">Requirement:</label><br>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="Requirement" name="Requirement" placeholder="Requirement" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">TradeLocation:</label><br>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="TradeLocation" name="TradeLocation" placeholder="TradeLocation" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Ways:</label><br>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="Ways" name="Ways" placeholder="Ways" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2">Price:</label><br>
						<div class="col-sm-10">
							<input class="form-control" type="text" id="Price" name="Price" placeholder="Price" />
						</div>
					</div>


					<label class="control-label col-sm-2">Company:</label><br>
						<?php include("./php/companylist_php.php")?>
					<br>
					<br>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-default" id="submit-button" type="submit" name="submit">添加</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

<style type="text/css">
	body {
		margin: 0;
	}

	.pageDiv {
		width: 1100px;
		margin-left: auto;
		margin-right: auto;
		text-align: left;
	}

	.AddCoupon {
		position: relative;
		height: 1080px;
		width: 900px;
		background: white;
		border-radius: 10px;
	}

	.table {
		position: relative;
		left: 85px;
		top: 30px;
	}
</style>
