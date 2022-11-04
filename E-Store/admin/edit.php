<?php 
    include("../dbms.php");

    if(isset($_POST["update"]))
    {
        $proid=$_POST["proid"];
        $name=$_POST["name"];
        $detail=$_POST["detail"];
        $price=$_POST["price"];
        $result = mysqli_query($con,"update `products` set `name`='$name',`detail`='$detail',`price`='$price' where `proid`='$proid'");

        if($result)
        {
            echo "<script>window.alert('successfully update the product');window.location.href='show.php?name=$name&detail=$detail&price=$price'</script>";
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
        <label for="">Edit a Product</label><br><br>

        <label for="name">Name :</label>
        <input type="text" name="name" value="<?php echo $_GET['name'] ?>"><br><br>
        <input type="hidden" name="proid" value="<?php echo $_GET['prid'] ?>">

        <label for="detail">Detail :</label>
        <textarea name="detail" placeholder="<?php if(isset($GET_["detail"])){echo $_GET['detail']; } ?>"></textarea><br><br>

        <label for="price">Price :</label>
        <input type="number" name="price" value="<?php echo $_GET['price'] ?>"><br><br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>