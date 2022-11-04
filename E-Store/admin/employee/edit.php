<?php 
    include("../../dbms.php");

    if(isset($_POST["update"]))
    {
        $empid=$_POST["empid"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $gender=implode($_POST["gender"]);
        $address=$_POST["address"];
        $mobile=$_POST["mobile"];

        $result2= mysqli_query($con,"update `employee` set `name`='$name',`email`='$email',`gender`='$gender',`address`='$address',`mobile`='$mobile' where `empid`='$empid'");

        if($result2)
        {
            echo "<script>window.alert('successfully update the employee');window.location.href='show.php?name=$name&email=$email&gender=$gender'&address=$address&mobile=$mobile'</script>";
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
        <label for="">Edit a Employee</label><br><br>

        <label for="name">Name :</label>
        <input type="text" name="name" value="<?php echo $_GET['name'] ?>"><br><br>
        <input type="hidden" name="empid" value="<?php echo $_GET['empid'] ?>">

        <label for="email">Email :</label>
        <input type="email" name="email" value="<?php echo $_GET['email'] ?>"><br><br>

        <label for="gender">Gender :</label>
        <select name="gender[]" selected>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label for="address">Address :</label>
        <input type="text" name="address" value="<?php echo $_GET['address'] ?>"><br><br>

        <label for="mobile">Mobile No :</label>
        <input type="phone" name="mobile" value="<?php echo $_GET['mobile'] ?>"><br><br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>