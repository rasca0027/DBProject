
		<?php
			$name = $_POST["search"];
			header('content-type: text/html; charset=utf-8');
			/*//存入資料庫
			$adb_connect = mysqli_connect('140.112.106.48', 'B00705027', 'truth520', 'b00705027') or die('Error connecting to mySQL server');
			mysqli_set_charset($adb_connect, "utf8");
			$query = "INSERT INTO `class` (`name`, `message`) VALUES('".$name."', '".$reply."')";
			$result = mysqli_query($adb_connect, $query)or die ('Error querying.');*/
			
			//取出資料庫內容
			//include('db_mysql.inc.php');
			$db_connect = mysqli_connect('localhost', 'root', 'truth520', 'music') or die('Error connecting to mySQL server');
		
			//CONCERTS searched//
			mysqli_set_charset($db_connect, "utf8");
			$res =  mysqli_query($db_connect, "SELECT * FROM `concerts` NATURAL JOIN `setlist` WHERE ConcertName LIKE '%".search."%' OR Artist LIKE '%".search."%' OR Sname LIKE '%".search."%' "); 
			$row_total = mysqli_num_rows($res);
			
			//存入 concerts_data
			for ($y = 0;$y < ($row_total) ;$y++){
				$row = mysqli_fetch_array($res);
				$concerts_data[$y] = $row;
			}
			$concerts_data['len'] = $row_total;


  		echo json_encode($db_data);

		?>
