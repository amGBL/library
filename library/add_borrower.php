<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<title>add borrower...</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
	}
	h1{
		text-align: center;
	}
	.form-control{
		position: ;
	}
	p{
		text-align: center;
		padding: 10px;
		font-size: 15px;
		font-family: sans-serif;
	}
	p a{
		text-decoration: none;
	}
	.container{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
</style>
<body>
	<form action="borrower_check.php " method="POST">
        <div class="container w-75 bg-light my-5 rounded">
        	<h1>enter borrower informantion</h1>
            <div class="row">
               <div class="col">
                <input type="text" class="form-control m-2" placeholder="Enter borrower name" id="email" name="name">
                 <input type="text" class="form-control m-2" placeholder="Enter borrower location" id="email" name="location">
                 <input type="number" class="form-control m-1 mx-2" placeholder="Enter borrower phone" id="email" name="phone">
               </div>
               	
               <div class="col">
               	  <input type="text" class="form-control m-2" placeholder="Enter borrower class" id="email" name="class">
               	  <input type="text" class="form-control m-2" placeholder="Enter borrower level" id="email" name="level">
               	  <select class="form-control m-2" name="id">
                 	<option value="#">select book id</option>
                 	<?php
                 	include 'conn.php';
                 	$id = $row['book_id'];
                 	$sql = "SELECT book_id FROM books";
 						$res = mysqli_query($conn,$sql);
 						while ($row = mysqli_fetch_array($res)) {			
				      ?>
			         <option value="<?php echo $row['book_id']; ?>"><?php echo $row['book_id']; ?></option>
		            <?php
		         	 }
					  	?> 
                 </select>                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100 m-2 mx-1">Primary</button>
            <div>
            	<hr>
            	<p>if you don't need it ? <a href="dashboard.php">  back to home</a></p>
            </div>
        </div>
    </form>

</body>
</html>