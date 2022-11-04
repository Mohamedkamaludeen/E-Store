<?php 
    include("../dbms.php");
    $result=mysqli_query($con,"select * from products");
    if(isset($_GET["action"]) && $_GET["action"]=="delete")
    {
        $proid=$_GET["proid"];
        $result2 = mysqli_query($con,"delete from products where proid='$proid'");
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
        <button><a href="addproduct.php">Create New Product</a></button>
        <table border="3px">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
           <?php
            while($row=mysqli_fetch_assoc($result))
            { ?>
            <tr>
                <td><?php echo $row["proid"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["detail"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td><button><a href="show.php?name=<?php echo $row["name"] ?>&amp;detail=<?php echo $row["detail"] ?>&amp;price=<?php echo $row["price"] ?>">Show</a></button><button><a href="edit.php?prid=<?php echo $row["proid"] ?>&amp;name=<?php echo $row["name"] ?>&amp;detail=<?php echo $row["detail"] ?>&amp;price=<?php echo $row["price"] ?>">Edit</a></button><button><a href="products.php?proid=<?php echo $row["proid"] ?>&amp;action=delete">Delete</a></button></td>


            </tr>
          <?php  } ?>
        </table> 
    </form>

</body>
</html>