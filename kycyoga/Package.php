<?php
include_once("head.html");
include_once("connection.php");

?>
<html>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
}
</style>
<title>
KYC YOGA :: Official Website
</title>
</head>
<body>
<tr>
<th colspan ="5"><u><h1 style="color:#cc0000;">KYC Yogacharya :</h1></u></th>
</tr><hr>
<table style="color:#ff4500; font-size:25px;width:70%;">
  <tr>
    <th>Packege Name</th> 
    <th>Detail</th>	
	<th>Fee</th>
	  </tr>
	  
	  <?php
	  $qry="select * from package";
	  $res=mysqli_query($conn,$qry);
	  
	  while($row=mysqli_fetch_assoc($res))
	  {
		  $index1='package_name';
		  $index2='Material';
		  $index3='Fee';
		  echo "<tr align=center>";
		  echo "<td style=color:#a9214e;font-size:20px;width:50%;>$row[$index1]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:50%;>$row[$index2]</td>";
		  echo "<td style=color:#a9214e;font-size:20px;width:50%;>$row[$index3]</td>";
		  echo "</tr>";
		  
	  }
	  
	  ?>
</table>
<br>
</body>
</html>
<?php
include_once("foot.html");
?>