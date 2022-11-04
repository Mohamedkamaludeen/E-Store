<?php 
    include("dbms.php");
    if(isset($_POST["signup"]))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $gender=implode(",",$_POST["gender"]);
        $address=$_POST["address"];
        $mobile=$_POST["mobile"];
        $password=$_POST["password"];



        $result3=mysqli_query($con,"select * from user where email='$email'");
        $row=mysqli_fetch_assoc($result3);

        if($row)
        {
            echo "<script>window.alert('You alredy register plese login');window.location.href='index.php'</script>";
        }
        else{
            $result=mysqli_query($con,"INSERT INTO `customer`(`name`,`email`,`gender`,`address`,`mobile`,`password`)VALUE('$name','$email','$gender','$address','$mobile','$password')");
            $result2=mysqli_query($con,"INSERT INTO `user`(`email`,`password`,`role`)VALUE('$email','$password','customer')");

            header("Location:index.php");
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
    <form acrion="" method="post">
        <label for="name">Name :</label>
        <input type="text" name="name"><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email"><br><br>

        <label for="gender">Gender :</label>
        <select name="gender[]" size="1">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>  <br><br>
        
        <label for="address">Address :</label>
        <input type="text" name="address"><br><br>

        <label for="mobile">Mobile No :</label>
        <input type="phone" name="mobile"><br><br>

        <label for="password">Password :</label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="signup" value="Sign Up">

    </form>
</body>
</html>