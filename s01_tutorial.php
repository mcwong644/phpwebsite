<?php
//https://www.youtube.com/live/s-iza7kAXME?feature=share
//PHP And MySQL Full Course in 2022 | PHP And MySQL Tutorial for Beginners 2022 | Simplilearn
// 59:07
// loops and functions

$var=2;

while($var<=10){
    echo "numbers : $var <br>";
    $var++;
}; //requires semicolon

do {
    echo "number <20 : $var <br>";
    $var++;
} while($var<=20); //requires semicolon


function name($nme) 
{
    for($var=1;$var<=6;$var++) {
        echo "number in function $nme: $var <br>";
   }
   echo "<br>";
}

name("one");
name("two");
?>
