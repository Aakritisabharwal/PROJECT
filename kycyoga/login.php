<?php
include_once("head.html");
include_once("connection.php");
?>
<html>
<head>
<title>login - KYC YOGA</title>

<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;
}
table {
  border: 5px solid black;
  border-color:yellow;
}

</style>
</head>
<body background="img/bg.jpg">
<form action="login.php" method="post">
<table align="center" width="400" height="300" style="background-color:#cc0000;">
<tr>
<th colspan="5"><h1 style="color:#FFfff0;">Admin Login Area</h1>
<hr>
</th>
</tr><br>
<th align="left" style="color:#FFf;"><lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username:</lable></th>
<td align="left"><input type="text" name="uname" required>&nbsp;&nbsp;
</tr><br>
<tr>
<th align="left" style="color:#FFf;"><lable >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</lable></th>
<td align="left"><input type="text" name="upassword" required>&nbsp;&nbsp;</td>
</tr><br>
<tr>
<th><label></label></th>
<td  ><input type="submit" name="submit" value="Login.." width="60" hight="20"><br><br></td><br></th>
</tr>
</table>
</form>

<?php 

$databaseHost = 'localhost';//or localhost
$databaseName = 'kyc-yoga'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = '';  // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


if(isset($_POST['submit']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$res = mysqli_query($mysqli,"select* from login where uname='$uname'and pass='$upassword'");
$result=mysqli_fetch_array($res);
if($result)
{
 header("Location:adminhome.php");
}
else
{
	echo "failed ";
}
}
?>


</body><br><br>
<marquee> <font size="100px" color="#ffff00">
 </font></marquee>
</html>

<?php
 include_once('afoot.html')
 ?>
