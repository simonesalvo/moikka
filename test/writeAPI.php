<?php 

include 'db.php';

$msg = $_POST["mex"];

$con = mysqli_connect($host,$user,$pass);
$dbs = mysqli_select_db($con,$dbname);

$query = "Query: "."INSERT INTO $tablename (msg)". 
	"VALUES "."('$msg')";

echo $query;

$result = mysqli_query($con, $query); 

echo "\nInsert query result: ". $result;

mysqli_close($con);  

?>