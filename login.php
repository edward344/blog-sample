<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Sign in</title>
    
  <style>
    .login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
  </style>
  </head>
  <body>
  
  <?php
  
    if (isset($_GET["message"]))
    {
        if ($_GET["message"] == "wrong-password")
        {
            echo '<div class="alert alert-danger">';
            echo 'You entered the wrong password.';
            echo '</div>';
        }
        else if ($_GET["message"] == "wrong-user")
        {
            echo '<div class="alert alert-danger">';
            echo 'You entered the wrong username.';
            echo '</div>';
        }
    }
  
  ?>
  
	<div class="login-form">
        <form action="sign_in.php" method="post">
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
                
        </form>
        <p class="text-center"><a href="sign_up.php">Create an Account</a></p>
    </div>
    
    <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>