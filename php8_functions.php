<?php

declare(strict_types=1);

echo str_contains("my long sentence, does it contain a specific needle?", "contain") ? 1 : 0;
echo str_starts_with("my long sentence, does it contain a specific needle?", "my") ? 1 : 0;
echo str_ends_with("my long sentence, does it contain a specific needle?", "?") ? 1 : 0;

$a = array_fill(
    //Starting index
    -5
    //How many values
    ,
    4
    //Value of each index
    ,
    'val'
);
print_r($a);
