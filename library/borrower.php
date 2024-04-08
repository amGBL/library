<?php
 include 'conn.php';
 session_start();
 $sql = "SELECT * FROM borrower";
 $res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-6/css/all.css">
	<link rel="stylesheet" type="text/css" href="borrower.css">
	<title>borrower...</title>
</head>
</style>
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
		<button><a href="add_borrower.php">+ add borrower</a></button>
		<i class="fas fa-search" ></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for borrower Id.." title="Type in a name">
	</div>
	<table id="myTable">
		<tr class="header">
			<th>borrower_id</th>
			<th>borrower_name</th>
			<th>borrower_location</th>
			<th>borrower_phone</th>
			<th>borrower_class</th>
			<th>borrower_level</th>
			<th>book_name</th>
			<th colspan="2" style="text-align: center;">operation</th>
		</tr>
		<?php
		while ($row = mysqli_fetch_array($res)) {			
				?>
		<tr>
			<td><?php echo $row['borrower_id']; ?></td>
			<td><?php echo $row['borrower_name']; ?></td>
			<td><?php echo $row['borrower_location']; ?></td>
			<td><?php echo $row['borrower_phone']; ?></td>
			<td><?php echo $row['borrower_class']; ?></td>
			<td><?php echo $row['borrower_level']; ?></td>

			<td><?php $id = $row['book_id'];
					$sql1 = "SELECT * FROM books WHERE book_id = '$id'";
					$resu1 = mysqli_query($conn,$sql1);
					$row1 = mysqli_fetch_array($resu1);
					echo  $row1['book_name'];
					// $book_id = $_SESSION['id'] = $row1['book_id'];
					// $book_name = $_SESSION['name'] = $row1['book_name'];
					// $book_code = $_SESSION['code'] = $row1['book_code'];
				 
		?>
		</td>
			<td>
				<div class="main">
					<button class="action" style="background: blue;">
						<a href="manage.php?borrower_id=<?php echo $row['borrower_id']; ?>">manage</a>
					</button>
				    <button class="action" style="background: red;">
				    	<a href="remained_book.php">return</a>
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
</html>