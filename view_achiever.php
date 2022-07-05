<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	$result = mysqli_query($conn,"SELECT * FROM `achiever_details`");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Our Achievers</title>
	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	  <!-- <link href="/dist/output.css" rel="stylesheet"> -->
</head>
<body>

	<h2 align="center">Our Achievers</h2>

	<?php
	if (mysqli_num_rows($result) > 0) {
	?>
	  <table class="table">
	  
	  <tr class="bg-dark text-light">
	    <td><b>Achiever ID</b></td>
	    <td><b>Achiever Image</b></td>
	    <td><b>Achiever Name</b></td>
	    <td><b>Company Cracked</b></td>
	    <td><b>Strategy</b></td>
	    
	  </tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr>
	    <td><?php echo $row["achiever_id"]; ?></td>
	    <td><img src="upload/<?php echo $row['prof_img'];?>" height="140px" width="230px"></td>
	    <td><?php echo $row["achiever_name"]; ?></td>
	    <td><?php echo $row["company_cracked"]; ?></td>
	    <td><?php echo $row["strategy"]; ?></td>
	    
	<?php
	$i++;
	}
	?>
	</table>
	 <?php
	}
	else{
	    echo "No result found";
	}
	?>




</body>
</html>