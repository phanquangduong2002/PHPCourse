<?php
echo "Biến trong php" . "<br>";

$name = "Duong";
$age = 18;
// var_dump($name);

// echo $name . " is " . $age . " years old" . "<br>";

// echo "${name} is ${age} years old....<br>";
// echo "$name is $age years old....<br>";


// biểu thức

// $sum = '2' + '3';
// var_dump($sum); // int(5)

// constants

define('SERVER_NAME', 'localhost');
define('DATABASE_NAME', 'test_db');

echo "server: " . SERVER_NAME . ", db: " . DATABASE_NAME;
