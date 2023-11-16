<?php

echo "Hàm trong PHP <br>";

$y = 21;

function sayHello($name) // function with 'arguments' đối số
{
    global $y;
    echo "y = $y <br>";
    echo "Hello $name";
}

// sayHello('Quang Dương'); // call function with 'parameters' tham số

function sum($a = 0, $b = 0)
{
    return $a + $b;
}

// echo sum(2, 3);

$multiply = function ($a, $b) {
    return $a * $b;
};

// echo $multiply(2, 4);

$substract = fn ($a, $b) => $a - $b;

// echo $substract(4, 1);

// some built-in function for array

$names = ['john', 'anna', 'tony', 'jonny'];

// echo "number of items: " . count($names);

// tìm kiếm thông tin trong mảng
// var_dump(in_array('tony', $names));

// thêm phần tử vào trong mảng
array_push($names, 'Duong', 'Trinh');

// them phần tử vào đầu mảng
array_unshift($names, 'Satoshi');

// xóa phần tử cuối mảng
array_pop($names);

// xóa phần tử đầu tiên của mảng
array_shift($names);

// xóa phần tử bất kì trong mảng
unset($names[2]);

// chunk an array
$chunked_array = array_chunk($names, 2);
// print_r($chunked_array);

// 
// print_r($names);

$array_one = [1, 3, 5];
$array_two = [2, 4, 6];

// gộp mảng

$merged_array = array_merge($array_one, $array_two);

// print_r($merged_array);

// spread operator
$array_three = [...$merged_array]; // clone an array

// print_r($array_three);

$array_four = [...$array_one, ...$array_two];

// print_r($array_four);

// combine two arrays

$a = ['name', 'email', 'age'];

$b = ['Phan Quang Duong', 'quangduongsayhi@gmail.com', 21];

$c = array_combine($a, $b);

// print_r($c);

// print_r(array_keys($c));

// print_r(array_values($c));

// print_r(array_flip($c)); // value thành key, key thành value

$numbers = range(1, 10);
print_r($numbers);


// Ánh xạ một mảng
// $squared_numbers = array_map(function ($each_number) {
//     return $each_number * $each_number;
// }, $numbers);

$squared_numbers = array_map(fn ($each_number) => $each_number * $each_number, $numbers);

// print_r($squared_numbers);

// filter an array

$filter_numbers = array_filter($numbers, fn ($each_number) => $each_number % 2 == 0);

// print_r($filter_numbers);
