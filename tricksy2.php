<?php

// Create a function, both, that takes two arrays. Return a new array containing any value that is in both arrays.

// Hint: stick to things you've been taught and try not to Google/Stack Oveflow it

declare(strict_types=1);

function both(array $arr1, $arr2) {

    $newArr = [];

    foreach ($arr1 as $el1) {    
        foreach ($arr2 as $el2) {
            if($el1 === $el2) {
                $newArr[] = $el1;
            }
        }
    }

    return $newArr;
}

var_dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);