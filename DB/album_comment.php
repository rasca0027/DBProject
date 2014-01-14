
		<?php
			$artist = $_POST["Artist"];
			$album = $_POST["Album"];
			$comment = $_POST["comment"];
			header('content-type: text/html; charset=utf-8');
			
			//取出資料庫內容
			include('connmusic.php');

			if( $comment == "empty" ){
				$query = "INSERT INTO `album_comment` (`Aname`, `Artist`, `Acomment`) VALUES('".$album."', '".$artist."', '".$comment."')";
				$result = $mysqli->query($query)or die ('Error querying.');
			}

				//Acomment searched//
				$res =  $mysqli->query("SELECT `Acomment` `Timestamp` FROM `album_comment` WHERE `Artist` = '".$artist."' AND `Album` = '".$album."'"); 
				$row_total = $res->num_rows($res);
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					$Acomment_data[$y] = $row;
				}
				$Acomment_data['len'] = $row_total;

  		echo json_encode($Acomment_data);

		?>
