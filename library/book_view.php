<?php
include 'conn.php';
$sql = "SELECT * FROM books";
$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-6/css/all.css">
	<link rel="stylesheet" type="text/css" href="borrower.css">
	<title>books...</title>
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
		<button><a href="add_book.php">+ add books</a></button>
		<i class="fas fa-search" ></i><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for books Id.." title="Type in a name">
	</div>
	<table id="myTable" style="width:97%;margin-left:4px ">
		<tr class="header">
			<th>book_id</th>
			<th>book_name</th>
			<th>book_code</th>
			<th>book_author</th>
			<th colspan="2" style="text-align: center;">operation</th>
		</tr>
		<?php
		while ($row = mysqli_fetch_array($res)) {
		?>
		<tr>
			<td><?php echo $row['book_id']; ?></td>
			<td><?php echo $row['book_name']; ?></td>
			<td><?php echo $row['book_code']; ?></td>
			<td><?php echo $row['book_author']; ?></td>
			<td>
				<div class="main">
					<button class="action" style="background: blue;">
						<a href="manage_book.php?book_id=<?php echo $row['book_id']; ?>">manage</a>
					</button>
				    <button class="action" style="background: red;">
				    	<a href="remove_book.php?book_id=<?php echo $row['book_id']; ?>">remove</a>
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