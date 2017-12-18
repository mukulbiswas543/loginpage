<!DOCTYPE html>
<html>
<head>
<title>
INSERTION FORM
</title>
<script>
function f1()
{
var x=document.getElementById("2");
x.style.color="blue";
x.style.font-size=14px;
}
</script>
</head>
<body>
<h1>STUDENT LOGIN</h1>
<form action="validation.php" method="post">
<table>
<tr>
<th id="2"> ENROLLMENT NO</th> 
<td><input type="text" name="enrollno" /></td>
</tr>
<tr>
<th > PASSWORD</th>
<td><input type="Password" name="Password" /></td>
</tr>
<tr>
<th></th>
<td><input type="Submit" value="login" /></td>
</tr>
</table>
</form>
</body>
</html>