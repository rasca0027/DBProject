
		<?php
			$song = $_POST["Sname"];
			$artist = $_POST["Artist"];
			header('content-type: text/html; charset=utf-8');
			//取出資料庫內容
			include('connmusic.php');

				//Acomment searched//
				$res =  mysqli_query("SELECT * FROM `song_info` WHERE `Sname` = '".$song."' AND `Artist` = '".$artist."'"); 
				$row_total = mysqli_num_rows($res);
				
				//存入 concerts_data
				for ($y = 0;$y < ($row_total) ;$y++){
					$row = mysqli_fetch_array($res);
					$Sinfo_data[$y] = $row;
				}
				$Sinfo_data['len'] = $row_total;

  		echo json_encode($Sinfo_data);

		?>
