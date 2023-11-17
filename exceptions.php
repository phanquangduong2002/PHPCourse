<?php

echo "Exceptions in PHP <br>";

function divide($a, $b)
{
    if (!$b) {
        throw new Exception(('Cannot divide by zero'));
    }
    return $a / $b;
}

try {
    echo divide(10, 5) . "<br>";
    echo divide(5, 0) . "<br>";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
} finally {
    echo "Finally come here... <br>";
}

echo "Program runs here...";
