<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	if(isset($_POST['add_teacher'])){
		$teacher_id = $_POST['teacher_id'];
		$teacher_name = $_POST['teacher_name'];
		$teacher_password = $_POST['teacher_password'];

		$sql = "INSERT INTO `teacher_details`(`teacher_id`, `teacher_name`, `teacher_password`) VALUES ('$teacher_id','$teacher_name','$teacher_password')";

		$res = mysqli_query($conn,$sql);

		if($res===true){
			echo "Teacher Added";
		}
	}
	if(isset($_POST['delete_teacher'])){
		$teacher_id = $_POST['teacher_id'];

		$sql = "DELETE FROM `teacher_details` WHERE teacher_id='$teacher_id'";

		$res = mysqli_query($conn,$sql);

		if($res===true){
			echo "Teacher deleted";
		}
	}

	// Student

	if(isset($_POST['add_student'])){
		$student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
		$student_password = $_POST['student_password'];
		$student_branch = $_POST['student_branch'];
		$student_sem = $_POST['student_sem'];

		$sql = "INSERT INTO `student_details`(`student_id`, `student_name`, `student_password`, `student_branch`, `student_sem`) VALUES ('$student_id','$student_name','$student_password','$student_branch','$student_sem')";

		$res = mysqli_query($conn,$sql);

		if($res===true){
			echo "Student Added";
		}
	}
	if(isset($_POST['delete_student'])){
		$student_id = $_POST['student_id'];

		$sql = "DELETE FROM `student_details` WHERE student_id='$student_id'";

		$res = mysqli_query($conn,$sql);

		if($res===true){
			echo "Student deleted";
		}
	}

	// Achiever

	if(isset($_POST['add_achiever'])){
		$achiever_id = $_POST['achiever_id'];
		$achiever_name = $_POST['achiever_name'];
		$company_cracked = $_POST['company_cracked'];
		$strategy = $_POST['strategy'];

		// $student_password = $_POST['student_password'];
		// $student_branch = $_POST['student_branch'];
		// $student_sem = $_POST['student_sem'];

		$image = $_FILES['prof_img']['name'];
  		$tmp_name = $_FILES['prof_img']['tmp_name'];

		$sql = "INSERT INTO `achiever_details`(`achiever_id`, `prof_img`, `achiever_name`, `company_cracked`,`strategy`) VALUES ('$achiever_id','$image','$achiever_name','$company_cracked','$strategy')";

		$res = mysqli_query($conn,$sql);

		if($res===true){
			echo "Achiever Added";
			move_uploaded_file($tmp_name,"upload/$image");
		}
	}
	if(isset($_POST['delete_achiever'])){
		$achiever_id = $_POST['achiever_id'];

		$sql = "DELETE FROM `achiever_details` WHERE achiever_id='$achiever_id'";

		$res = mysqli_query($conn,$sql);

		if($res===true){
			echo "Achiever deleted";
		}
	}

?>





<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
		<h1 class="text-center">Admin Panel <a href="logout.php" class="btn btn-primary ml-5">Logout</a></h1>
		<div class="border border-dark p-3">
			<h2 class="text-center">Teacher Section</h2>
			<form method="post">
				<table class="table">
					<tr>
						<td>Teacher ID</td>
						<td>:</td>
						<td><input type="text" name="teacher_id" placeholder="Enter Teacher ID"></td>
					</tr>
					<tr>
						<td>Teacher Name</td>
						<td>:</td>
						<td><input type="text" name="teacher_name" placeholder="Enter Teacher Name"></td>
					</tr>
					<tr>
						<td>Teacher Password</td>
						<td>:</td>
						<td><input type="text" name="teacher_password" placeholder="Enter Teacher Password"></td>
					</tr>
				</table>
				<input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-primary">
			</form>
			<form method="post">
				<table class="table">
					<tr>
						<td>Teacher ID</td>
						<td>:</td>
						<td><input type="text" name="teacher_id" placeholder="Enter Teacher ID"></td>
					</tr>
				</table>
				<input type="submit" name="delete_teacher" value="Delete Teacher" class="btn btn-primary">
			</form>
		</div>
		<hr>

		<div class="border border-dark p-3">
			<h2 class="text-center">Student Section</h2>
			<form method="post">
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
						<td>Student Password</td>
						<td>:</td>
						<td><input type="text" name="student_password" placeholder="Enter Student Password"></td>
					</tr>
					<tr>
						<td>Branch</td>
						<td>:</td>
						<td><input type="text" name="student_branch" placeholder="Enter Branch"></td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>:</td>
						<td><input type="text" name="student_sem" placeholder="Enter Semester"></td>
					</tr>
				</table>
				<input type="submit" name="add_student" value="Add Student" class="btn btn-primary">
			</form>
			<form method="post">
				<table class="table">
					<tr>
						<td>Student ID</td>
						<td>:</td>
						<td><input type="text" name="student_id" placeholder="Enter Student ID"></td>
					</tr>
				</table>
				<input type="submit" name="delete_student" value="Delete Student" class="btn btn-primary">
			</form>
		</div>
		<hr>

		<div class="border border-dark p-3">
			<h2 class="text-center">Achiever's Section</h2>
			<form method="post" enctype="multipart/form-data">
				<table class="table">
					<tr>
						<td>Achiever ID</td>
						<td>:</td>
						<td><input type="text" name="achiever_id" placeholder="Enter Achiever ID"></td>
					</tr>
					<tr>
						<td>Profile Image</td>
						<td>:</td>
						<td><input type="file" name="prof_img"></td>
					</tr>
					<tr>
						<td>Achiever Name</td>
						<td>:</td>
						<td><input type="text" name="achiever_name" placeholder="Enter Achiever Name"></td>
					</tr>
					<tr>
						<td>Company Cracked</td>
						<td>:</td>
						<td><input type="text" name="company_cracked" placeholder="Enter Company Cracked"></td>
					</tr>
					<tr>
						<td>Strategy</td>
						<td>:</td>
						<td><input type="text" name="strategy" placeholder="Strategy"></td>
					</tr>
				</table>
				<input type="submit" name="add_achiever" value="Add Achiever" class="btn btn-primary">
			</form>
			<form method="post">
				<table class="table">
					<tr>
						<td>Achiever ID</td>
						<td>:</td>
						<td><input type="text" name="achiever_id" placeholder="Enter Teacher ID"></td>
					</tr>
				</table>
				<input type="submit" name="delete_achiever" value="Delete Achiever" class="btn btn-primary">
			</form>
		</div>
	</div>

</body>
</html>