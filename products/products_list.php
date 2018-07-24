<?php
require_once('../includes/header.php');
include_once('../menu.php');

// 1. database connection [config.php, and it is used by functions in functions.php]
 include_once($app_path. 'products/product.php');
  include_once($app_path. 'categories/category.php');
  include_once($app_path. 'users/user.php');




$product = new Product();  //table ra model ko nam same  hunxa
$products = $product->getProducts(); 

$category = new Category();
$categories = $category->getCategoriesArray();

$user = new User();
$users = $user->getUsersArray();


// $students = [
// 	2 => 'ram',
//  4 =>  'hari',
//  5 => 'shyam',
// ];
// var_dump($students[5]);die;



		?>
<?php 
if(isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset($_SESSION['message']);
}
?>

<h2>Products List 
<a href="create_product.php" class="btn btn-primary"> Add Product </a>
</h2>
<table  class = "table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
        <th>Category</th>
        <th>User</th>
		<th>Actions</th>
		
	</tr>
	<tr>
		<?php
		foreach($products as $product){ ?>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $categories[$product['category']]; ?></td>
			<td><?php echo $users[$product['user_id']]; ?></td>

			
			<td>
				<?php if($_SESSION['user_id'] == $product['user_id']) { ?>
				<a href="<?=$base_url;?>/products/edit_product.php?id=<?php echo $product['id'];?>" class="btn btn-primary">Edit</a> 
				<a href="<?=$base_url;?>/products/delete_product.php?id=<?php echo $product['id'];?>" onClick="return confirm('Are you sure you want to delete this record?')" class="btn btn-danger">Delete</a>
			<?php } ?>
			</td>
</tr>
		<?php }
		?>
	
</table>











