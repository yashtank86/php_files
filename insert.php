<?php
$name=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['pass'];

$con=mysqli_connect("localhost","root","","sqldemo");


$sql="insert into user(u_id,Name,Email,password) values(NULL,'".$name."','".$email."','".$password."')";

$result=$con->query($sql);

echo $result;

if($result)
{
	$msg['msg']="1";
}
else $msg['msg']="0";
	

echo json_encode($msg);



?>