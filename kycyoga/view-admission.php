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
* 
  
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
<h2>View Enquiry:</h2>
<table border="2" width="100%" height="1%" cellpadding="20px" > 
<tr>
    <th>Name</th>   
	<th>Gender</th>
	<th>Contact</th>
    <th>Email</th>
	<th>Date</th>	
    <th>Address</th>
	
	</tr>
	  
	  <?php
	  $qry="select * from appointment";
	  $res=mysqli_query($conn,$qry);
	  
	  while($row=mysqli_fetch_assoc($res))
	  {
		  $index1='name';		 
		  $index2='gender';
          $index3='contact';
		  $index4='email';
		  $index5='date';
		 
		  $index6='address';
		 
	

echo "<tr align=center>";
		  echo "<td align=center>$row[$index1]</td>";
		  echo "<td align=center>$row[$index2]</td>";
		  echo "<td align=center>$row[$index3]</td>";
		  echo "<td align=center>$row[$index4]</td>";
		  echo "<td align=center>$row[$index5]</td>";
		  echo "<td align=center>$row[$index6]</td>";
		 

		  echo "</tr>";
	
	
	     /* echo "<tr align=center>";
		  echo "<td style=color:#a9214e;font-size:20px;width:30%;>$row[$index1]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:10%;>$row[$index2]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:20%;>$row[$index3]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:10%;>$row[$index4]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:60%;>$row[$index5]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:30%;>$row[$index6]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:30%;>$row[$index7]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:60%;>$row[$index8]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:60%;>$row[$index9]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:100%;>$row[$index10]</td>";

		  echo "</tr>";
		  */
	  }
	  
	  ?>
</table>
  </div>
</body>
</html>
<?php
include_once("afoot.html");
?>