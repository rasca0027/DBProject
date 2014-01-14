<?php
	//資料庫主機設定
	$db_host = "140.112.106.152";
	$db_username = "db123";
	$db_password = "shilamus";
	$db_database = "db123";
	//連線伺服器
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
	if(!$mysqli) die("<p>資料連結失敗!</p>");
	//設定字元集與連線校對
	$mysqli->set_charset("utf8");
?>