<?php
include_once 'header.php';
?>
    


<section class="index-intro">

<?php

if (isset($_SESSION["useruid"])) {
echo "<p>Hello there ".  htmlspecialchars ($_SESSION["useruid"]) ."!</p>";
}


?>

    <h1>This is the Website</h1>
    <p>This is the Introduction</p>
    <p>This is a Paragraph</p>
</section>

<?php
include_once 'footer.php';
?>
    