<?php include_once '../includes/header.php';?>
<?php include_once ($app_path . 'products/product.php'); ?>
<?php include "../menu.php"

;?>

<?php
 if(!isset($_GET['id'])){
     echo 'cannot find product.'
     	;
     	}
   
    $product = new Product();
	$product_id = $_GET['id'];
	$result = $product->deleteProduct($product_id);

	

	
?>

	
