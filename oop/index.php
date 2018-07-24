<!DOCTYPE html>
<html>
<head>
	<title>PHP Object Oriented Programming</title>
</head>
<body>
<h1>PHP OOP</h1>

<?php
	class Animal{
		protected $name;
		protected $favourite_food;
		protected $sound;
		protected $id;

		public static $number_of_animals = 0;


		function getName(){
			return $this->name;
		}

		function setName($value){
			$this->name = $value;
		}

		function __construct(){
			$this->id = rand(100, 100000);
			echo $this->id . ' has been assigned <br/>';
			
			Animal::$number_of_animals++;
		}

		function __destruct(){
			echo '<br>'.$this->name . ' has been destroyed<hr>';
		}

		function __get($name){
			echo "Asked for " . $name . '<br/>';
			return $this->$name;
		}

		function __set($name, $value){
			switch($name){
				case 'name':
					$this->name = $value;
					break;
				case 'favourite_food':
					$this->favourite_food = $value;
					break;
				case 'sound':
					$this->sound = $value;
					break;
			}
			
			echo 'Set ' . $name . " to " . $value . '<br />';
		}

		function __toString(){
			return $this->name . " says ". $this->sound . " give me some " . $this->favourite_food . " my id is " . $this->id . ". Total animals = " . Animal::$number_of_animals . '<br/><br/>';
			// return 'you cannot print object';
		}

		function run() {
			echo $this->name .' runs slow. <br />';
		}

		final function what_is_good(){
			echo 'Running is good <br/>';
		}

		static function add_these($num1, $num2){
			return ($num1 + $num2) . '<br/>';
		}


	}


	class Dog extends Animal implements Singable{
		function run(){
			echo $this->name . ' runs like crazy.<br />';
		}

		function sing(){
			echo $this->name . ' sings Bow wow, woooow<br>';
		}


	}


	interface Singable{
		public function sing();
	}

	$animal_one = new Animal();
	$animal_one->name = 'Tiger';
	$animal_one->favourite_food = 'Meat';
	$animal_one->sound = "roar";
	$animal_one->run();
	$animal_one->what_is_good();
echo 	Animal::add_these(2,4);
	// echo $animal_one->sound;

	// var_dump($animal_one);
	echo $animal_one;


	$lucky = new Dog();
	$lucky->name = 'Lucky';
	$lucky->favourite_food = "cheese";
	$lucky->soud = 'Uff';
	$lucky->run();
	$lucky->sing();
	$lucky->what_is_good();
	echo $lucky;
	
	echo '$lucky is instance of Dog: ';
	echo ($lucky instanceof Dog) ? "True" : "False";




	$lucy = clone $lucky;

	echo $lucky->name;
	echo $lucy->name;


	$lucy->name = 'Lucy';

	echo $lucky->name;
	echo $lucy->name;

?>
</body>
</html>