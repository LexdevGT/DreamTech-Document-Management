<?php

$hostname = '161.35.13.96';
$username = 'streamline_urs';
$password = 'YgoMmj_mXP1ajdjB5PCy.a';
$db_name  = 'streamline';

$conn = new mysqli($hostname, $username, $password, $db_name);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}else{
	//echo "LOGRADO!";
}

?>