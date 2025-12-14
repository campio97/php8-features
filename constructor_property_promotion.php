<?php

declare(strict_types=1);

class User
{
    /**
     * Before constructor
     *
     * public string $name;
     * public int $age;
     *
    * public function __construct(string $name, int $age)
    * {
    *     $this->name = $name;
    *     $this->age = $age;
    * }
    */

    //Constructor with property promotion, no need to create assign logic and define properties before
    public function __construct(public string $name, public int $age) {}
}

$user = new User(name: "Pietro", age: 28);

echo $user->name . " " . $user->age;
