<?php
// You should start the session when someone login to the system
session_start();
include("connection.php");

if (isset($_POST['login'])) {

    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $sql = "select uid, name, role from users where password='$password' and  email='$email'";
    $result=$conn->query($sql);
 

    if ($result->num_rows==1) {
        $row=$result->fetch_assoc();
        $ID=$row["uid"];
        $role=$row["role"];
        $name=$row["name"];
        // use session to store the login_user id , role of the login user and name
        $_SESSION['id']=$ID;
        $_SESSION['role']= $role;
        $_SESSION['name']= $name;

        if($role=="customer"){
            header("Location:dashboard/customer.php");
        }
        else if($role=="admin"){
            header("Location:dashboard/admin.php");
        }
        else if($role=="employee"){
            header("Location:dashboard/employee.php");
        }		
    } 
	else {
        header("location: index.php");
	}
    $conn->close(); 
}
?>