<!DOCTYPE HTML>
<html>
	<head>
		<title>Music Website</title>
    <META http-equiv="Content-Type" content="text/html; charset=utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="controller.js"></script>
    <script type="application/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>   
	</head>

	<body>
		<div class="navbar">
        <div class="navbar-inner">
          <ul class="nav">
            <li class="active"><a href="./index.html">Home</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">Artists</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">Albums</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">Concerts</a></li>
          </ul>
        </div>
    	</div>
    	<div class="well span6 offset4">
		<?php
			$search = $_POST["search"];
			//$search = "SMAP";
			
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
					echo "<table>";
					echo "<tr>";
					echo "<td>".$row['Sname']."</td>";
					echo "<td>".$row['Artist']."</td>";
					echo "<td>".$row['Album']."</td>";
					echo "<td>".$row['Song#']."</td>";
					echo "</tr>";
					echo "</table>";
				}
				$saa_data['len'] = $row_total;

  		//echo json_encode($saa_data);

		?>
	</div>

	</body>
</html>