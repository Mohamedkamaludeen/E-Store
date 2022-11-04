<?php
//This file handles registration for customer and empolyee 
include("connection.php");

if(isset($_POST['reg'])){ 
	$name=$_POST["name"];
	$email=$_POST["email"];
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	$mobile=$_POST["mobile"];
	$password=md5($_POST["password"]);
    $role=$_POST["role"];
	$sql2="select * from users where email='$email'";
	$result2=$conn->query($sql2);
	if($result2->num_rows==1){
        echo ("<script> window.alert('You are already registered. Please login'); window.location.href='index.php';</script>");
        //header("location:../index.php");
    }
    else{
       
	    $sql="INSERT INTO users(name,email,gender,address,mobile,password, role)VALUES('$name','$email','$gender','$address','$mobile','$password','$role')";
        if ($conn->query($sql) === TRUE) {
            //if the customer enrolls himself through registration form
            if($role == "customer") {
                echo ("<script> window.alert('Your account has been created. Please login'); window.location.href='index.php';</script>");
                //header('Location:../login.php');
            }
            // if admin enrolls cutomer through admin dashboard 
            else if($role == "employee") {
                header('Location:dashboard/admin.php');
            }
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>