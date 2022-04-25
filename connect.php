<?php



 
$conn = new mysqli('localhost', 'root', '', 'rentalcar');

if($conn -> errno > 0){
    die("Adatbázis nem elérhető");
}
