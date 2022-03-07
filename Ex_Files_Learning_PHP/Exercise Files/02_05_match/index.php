<?php

function add_to_x($x){
    return $x + 5;
}

$x = 0;

$result = match(true){
    $x <= 0 => '$x is not positive',
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neight 1 nor 2',
};

echo $result;