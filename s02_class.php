<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>The fruit program</h1>

</body>

</html>

<?php
//https://www.youtube.com/live/s-iza7kAXME?feature=share
//PHP And MySQL Full Course in 2022 | PHP And MySQL Tutorial for Beginners 2022 | Simplilearn
// 1:16:35
// class & objects & constructor/destructor

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function __destruct()
    {
        echo "Object {$this->name} destroyed <br>";
    }
    public function set_name($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit("IOS", "blue");
//$apple->set_name("my apples");
    echo "object created is {$apple->get_name()} and color is {$apple->get_color()} <br>";

$straw = new Fruit("berry", "red");
echo "object created is {$straw->get_name()} and color is {$straw->get_color()} <br>";
?>