<?php require_once './header.php'; 
 require_once './navbar.php';
 session_start() ;
  ?>
<?php
//echo isset($_SESSION["id"]) . "\n";
//echo $_SESSION["id"]. "\n";
//echo isset($_SESSION["id"])?$_SESSION["id"]:1;
if(isset($_GET['id'])){
	$id =$_GET['id'];
	$sql = "SELECT * FROM auto WHERE id=".$id . ";";
	$raw = mysqli_query($conn, $sql);
	if ($raw) {
		echo "listed";
	} else {
		echo "something went wrong";
	}
	while ($res = mysqli_fetch_array($raw)) {
          $rendszam =  $res['rendszam'];
           $marka =    strtolower( $res['marka']);
            $model =      strtolower(  $res['model']);
             $ar =     $res['ar'];
             $file = "./images/" . $marka . "_". $model . ".png";
            echo'  <h3>Kölcsönzési adatok:</h3>';
   echo         '<div class="container-fluid" >';
echo '<div class="row">';
echo	'<div class="col-6">';
 echo	' <div class="card">';
 
   echo '  <form method="POST" >';
   echo	' <div class="card-body">';

   echo	'<p class="card-text"><small class="text-muted">' . $rendszam .'</small></p>';
   echo	'<p class="card-text"><small class="text-muted">' . $marka .'</small></p>';
   echo	'<p class="card-text"><small class="text-muted">'. $model .'</small></p>';
   echo	'<p class="card-text"><small class="text-muted">'. $ar .'</small></p>';
    echo	'<p class="card-text"><small class="text-muted"> <input id="datefield1" name="kezdo" type="date" min="1899-01-01" ></input></p>';
      echo	'<p class="card-text"><small class="text-muted"> <input id="datefield2" name="vege" type="date" min="1899-01-01" ></input> </p>';
     echo	' <button class="btn btn-primary" type = "submit" >Kikölcsönzés </button>';
      
      echo	'  </div>';
      echo ' </form>';
echo	'  </div>';
 echo	'  </div>';
 
echo	'<div class="col-6">';
 
  echo	' <div class="card">';
 
   echo	' <div class="card-body">';

   echo	' <img class="card-img-top" src="'. $file .'" alt="No images">';
  echo	'  </div>';
echo	'  </div>';
 echo	'  </div>';
                   

echo	'  </div>';
echo	'  </div>';
	}
	
}else{
   echo  '<div>';
         echo   '<h3>Kölcsönzési adatok: Nincs kiválasztott autó!</h3>';
       
           
    echo '    </div>';
    
}

   if(isset($_POST["kezdo"]) && isset($_POST["vege"]) && isset($_GET['id']) ){
     if(($_POST["kezdo"] < $_POST["vege"]) == 1){
              echo '<script>alert("Sikeres rögzítés!")</script>';
        
            $id =$_GET['id'];
            $tmpdatum1 = date(filter_input(INPUT_POST, 'kezdo', FILTER_SANITIZE_STRING));
            $datum1 = date_format(date_create($tmpdatum), "Y-m-d");
             $tmpdatum2 = date(filter_input(INPUT_POST, 'vege', FILTER_SANITIZE_STRING));
            $datum2 = date_format(date_create($tmpdatum2), "Y-m-d");
             
            // echo  $tmpdatum . " " . $datum ; 
            $sql3 = "INSERT INTO kolcsonzes(id, tol, ig) VALUES(?,?,?);";
            $stmt2 = $conn -> prepare($sql3);
            $stmt2->bind_param("iss",$id, $datum1, $datum2);
            $stmt2 -> execute();
          
       //header("Location: ./index.php");
     }else{
        echo '<script>alert("A kezdő érték nem lehet nagyobb a végső értéknél!")</script>';
     }
      
    
   
}
?>



   
    
</div>
<script>var y = document.getElementById("befizet");
    y.classList.add("active");
    
    
  
 </script>
 
 <<script>
 
 var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
document.getElementById("datefield1").setAttribute("min", today);
 document.getElementById("datefield2").setAttribute("min", today);
 </script>
  
 <?php require_once './footer.php'; 