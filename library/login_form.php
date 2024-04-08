<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="boot-5/css/bootstrap.min.css">
	<title>login...</title>
</head>
<style type="text/css">
	html,body{
		background: whitesmoke;
	}
</style>
<body>
	<form action="login_check.php " method="POST">
        <div class="container w-50 my-5 rounded">
        	<h1 class="text-center">login here!</h1>
            	<div class="form-group">
            		<input type="text" class="form-control m-2" name="username" placeholder="username.." required>
            		<input type="password" class="form-control m-2" name="password" placeholder="password.." required>
            	</div>
            <button type="submit" name="submit" class="btn btn-primary w-100 m-2 mx-1">login</button>
        </div>
    </form>


</body>
</html>