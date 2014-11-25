<?php

$hello = "Ciao mondo!";
echo $hello;
$con = mysqli_connect('db4free.net','ssimxp','apocalipto','simtest01');
if (!$con) 
{
  printf('Could not connect: ' . mysqli_error($con));
}
else
{
	printf('connected');
}

$sql="SELECT * FROM moikka";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>id</th>
<th>idUsr</th>
<th>msg</th>
</tr>";

while($row = mysqli_fetch_array($result)) 
{
  echo "<tr>";
	  echo "<td>" . $row['id'] . "</td>";
	  echo "<td>" . $row['idUsr'] . "</td>";
	  echo "<td>" . $row['msg'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>