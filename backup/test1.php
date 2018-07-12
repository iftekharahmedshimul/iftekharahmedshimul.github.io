<?php
require_once 'phoogle.php'




$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'ahmedi-db';
$dbuser = 'ahmedi-db';
$dbpass = 'nm63QFD438dvQZIW';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

echo 'Successfully connected to database!';

$map = new PhoogleMap;
$map->setAPIKey("");
$map->printGoogleJS();
$sql = 'SELECT longitude, latitude FROM `PlacesVisited`';
$result=mysql_query($sql,$mysql_handle);
while($row=mysql_fetch_array($result)){
$longitude=$row['longitude'];
$latitude=$row['latitude'];
$map->addGeoPoint($latitude,$longitude);
}
$map->showMap();
mysql_close($mysql_handle);

?>
