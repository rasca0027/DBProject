
		<?php
			$name = $_POST["search"];
			header('content-type: text/html; charset=utf-8');
			
			//取出資料庫內容
			include('connmusic.php');

				//CONCERTS searched//
				$res =  $mysqli->query("SELECT * FROM `concerts` NATURAL JOIN `setlist` WHERE `ConcertName` LIKE '%".$search."%' OR `Artist` LIKE '%".$search."%' OR `Sname` LIKE '%".$search."%' "); 
				$row_total = $res->num_rows;
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$concerts_data[$y] = $row;
				}
				$concerts_data['len'] = $row_total;

  		echo json_encode($concerts_data);

		?>
