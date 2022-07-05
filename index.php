<?php 
	
	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	if(isset($_POST['t_login'])) {
		$t_id = $_POST['t_id'];
		$t_pass = $_POST['t_pass'];

		$user = "teacher";

		$sql = "select * from teacher_details where teacher_id='$t_id' and teacher_password='$t_pass'";

		$res = mysqli_query($conn,$sql);

		$count = mysqli_num_rows($res);
		if($count){
			// echo "welcome";

		$row_teacher = mysqli_fetch_array($res);
		$teacher_name = $row_teacher['teacher_name'];
		echo $teacher_name;

		echo "<script>window.open('branch.php','_self');</script>";

		$_SESSION['teacher_name'] = $teacher_name;
		$_SESSION['user'] = $user;
	}

	}

	if (isset($_POST['s_login'])) {
		$s_id = $_POST['s_id'];
		$s_pass = $_POST['s_pass'];

		$user = "student";

		$sql = "select * from student_details where student_id='$s_id' and student_password='$s_pass'";

		$res = mysqli_query($conn,$sql);

		$count = mysqli_num_rows($res);
		if($count){
			// echo "welcome";

		$row_student = mysqli_fetch_array($res);
		$student_name = $row_student['student_name'];
		echo $student_name;

		echo "<script>window.open('branch.php','_self');</script>";

		$_SESSION['student_name'] = $student_name;
		$_SESSION['user'] = $user;
	}

	}

	if (isset($_POST['admin'])) {
		$admin_id = $_POST['adm_id'];
		$admin_pass = $_POST['adm_pass'];

		$user = "admin";

		$sql = "SELECT * FROM `admin_details` WHERE admin_id='$admin_id' and admin_password='$admin_pass'";

		$res = mysqli_query($conn,$sql);

		// $row_student = mysqli_fetch_array($res);
		// $student_name = $row_student['student_name'];
		// echo $student_name;
		$count = mysqli_num_rows($res);
		if($count){
			// echo "welcome";

		echo "<script>window.open('admin.php','_self');</script>";
	}

		// if($res===true){
		// 	echo "<script>window.open('admin.php','_self');</script>";
		// }

		// $_SESSION['student_name'] = $teacher_name;
		$_SESSION['user'] = $user;

	}

	if(isset($_POST['add_project'])) {
		echo "<script>window.open('add_project.php','_self');</script>";
	}

	if (isset($_POST['view_project'])) {
		echo "<script>window.open('view_project.php','_self');</script>";
	}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FAV ICON -->
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="logo4.png">
    <link rel="shortcut icon" type="image/png" sizes="96x96" href="logo4.png">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="logo4.png">
    <!-- 00000000000000000000000000000000000000000 -->
    <title>Home Page</title>
   <!--  <script>
        alert("hover over buttons to see different fill effects. Hover for longer time to see fill color changing");
    </script>   -->
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bodyArea">
    <img class="logoImg" src="logo4.png" alt="logo">
    <h1 class="mainTitle">Online Learning Platform <a href="view_achiever.php" class="ml-3 btn btn-primary">Our Achievers</a></h1>
    <div class="blurred-wrapper container">
        <div class="row">
        	<div class="col-sm-6 middle py-4">
        		<div class="card1">
	                <h2 class="title">Teachers' Login</h2>
	                <!-- <a href="#" class="btn_btn btn1">Teacher</a> -->
	                <form method="post" class="form form-group">
	                	<table class="table">
	                		<tr>
	                			<td class="text-light" style="font-weight: bold;">Teacher ID</td>
	                			<td>:</td>
	                			<td><input type="text" class="border border-warning rounded" name="t_id"></td>
	                		</tr>
	                		<tr>
	                			<td class="text-light" style="font-weight: bold;">Teacher Password</td>
	                			<td>:</td>
	                			<td><input type="password" class="border border-warning rounded" name="t_pass"></td>
	                		</tr>
	                	</table>
	                	<input type="submit" name="t_login" class="btn_btn btn1 bg-dark" value="Teacher">
	                </form>
	            </div>
	        </div>
	        <div class="col-sm-6 middle py-4">
	            <div class="card1">
	                <h2 class="title">Student Login</h2>
	                <!-- <a href="#" class="btn_btn btn2">Student</a> -->
	                <form method="post" class="form form-group">
	                	<table class="table">
	                		<tr>
	                			<td class="text-light" style="font-weight: bold;">Student ID</td>
	                			<td>:</td>
	                			<td><input type="text" class="border border-warning rounded" name="s_id"></td>
	                		</tr>
	                		<tr>
	                			<td class="text-light" style="font-weight: bold;">Student Password</td>
	                			<td>:</td>
	                			<td><input type="password" class="border border-warning rounded" name="s_pass"></td>
	                		</tr>
	                	</table>
	                	<input type="submit" name="s_login" class="btn_btn btn1 bg-dark" value="Student">
	                </form>
	            </div>
	        </div>
        </div>
        <div class="row">
        	<div class="col-sm-6 middle py-4">
	            <div class="card1">
	                <h2 class="title">Admin Login</h2>
	                <!-- <a href="#" class="btn_btn btn3">Admin</a> -->
	                <form method="post" class="form form-group">
	                	<table class="table">
	                		<tr>
	                			<td class="text-light" style="font-weight: bold;">Admin ID</td>
	                			<td>:</td>
	                			<td><input type="text" class="border border-warning rounded" name="adm_id"></td>
	                		</tr>
	                		<tr>
	                			<td class="text-light" style="font-weight: bold;">Admin Password</td>
	                			<td>:</td>
	                			<td><input type="password" class="border border-warning rounded" class="bg-light" name="adm_pass"></td>
	                		</tr>
	                	</table>
	                	<input type="submit" name="admin" class="btn_btn btn1 bg-dark" value="Admin">
	                </form>
	            </div>
	        </div>
	        <div class="col-sm-6 middle py-4">
	            <div class="card1">
	                <h2 class="title">Student Project Section</h2>
	                <!-- <a href="#" class="btn_btn btn4">Projects</a> -->
	                <form method="post">
	                	<input type="submit" name="add_project" class="btn_btn btn1 bg-dark" value="Add Project">
	                	<br>
	                	<input type="submit" name="view_project" class="btn_btn btn1 bg-dark" value="View Project">
	                </form>
	            </div>
        	</div>
        </div>
    </div>
</body>

</html>
