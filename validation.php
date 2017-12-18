<?php
session_start();
$enrollno=$_POST['enrollno'];
$password=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'wbscte_db');
$q="select * from registration where enrollmentno='$enrollno' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['enrollno']=$enrollno;
	header('location:http://localhost/project/home.php');
}
else
{
header('location:http://localhost/project/login.php');
}
?>
	