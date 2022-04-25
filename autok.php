<?php 
 require_once './response.php'; 
  ?>

<div class="container-fluid" >
<div class="row">
    
        <?php
       for($i = 0;$i < count($djson);$i++){
           echo '<div class="col-lg-3 col-sm-6 col-xs-6 col-md-4 ">';
           echo '<div class="card ">';
           echo '<div class="card-body  mycard">';
       //    $neme = $djson[$i]['nem'] =="ffi" ? "imgffi" : "imgNo";
           $file = "./images/" . strtolower($djson[$i]["marka"]) . "_". strtolower($djson[$i]["model"]) . ".png";
         //  $alt_file ="./images/" . $neme . ".png";
           //echo $file;
           //echo $alt_file;
       //    echo '<p> Neme: ' . $neme . '</p>';
      
         
                 echo "<p><img src='".$file."'  /></p>";
           
            
           $tagid = $djson[$i]["id"];
        //    echo $tagid;
        // echo  '<p> <img src="./images/' . $djson[$i]["csaladnev"]. ' '. $djson[$i]["utonev"] . '.jpg" srcset="./images/' .$neme . '.png"  alt="Nincs kép"  style="width:100px;"></p>';
	echo '<p class="card-title"> <b>' . $djson[$i]["rendszam"].  '</b></p>';
         //date in mm/dd/yyyy format; or it can be in other formats as well
        $marka = $djson[$i]['marka'];
        //explode the date to get month, day and year
       // $birthDate = explode("-", $birthDate);
        //get age from date or birthdate
       
        echo  "<p class='card-text'>" . $marka.  "</p>";

      // echo "<p>" . $djson[$i]['szuletett'].  "</p>";

       echo "<p class='card-text'> " . $djson[$i]['model']. "</p>";
       echo '<p class="card-text "><a href="./befizetes.php?id='.$tagid .'"class=" btn btn-sm btn-primary kolcs">Kölcsönzöm</a></p>';

       echo " </div></div></div>";}
        ?>
        </div>
    </div>

<script>var y = document.getElementById("autok");
    y.classList.add("active");
 </script>
