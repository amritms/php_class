<?php
include_once('../includes/header.php');
include($app_path. 'products/product.php');
include($app_path. 'categories/category.php');

?>

<?php
	// check if product id exists, if not show error message.
	if(!isset($_GET['id'])){
		die('please click edit button from products list');
	}
	
    $product_id = $_GET['id'];     
	$product = new Product();  
	$products = $product->getProducts();

	$singleProduct = $product->getProduct($product_id);


	$category = new Category();
    $categories = $category->getCategories()
?>


	<form action="save_edited_product.php" method="POST">
<h2>Edit product for </h2>

		


<div>
	 <input type="hidden" name="product_id" value="<?php echo $product_id;?>">
		<label for="name">Name:</label>
		<input type="text" name="name" value="<?php echo $singleProduct['name'];?>">

</div>
<div>
		<label for="price">Price:</label>
		<input type="text" name="price" value="<?php echo $singleProduct['price'];?>">

</div>
				<div class="form-group">
			<label for = "category">Category</label>
			
					<Select name = 'category'>
					<option> Choose the category </option>
						
						<?php foreach($categories as $category){ ?>
						<option value = '<?php echo $category['id'];?>'
							<?php  //if($singleProduct['category'] == $category['id']){ echo 'selected';} ?>

							<?php echo ($singleProduct['category'] == $category['id']) ? 'selected' : ''; ?>

							>
							<?php echo $category['name'];}?>
						</option>
						</select><br>

		<input type="submit" name="submit" class="btn btn-primary" value="Save">
			</form>


<?php include('../includes/footer.php'); ?>