<?php

// Create a function, wow, that takes a number, n, as an argument. The function should return the word "Wo...ow", where there are n "o"s.

// Note: only use things that you've been taught to solve this

declare(strict_types=1);

function wow($n) {

    $o = "";

    for ($i = 0; $i <= $n; $i += 1) {
        $o .= "o";
    }

    return "W${o}w";

}

var_dump(wow(12)); // string(14) "Woooooooooooow"
var_dump(wow(4)); // string(6) "Woooow"