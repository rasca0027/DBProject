
		<?php
			$artist = $_POST["Artist"];
			$song = $_POST["Sname"];
			$comment = $_POST["comment"];
			header('content-type: text/html; charset=utf-8');
			
			//取出資料庫內容
			include('connmusic.php');

			if( $comment == "empty" ){
				$query = "INSERT INTO `song_comment` (`Sname`, `Artist`, `Scomment`) VALUES('".$song."', '".$artist."', '".$comment."')";
				$result = $mysqli->query($query)or die ('Error querying.');
			}

				//Acomment searched//
				$res =  $mysqli->query("SELECT `Scomment` `Timestamp` FROM `song_comment` WHERE `Sname` = '".$song."' AND `Artist` = '".$artist."'"); 
				$row_total = $res->num_rows;
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$Scomment_data[$y] = $row;
				}
				$Scomment_data['len'] = $row_total;

  		echo json_encode($Scomment_data);

		?>
