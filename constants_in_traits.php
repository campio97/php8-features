<?php

declare(strict_types=1);

trait ExampleTrait
{
    public const EXAMPLE = "Im a const variable defined into a Trait";

    public function getExample()
    {
        return self::EXAMPLE;
    }
}

class Example
{
    use ExampleTrait;

    public function __construct()
    {
        echo self::EXAMPLE;
    }
}

new Example();
