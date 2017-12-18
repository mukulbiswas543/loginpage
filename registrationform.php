
<!DOCTYPE html>
<html>
<head>
<script>
function validation()
{
	alert("do you want registrate");
}
</script>
<style type="text/css"> 
th{
color:blue;
font-size:20px;
 }
</style>
</head>
<body>
<h2>West Bengal State Council of Technical Education</h2>
<h1>JEXPO (2017)</h>
<h1>New Registration!!</h>
<form action="insertion.php" method="post" onsubmit="validation()">
<table>
<tr>
<th> NAME</th>
<td><input type="text" name="name" required /></td>
</tr>
<tr>
<th> ENROLLMENT NO</th>
<td><input type="text" name="enrollno" required /></td>
</tr>
<tr>
<th> INDEX NO</th>
<td><input type="text" name="indexno" required /></td>
</tr>
<tr>
<th> PASSWORD</th>
<td><input type="password" name="Password" required /></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="proceed"/></td>
</tr>
</table>
</form>
</body>
</html>