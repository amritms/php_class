<?php 
 class User{
 	public $connection;
 	public $base_url;

 	function __construct(){
 		
 		$config = new config('root', '', 'php_class_database');
 		$this->connection = $config->db_connect();
 		$this->base_url = 'http://localhost/php_class_1';
 	}


function createUser() {
	if(isset($_POST['submit'])){
		 
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "INSERT INTO users(username, password) ";
		$query .= "VALUES ('$username', '$password')";

		$result = mysqli_query($this->connection, $query);

		if(!$result){
			die('query failed'. mysqli_error($this->connection));
		}else{
$_SESSION['message'] = 'user created.';
			header('Location:' . $this->base_url . '/users/users_list.php');		}
	}
}


function getUsers(){
		
		$query = "SELECT * FROM users";

		$result = mysqli_query($this->connection, $query);

		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $users;
	}

		function getUsersArray(){

		$users = $this->getUsers();

		$users_array = [];

		foreach($users as $user){
			$users_array[$user['id']] = $user['username'];
		}

		
		return $users_array;
	}

	function getUser($id){
		$query = "SELECT * FROM users where id=$id";
		$result = mysqli_query($this->connection, $query);
		$user = mysqli_fetch_assoc($result);

		return $user;
	}
	function saveUser(){
		//$connection = db_connect();
		if(isset($_POST['submit'])){
		$user_id = $_POST['user_id'];

			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "UPDATE users SET username='$username' , password='$password' WHERE id='$user_id'";

		$result = mysqli_query($this->connection, $query);
		if(!$result){
		//$connection = db_connect();
		die('query failed'. mysqli_error($this->connection));
			}else{
$_SESSION['message'] = 'user saved.';
			header('Location:' . $this->base_url . '/users/users_list.php');			}
	
	}
}
	function deleteUsers($id){
		//$connection = db_connect();
		$query = "DELETE  FROM users where id =$id";
		

		 $result = mysqli_query($this->connection, $query);

	if(!$result){
		//$connection = db_connect();
		die('query failed'. mysqli_error($this->connection));
			}else{
$_SESSION['message'] = 'user deleted.';
			header('Location:' . $this->base_url . '/users/users_list.php');			}


	}

	public function check_login($username, $password){
		$query = "SELECT * FROM users where username='$username' and password='$password'";
		
		$result = mysqli_query($this->connection, $query);
		
		$user = mysqli_fetch_assoc($result);

		if($user){			
			$_SESSION['username'] = $user['username'];
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['loggedin'] = true;
			
			return true;
		}

		return false;
		
	}
}


		
