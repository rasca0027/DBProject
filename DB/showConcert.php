
		<?php
			$cname = $_POST["ConcertName"];
			$cdate = $_POST["ConcertDate"];
			$time = $_POST["time"];
			header('content-type: text/html; charset=utf-8');
			//取出資料庫內容
			include('connmusic.php');

				//Acomment searched//
				$res =  mysqli_query("SELECT * FROM `concerts` WHERE `ConcertName` = '".$cname."' AND `ConcertDate` = '".$cdate."' AND `time` = '".$time."' "); 
				$row_total = mysqli_num_rows($res);
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = mysqli_fetch_array($res);
					$concerts_data[$y] = $row;
				}
				$concerts_data['len'] = $row_total;

  		echo json_encode($concerts_data);

		?>
