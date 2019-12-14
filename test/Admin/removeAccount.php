<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Admin</title>
	    <meta charset="utf-8">
	</head>
<body>
    <?php include("./includes/navigation.php");?>
	<?php include"../Admin/php/readdb_php.php";?>

<div class="container" id="main-content">
	<div class="delete"><h3>確定刪除帳戶</h3>

	<?php 
		$name = $_GET["name"];
		include("./php/removeAccount_php.php");
		echo "<button onclick=\"location.href='./member.php'\">turn back</button>";
		
	?>
	</div>	
</div>
<style type="text/css">
	.delete{
		position: absolute;
		top:250px;
		left:175px;
	}
</style>

</body>
</html>