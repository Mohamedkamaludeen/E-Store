<?php 
    include("../../dbms.php");
    $result=mysqli_query($con,"select * from employee");
    if(isset($_GET["action"]) && $_GET["action"]=="delete")
    {
        $empid=$_GET["empid"];
        $result2 = mysqli_query($con,"delete from employee where empid='$empid'");
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
        <button><a href="addemployee.php">Enroll new Employee</a></button><br><br>
        <table border="3px">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
           <?php
            while($row=mysqli_fetch_assoc($result))
            { ?>
            <tr>
                <td><?php echo $row["empid"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["mobile"] ?></td>
                <td><button><a href="show.php?name=<?php echo $row["name"] ?>&amp;email=<?php echo $row["email"] ?>&amp;gender=<?php echo $row["gender"] ?>&amp;address=<?php echo $row["address"] ?>&amp;mobile=<?php echo $row["mobile"]?>">Show</a></button><button><a href="edit.php?empid=<?php echo $row["empid"] ?>&amp;name=<?php echo $row["name"] ?>&amp;email=<?php echo $row["email"] ?>&amp;gender=<?php echo $row["gender"] ?>&amp;address=<?php echo $row["address"] ?>&amp;mobile=<?php echo $row["mobile"]?>">Edit</a></button><button><a href="dashbord.php?empid=<?php echo $row["empid"] ?>&amp;action=delete">Delete</a></button></td>


            </tr>
          <?php  } ?>
        </table> 
    </form>

</body>
</html>