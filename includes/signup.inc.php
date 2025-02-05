<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST["submit"])) {

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
$pwdRepeat = $_POST["pwdrepeat"];

require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';

if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
}
if (invalidUid($username) !== false) {
    header("location: ../signup.php?error=invalidUid");
    exit();
}
if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
    exit();
}
if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passworddontmatch");
    exit();
}
if (uidExists($conn, $username, $email) !== false) {
    header("location: ../signup.php?error=usernametaken");
    exit();
}

createUser($conn, $name, $email, $username, $pwd);
}

else {
    header("location: ../signup.php?error=stmtfailed");
    exit();
}

?>