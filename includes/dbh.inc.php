
<?php

$serverName = "localhost";
$dBUsername = "root";
$dBUserPassword = "";
$dBName = "horizon_db";

$con = mysqli_connect($serverName, $dBUsername ,$dBUserPassword,$dBName);

if (!$con){
	die("Connection Failed:" .mysqli_connect_error());
}
?>