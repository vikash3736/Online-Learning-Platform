<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	// $sub = $_SESSION['sub_name'];

	$result = mysqli_query($conn,"SELECT * FROM `student_projects`");

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Project</title>
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
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<h2 align="center">Student Projects</h2>

	<?php
	if (mysqli_num_rows($result) > 0) {
	?>
	  <table>
	  
	  <tr class="bg-dark text-light">
	    <td><b>Student ID</b></td>
	    <td><b>Student Name</b></td>
	    <td><b>Branch</b></td>
	    <td><b>Semester</td>
	    <td><b>Project Name</b></td>
	    <td><b>PPT</b></td>
	    <td><b>Documentation</b></td>
	    <td><b>Source Code</b></td>
	  </tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr>
	    <td><?php echo $row["student_id"]; ?></td>
	    <td><?php echo $row["student_name"]; ?></td>
	    <td><?php echo $row["student_branch"]; ?></td>
	    <td><?php echo $row["student_sem"]; ?></td>
	    <td><?php echo $row["project_name"]; ?></td>
	    <td><embed type="application/pdf" src="project/<?php echo $row["ppt"]; ?>" width="210px" height="270px"></embed></td>
	    <td><embed type="application/pdf" src="project/<?php echo $row["documentation"]; ?>" width="210px" height="270px"></embed></td>
	    <td><embed type="application/pdf" src="project/<?php echo $row["source_code"]; ?>" width="210px" height="270px"></embed></td>
	    
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