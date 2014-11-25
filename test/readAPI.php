<?php 
include 'db.php';

$query = "SELECT * FROM $tablename";

$con = mysqli_connect($host,$user,$pass);
$dbs = mysqli_select_db($con,$dbname);

$data = array();

$result = mysqli_query($con, $query); 

while($row = mysqli_fetch_array($result,MYSQLI_NUM))
{
  if (($row))
  {
	$data[] = ($row);
  }
}

echo json_encode($data);

mysqli_free_result($result);

mysqli_close($con);
?>