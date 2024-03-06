<?php
$host = "localhost";
$username = "root";
$password = "tanakorn16136";
$database = "customer";
$mysqli = new mysqli($host,$username,$password,$database);
if ($mysqli->connect_errno)
{
	echo $mysqli->connect_error;
	exit;
}
$mysqli->set_charset('utf-8');
?>