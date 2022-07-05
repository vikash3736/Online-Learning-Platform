<?php 
	
	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	if (isset($_POST['t_login'])) {
		$t_id = $_POST['t_id'];
		$t_pass = $_POST['t_pass'];

		$user = "teacher";

		$sql = "select * from teacher_details where teacher_id='$t_id' and teacher_password='$t_pass'";

		$res = mysqli_query($conn,$sql);

		$count = mysqli_num_rows($res);
		if($count){
			echo "hello";
			// $row_teacher = mysqli_fetch_array($res);
			// $teacher_name = $row_teacher['teacher_name'];
			// echo $teacher_name;

			// echo "<script>window.open('branch.php','_self');</script>";

			// $_SESSION['teacher_name'] = $teacher_name;
			// $_SESSION['user'] = $user;
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


		// if($res===true){
		// 	$row_student = mysqli_fetch_array($res);
		// 	$student_name = $row_student['student_name'];
		// 	echo $student_name;
		// 	echo "<script>window.open('branch.php','_self');</script>";
		// 	$_SESSION['student_name'] = $student_name;
		// 	$_SESSION['user'] = $user;
		// }

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<form method="post">
		<table>
			<tr>
				<td>Teacher ID</td>
				<td>:</td>
				<td><input type="text" name="t_id"></td>
			</tr>
			<tr>
				<td>Teacher Password</td>
				<td>:</td>
				<td><input type="text" name="t_pass"></td>
			</tr>
		</table>
		<input type="submit" name="t_login" value="Login">
	</form>

	<hr>

	<form method="post">
		<table>
			<tr>
				<td>Student ID</td>
				<td>:</td>
				<td><input type="text" name="s_id"></td>
			</tr>
			<tr>
				<td>Student Password</td>
				<td>:</td>
				<td><input type="text" name="s_pass"></td>
			</tr>
		</table>
		<input type="submit" name="s_login" value="Login">
	</form>

</body>
</html>