<?php

$hostname = '52.20.191.55';
$username = 'remote_root';
$password = 'abc123**';
$db_name  = 'email_contacts';


$conn = new mysqli($hostname, $username, $password, $db_name);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
?>