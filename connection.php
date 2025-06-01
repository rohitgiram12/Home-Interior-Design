<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "racbca";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
 	echo "connection ok";
} 
else
{
	echo"connection failed".mysqli_connect_error();
}
?>