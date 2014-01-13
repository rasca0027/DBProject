
		<?php
			$artist = $_POST["Artist"];
			$song = $_POST["Sname"];
			$comment = $_POST["comment"];
			header('content-type: text/html; charset=utf-8');
			
			//取出資料庫內容
			include('connmusic.php');

			if( $comment == "empty" ){
				$query = "INSERT INTO `song_comment` (`Sname`, `Artist`, `Scomment`) VALUES('".$song."', '".$artist."', '".$comment."')";
				$result = mysqli_query($query)or die ('Error querying.');
			}

				//Acomment searched//
				mysqli_set_charset("utf8");
				$res =  mysqli_query("SELECT `Scomment` `Timestamp` FROM `song_comment` WHERE `Sname` = '".$song."' AND `Artist` = '".$artist."'"); 
				$row_total = mysqli_num_rows($res);
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = mysqli_fetch_array($res);
					$Scomment_data[$y] = $row;
				}
				$Scomment_data['len'] = $row_total;

  		echo json_encode($Scomment_data);

		?>
