<?php

$dbHost='localhost';
$dbUser='root';
$dbPassword='12qwaszx';
$dbName='test';

	$conn = mysqli_connect(
		$dbHost,  // MySQL主機名稱
		$dbUser,       // 使用者名稱
		$dbPassword,  // 密碼
		$dbName);  // 預設使用的資料庫名稱

		if ($conn->connect_error) {
		    die('The error was: ' . $conn->connect_error);
		}
	if (!mysqli_select_db($conn, $dbName) )
	   die("無法開啟 $dbName 資料庫!<br/>");


?>
