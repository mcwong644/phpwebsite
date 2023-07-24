<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplilearn</title>
</head>
<h1>Blood Donation Camp</h1>
<body bgcolor="F88917">
    <div><h2>Registration form</h2></div>
    <!-- //use external file connect.php -->
    <form action="connect.php" method="post"> 
        <label for="user">Name:</label> <br>
        <input type="text" name="name" id="name" required/> <br> <br>
        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="mail" required /> <br> <br>
        <label for="phone">Phone:</label> <br>
        <input type="text" name="phone" id="phone" required /> <br> <br>

        <label for="bgroup">Blood Group:</label> <br>
        <input type="text" name="bgroup" id="bgroup" required /> <br> <br>

        <input type="submit" name="submit" id="submit" />


    </form>
    
</body>
</html>

<?php
//https://www.youtube.com/live/s-iza7kAXME?feature=share
//PHP And MySQL Full Course in 2022 | PHP And MySQL Tutorial for Beginners 2022 | Simplilearn
// 2:08:21
// start Apache and mySQL

?>