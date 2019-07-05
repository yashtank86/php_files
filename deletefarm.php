<?php
include('dbconnet.php');

$farmid=$_GET['farmid'];

$sql="delete from farm where f_id=".$farmid;

$con->query($sql);


header("Location: farm.php");


?>