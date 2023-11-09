<?php
$serverName = "localhost";
$dBusername = "root";
$dBPassword = "";
$dbName = "twinslogin";

$conn = mysqli_connect($serverName, $dBusername, $dBPassword, $dbName);//connecting to database 
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}