<?php

declare(strict_types=1);
//Before
// $fn = function() {
//     return "result";
// };

$fn = fn() => "result<br>";

echo $fn();

function operate($item, $callback = null)
{
    if ($callback) {
        return $callback($item);
    }
    return $item * 2;
}

echo operate(10) . "<br>";
echo operate(10, fn($item) => $item * 3) . "<br>";
