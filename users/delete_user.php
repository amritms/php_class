<?php include_once '../includes/header.php';?>
<?php include_once ($app_path . 'users/user.php'); ?>
<?php include "../menu.php";?>


<?php
 if(!isset($_GET['id'])){
     echo 'cannot find user.'
     	;
     	}

	$user = new User();
	//$users = $deleteUsers($id);

	$user_id = $_GET['id'];
	$result = $user->deleteUsers($user_id);


	
?>

	
