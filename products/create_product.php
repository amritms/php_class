<?php
include('../includes/header.php'); 
include($app_path. 'products/product.php');
include($app_path. 'categories/category.php')?>


<?php include ('../menu.php'); 
$product = new Product(); 
$product->createProduct();


	$category = new Category();
    $categories = $category->getCategories();
    //var_dump($categories);
			
	?>




<div class="container">
	<h1 class="text-center">Create product</h1>
	<form action = 'create_product.php' method="POST">
		
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div><br>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="text" name="price" class="form-control">
		</div><br>
		<div class="form-group">
			<label for = "category">Category</label>
			
			<Select name = 'category'>
			<Option selected> Choose the category </option>
						
			<?php foreach($categories as $category){ ?>
			<option value = '<?php echo $category['id'];?>'>
				<?php echo $category['name'];}?>
			</option>
			</select><br>

		<div>
			<input type="submit" name="submit" class="btn btn-primary" value="Save">
		</div>
	</form>
</div>

<?php include('../includes/footer.php'); ?>


