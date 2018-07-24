<?php include('../includes/header.php'); ?>
<?php include_once($app_path. 'categories/category.php'); ?>

<?php include ('../menu.php');

$category = new Category();
$category->createCategory();


?>


<div class="container">
	<h1 class="text-center">Create category</h1>
	<form action = 'create_category.php' method="POST">
		
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div><br>
		
		
		<div>
			<input type="submit" name="submit" class="btn btn-primary" value="Save">
		</div>

		

	</form>
</div>

<?php include('../includes/footer.php'); ?>