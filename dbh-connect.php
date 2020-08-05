<?php 
$server = "localhost";
$dbUsername ="root";
$dbpasswd = "";
$dataBase = "gulu";
$conn = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);
if (!$conn) {
die("connection to database failed!");

}
 ?> 