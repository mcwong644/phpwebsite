<?php
//https://www.youtube.com/live/s-iza7kAXME?feature=share
//PHP And MySQL Full Course in 2022 | PHP And MySQL Tutorial for Beginners 2022 | Simplilearn
// 
// $_GET
if (isset($_GET["name"]) || isset($_GET["age"])) {
    echo "Hi {$_GET["name"]} <br>";
    echo "your age is {$_GET["age"]} years old <br>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_PHP_SELF?>" method="get">
    Name:<input type="text" name="name" />
    <br>
    Age : <input type="text" name="age" />
<input type="submit" />
</form>
</body>
</html>
