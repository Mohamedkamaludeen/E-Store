
<?php 
session_start();
// This file includes nav.php
// You can see the "nav.php" includes "titlebar.php" 
include("../nav.php");
?>


<h1>
    Hello 
    <?php 
        if(isset($_SESSION["name"])) {
            echo $_SESSION["name"];
        } ?>! Welcome to Admin Dashboard!
</h1>
