<?php
session_start();
if(!isset($_SESSION['enrollno']))
{
	
	echo"your erollment no or password is incorrect";
	header('location:http://localhost/project/login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<h1 align="center"> West Bengal State Council of Technical Education </h1>
<h1 align="center"> personal details: </h1>
<h1 align="center"> rank details: </h1>
<h1 align="center"> my status: </h1>

<hr />
<h4  front-color="red"><a align="center" href="logout.php">  LOCK  </a></h4>

<hr />
</body>
</html>