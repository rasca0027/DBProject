
		<?php
			$artist = $_POST["Artist"];
			header('content-type: text/html; charset=utf-8');
			//取出資料庫內容
			include('connmusic.php');

				//Acomment searched//
				$res =  $mysqli->query("SELECT * FROM `member` WHERE `Artist` = '".$artist."'"); 
				$row_total = $res->num_rows;
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$member_data[$y] = $row;
				}
				$member_data['len'] = $row_total;

  		echo json_encode($member_data);

		?>
