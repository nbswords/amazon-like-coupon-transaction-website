<?php
	$CouponID=$_GET["CouponID"];

	echo "<form action='../member/php/TradeComment_php.php?CouponID={$CouponID}' method='post'>
		<label> <big>Star:</big></label><br>
			<input  type='radio' name='Star' value='1'>1 &nbsp; &nbsp;
			<input  type='radio' name='Star' value='2'>2 &nbsp; &nbsp;
			<input  type='radio' name='Star' value='3'>3 &nbsp; &nbsp;
			<input  type='radio' name='Star' value='4'>4 &nbsp; &nbsp;
			<input  type='radio' name='Star' value='5'>5 &nbsp; &nbsp;
			<br>
			<br>

		<label>文字評價:</label><br>
			<input type='text' id='Comment' style='padding:10px;width:615px;height: 50px' name='Comment'>
			<br>
			<br>

	        <input id = 'submit-button' type='submit' name='submit' value='評價'>
	        </br>
	</form>";
?>
