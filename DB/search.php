
		<?php
			$search = $_POST["search"];
			//$search = "SMAP";
			//header('content-type: text/html; charset=utf-8');
			
			//取出資料庫內容
			include('connmusic.php');

				//SONGS searched//
				$res =  $mysqli->query("SELECT `Sname`, `Artist`, `Album`, `Song#` as 'number' FROM `songs` WHERE `Sname` LIKE '%".$search."%' OR `Artist` LIKE '%".$search."%' OR `Album` LIKE '%".$search."%'"); 
				$row_total = $res->num_rows;
				
				//存入 saa_data
				for ($y = 0;$y < ($row_total) ; $y++){
					$row = $res->fetch_array(MYSQLI_ASSOC);
					//echo $row['Sname']."&nbsp".$row['Artist']."&nbsp".$row['Album']."<br>";
					$saa_data[$y] = $row;
				}
				$saa_data['len'] = $row_total;

  		$myjson = my_json_encode($saa_data);
  		echo $myjson;

		function my_json_encode($phparr)
		{
			if(function_exists("json_encode"))
			{
				return json_encode($phparr);
			}
			else
			{
				require_once 'json/json.class.php';
				$json = new Services_JSON;
				return $json->encode($phparr);
			}
		}

		?>
