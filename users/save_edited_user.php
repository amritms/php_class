<?php include('../includes/header.php');?>
<?php include($app_path . 'users/user.php');?>


<?php
		// save edited product

 if(isset($_POST)){

 	         include "../menu.php";
	
 	         $user = new User();
			 $result = $user->saveUser();
			 
		}
		?>
