<div class = "container form-signin">
	<?php
		if (isset($_SESSION['email'])){
	    	$email=$_SESSION['email'];
	    	$sql="SELECT `Name`,`Points` FROM `user` WHERE `Email`='$email'";
	    	$result=mysqli_query($conn,$sql);
	    	while($row = mysqli_fetch_array($result)){
		        $Name=$row['Name'];
		        $Points=$row['Points'];
		    }

			echo "<a href='../member/MemberCoupon.php' class='w3-bar-item w3-button' style='color:white;''>$Name</a>";
			echo "<a href ='#' class='w3-bar-item w3-button' style='color:white;''>目前點數：$Points</a>";
			echo "<a href ='../couponPage/login/logout.php' class='w3-bar-item w3-button' style='color:white;''>登出</a>";
		}

		else{
			echo "<a href='../couponPage/login/login.php' class='w3-bar-item w3-button' style='color:white;''>登入</a>";
			echo "<a href='../couponPage/register/register.html' class='w3-bar-item w3-button' style='color:white;''>加入會員</a>";
		}
	?>
</div>
