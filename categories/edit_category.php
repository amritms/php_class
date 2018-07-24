<?php include_once('../includes/header.php');?>
<?php include('./category.php');?>

<?php
	// check if product id exists, if not show error message.
	if(!isset($_GET['id'])){
		die('please click edit button from categories list');
	}

	$category_id = $_GET['id'];
    $category = new Category();
	$categories = $category->getCategories();

	$singleCategory = $category->getCategory($category_id);
	
	

	// show edit form of the product.
?>

	<form action="save_edited_category.php" method="POST">
<h2>Edit category for </h2>

		

<div>
	   <input type="hidden" name="category_id" value="<?php echo $category_id;?>">
		<label for="name">Name:</label>
		<input type="text" name="name" value="<?php echo $singleCategory['name'];?>">

</div>




		<input type="submit" name="submit" class="btn btn-primary" value="Save">

	</form>


<?php include('../includes/footer.php'); ?>