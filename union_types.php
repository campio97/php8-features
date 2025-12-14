<?php

declare(strict_types=1);

class Example
{
    public function foo(string|int|array $arg): string|int|array
    {
        return $arg;
    }
}

print_r(new Example()->foo([1,2,3]));
