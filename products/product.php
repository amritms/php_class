<?php


class Product{
 	public $connection;
 	public $base_url;
 	function __construct(){
 		
 		$config = new config('root', '', 'php_class_database');
 		$this->connection = $config->db_connect();
 		$this->base_url = 'http://localhost/php_class_1';

 	}
	

function createProduct() {
	if(isset($_POST['submit'])){
	
		
		
		$name = $_POST['name'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$user_id = $_SESSION['user_id'];

		$query = "INSERT INTO products(name,price,category, user_id) ";
		$query .= "VALUES ('$name','$price', '$category', $user_id)";

		$result = mysqli_query($this->connection, $query);

		if(!$result){
			die('query failed'. mysqli_error($this->connection));
		}else{
			$_SESSION['message'] = 'product created.';
			header('Location:' . $this->base_url . '/products/products_list.php');
		}
	}
}


function getProducts(){

		
		$query = "SELECT * FROM products";

		$result = mysqli_query($this->connection, $query);

		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $products;
	}

	function getProduct($id){

		$query = "SELECT * FROM products where id=$id";
		
		$result = mysqli_query($this->connection, $query);
		$product = mysqli_fetch_assoc($result);

		return $product;
	}
	

	
	function saveProduct(){
		//$connection = db_connect();
		if(isset($_POST['submit'])){
		$product_id = $_POST['product_id'];

			$name = $_POST['name'];
			$price = $_POST['price'];
			$category = $_POST['category'];

			$query = "UPDATE products SET name='$name' , price='$price', category='$category' WHERE id='$product_id'";
			

		$result = mysqli_query($this->connection, $query);
		if(!$result){
		//$connection = db_connect();
		die('query failed'. mysqli_error($this->connection));
			}else{
				$_SESSION['message'] = 'product saved.';
			header('Location:' . $this->base_url . '/products/products_list.php');
			}
	
	}
}
	function deleteProduct($id){
		//$connection = db_connect();
		$query = "DELETE  FROM products where id =$id";
		

		 $result = mysqli_query($this->connection, $query);

	if(!$result){
		//$connection = db_connect();
		die('query failed'. mysqli_error($this->connection));
			}else{
				$_SESSION['message'] = 'product deleted.';
			header('Location:' . $this->base_url . '/products/products_list.php');
			}
		}
	}
	?>