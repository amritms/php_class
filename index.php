<?php
include('includes/header.php');

include('menu.php');

//database connection [config.php, and it is used by functions in functions.php]

$configuration = new config('root', '', 'php_class_database');
$conn = $configuration->db_connect();
echo'<br>';


	$usercount = mysqli_query($conn, 'SELECT * FROM users') or die('the query failed.');
	$count = mysqli_num_rows($usercount);
	echo'users:' .$count; 
	echo '<br>';

	$productcount = mysqli_query($conn, 'SELECT * FROM products') or die('the query failed.');
	$count = mysqli_num_rows($productcount);
	echo'products:' .$count;
	echo '<br>';
 

	$categorycount = mysqli_query($conn, 'SELECT * FROM categories') or die('the query failed.');
	$count = mysqli_num_rows($categorycount);
	echo'categories:' .$count;


	// header
 //include('users/users_list.php');

 //include('products/products_list.php');

 //include('categories/categories_list.php');

 



//footer
include('includes/footer.php');