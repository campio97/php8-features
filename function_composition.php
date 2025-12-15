<?php

declare(strict_types=1);

//  Function composition
class Pipeline
{
    private array $functions;

    public function __construct(...$functions)
    {
        $this->functions = $functions;
    }

    public function process(/*$input*/)
    {
        return array_reduce(
            // array_reverse($this->functions),
            // fn($acc, $func) => $func($acc),
            // $input
            $this->functions,
            fn($acc, $func) => fn($x) => $func($acc($x)),
            fn($x) => $x
        );
    }
}
$double = fn($x) => $x * 2;
$increment = fn($x) => $x + 1;
$square = fn($x) => $x * $x;
$pipeline = new Pipeline($double, $increment, $square);

// echo $pipeline->process(5);
echo $pipeline->process()(5);

// $pipeline = fn($x) =>
//     (fn($x) => $x*$x)(
//         (fn($x) => $x+1)(
//             (fn($x) => $x*2)($x)
//         )
//     );
// echo $pipeline(5);
