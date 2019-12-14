<?php
   ob_start();
   session_start();
?>

<div class = "container form-signin">
<?php

	if (isset($_SESSION['email'])) {
		echo $_SESSION['email'];
		echo "<br>";
		echo "<a href =./login/logout.php tite = Logout>Log out</a>.";
		
	} 
	else{
		echo "<a href=./login/login.php>Login</a>";
	}
?>
</div> <!-- /container -->
