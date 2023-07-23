<?php
//https://www.youtube.com/live/s-iza7kAXME?feature=share
//PHP And MySQL Full Course in 2022 | PHP And MySQL Tutorial for Beginners 2022 | Simplilearn
// 1:44:44
// $_POST

if (isset($_POST["name"]) || isset($_POST["age"])) {
    if (preg_match("/[^A-aa-z -]/",$_POST["name"])) {
        die("Invalid name, should be alphabet");
    }
    echo "Hi {$_POST["name"]} <br>";
    echo "your age is {$_POST["age"]} years old <br>";
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
    
    <form action="<?php $_PHP_SELF?>" method="post"> 
    Name:<input type="text" name="name" />
    <br>
    Age_: <input type="text" name="age" />
<input type="submit" value="Check"/>
</form>
</body>
</html>
