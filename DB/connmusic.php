<?php
	//資料庫主機設定
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "root";
	//連線伺服器
	$db_connect = @mysql_connect($db_host, $db_username, $db_password);
	if(!$db_link) die("<p>資料連結失敗!</p>");
	//設定字元集與連線校對
	mysqli_set_charset($db_connect, "utf8");
	mysql_select_db("music")  or die("<p>資料表選擇失敗</p>");
?>