<?php

session_start();

$conn = mysqli_connect("localhost","root","","rough");

echo "<script>window.open('index.php','_self');</script>";

session_destroy();

?>