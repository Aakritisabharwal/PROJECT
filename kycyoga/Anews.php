<?php
include_once("ahead.html");
include_once("connection.php");
?>
<html>
<head>
<title>
KYC YOGA :: Official Website
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
<h2 align="center">News Updates...</h2><hr>

<form name="form1" method="post">
<table align="center" border="2"  width="600" hight= "500" >
<tr>
<th><label>ID:</label></th>
<td ><input type="text" name="ID" required></td></th>
</tr>
<tr>
<th><label>Headline:</label></th>
<td  ><input type="text" name="headline" required></td></th>
</tr>
<tr>
<th><label>Description:</label></th>
<td><textarea name="description" rows="5" cols="22" required></textarea></td></th>
</tr>
<tr>
<th><label>Date:</label></th>
<td  ><input type="text" name="date" required></td></th>
</tr>
<tr>
<th><label></label></th>
<td  ><input type="submit" name="submit" value="ADD.." width="60" hight="20">

</td></th>
</tr>
<th><label></label></th>
<td  ></td></th>

<td colspan="4" align ="center"></td>
</tr>
</table>
</form>
  </div>
   <?php
	// insert
	if(isset($_POST['submit']))
	{   
		$id= $_POST["ID"];
		$headline= $_POST["headline"];
		$description= $_POST["description"];
		$date= $_POST["date"];
		$ins="INSERT INTO news VALUES ('$id','$headline','$description','$date')";
	
        if($conn->query($ins));
		{
		echo "<script>
		alert('News update Successfully....');
		</script>";
		}
	}
?>  
</body>
</html>
<?php
include_once("afoot.html");
?>