<!DOCTYPE html>
<html>
	<head>
	    <title>Admin Main</title>
	</head>
<body>
    <link rel="stylesheet" href="style.css">
	<div class="container" >
		<div class="login-box">
			<div class="title-box">
				用戶登入
			</div>

			<form action="http://localhost/test/Admin/php/login_php.php" method="post">
				<div class="email-box">
					<label for="email">信箱:</label><br/>
					<div class="email-input">
						 <input type="text" id="email" name="email" placeholder="請輸入信箱">
					</div>
				</div>

				<div class="userPassword-box">
					<label for="userPassword">密碼:</label></br>
					<div class="userPassword-input">
						<input type="text" id="userPassword" name="password" placeholder="請輸入密碼" />
					</div>
				</div>

				<div class="submit-box">
                    <input id = "submit-button" type="submit" name="submit" value="登入">
                </br>
                 </br>
				</div>
			</form>
		</div>
</div>
</link>
</body>
</html>
