<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
// https://youtu.be/cGwSm8xDSwI
// PHP & MySQL Tutorial | Learn PHP From Scratch | Full Tutorial
// stop 1:24:18

$expenses = array(40,70,20,85,40,100.5);
$totalAmount=0;
$amountOfExpenses=0;

foreach($expenses as $expense) {
    $totalAmount = $expense + $totalAmount;
    $amountOfExpenses++;

}
 echo "My " . $amountOfExpenses . " biggest expenses were $" . $totalAmount;

?>