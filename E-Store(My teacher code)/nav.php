<?php 
//This code for the navigation bar for each 3 users
// As title bar is on top of the navigation menu. so you can include it to the nav.php
include("titlebar.php"); 
//as the role is stored in the session. you can check and redirect to the appropriate menu bar.
if(isset($_SESSION["role"]) and $_SESSION["name"]) {

    if($_SESSION["role"] == "admin") { 
    ?>
    <div class="btn-info col-sm-12">
        <a><button class="btn col-sm-2 btn-info"><?php echo $_SESSION["name"]; ?></button></a>
        <a href="#"><button class="btn col-sm-3 btn-info">Products</button></a>
        <a href="#"><button class="btn col-sm-3 btn-info">Employees</button></a>
        <a href="../logout.php"><button class="btn col-sm-3 btn-info" style="text-align:right">Logout</button></a>
    </div>

    <?php } 
    else if($_SESSION["role"] == "customer") { ?>

    <div class="btn-info col-sm-12">
        <a ><button class="btn col-sm-3 btn-info"><?php echo $_SESSION["name"]; ?></button></a>
        <a href="#"><button class="btn col-sm-3 btn-info">Place Order</button></a>
        <a href="../logout.php"><button class="btn col-sm-2 btn-info" style="text-align:right">Logout</button></a>
    </div>
    <?php } 
    else if($_SESSION["role"] == "employee") { ?>


    <div class="btn-info col-sm-12">
        <a><button class="btn col-sm-2 btn-info"><?php echo $_SESSION["name"]; ?></button></a>
        <a href="#"><button class="btn col-sm-2 btn-info">My Orders</button></a>
        <a href="../logout.php"><button class="btn col-sm-1 btn-info" style="text-align:right">Logout</button></a>
    </div>
    <?php } 

}?>