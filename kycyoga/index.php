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
  <div class="column" style="background-color:#fff;width:70%">
    <h1 style="color:#cc0000;">KYC YOGA</h1>
    <p style="line-height:40px;text-align:justify;font-size:18px;">Welcome to“KYC YOGA". Yoga creates Balance of Body and Mind through exercises called POSTURES, breathing called PRANAYAM and meditation called DHYANA. Yoga had been deeply considered as spiritual practice, but since it has been accepted as a therapy and a means for healthy life, it is very important thatyou need an experienced teacher to guide you. 
	
	
<br>
That's why we made sure that in our studio, the instructors, nutritionists, coaches and psychologists should be experts and professionally trained. We teach Yoga right from the basic level to an advanced level. </p>
  </div>
  <div class="column" style="background-color:#bbb;width:30%">
    <h2 style="color:#cc0000;">News Update </h2>
	<hr>
	<marquee direction="up" scrollamount="3" height="200px;" onmouseover="stop();" onmouseout="start();">
    <?php
	  $qry="select * from news";
	  $res=mysqli_query($conn,$qry);
	  
	  while($row=mysqli_fetch_assoc($res))
	  {
		  $index1='headline';
		  $index2='description';
		  $index3='date';
		  echo "<tr align=center>";
		  echo "<td style=color:#a9214e;font-size:20px;width:50%;>$row[$index1]</td> ";
		  
		  echo "<td style=color:#a9214e;font-size:20px;width:50%;>$row[$index2]</td> ";
		 
		  echo "<td style=color:#a9214e;font-size:20px;width:50%;>$row[$index3]</td> ";
		  echo "</tr> <hr>";
		  
	  }
	  
	  ?>
	</marquee>
  </div>
</div>
<br>
<hr>
<h1 style="color:#cc0000;">Gallery</h1>
<hr>
<marquee direction="left" scrollamount="7" onmouseover="stop();" onmouseout="start();">
<img src="photos/p1.jpg" style="height:200px;width:300px">
<img src="photos/p2.jpg" style="height:200px;width:300px">
<img src="photos/p3.jpg" style="height:200px;width:300px">
<img src="photos/p4.jpg" style="height:200px;width:300px">
<img src="photos/p5.png" style="height:200px;width:300px">
<img src="photos/p6.jpg" style="height:200px;width:300px">
<img src="photos/p7.jpg" style="height:200px;width:300px">
</marquee>
</body>
</html>
<?php
include_once("foot.html");
?>