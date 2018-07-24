<?php 
include('../includes/header.php');


include_once($app_path. 'users/user.php'); 

include('../menu.php');


$user = new User(); 
$user->createUser();

?>



<div class="container">
	<h1 class="text-center">Create user</h1>
	<form action = 'create_user.php' method="POST" ">
		<div class="form-group>
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control">
		</div>
		<div class="form-group>
			<label for = "password">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div>
			<input type="submit" name="submit" class="btn btn-primary" value="Save">
		</div>
	</form>
</div>
	

<?php include('../includes/footer.php'); ?>