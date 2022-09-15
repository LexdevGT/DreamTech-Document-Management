<?php
/*
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name  = 'docummng';
*/

$hostname = '161.35.13.96';
$username = 'documentmng5';
$password = 'cKS5QdvU5.0GnXYtG53ON_5';
$db_name  = 'docummng';

$conn = new mysqli($hostname, $username, $password, $db_name);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}else{
	//echo "LOGRADO!";
}

?>