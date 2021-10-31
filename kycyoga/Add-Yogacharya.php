<?php
include_once("ahead.html");
include_once("connection.php");
?>
<html>
<head>
<title>
KYC YOGA :: ADMIN
</title>
<style>
* {
  
  box-sizing: border-box;
 
}

/* Create two equal columns that floats next to each other */
.column {
	
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<div class="row">
<h2>Add Yogacharya:</h2><hr>
<form name="form1" action="Add-Yogacharya.php" method="post">
<table border="2" align="center" width="500" height="200" >
<tr>
<th><label>Name:</label></th>
<td align="center" ><input type="text" name="name" required></td>
</tr>
<tr>
<th><label>Specialization:</label></th>
<td align="center" ><input type="text" name="specialist" required></td>
</tr>
<tr>
<th><label>Contact:</label></th>
<td align="center" ><input type="text" name="contact" required></td>
</tr>
<tr>
<th><label></label></th>
<td colspan="2" align="center"><input type="submit" name="submit" value="submit..." width="60" height="20"></td>
</tr>
</table>
</form>
  </div>
 <?php
	
	if(isset($_POST['submit']))
	{   
		$name= $_POST["name"];
		$specialist= $_POST["specialist"];
		$contact= $_POST["contact"];
		$ins="INSERT INTO yogacharya VALUES ('$name','$specialist','$contact')";
	
        if($conn->query($ins));
		{
		echo "<script>
		alert('Details Successfully Added');
		</script>";
		}
	}
?>  
  
</body>
</html>
<?php
include_once("afoot.html");
?>