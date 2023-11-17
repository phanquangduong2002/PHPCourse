<?php
echo "Array trong PHP<br>";

$some_numbers = [1, 2, 3, 4, 5];
$fruits = ['melon', 'apple', 'orange'];

$drink = array('tea', 'coffee', 'water');

// print_r(($fruits));

// print_r($drink);


$color = [
    3 => 'red', // key - value
    5 => 'green',
    7 => 'blue'
];

// echo $color[5];

$hex_color = [
    'red' => "#FF0000",
    'green' => "#00FF00",
    'blue' => "#0000FF"
];

// echo $hex_color['green'];

$person = [
    'full_name' => 'Phan Quang Duong',
    'age' => 21,
    'job' => 'Fullstack developer'
];

// print_r($person);
// print_r($person['full_name']);

$persons = [
    [
        'full_name' => 'Phan Quang Duong',
        'age' => 21,
        'job' => 'Fullstack developer'
    ],
    [
        'full_name' => 'Phan Quang Duong 2',
        'age' => 21,
        'job' => 'Fullstack developer'
    ],
    [
        'full_name' => 'Phan Quang Duong 3',
        'age' => 21,
        'job' => 'Fullstack developer'
    ]
];

print_r($persons);

// var_dump(json_encode($person));
