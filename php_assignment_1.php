<?php
// How can you use the ternary operator in PHP to shorten this if statement?

$num = 5;

// Using if statement
if ($num > 0) {
    $result = 'positive';
}
else if ($num < 0) {
    $result = "negative";
    if( $num < -10) {
        $result = "value is below -10";
    }
}
else {
    $result = "its zero";
}

echo $result;