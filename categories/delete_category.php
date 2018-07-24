<?php include_once '../includes/header.php';?>
<?php include_once ($app_path . 'categories/category.php'); ?>
<?php include "../menu.php";?>


<?php
 if(!isset($_GET['id'])){
     echo 'cannot find category.'
     	;
     	}

    $category = new Category(); 
	$category_id = $_GET['id'];
	$result = $category->deleteCategory($category_id);

	
?>

 