<?php header("Content-Type:text/html; charset=utf-8"); ?>
<?php
	if (isset($_SESSION['CouponID'])){
		$CouponID=$_SESSION['CouponID'];
	}
?>
<form action="./php/comment_php.php" method="post">
	<label for="comment">留言板:</label><br/>
	<input input type="text" id="comment" style="padding:10px;width:615px;height: 50px" name="comment">
	<?php
		if(isset($_SESSION['email'])){
			echo "<button onclick=\"location.href='./php/comment_php.php'\">發送留言</button>";
		}

		else{
			echo "<button>無法留言</button>";
		}
	?>
</form>
