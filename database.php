<?php

echo $_GET['co'];
$latitude = floatval($_GET['la']);
$longitude = floatval($_GET['lo']);
$comment = $_GET['co'];

$connection = mysqli_connect('localhost', "root", "12345", "arproject");

if(!$connection){
	die("Oops can't connect" . mysql_error($connection));
}

//mysql_select_db("arproject");

$sql = "INSERT INTO user(longitude, latitude) VALUES($longitude, $latitude)";

// $sql = "SELECT * FROM user";
$result = $connection -> query($sql);

// while($row = mysqli_fetch_array($result)) {
// 	echo $row['latitude'];
// 	echo $row['longitude'];
// }


//mysql_close($connection);
?>
