<?php
$host = "localhost";
$username = "6512231020";
$password = "P@ss1020";
$database = "6512231020_insurance";
$mysqli = new mysqli($host,$username,$password,$database);
if ($mysqli->connect_errno)
{
	echo $mysqli->connect_error;
	exit;
}
$mysqli->set_charset('utf-8');
?>