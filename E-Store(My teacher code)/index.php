<?php 
session_start();
include("titlebar.php");
// if the user already logged in then redirect to the dashboard
if(isset($_SESSION["id"]) and isset($_SESSION["role"])) {
    if($_SESSION["role"] == "admin") {
        header("Location:dashboard/customer.php");
    }else if($_SESSION["role"] == "employee") {
        header("Location:dashboard/employee.php");
    }else if($_SESSION["role"] == "customer") {
        header("Location:dashboard/customer.php");
    }
}
else {//if the user not logged in show the index login page
?>
<html>
<form action="login.php" method="post">
<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
    <div class="mb-2 row">
        <div class="col-sm-2"></div>
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
        <input type="email" class="form-control" name="email" required>
        </div>
    </div>
  
    <div class="mb-2 row">
    <div class="col-sm-2"></div>
        <label for="inputPassword" class="col-sm-2 col-form-label" >Password</label>
        <div class="col-sm-4">
        <input type="password" class="form-control" name="password" required>
        </div>
    </div>
    <div>
    <button type="submit" name="login" class="btn btn-primary">Sign in</button>
    </div>
    
</diV>
</form>
<diV class="container-sm" style="border:solid 1px blue; padding:30px;text-align:center">
   
    <a href="register.php"><button type="submit" class="btn btn-primary">Register Now!</button></a>
</diV>
</html>
<?php 
}
?>