<?php

$serverName = "localhost";
$sBUsername = "root";
$dBPassword = "";
$dBName = "phpproject01";


$conn = mysqli_connect($serverName, $sBUsername, $dBPassword, $dBName);


if(!$conn) { 
    die("Connection Failed: " . mysqli_connect_error());
    
}

