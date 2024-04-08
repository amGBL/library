<?php
include 'conn.php';
session_start();
error_reporting(0);
$sql = "SELECT * FROM remain_book";
$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-6/css/all.css">
	<link rel="stylesheet" type="text/css" href="borrower.css">
	<title>remained_book...</title>
</head>
<body>
	<div id="min"> 
 		<ul>
 			<a href="dashboard.php">home</a>
 			<a href="borrower.php"> borrower</a>
 			<a href="book_view.php"> books</a>
 			<a href="remained_book.php"> remained books</a>
 			<a href="logout.php"><i class="fas fa-sign-out"></i>   logout</a>
 		</ul>
 	</div>
	<div id="Search">
		<i class="fas fa-search" style="margin-left: 40px;"></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for books Id.." title="Type in a name">
	</div>
	<table id="myTable">
		<tr class="header">
			<th>book_id</th>
			<th>book_name</th>
			<th>book_code</th>
			<th>returned_date</th>
			<th colspan="2" style="text-align: center;">operation</th>
		</tr>
		<?php
		while ($row = mysqli_fetch_array($res)) {
		?>
		<tr>
			<td><?php echo $row['book_id']; ?></td>
			<td><?php echo $row['book_name']; ?></td>
			<td><?php echo $row['book_code']; ?></td>
			<td><?php echo $row['returned_date']; ?></td>
			<td>
				<div class="main">
					<button class="action" style="background: blue;">
						<a href="manage_returned.php?book_id=<?php echo $row['book_id']; ?>">manage</a>
					</button>
				</div>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
<?php
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$qry = "SELECT * FROM books WHERE book_id  = '$id'";
	$vibe = mysqli_query($conn,$qry);
	$run = mysqli_fetch_array($vibe);
	// $book_name = $run['book_name'];
	// $book_code = $run['book_code'];
 $_SESSION['id'] = $run['book_id'];
	$_SESSION['name'] = $run['book_name'];
	 $_SESSION['code'] = $run['book_code'];
	 $book_name = $_SESSION['name'];
	 $book_code = $_SESSION['code'];
	
	$date = date('y-m-d');
	
	$sql2 = "INSERT INTO remain_book (book_name,book_code,returned_date)VALUES ('$book_name','$book_code','$date')";
	$res2 = mysqli_query($conn,$sql2);
	if ($res2) {

	$sql1 = "DELETE FROM borrower WHERE book_id = '$id'";
	$res1 = mysqli_query($conn,$sql1);
	}
}
?>
</html>