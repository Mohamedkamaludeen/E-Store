
<?php 
// to establish the mysql connection
$servername="localhost";
$username="root";
$password="";
$dbname="estore";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed:" . $conn->connect_error);
}

?>