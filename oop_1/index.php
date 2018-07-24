<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OOP php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
    <?php
    class Animal {
        protected $name;
        protected $favourite_food;
        protected $sound;
        protected $id;   

        public static $number_of_animals = 0;

        const PI = "3.14159";

        function getName(){
            return $this->name;
        }

        function __construct(){
            $this->id = rand(100, 100000);
            echo $this->id . " has been assigned</br>";

            Animal::$number_of_animals++; 
        }

        function __destruct(){
           echo $this->name . " has been destroyed.";
        }

        function __get($name){
            echo "Asked for " . $name . '<br/>';
            return $this->$name;
        }

        function __set($name, $value){
            switch($name){
                case "name":
                    $this->name = $value;
                    break;

                case "favourite_food":
                    $this->favourite_food = $value;
                    break;

                case "sound":
                    $this->sound = $value;
                    break;
                
            }

            echo "Set " . $name . " to " . $value . "<br/>";
        }

        function run(){
            echo $this->name . " runs <br/>";
        }
    }

    class Dog extends Animal{
        function run(){
            echo $this->name . " runzs like crazy <br />";
        }
    }

    $animal_one = new Animal();
    $animal_one->name = 'Spot';
    $animal_one->favorite = "Meat";
    $animal_one->sound = "Ruff";

    echo $animal_one->name . " says ". $animal_one->sound . " give me some " . $animal_one->favourite_food . 
    ' my id is ' . $animal_one->id . " total animals = " . Animal::$number_of_animals . '<br/><br/>';
    ?>
</body>
</html>