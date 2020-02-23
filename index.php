<?php
	//start session
	session_start();

    // will direct this page to the main page, if the login was successful
	if(isset($_SESSION['user'])){
		header('location:main.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php
    if(isset($_SESSION['alert'])){
        ?>
            <div class="alert alert-info text-center">
                <?php echo $_SESSION['alert']; ?>
            </div>
        <?php

        unset($_SESSION['alert']);
    }
?>
				<a href="#" class="forgot">Forgot your email or password?</a>
		</form>
    </div>
</body>
</html>