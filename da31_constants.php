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
// stop 02:42:29

// constants
// define
 // keyword const

 define("CO_NAME","Google");
 const MY_NAME = "Dary";

$companyName = "Apple";
$myname = 'Wong';
$age = 21;
$salary = 9999.65;

echo "variable is {$companyName} const is  {CO_NAME}, my name is {MY_NAME}"; //const cannot display
echo "<br>";
echo "variable is {$companyName}, const is ". CO_NAME . "my name is " . MY_NAME;
echo "<br>";
echo sprintf("Var is %s and This is my constant: %s. my name is %s", $companyName, CO_NAME, MY_NAME);
echo "<br>";
echo sprintf("Var is %s and This is my constant: %s. my name is %s, salary is %01.2f", $companyName, CO_NAME, MY_NAME,$salary);
echo "<br>";
echo sprintf("Var is %s and This is my constant: %s. my name is %s, salary is %015.5f", $companyName, CO_NAME, MY_NAME,$salary);
echo "<br>";
echo sprintf("name is %s, co is %s, const is %s, age is %010d or %d", $companyName, $myname, CO_NAME,$age,$age);


?>