<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<title>add book...</title>
</head>
<style type="text/css">
	*{
		text-transform: capitalize;
	}
	h1{
		text-align: center;
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
	<form action="add_book_check.php " method="POST">
        <div class="container w-75 bg-light my-5 rounded">
        	<h1>fill book informantion</h1>
            <div class="row">
               <div class="col">
                <input type="text" class="form-control m-2" placeholder="Enter book id" id="email" name="id">
                <input type="text" class="form-control m-2" placeholder="Enter book name" id="email" name="name">
             </div>
             <div class="col">
                 <input type="text" class="form-control m-2" placeholder="Enter book code" id="email" name="code">
                 <input type="text" class="form-control m-1 mx-2" placeholder="Enter book author" id="email" name="author">
               </div>
              
               <button type="submit" name="submit" class="btn btn-primary w-100 m-2 mx-1">add book</button>
            <div>
            	<hr>
            	<p>if you don't need it ? <a href="dashboard.php">  back to home</a></p>
            </div>
        </div>
    </form>

</body>
</html>