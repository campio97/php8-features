<?php

declare(strict_types=1);

//Match Expression
$name = "Adam";
$message = match ($name) {
    'Roberto' => 'Hello Robert',
    'John' => 'Hello John',
    'Jane' => 'Hello Jane',
    'Adam', 'Eva' => 'Hello there. 2 Matches',
};
echo $message;
return;
//BEFORE
$name = 'Robert';
switch ($name) {
    case 'Robert':
        $message = 'Hello Robert';
        break;
    case 'John':
        $message = 'Hello John';
        break;
    case 'Jane':
        $message = 'Hello Jane';
        break;
    case 'Adam':
    case 'Eva':
        $message = 'Hello there. You are the first on the Earth!';
        break;
    default:
        $message = "Hello unkown";
}
echo $message;
echo 'Hello world! ' . PHP_VERSION;
