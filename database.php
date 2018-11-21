<?php

// echo ("Hi22");
// echo $_GET['co'];
// //var_dump($_GET);
// $latitude = floatval($_GET['la']);
// $longitude = floatval($_GET['lo']);
// $comment = $_GET['co'];

// $connection = mysqli_connect('127.0.0.1', "root", "12345", "arproject");

// if(!$connection){
// 	echo("Connection failed");

// 	die("Oops can't connect" . mysql_error($connection));
// }
// //mysql_select_db("arproject");

// $sql = "INSERT INTO user(longitude, latitude) VALUES($longitude, $latitude)";
// // $sql = "SELECT * FROM user";
// $result = $connection -> query($sql);
// // while($row = mysqli_fetch_array($result)) {
// 	echo $row['latitude'];
// 	echo $row['longitude'];
// }
//mysql_close($connection);




//*********************Server-side code for remote phpMyadmin ******************]


include('CommonMethods.php');

//echo ("Hi there");
$debug = true;
//var_dump($_GET);

$COMMON = new Common($debug);

$latitude = floatval($_GET['la']);
$longitude = floatval($_GET['lo']);
$comment = $_GET['co'];

$sql = "INSERT INTO `tianh-db4`.`postlist`(`postcontent`, `postlongitude`, `postlatitude`) VALUES ('$comment', '$longitude', '$latitude')";
// $sql = "SELECT * FROM `tianh-db4`.`postlist`";

$COMMON -> executeQuery($sql, 'database.php');
?>
