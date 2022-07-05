<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","rough");

	// echo "Welcome ";
	// echo $_SESSION['teacher_name'];
	// echo "<br>";

	if(isset($_POST['submit'])){		

		$topic = $_POST['topic'];

		$video = $_FILES['video']['name'];
  		$tmp_video = $_FILES['video']['tmp_name'];
		
		$pdf = $_FILES['pdf']['name'];
  		$tmp_pdf = $_FILES['pdf']['tmp_name'];

		$desc = $_POST['desc'];

		$pyqs = $_FILES['pyqs']['name'];
  		$tmp_pyqs = $_FILES['pyqs']['tmp_name'];

		$sub = $_SESSION['sub_name'];

		$sql = "insert into `$sub`(Topic,Video,Pdf,Description,PYQs) values ('$topic','$video','$pdf','$desc','$pyqs')";

		$res = mysqli_query($conn,$sql);

		if($res === true){
			echo "Video Uploaded";
			move_uploaded_file($tmp_video,"academy/$video");
			move_uploaded_file($tmp_pdf,"academy/$pdf");
			move_uploaded_file($tmp_pyqs,"academy/$pyqs");
		}
	}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Upload Subject</title>
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
		<h2 class="text-center">Subject :- <?php echo $_SESSION['sub_name']; ?> <a href="logout.php" class="btn btn-primary ml-5">Logout</a></h2>
		<form method="post" class="form form-group border border-dark rounded p-3" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>Topic</td>
				<td>:</td>
				<td><input type="text" name="topic"></td>
			</tr>
			<tr>
				<td>Video</td>
				<td>:</td>
				<td><input type="file" name="video"></td>
			</tr>
			<tr>
				<td>PDF</td>
				<td>:</td>
				<td><input type="file" name="pdf"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td>:</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr>
				<td>PYQs</td>
				<td>:</td>
				<td><input type="file" name="pyqs"></td>
			</tr>
		</table>
		<input type="submit" name="submit">
	</form>
	</div>

</body>
</html>