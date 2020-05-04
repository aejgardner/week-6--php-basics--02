<?php

// Create a function, sumBoth, that takes two arrays of numbers as arguments. Return the sum of all the numbers from both arrays.

// Hint: to avoid repeating code, you might want to write a sum function that adds up the values in a single array and call that inside sumBoth

declare(strict_types=1);

function arrSummer(array $arr) {
    $total = 0;

    foreach ($arr as $value) {
        $total += $value;
    }
    return $total;
}

function sumBoth($arr1, $arr2) {
    return arrSummer($arr1) + arrSummer($arr2);
}

var_dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // int(30)
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // int(47)
);