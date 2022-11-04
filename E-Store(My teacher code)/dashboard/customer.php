<?php 
session_start();
include("../nav.php");
 ?>

<h1>
    Hello 
    <?php 
        if(isset($_SESSION["name"])) {
            echo $_SESSION["name"];
        } ?>! Welcome to Admin Dashboard!
</h1>
