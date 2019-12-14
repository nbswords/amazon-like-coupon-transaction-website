<?php
$dbHost='localhost';
$dbUser='root';
$dbPassword='AZSX752352';
$dbName='test';
	$conn = mysqli_connect(
		$dbHost,  // MySQL主機名稱
		$dbUser,       // 使用者名稱
		$dbPassword,  // 密碼
		$dbName);  // 預設使用的資料庫名稱

    //判斷是否有連上資料庫
		if ($conn->connect_error) {
		    die('The error was: ' . $conn->connect_error);
		}

	  if (!mysqli_select_db($conn, $dbName) )
	   die("無法開啟 $dbName 資料庫!<br/>");

		//處理編碼問題
	  if (!mysqli_set_charset($conn, "utf8")) {
      printf("Error loading character set utf8: %s\n", mysqli_error($conn));
      exit();
    }
?>
