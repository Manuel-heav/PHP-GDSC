<?php
    class Car {
        public $name;
        public $model;
        public $color;

        function get_name(){
            return $this->name;
        }

        function set_model($model){
            $this -> model = $model;
        }

        function get_model(){
            return $this -> model;
        }
        function __construct($name, $color){
            $this -> color = $color;
            $this -> name = $name;
        }

        function __destruct(){
            echo "<h3>The name of the car is  {$this -> name} with {$this -> color} color and made in {$this -> model}</h3>";
        }
    }

    class Plane extends Car{
        function narrate(){
            echo "Plane!";
        }
    }

    $vitz = new Car("Vitz","Blue");
    $vitz -> set_model(1994);
    echo $vitz -> get_model();
    echo '<br>';
    echo $vitz -> get_name();
    echo '<br>';
    echo $vitz -> color;

    $newPlane = new Plane("Boeing", "Red");
    $newPlane -> set_model(2009);
    $newPlane -> narrate();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, Sans-serif;
        }
    </style>
</head>
<body>
    
</body>
</html>