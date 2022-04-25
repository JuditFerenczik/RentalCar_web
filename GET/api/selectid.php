<?php


$conn = mysqli_connect("localhost", "root", "", "rentalcar");
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
		$data[] = $res;
	}
	print(json_encode($data));
}


