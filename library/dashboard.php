<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<link rel="stylesheet" href="font-6/css/all.css">
	<!-- <link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css"> -->
	<title>dashboard...</title>
</head>
<style type="text/css">
	.content{
		justify-content: space-between;
	}
</style>
<body>
	<h1 class="head">library management system</h1>
 	<div class="min"> 
 		<ul>
 			<li><a href="dashboard.php"><i class="fas fa-home"></i>home</a></li>
 			<li><a href="borrower.php"><i class="fas fa-exchange"></i>  borrower</a></li>
 			<li><a href="book_view.php"><i class="fas fa-book"></i>  books</a></li>
 			<li><a href="remained_book.php"><i class="fas fa-book-open"></i>  remained books</a></li>
 			<li><a href="logout.php"><i class="fas fa-sign-out"></i>  logout</a></li>
 		</ul>
 	</div>
 	<div class="content" style="position: relative;">
 		<div class="books">
 			<p><i class="fas fa-book"></i>  books</p>
 			<hr style="width:80%;margin: 0 auto;">
 			<p><?php
 				$sql = "SELECT count(book_id) AS total FROM books";
 				$res = mysqli_query($conn,$sql);
 				$row = mysqli_fetch_array($res);
 				$total = $row['total'];
 				echo $total; 
 				?></p>
 		</div>
 		<div class="borrower">
 			<p><i class="fas fa-exchange"></i>  borrower</p>
 			<hr style="width:80%;margin: 0 auto;">
 			<p>
 				<?php
 				$sql = "SELECT count(borrower_id) AS total FROM borrower";
 				$res = mysqli_query($conn,$sql);
 				$row = mysqli_fetch_array($res);
 				$total = $row['total'];
 				echo $total; 
 				?>
 			</p>
 		</div>
 		<div class="returned">
 			<p><i class="fas fa-book-open"></i>  remained books</p>
 			<hr style="width:80%;margin: 0 auto;">
 			<p>
 				<?php
 				$sql = "SELECT count(book_id) AS total FROM remain_book";
 				$res = mysqli_query($conn,$sql);
 				$row = mysqli_fetch_array($res);
 				$total = $row['total'];
 				echo $total; 
 				?>
 			</p>
 		</div>
</body>
</html>