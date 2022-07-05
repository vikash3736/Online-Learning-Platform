<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	if(isset($_POST['submit'])){

		$student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
		$branch = $_POST['branch'];
		$semester = $_POST['semester'];
		$project_name = $_POST['project_name'];

		$ppt = $_FILES['ppt']['name'];
  		$tmp_ppt = $_FILES['ppt']['tmp_name'];

  		$documentation = $_FILES['documentation']['name'];
  		$tmp_documentation = $_FILES['documentation']['tmp_name'];

  		$source_code = $_FILES['source_code']['name'];
  		$tmp_source_code = $_FILES['source_code']['tmp_name'];

		// echo $student_id;
		// echo $student_name;
		// echo $branch;
		// echo $semester;
		// echo $project_name;

		$sql = "INSERT INTO `student_projects`(`student_id`, `student_name`, `student_branch`, `student_sem`, `project_name`, `ppt`, `documentation`, `source_code`) VALUES ('$student_id','$student_name','$branch','$semester','$project_name','$ppt','$documentation','$source_code')";

		$res = mysqli_query($conn,$sql);

		if($res===true){
			echo "Project Uploaded";
			move_uploaded_file($tmp_ppt,"project/$ppt");
			move_uploaded_file($tmp_documentation,"project/$documentation");
			move_uploaded_file($tmp_source_code,"project/$source_code");
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Project</title>
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
	<div class="container">
		<h2 align="center">Add Projects</h2>
		<form method="post" class="form form-group" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td>Student ID</td>
					<td>:</td>
					<td><input type="text" name="student_id" placeholder="Enter Student ID"></td>
				</tr>
				<tr>
					<td>Student Name</td>
					<td>:</td>
					<td><input type="text" name="student_name" placeholder="Enter Student Name"></td>
				</tr>
				<tr>
					<td>Branch</td>
					<td>:</td>
					<td><input type="text" name="branch" placeholder="Enter Branch"></td>
				</tr>
				<tr>
					<td>Semester</td>
					<td>:</td>
					<td><input type="text" name="semester" placeholder="Enter Semester"></td>
				</tr>
				<tr>
					<td>Project Name</td>
					<td>:</td>
					<td><input type="text" name="project_name" placeholder="Enter Project Name"></td>
				</tr>
				<tr>
					<td>Import PPT</td>
					<td>:</td>
					<td><input type="file" name="ppt"></td>
				</tr>
				<tr>
					<td>Import Documentation</td>
					<td>:</td>
					<td><input type="file" name="documentation"></td>
				</tr>
				<tr>
					<td>Import Source Code</td>
					<td>:</td>
					<td><input type="file" name="source_code"></td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Upload" class="btn btn-primary">
		</form>
	</div>

</body>
</html>