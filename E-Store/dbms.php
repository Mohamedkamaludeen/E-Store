<?php 
    $host="localhost";
    $root="root";
    $password="";
    $db="esms";

    $con = mysqli_connect($host,$root,$password,$db);
    if(!$con)
    {
        echo "successfull connection";
    }
    
    ?>