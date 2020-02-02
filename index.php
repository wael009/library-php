<?php
// start session 
session_start();

// ------Do Not forget to add the alert here if the username or password was not correct -----------
include 'header.php';
?>
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