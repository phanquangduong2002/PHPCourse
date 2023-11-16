<?php

echo "String functions in PHP <br>";

$full_name = 'Phan Quang Duong';

echo "length: " . strlen($full_name) . "<br>";

// đảo ngược string
// echo strrev($full_name);

// convert to lowercase
echo strtolower($full_name) . "<br>";

// convert to uppercase
echo strtoupper($full_name) . "<br>";


// find and replace

echo str_replace(' ', '-', $full_name) . "<br>";

if (str_starts_with(strtolower($full_name), "phan")) {
    echo "His name starts with phan <br>";
}

if (str_ends_with(strtolower($full_name), 'duong')) {
    echo "His name ends with duong <br>";
}

echo "<h1>html string</h1>";

echo htmlspecialchars("<h1>html string</h1>");
