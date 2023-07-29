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
$x="wong";
function myFunction() {
    global $x; // access global var
    $x="dary";
    echo "Hello {$x}";
}

myFunction();
echo "<br>";
echo $x;
?>