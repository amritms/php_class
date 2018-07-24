<?php
require_once('../includes/header.php');
include_once('../menu.php');

// 1. database connection [config.php, and it is used by functions in functions.php]
 include_once($app_path. 'categories/category.php');





 $category = new Category();
 $categories = $category->getCategories();
  

?>
<?php 
if(isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset($_SESSION['message']);
}
?>
<h2>Categories List 
<a href="create_category.php"> Add category</a>
 </h2>
<table  class = "table table-bordered">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Status</th>
		<th>Actions</th>
		
	</tr>
	<tr>
		<?php
		foreach($categories as $category){ ?>
			<td><?php echo $category['id']; ?></td>
			<td><?php echo $category['name']; ?></td>
			<td>
				<?php if($category['status'] == 1)
					{ 
						echo 'Active'; 
					}else{
						echo 'Inactive';
					} 
				?>
			</td>
			
			<td>
				
				
				<a href="<?=$base_url;?>/categories/edit_category.php?id=<?php echo $category['id'];?>">Edit</a> |
				<a href="<?=$base_url;?>/categories/delete_category.php?id=<?php echo $category['id'];?>"  onClick="return confirm('Are you sure you want to delete this record?')">Delete</a>
			</td>
</tr>
		<?php }
		?>
	
</table>