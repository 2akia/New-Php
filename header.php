<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <
    <title>Document</title>
</head>
<body>

<nav>

<div class="wrapper">
<a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="discover.php">About Us</a></li>
    <li><a href="blog.php">Find Blogs</a></li>
    <?php

if (isset($_SESSION["useruid"])) {
echo "<li><a href='profile.php'>Profile page</a></li>";
echo "<li><a href='logout.php'>Log out</a></li>";
}
else {
    echo "<li><a href='signup.php'>Sign Up</a></li>";
    echo "<li><a href='login.php'>Log In</a></li>";
}

?>

</ul>
</div>
</nav>

<div class="wrapper">