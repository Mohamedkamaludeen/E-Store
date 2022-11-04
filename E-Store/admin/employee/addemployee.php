<?php 
    include("../../dbms.php");

    if(isset($_POST["enroll"]))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $gender=implode($_POST["gender"]);
        $address=$_POST["address"];
        $mobile=$_POST["mobile"];
        $password=$_POST["password"];

        $result = mysqli_query($con,"INSERT INTO `employee`(`name`,`email`,`gender`,`address`,`mobile`,`password`)VALUES('$name','$email','$gender','$address','$mobile','$password')");

        if($result)
        {
            echo "<script>window.alert('successfully insert the employee');window.location.href='show.php?name=$name&email=$email&gender=$gender&address=$address&mobile=$mobile'</script>";
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
        <label for="">Enroll a new Employee</label><br><br>

        <label for="name">Name :</label>
        <input type="text" name="name"><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email"><br><br>

        <label for="gender">Gender :</label>
        <select name="gender[]">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="address">Address :</label>
        <input type="text" name="address"><br><br>

        <label for="mobile">Mobile No :</label>
        <input type="phone" name="mobile"><br><br>

        <label for="password">Password :</label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="enroll" value="Enroll">
    </form>
</body>
</html>