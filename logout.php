<?php
session_start();
session_destroy();
header('location:http://localhost/project/login.php');
?>

if(!isset($_SESSION['enrollno']))
	echo"your usename or password is incorrect";
	header('location:http://localhost/project/login.php');