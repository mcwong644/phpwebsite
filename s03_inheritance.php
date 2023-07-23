<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The inheritance program</h1>

</body>
</html>

<?php
//https://www.youtube.com/live/s-iza7kAXME?feature=share
//PHP And MySQL Full Course in 2022 | PHP And MySQL Tutorial for Beginners 2022 | Simplilearn
// 1:22:38
// inheritance

    class Fruit{
            public $name;
            public $color;

            public function __construct($name,$color){
                $this->name=$name;
                $this->color=$color;
            }
            public function __destruct()
            {
                echo "Object {$this->name} destroyed! <br>";
            }
            
            public function intro(){
                echo "A {$this->name} is a fruit and color is {$this->color} <br>";
            }

            function set_name($name){
                $this->name=$name;
            }

            function get_name(){
                return $this->name;
            }
            function get_color(){
                return $this->color;
            }
    }

    class Cherry extends Fruit {
        public function message(){
            echo "Is cherry a fruit or berry <br>";
        }
    }
    
    $cherry= new Cherry("mycherry","red");
    $cherry->message();
    $cherry->intro();
?>