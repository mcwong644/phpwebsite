<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create 1st Function</title>
</head>
<body>

</body>
</html>

<?php
// https://youtu.be/cGwSm8xDSwI
// PHP & MySQL Tutorial | Learn PHP From Scratch | Full Tutorial
// start 02:26:17 create 1st functions
// stop 52.38

//builtin functions

//user defined functions
$x = "wong";
$y = 21;
function myFunction($name, $age)
{
    // global $x; // access global var
    // $x="dary";
    echo "Hello {$name}, you are {$age} y/o";
    $z = $age + 10;
    echo "<br> In a decade, you will be {$z} years old";
}

myFunction($x, $y);

// function return value

// pass by value
$n1=10;
$n2=15;
function add($x1,$x2) {
    return $x1+$x2;
}
$tot=add($n1,$n2);
echo "<br> Total is $tot";

// pass by reference
function addRef(&$x1,&$x2) {
    $x1=$x1 + 100;
    
}

addRef($n1,$n2);
echo "<br> add by reference : {$n1}";

?>