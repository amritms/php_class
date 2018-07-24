<?php

require_once '../includes/header.php';
include_once '../menu.php';


// 1. database connection [config.php, and it is used by functions in functions.php]
 include_once($app_path. 'users/user.php'); 





// 2. fetch all users
 $user = new User();  					//table ra model ko nam same  hunxa
 $users = $user->getUsers(); 

// 3. display users in table
?>
<?php 
if(isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset($_SESSION['message']);
}
?>
<h2>Users List 
<a href="create_user.php"> Add User </a>
</h2>
<table  class = "table table-bordered">
	<thead>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Status</th>
		<th>Actions</th>
		
	</tr>
</thead>
	<tr>
		<?php
		foreach($users as $user){ ?>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td>
				<?php if($user['status'] == 1)
					{ 
						echo 'Active'; 
					}else{
						echo 'Inactive';
					} 
				?>
			</td>
			<td>
				<a href="<?=$base_url;?>/users/edit_user.php?id=<?php echo $user['id'];?>">Edit</a> |
				<a href="<?=$base_url;?>/users/delete_user.php?id=<?php echo $user['id'];?>"  onClick="return confirm('Are you sure you want to delete this record?')">Delete</a>
			</td>
</tr>
		<?php }
		?>
	</table>
		

	


