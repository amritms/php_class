<?php include_once('../includes/header.php');?>
<?php include($app_path. 'products/product.php');?>

<?php
	
	// save edited user

 if(isset($_POST)){

 	         include "../menu.php";
	
			 $product = new Product();
			 $result = $product->saveProduct();			 
		}
		?>
