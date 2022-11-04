<?php 
    include("../dbms.php");

    if(isset($_POST["add"]))
    {
        $name=$_POST["name"];
        $detail=$_POST["detail"];
        $price=$_POST["price"];
        $result = mysqli_query($con,"INSERT INTO `products`(`name`,`detail`,`price`)VALUES('$name','$detail','$price')");

        if($result)
        {
            echo "<script>window.alert('successfully insert the product');window.location.href='show.php?name=$name&detail=$detail&price=$price'</script>";
        }
        else
        {
            echo "<script>window.alert('There is some erorr in inserting the project')";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Add a new Product</label><br><br>

        <label for="name">Name :</label>
        <input type="text" name="name"><br><br>

        <label for="detail">Detail :</label>
        <textarea name="detail" ></textarea><br><br>

        <label for="price">Price :</label>
        <input type="number" name="price"><br><br>

        <input type="submit" name="add" value="Add">
    </form>
</body>
</html>