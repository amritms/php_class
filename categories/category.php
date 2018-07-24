<?php

class Category{
 	public $connection;
 	public $base_url;

 	function __construct(){
 		
 		$config = new config('root', '', 'php_class_database');
 		$this->connection = $config->db_connect();
 		$this->base_url = 'http://localhost/php_class_1';
 	}


function createCategory() {
	if(isset($_POST['submit'])){
		 //$connection = db_connect();
		
		
		$name = $_POST['name'];
		
		$query = "INSERT INTO categories(name) ";
		$query .= "VALUES ('$name')";

		$result = mysqli_query($this->connection, $query);

		if(!$result){
			die('query failed'. mysqli_error($this->connection));
		}else{
			$_SESSION['message'] = 'category created.';
			header('Location:' . $this->base_url . '/categories/categories_list.php');		}
	}
}




function getCategories(){

		//$connection = db_connect();
		$query = "SELECT * FROM categories";

		$result = mysqli_query($this->connection, $query);

		$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $categories;
	}


	function getCategoriesArray(){

		$categories = $this->getCategories();

		$categories_array = [];

		foreach($categories as $category){
			$categories_array[$category['id']] = $category['name'];
		}

		
		return $categories_array;
	}

/**
* Fetches a category according to provided and return whole row.
*
*/
	function getCategory($id){
		//$connection = db_connect();

		$query = "SELECT * FROM categories where id=$id";
		
		$result = mysqli_query($this->connection, $query);
		$category = mysqli_fetch_assoc($result);

		return $category;
	}


	function getCategoryName($id){
		//$connection = db_connect();
		$category = $this->getCategory($id);


		return $category['name'];
	}

	 	


	function saveCategory(){
		if(isset($_POST['submit'])){
		//$connection = db_connect();
		$category_id= $_POST['category_id'];

				
				$name = $_POST['name'];


		$query = "UPDATE categories SET name='$name' WHERE id='$category_id'";

		$result = mysqli_query($this->connection, $query);
		if(!$result){
		//$connection = db_connect();
		die('query failed'. mysqli_error($this->connection));
			}else{
$_SESSION['message'] = 'category saved.';
			header('Location:' . $this->base_url . '/categories/categories_list.php');			}
	

	}
	}
	function deleteCategory($id){
		//$connection = db_connect();
		$query = "DELETE  FROM categories where id =$id";
		

		 $result = mysqli_query($this->connection, $query);

	if(!$result){
		//$connection = db_connect();
		die('query failed'. mysqli_error($this->connection));
			}else{
$_SESSION['message'] = 'category deleted.';
			header('Location:' . $this->base_url . '/categories/categories_list.php');			}
		}


}

