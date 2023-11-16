<?php

echo "Vòng lặp trong PHP<br>";

// for ($i = 0; $i <= 10; $i++) {
//     echo "i = $i<br>";
// }

$i = 20;
// while ($i < 20) {
//     echo "i = $i<br>";
//     $i++;
// }

// do {
//     echo "i = $i<br>";
//     $i++;
// } while ($i < 20);


$fruits = ['apple', 'orange', 'banana', 'lemon'];

// for ($i = 0; $i < count($fruits); $i++) {
//     echo "$fruits[$i] <br>";
// }

// foreach ($fruits as $index => $fruit) {
//     echo "$index - $fruit <br>";
// }

$person = [
    'full_name' => "Phan Quang Dương",
    'email' => 'quangduongsayhi@gmail.com',
    'age' => 21
];

foreach ($person as $key => $value) {
    echo "$key - $value <br>";
}
