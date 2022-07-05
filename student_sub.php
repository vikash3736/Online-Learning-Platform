<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	$sub = $_SESSION['sub_name'];

	$result = mysqli_query($conn,"SELECT * FROM `$sub`");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Fetch</title>
	<style type="text/css">
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;

		}

		tr:nth-child(even) {
		    background-color: white;
		}
	</style>
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

	<a href="logout.php" class="btn btn-primary ml-5 m-2">Logout</a>

	<?php
	if (mysqli_num_rows($result) > 0) {
	?>
	  <table>
	  
	  <tr class="bg-dark text-light">
	    <td><b>Topic</b></td>
	    <td><b>Video</b></td>
	    <td><b>PDF</b></td>
	    <td><b>Description</b></td>
	    <td><b>PYQs</b></td>
	  </tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr>
	    <td><?php echo $row["Topic"]; ?></td>

	    <td>
	    	<video width="320" height="240" controls>
			  <source src="academy/<?php echo $row["Video"]; ?>" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
	    </td>

	    

	    <td><embed type="application/pdf" src="academy/<?php echo $row["Pdf"]; ?>" width="210px" height="270px"></embed></td>

	    <td><?php echo $row["Description"]; ?></td>

	    <td><embed type="application/pdf" src="academy/<?php echo $row["PYQs"]; ?>" width="210px" height="270px"></embed></td>
	</tr>
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