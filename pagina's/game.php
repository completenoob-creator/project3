<center>
<br>
<h1>Handleiding</h1>
<br>
<div class="col-4">
<p>In ons spel krijg je een menu met 3 knoppen. Easy, Medium en Hard. Als je op een van de knoppen drukt krijg je een tekstvak en een plaatje. In het 
    tekstvak moet je typen wat het plaatje betekent en dan ga je door. Het doel is om alle plaatjes juist te hebben en zo in de hoogste scores 
    zien te komen. Medium en hard werken hetzelfde maar de gebaren hierbij zijn een stuk lastiger en de timer is korter. Zodra de timer klaar is of je alle 
    gebaren juist hebt kom je bij een game over menu. Vanaf hier kan je alles opnieuw doen.
</p>
</div>
<br>
<br>
<iframe src="https://i.simmer.io/@thijsieboy007/doof" style="width:1020px;height:700px"></iframe>
    <div class="container">
  <div class="row">
    <table class="table table-dark">
      <div class="col-3">
        <tr class="">
          <th class="margin box">Highest Scores</th>
        
        </tr>
 
        <?php
       $dbserver = "localhost";
       $dbname = "game";
       $dbusername = "root";
       $dbpassword = "";
       
       $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);
       
 
       $sql = "SELECT DISTINCT score FROM score order by score desc LIMIT 0,10";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo
            "<tr>  <td class='margin box'>" . $row["score"] . "</td> </tr>";
        }
        ?>
      </div>
      </div>
    </table>
  </div>
</center>