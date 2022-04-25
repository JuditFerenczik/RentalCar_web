<?php

$url = "http://localhost/RentalCar_web/GET/api/tags.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//$json =json_decode( $['csaladnev']);
//svar_dump($json);
$djson=json_decode($resp, true);
//var_dump($djson[0]['csaladnev']);
//print($djson[0]['csaladnev']);


?>


