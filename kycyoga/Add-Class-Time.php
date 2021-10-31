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
<h2>Add Class Time:</h2><hr>
<form name="form1" action="Add-Class-Time.php" method="post">
<table border="2" align="center" width="500" height="200" >
<tr>
<th><label>Day:</label></th>
<td align="center" ><input type="text" name="day" required></td>
</tr>
<tr>
<th><label>Time:</label></th>
<td align="center" ><input type="text" name="time" required></td>
</tr>
<tr>
<th><label>Duration:</label></th>
<td align="center" ><input type="text" name="duration" required></td>
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
		$day= $_POST["day"];
		$time= $_POST["time"];
		$duration= $_POST["duration"];
		$ins="INSERT INTO classtime VALUES ('$day','$time','$duration')";
	
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