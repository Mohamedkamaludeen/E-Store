<?php 
    session_start();
    include("dbms.php");

    if(isset($_POST["login"]))
    {

        $email =$_POST["email"];
        $password=$_POST["password"];

        $result = mysqli_query($con,"select * from `user` where email='$email' and password='$password'");
        $row=mysqli_fetch_assoc($result);

        $_SESSION["uid"]=$row["uid"];
        $_SESSION["role"]=$row["role"];

        if($row["role"]=="admin")
        {
            header("Location:./admin/dashbord.php");
        }
        else if($row["role"]=="customer")
        {
            header("Location:./customer/dashbord.php");
        }
        else if($row["role"]=="employee")
        {
            header("Location:./employee/dashbord.php");
        }

    }
    else{
        header("Location:index.php");
    }



?>