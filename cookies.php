<?php

echo "Cookies trong PHP <br>";

/*
   Cookies: Lưu trữ dữ liệu trên trình duyệt

 */

// Save data to cookie
setcookie("name", "Duong", time() + 24 * 3600);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// setcookie('name', '', time() - 24 * 3600); // unset cookie
