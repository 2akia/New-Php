<?php
require_once 'includes/dbh.inc.php';

if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>