<?php
	include 'conn.php';
	if (isset($_POST['submit'])) {
		$borrower_name = $_POST['name'];
		$borrower_location = $_POST['location'];
		$borrower_class = $_POST['class'];
		$borrower_level = $_POST['level'];
		$borrower_phone = $_POST['phone'];
		$id = $_POST['id'];

		$sql = "INSERT INTO borrower  VALUES ('','$borrower_name','$borrower_location','$borrower_phone','$borrower_class','$borrower_level','$id')";
		$res = mysqli_query($conn,$sql);

		if ($res) {
			header('location:borrower.php');
		}else{
			header('location:add_borrrower.php');
		}
	}
?>