
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Copmatible" content="ie-edge">
	<title>Login Page</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="Login-Form-Clean.css" />
  	<link rel="stylesheet" href="stylesheet/style.css" />
</head>
<body>

	<div class="login-clean">
        <form action="login.php" method="POST">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="user" placeholder="Username" autofocus required /></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password" required /></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Log In</button></div>
				<a href="#" class="forgot">Forgot your email or password?</a>
		</form>
    </div>

   


</body>
</html>