<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET & $_POST</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>UserName:</label> <br>
        <input type="text" name="username"><br>
        <label>Password:</label> <br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="login">
    </form>
</body>
</html>

<?php
    // https://youtu.be/zZ6vybT1HQs PHP Full Course for non-haters 🐘 (2023)
    // stop 13:51
    /* multi line
    comment */
    //echo $_GET["username"] ."<br>";
    //echo $_GET["password"] ."<br>";
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";


?>
