<table border="1">
	<?php
		if (isset($_SESSION['email'])){
			$User=$_SESSION['email'];
			$CouponID=$_GET['CouponID'];
		}

		$sql = "SELECT cp.`Name`,cp.`ExpiryDate`,cp.`Price`,cp.`Requirement`,cp.`TradeLocation`,cp.`TradeWays`,cy.`CompanyName` FROM `coupon` cp,`company` cy WHERE `UploadID`='$User' AND cy.`ID`=cp.`CompanyID` AND `CouponID`='$CouponID'";
		$result=mysqli_query($conn,$sql);

		while($row = mysqli_fetch_array($result)){
		   	$Name=$row['Name'];
		   	$ExpiryDate=$row['ExpiryDate'];
		   	$Price=$row['Price'];
		   	$TradeLocation=$row['TradeLocation'];
		   	$Ways=$row['TradeWays'];
		   	$Requirement=$row['Requirement'];
		   	$company=$row['CompanyName'];
		}
		echo "<form action='../member/php/ModifyCoupon_php.php?CouponID={$CouponID}' method='post'>
					<label>CouponName:</label><br>
						 <input type='text' id='CouponName' name='CouponName' placeholder='CouponName' value='$Name'>
						 <br>
						 <br>

					<label>CouponType:</label><br>
						<select name='CouponType'>
						　<option value='0'>電子</option>
						　<option value='1'>紙本</option>
						</select>
						<br>
						<br>

					<label>ExpiryDate:</label><br>
						<input type='date' id='ExpiryDate' name='ExpiryDate' placeholder='ExpiryDate' value='$ExpiryDate' />
						<br>
						<br>

					<label>Requirement:</label><br>
						<input type='text' id='Requirement' name='Requirement' placeholder='Requirement' value='$Requirement' />
						<br>
						<br>

					<label>TradeLocation:</label><br>
						<input type='text' id='TradeLocation' name='TradeLocation' placeholder='TradeLocation' value='$TradeLocation' />
						<br>
						<br>

					<label>Ways:</label><br>
						<input type='text' id='Ways' name='Ways' placeholder='Ways' value='$Ways' />
						<br>
						<br>

					<label>Price:</label><br>
						<input type='text' id='Price' name='Price' placeholder='Price' value='$Price' />
						<br>
						<br>

					<label>Company:</label><br>
						$company
						<br>
						<br>

                    <input id = 'submit-button' type='submit' name='submit' value='修改'>
                 	</br>
				</form>";
	?>
</table>
