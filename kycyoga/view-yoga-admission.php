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
<h2>View Admission:</h2>
<table border="2" width="100%" height="1%" cellpadding="20px" > 
<tr>
    <th>Name</th>   
	<th>DOB</th>
	<th>Gender</th>
	<th>Package</th>
	<th>Batch</th>
	<th>Fee</th>
	<th>Address</th>
    <th>Contact</th>
	<th>DOJ</th>	
    
	
	</tr>
	  
	  <?php
	  $qry="select * from yogaadmission";
	  $res=mysqli_query($conn,$qry);
	
	  while($row=mysqli_fetch_assoc($res))
	  {
		
		  $index1='name';		 
		  $index2='DOB';
          $index3='Gender';
		  $index4='Package';
		  $index5='Batch';		 
		  $index6='Fee';
		  $index7='Address';
		  $index8='contact';
		  $index9='DOJ';
		 
	

echo "<tr align=center>";
		  echo "<td align=center>$row[$index1]</td>";		  
		  echo "<td align=center>$row[$index2]</td>";
		  echo "<td align=center>$row[$index3]</td>";
		  echo "<td align=center>$row[$index4]</td>";
		  echo "<td align=center>$row[$index5]</td>";
		  echo "<td align=center>$row[$index6]</td>";
		  echo "<td align=center>$row[$index7]</td>";
		  echo "<td align=center>$row[$index8]</td>";
		  echo "<td align=center>$row[$index9]</td>";
		  echo "</tr>";
	
	  }
	  
	  ?>
</table>
  </div>
</body>
</html>
<?php
include_once("afoot.html");
?>