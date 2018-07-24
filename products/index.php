<?php
include('menu.php');

// 1. database connection [config.php, and it is used by functions in functions.php]
 include('function.php');

// header
 include('includes/header.php');

// 2. fetch all users
 $products = getProduct();


// 3. display product in table
?>

<table border="1" class = "table">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
        <th>Category</th>
		<th>Actions</th>
	</tr>
	<tr>
		<?php
		foreach($products as $product){ ?>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['category']; ?></td>
			
			<td>
				<a href="edit_product.php?id=<?php echo $product['id'];?>">Edit</a> |
				<a href="delete_product.php?id=<?php echo $product['id'];?>">Delete</a>
			</td>
</tr>
		<?php }
		?>
	
</table>
<?php


//footer
include('includes/footer.php');