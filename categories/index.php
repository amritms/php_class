<?php
include('menu.php');

// 1. database connection [config.php, and it is used by functions in functions.php]
 include('function.php');

// header
 include('includes/header.php');

// 2. fetch all users
 $categories = getCategory();


// 3. display product in table
?>
<?php 
if(isset($_SESSION['message'])){
	echo $_SESSION['message'];
	unset($_SESSION['message']);
}
?>
<table border="1" class = "table">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Actions</th>
	</tr>
	<tr>
		<?php
		foreach($categories as $category){ ?>
			<td><?php echo $category['id']; ?></td>
			<td><?php echo $category['name']; ?></td>
			
			
			<td>

				<a href="edit_category.php?id=<?php echo $category['id'];?>">Edit</a> |
				<a href="delete_category.php?id=<?php echo $category['id'];?>">Delete</a> 

			</td>
</tr>
		<?php }
		?>
	
</table>
<?php


//footer
include('includes/footer.php');