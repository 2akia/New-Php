
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$serverName = "localhost";
$dBUsername = "root"; 
$dBPassword = "root";
$dBName = "phpproject01";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>