<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
   
    
    
        

  </head>


  <body>

    <div ng-app="">
    <div class="row">
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

      <div class="span7 offset5">  
 

        <form method="POST">      
          <input type="text" class="span3" placeholder="search" name="search" id="search">
          <button type="submit" class="btn" id="go">GO!</button>
        </form>
      </div>
      <script type="text/javascript" src="./controller.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
      

      <div class="well span6 offset3" id="result">Search Result
        <div id="result1"></div>
        <div id="result2"></div> 
          
      </div>



      <div class="well span6">Recently Comment Albums
          <div>Deadweightloss- margin</div>
      </div>

      <br>

      <div class="well span6">Recently Comment Songs
          <div>Deadweightloss- #FFF5EE</div>
          <?php 
          include('connmusic.php');

        //SONGS searched//
        $res =  $mysqli->query("SELECT * FROM `songs`"); 
        $row_total = $res->num_rows;
        
        //存入 saa_data
        for ($y = 0;$y < ($row_total) ;$y++){
          $row = $res->fetch_array(MYSQLI_ASSOC);
          $saa_data[$y] = $row;
        }
        $saa_data['len'] = $row_total;


        echo '<table>';
        for ($y=0;$y<($row_total);$y++){
          echo '<tr>';
          for ($x=0;$x<5;$x++){
            
            echo '<td align="center">'.$saa_data[$y][$x].'</td>';
            
          }
        echo '</tr>';
        }
        echo '</table>';

        ?>

      </div>

    
    </div> 
<script src="http://code.jquery.com/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>

  </div>



  </body>
</html>