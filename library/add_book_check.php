<?php
include 'conn.php';
if (isset($_POST['submit'])) {
	$book_id = $_POST['id'];
	$book_name = $_POST['name'];
	$book_code = $_POST['code'];
	$book_author = $_POST['author'];

	$sql = "INSERT INTO books (book_id,book_name,book_code,book_author) VALUES ('$book_id','$book_name','$book_code','$book_author')";
	$res = mysqli_query($conn,$sql);

	if ($res) {
		header('location:book_view.php');
	}else{
		header('location:add_book.php');
	}
}
?>