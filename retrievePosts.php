<?php
/* Retrieve posts from database and store as an associative array(preferably)*/
include('CommonMethods.php');
include('locationUtility.php');

$debug = true;
$COMMON = new Common($debug);
$latitude = $_GET['lat'];
$longitude = $_GET['lon'];

//db4 stores the database tables for this project
//Calculate with this cooridnates to determine the approximate range to operate on




$sql = "SELECT postcontent FROM `tianh-db4`.postlist WHERE /*To be completed from utility*/";
$result = $COMMON -> executeQuery($sql, 'retrievePosts.php');

while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
	echo($row[0]);
}

?>