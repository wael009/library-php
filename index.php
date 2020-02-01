<?php
// start session 
session_start();

// ------Do Not forget to add the alert here if the username or password was not correct -----------

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Copmatible" content="ie-edge">
	<title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	<link rel="stylesheet" href="stylesheet/style.css" />
</head>
<body>

	<div class="login-clean">
        <form action="login.php" method="POST">
            <h2 class="login-form">Log in to admin account</h2>
            <div class="form-group"><input class="form-control" type="text" name="user" placeholder="Username" autofocus required /></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password" required /></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Log in</button></div>

            </form>

    </div>

</body>
</html>