
		<?php
			$artist = $_POST["Artist"];
			$album = $_POST["Album"];
			$comment = $_POST["comment"];
			header('content-type: text/html; charset=utf-8');
			
			//取出資料庫內容
			include('connmusic.php');

			if( $comment == "empty" ){
				$query = "INSERT INTO `album_comment` (`Aname`, `Artist`, `Acomment`) VALUES('".$album."', '".$artist."', '".$comment."')";
				$result = mysqli_query($query)or die ('Error querying.');
			}

				//Acomment searched//
				$res =  mysqli_query("SELECT `Acomment` `Timestamp` FROM `album_comment` WHERE `Artist` = '".$artist."' AND `Album` = '".$album."'"); 
				$row_total = mysqli_num_rows($res);
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = mysqli_fetch_array($res);
					$Acomment_data[$y] = $row;
				}
				$Acomment_data['len'] = $row_total;

  		echo json_encode($Acomment_data);

		?>
