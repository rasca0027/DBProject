
		<?php
			$album = $_POST["Album"];
			$artist = $_POST["Artist"];
			header('content-type: text/html; charset=utf-8');
			//取出資料庫內容
			include('connmusic.php');

				//SONGS searched//
				$res =  $mysqli->query("SELECT `Sname`, `Artist`, `Album`, `Song#` as 'number' FROM `songs` WHERE `Aname` LIKE '".$album."' AND `Artist` LIKE '".$artist."'"); 
				$row_total = $res->num_rows($res);
				
				//存入 saa_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$saa_data[$y] = $row;
				}
				$saa_data['len'] = $row_total;

  		echo json_encode($saa_data);

		?>