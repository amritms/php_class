<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
    <link rel="stylesheet" href="assets/login.css">
	<link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
	<?php 
	$app_path = '/opt/lampp/htdocs/php_class_1/';
	$base_url = 'http://localhost/php_class_1';
    include $app_path. "config.php";

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        header('Location:' . $base_url);
    }
    ?>

<?php

    if(isset($_POST['login'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        include_once('./users/user.php');
        
        $user = new User(); 

        // check if credentials are valid
        if($loggedin_user = $user->check_login($username, $password)){
            header('Location:' . $base_url);
        }else{
            // show error if not valid
            echo 'username / password is incorrect.';
        }
        
    }

?>

  <body class="text-center">
    <form class="form-signin" action="login.php" method="POST">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="username" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</body>