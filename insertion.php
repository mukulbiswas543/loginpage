<?php
$name=$_POST['name'];
$enrollno=$_POST['enrollno'];
$indexno=$_POST['indexno'];
$password=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'wbscte_db');
$q="INSERT INTO registration(name,enrollmentno,indexno,password) values('$name','$enrollno','$indexno','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<title>insertion</title>

</head>
<body>
<h1> west bengal state councelling of technical education </h1>
<p><?php if($status==1) echo "REGISTRATION SUCCESSFULLY";
else echo "REGISTRATION  failed";?>
</p>
<h1 font-color="green">GO TO STUDENT LOGIN PAGE<a href="login.php"> Click hare</a></h1>
</body>
</html>