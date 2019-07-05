<?php

$email=$_POST['email'];
$pass=$_POST['password'];

$con=mysqli_connect("localhost","root","","sqldemo");

$sql="select * from user where Email='".$email."' and password='".$pass."'";

$result=$con->query($sql);

if($result->num_rows>0)
{
	session_start();
	$_SESSION['Email']=$email;
	header("Location: farm.php");
}
else
{
	echo "Invalid Id Pass";
	header("Location: login.php");
}
echo "Session : ".$_SESSION['Email'];


?>