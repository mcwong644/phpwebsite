<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET & $_POST</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity:</label> <br>
        <input type="text" name="quantity"><br><br>
        
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
    // https://youtu.be/zZ6vybT1HQs PHP Full Course for non-haters 🐘 (2023)
    // Bro code stop 13:51
    /* multi line
    comment */
    //echo $_GET["username"] ."<br>";
    //echo $_GET["password"] ."<br>";
    $item="pizza";
    $price=5.99;
    $total=null;

    $quantity= $_POST["quantity"];
    $total=$quantity * $price;

    echo "you have ordered {$quantity} pizza(s) and total price is \${$total}";
    


?>
