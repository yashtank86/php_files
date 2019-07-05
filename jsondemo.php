<?php
$username=$_GET['username'];
$password=$_GET['pass'];


//$_POST['username'];

$con=mysqli_connect("localhost","root","","sqldemo");




$sql="select * from user where Email='".$username."' and password='".$password."'";




//echo $sql;
$result=$con->query($sql);




 while ($row = mysqli_fetch_array($result)) { 
            print_r($row);
        } 




//echo $result->num_rows;

if($result->num_rows>=1)
{
    $message['msg']="Valid";
}
else
{
    $message['msg']="Invalid";
}

/*
while($row=mysqli_fetch_array($result))
{
    $arrayofrow[]=$row;
}

*/

$jsondata=json_encode($message);

echo $jsondata;










?>