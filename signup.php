
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once 'header.php';
?>
    
<section class="signup-form">
   <h2>Sign Up</h2>

   <div class="signup-form-form">
   <form action="includes/signup.inc.php" method="post">

   <input type="text" name="name" placeholder="Full Name"><br>
   <input type="text" name="email" placeholder="Email"><br>
   <input type="text" name="uid" placeholder="User Name"><br>
   <input type="password" name="pwd" placeholder="Password"><br>
   <input type="password" name="pwdrepeat" placeholder="Repeat Password..."><br>

   <br><button type="submit" name="submit">Signup</button>

   </form>
   </div>
   <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == "invalidUid") {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>Passwords don't match!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
        }
    }
    ?>
</section>



<?php
include_once 'footer.php';
?>