
		<?php
			$artist = $_POST["Artist"];
			//header('content-type: text/html; charset=utf-8');
			//取出資料庫內容
			include('connmusic.php');

				//Acomment searched//
				$res =  $mysqli->query("SELECT * FROM `artists` WHERE `Artist` = '".$artist."'"); 
				//$res =  $mysqli->query("SELECT * FROM `artists` ");
				$row_total = $res->num_rows;
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$artist_data[$y] = $row;
				}
				$artist_data['len'] = $row_total;

  		echo json_encode($artist_data);

		?>
