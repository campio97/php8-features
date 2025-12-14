<?php

declare(strict_types=1);

readonly class User
{
    public function __construct(
        //Readonly means it's only assigned at initialization and after i cannot assign another value
        public readonly string $name,
        public readonly string $email
    ) {}
}
