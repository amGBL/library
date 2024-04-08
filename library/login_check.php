<?php
	include 'conn.php';
	if (isset($_POST['submit'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		$res = mysqli_query($conn,$sql);
		$num = mysqli_fetch_array($res);

		if ($num>=1) {
			header('location:dashboard.php');
		}else{
			header('location:login_form.php');
		}
	}
?>