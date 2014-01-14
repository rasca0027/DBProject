
		<?php
			$cname = $_POST["ConcertName"];
			$cdate = $_POST["ConcertDate"];
			$time = $_POST["time"];
			header('content-type: text/html; charset=utf-8');
			//取出資料庫內容
			include('connmusic.php');

				//Acomment searched//
				$res =  $mysqli->query("SELECT `Sname` `#` FROM `setlist` WHERE `ConcertName` = '".$cname."' AND `ConcertDate` = '".$cdate."' AND `time` = '".$time."' "); 
				$row_total = $res->num_rows;
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$setlist_data[$y] = $row;
				}
				$setlist_data['len'] = $row_total;

  		echo json_encode($setlist_data);

		?>
