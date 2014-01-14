
		<?php
			$search = $_POST["search"];
			//$type = $_GET["type"];
			header('content-type: text/html; charset=utf-8');
			
			//取出資料庫內容
			include('connmusic.php');

				//SONGS searched//
				$res =  $mysqli->query("SELECT * FROM `songs` WHERE `Sname` LIKE '%".$search."%' OR `Artist` LIKE '%".$search."%' OR `Album` LIKE '%".$search."%'"); 
				$row_total = $res->num_rows($res);
				
				//存入 saa_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$saa_data[$y] = $row;
				}
				$saa_data['len'] = $row_total;

  		echo json_encode($saa_data);

		?>
