<?php
include_once("head.html");
include_once("connection.php");
?>
<html>
<head>
<title>
KYC YOGA :: Official Website
</title>

<style>
input[type=submit]
 {
  width: 50%;  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid;
  border-radius: 4px;
    font-size:20px;
}


 
input[type=text],
input[type=date],textarea
 {
  width: 100%;
  padding: 8px 15px;
  margin: 8px 0;
  font-size:20px;
  box-sizing: border-box;
  border: 2px solid red;
  border-radius: 4px;
}
table {
  border: 5px solid black;
  border-color:#000;
}

</style>
</head>
<body>
<form name="form1" method="post">
<table align="center" border="3"  width="600" hight= "500" >
<tr>
<th colspan ="3"><u><h1 style="color:#cc0000;">Admission :</h1></u></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Name:</label></th>
<td ><input type="text" name="name" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>DOB:</label></th>
<td ><input type="date" name="dob" required></td></th>
</tr>

<tr style="color:#a9214e;font-size:20px;">
<th><label>Gender:</label></th>
<td  ><input type="text" name="gender" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Package	:</label></th>
<td  ><input type="text" name="package" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Batch:</label></th>
<td  ><input type="text" name="batch" required></td></th>
</tr>
<tr style="color:#a9214e;font-size:20px;">
<th><label>Fee:</label></th>
<td  ><input type="text" name="fee" required> </td></th>
</tr>

<tr>
<th style="color:#a9214e;font-size:20px;"><label>Address:</label></th>
<td><textarea name="address" rows="6" cols="22" required></textarea></td></th>
</tr>

<tr style="color:#a9214e;font-size:20px;">
<th><label>contact:</label></th>
<td  ><input type="text" name="contact" required> </td></th>
</tr>

<tr style="color:#a9214e;font-size:20px;">
<th><label>DOJ:</label></th>
<td  ><input type="date" name="DOJ" required date> </td></th>
</tr>
<tr>
<th><label></label></th>
<td  ><input type="submit" name="submit" value="Confirm..." ></td></th>
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
        $dob= $_POST["dob"];			
		$gender= $_POST["gender"];	
        $package= $_POST["package"];		
		$batch= $_POST["batch"];
		$fee= $_POST["fee"];				
		$address= $_POST["address"];	
        $contact= $_POST["contact"];	
        $DOJ= $_POST["DOJ"];		
		$ins="INSERT INTO yogaadmission VALUES ('$name','$dob','$gender','$package','$batch','$fee','$address','$contact','$DOJ')";
	
        if($conn->query($ins));
		{
		echo "<script>
		alert('Payment Recivied. You have successfully Registration.....');
		</script>";
		}
	}
?>
</body>
</html>
<?php
include_once("foot.html");
?>