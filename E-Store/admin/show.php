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
        $detail=$_GET["detail"];
        $price=$_GET["price"];
        ?>
        <label fro="">Product Details<label>
        <label for="name">Name :<?php echo $name ?></label><br><br>
        
        <label for="detail">Detail :<?php echo $detail ?></label><br><br>

        <label for="price">Price :<?php echo $price ?></label><br><br>
        
    <?php
    ?>
</body>
</html>