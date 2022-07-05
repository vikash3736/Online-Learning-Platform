<?php 

	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	if(isset($_POST['s1'])) {
		$semester = "semester_1";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_1.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_1.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_1.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_1.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_1.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}

	if(isset($_POST['s2'])) {
		$semester = "semester_2";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_2.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_2.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_2.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_2.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_2.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}
	if(isset($_POST['s3'])) {
		$semester = "semester_3";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_3.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_3.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_3.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_3.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_3.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}
	if(isset($_POST['s4'])) {
		$semester = "semester_4";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_4.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_4.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_4.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_4.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_4.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}
	if(isset($_POST['s5'])) {
		$semester = "semester_5";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_5.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_5.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_5.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_5.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_5.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}
	if(isset($_POST['s6'])) {
		$semester = "semester_6";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_6.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_6.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_6.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_6.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_6.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}
	if(isset($_POST['s7'])) {
		$semester = "semester_7";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_7.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_7.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_7.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_7.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_7.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}
	if(isset($_POST['s8'])) {
		$semester = "semester_8";
		if($_SESSION['branch_name']==="cse"){
			echo "<script>window.open('cse_8.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ce"){
			echo "<script>window.open('ce_8.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="me"){
			echo "<script>window.open('me_8.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="eee"){
			echo "<script>window.open('eee_8.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
		if($_SESSION['branch_name']==="ece"){
			echo "<script>window.open('ece_8.php','_self');</script>";
			// $_SESSION['branch_name'] = $branch_name;
		}
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Semester</title>
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
	<div class="container">
		<h2 class="text-center">Choose Semester <a href="logout.php" class="btn btn-warning ml-5">Logout</a></h2>
		<div class="border border-dark">
			<form method="post">
				<div class="row m-2 ">
					<div class="col-sm-3">
						<input type="submit" name="s1" class="btn btn-primary" value="SEMESTER 1">
					</div>
					<div class="col-sm-3">
						<input type="submit" name="s2" class="btn btn-primary" value="SEMESTER 2">
					</div>
					<div class="col-sm-3">
						<input type="submit" name="s3" class="btn btn-primary" value="SEMESTER 3">
					</div>
					<div class="col-sm-3">
						<input type="submit" name="s4" class="btn btn-primary" value="SEMESTER 4">
					</div>
				</div>
				<div class="row m-2">
					<div class="col-sm-3">
						<input type="submit" name="s5" class="btn btn-primary" value="SEMESTER 5">
					</div>
					<div class="col-sm-3">
						<input type="submit" name="s6" class="btn btn-primary" value="SEMESTER 6">
					</div>
					<div class="col-sm-3">
						<input type="submit" name="s7" class="btn btn-primary" value="SEMESTER 7">
					</div>
					<div class="col-sm-3">
						<input type="submit" name="s8" class="btn btn-primary" value="SEMESTER 8">
					</div>
				</div>
			</form>
		</div>
		
	</div>

</body>
</html>