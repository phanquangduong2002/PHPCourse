<?php

echo "Câu lệnh điều kiện trong PHP<br>";

$age = 30;

if ($age >= 18) {
    echo "You are greater than or equal to 18 years old<br>";
} else {
    echo "You are so young<br>";
}

$date_time = date('F j');

$hours = date("H");

echo $date_time . "<br>";

if ($hours < 12) {
    echo "Good morning<br>";
} else if ($hours >= 12 && $hours <= 18) {
    echo "Good afternoon<br>";
} else {
    echo "Good evening<br>";
}

$comments = [
    'Good', 'I like it', 'How are you ?'
];

if (empty($comments)) {
    echo "No comments";
}
