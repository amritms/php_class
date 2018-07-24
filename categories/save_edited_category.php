<?php include_once('../includes/header.php');?>
<?php include('./category.php');?>

<?php
	
	// save edited user

 if(isset($_POST)){

 	         include "../menu.php";
			
			$category = new Category();
			$result = $category->saveCategory();
		
			 
		}
		?>
