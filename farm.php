<?php
include('dbconnet.php');


$sql="select farm.*,location.name as locname from farm,location where farm.Location_id=location.L_id and status=1";

$result=$con->query($sql);





?>

<table border=1>
<tr>
<th>Farm Name</th>
<th>Description</th>
<th>Location</th>
<th>Action</th>
</tr>


<?php
while($row=mysqli_fetch_array($result))
{
	echo "<tr>
	<td>".$row['Name']."</td>
	<td>".$row['Description']."</td>
	<td>".$row['locname']."</td>
	<td><a href='deletefarm.php?farmid=".$row['f_id']."'>Delete</a></td>
	</tr>";
}


?>


</table>

