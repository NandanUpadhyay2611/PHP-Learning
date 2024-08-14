<?php

function factorial($n) {
   
    if ($n == 0 || $n == 1) {
        return 1;
    }

    else {
        return $n * factorial($n - 1);
    }
}

$number = 5; 
$result = factorial($number);

echo "The factorial of $number is: $result";

// <h1>Hello, world</h1>
?>
