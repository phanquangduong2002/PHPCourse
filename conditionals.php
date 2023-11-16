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

// if (empty($comments)) {
//     echo "No comments";
// } else {
//     echo "There are some comments!";
// }

echo !empty($comments) ? "There are some comments...<br>" : "Comments is empty<br>";

// $first_comment = !empty($comments) ? $comments[0] : "The first comment";

$first_comment = $comments[3] ?? 'Good comment';

// echo $first_comment;

$favorite_color = 'pastel';

switch ($favorite_color) {
    case 'red':
        echo 'You choose RED';
        break;
    case 'green':
        echo "You choose GREEN";
        break;
    case 'blue':
        echo "You choose BLUE";
        break;
    default:
        echo "Not RED, GREEN, BLUE";
}
