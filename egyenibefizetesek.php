<?php

$ID = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
require_once './connect.php';
$sql = $sql = "SELECT datum, befizetes FROM `befizetes` WHERE id =?;";
$stmt = $conn -> prepare($sql);
$stmt->bind_param("i", $ID);
$stmt -> execute();
$result = $stmt->get_result();
$sumBefizet = 0;
if($result != null && $result ->num_rows > 0){
  $data =' <h3> Az eddigi befizetések listája: </h3>
      <table class="table table-striped" >
                    <thead class="thead-dark">
                    <th>Dátum</th>
                    <th>Összeg</th>
                    </thead>
                    <tbody>';
   while($row = $result -> fetch_assoc()){ 
       $sumBefizet = $sumBefizet + $row["befizetes"] ;
       $data .= '<tr>
   <td>'. $row["datum"] . '</td>
       <td>'. $row["befizetes"] . '</td>
           
                        </tr>';
       }
        $data .=  '<tr><td>Összesen </td><td> '. $sumBefizet . '</td> </tr> ';
       $data .= '</tbody> </table>';
                    
       echo $data;
             
}else{
    echo "Nincs korábbi befizetés ";
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



