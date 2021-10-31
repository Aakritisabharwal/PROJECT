<?php
include_once("head.html");
include_once("connection.php");
?>
<html>
<head>
<title>
KYC YOGA :: Official Website
</title>
</head>
<body>
<form name="form1" method="post">
<table align="center" border="3"  width="600" hight= "500" >
<tr>
<th colspan ="3"><u><h1 style="color:#cc0000;">Enquiry :</h1></u></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Name:</label></th>
<td ><input type="text" name="name" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Gender:</label></th>
<td  ><input type="text" name="gender" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Contact:</label></th>
<td  ><input type="text" name="contact" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Email:</label></th>
<td  ><input type="text" name="email" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Date:</label></th>
<td  ><input type="date" name="date" required> </td></th>
</tr>
<th style="color:#a9214e;font-size:20px;"><label>Address:</label></th>
<td><textarea name="address" rows="10" cols="22" required></textarea></td></th>
</tr>

<tr>
<th><label></label></th>
<td  ><input type="submit" name="submit" value="Confirm..." width="60" hight="20"></td></th>
</tr>
<td colspan="4" align ="center"></td>
</tr>
</table>
</form>
<?php
	// insert
	if(isset($_POST['submit']))
	{   
		$name= $_POST["name"];		
		$gender= $_POST["gender"];	
        $contact= $_POST["contact"];		
		$email= $_POST["email"];
		
		$date= $_POST["date"];		
		$address= $_POST["address"];		
		$ins="INSERT INTO appointment VALUES ('$name','$gender','$contact','$email','$date','$address')";
	
        if($conn->query($ins));
		{
		echo "<script>
		alert('Thanks for Enquiry.....');
		</script>";
		}
	}
?>
</body>
</html>
<?php
include_once("foot.html");
?>