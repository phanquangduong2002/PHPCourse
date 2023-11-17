<?php

echo "File Handling in PHP <br>";

// read / write file on the server

$file_path = './fruits.txt';

if (file_exists($file_path)) {
    // echo readFile($file_path); // dung lượng tính theo bytes của file
    $file_handle = fopen($file_path, 'r'); // mở file chỉ để đọc
    $file_content = fread($file_handle, filesize(($file_path)));
    fclose($file_handle); // Đóng file
    echo $file_content;
} else {
    // not exists
    $file_handle = fopen($file_path, 'w'); // mở file để ghi
    $file_content = 'pinapple' . PHP_EOL . 'mango' . PHP_EOL . 'grape';
    fwrite($file_handle, $file_content);
    fclose($file_handle);
}
