<?php include_once('../includes/header.php');?>
<?php include($app_path . 'users/user.php');?>
<?php
	
	
	// check if user id exists, if not show error message.
	if(!isset($_GET['id'])){
		die('please click edit button from users list');
	}

	$user_id = $_GET['id'];     
	$user = new User();  
	$users = $user->getUsers();

	$singleUser = $user->getUser($user_id);


	





	//fetch user with the user id;
	//$user = getUser($user_id);
	

	// show edit form of the user.


?>

	<form action="save_edited_user.php" method="POST">
<h2>Edit user for </h2>
<div>
		<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
		<label for="username">Username:</label>
		<input type="text" name="username" value="<?php echo $singleUser['username'];?>">
		
</div>

<div>
	
		<label for="password">Password:</label>
		<input type="text" name="password" value="<?php echo $singleUser['password'];?>">

</div>

		<input type="submit" name="submit" class="btn btn-primary" value="Save">
	</form>


<?php include('../includes/footer.php'); ?>