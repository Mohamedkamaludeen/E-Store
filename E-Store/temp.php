<?php 
    session_start();
    include("dbms.php");
    if(isset($_SESSION["role"])) 
    {
        if($_SESSION["role"]=="admin")
        {
            header("Location:./admin/dashbord.php");
        }
        else if($_SESSION["role"]=="customer")
        {
            header("Location:./customer/dashbord.php");
        }
        else if($_SESSION["role"]=="employee");
        {
            header("Location:./employee/dashbord.php");
        }
    }
    else{
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
            <form action="login.php" method="post">
                <label for="email">Email :</label>
                <input type="email" name="email"> <br><br>

                <label for="password">Password :</label>
                <input type="password" name="password"> <br><br>

                <input type="submit" name="login" value="Login"><br><br>
                <button><a href="registration.php"></a></button>
                <input type="submit" name="register" value="Register">


            </form>
        </body>
        </html>
    <?php }


?>
