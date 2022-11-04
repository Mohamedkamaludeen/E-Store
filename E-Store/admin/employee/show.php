<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //include("../dbms.php");
        //$result=mysqli_query($con,"select * from products");
        //$row=mysqli_fetch_assoc($result);
        $name=$_GET["name"];
        $email=$_GET["email"];
        $mobile=$_GET["mobile"];
        $gender=$_GET["gender"];
        $address=$_GET["address"];

        ?>
        <label fro="">Details of Employee<label><br><br>
        <label for="name">Name :<?php echo $name ?></label><br><br>
        
        <label for="email">Email :<?php echo $email ?></label><br><br>

        <label for="gender">Gender :<?php echo $gender ?></label><br><br>

        <label for="address">Address :<?php echo $address ?></label><br><br>

        <label for="mobile">Mobile:<?php echo $mobile ?></label><br><br>
        
    <?php
    ?>
</body>
</html>