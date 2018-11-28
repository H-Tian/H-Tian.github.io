<?php
/* Retrieve posts from database and store as an associative array(preferably)*/
include('CommonMethods.php');
include('locationUtility.php');

$debug = true;
$COMMON = new Common($debug);

$latitude = floatval($_GET['lat']);
$longitude = floatval($_GET['lon']);

//db4 stores the database tables for this project
//Calculate with this cooridnates to determine the approximate range to operate on


//Actually there is no need for the utility function;
//Let the fine tuning happen via sql straight away
//Approximately a rough estimate is such that 111,111 m ~ 1 degree of latitude/longitude
//One meter is approximately 1/111,111 of a degree. We need a range of approximately 10m
// That gives 1/11,111
$lonUpperRange = $longitude + 0.0001;
$lonLowerRange = $longitude - 0.0001;
$latUpperRange = $latitude + 0.0001;
$latLowerRange = $latitude - 0.0001;

$sql = "SELECT postcontent FROM `tianh-db4`.postlist WHERE `postlongitude` BETWEEN $lonLowerRange AND $lonUpperRange AND `postlatitude` BETWEEN $latLowerRange AND $latUpperRange";

$result = $COMMON -> executeQuery($sql, 'retrievePosts.php');


while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
	echo($row[0] . "<br/>");

}

?>