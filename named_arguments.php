<?php

declare(strict_types=1);
function person(String $name, String $lastName, int $age, ?String $address = null, ?String $bio = null): void
{
    echo "Hello $name $lastName. You are $age years old.";
    if ($address) {
        echo "You live in $address.";
    }
    if ($bio) {
        echo "This is your bio $bio";
    }
}

person(name: "Pietro", lastName: "Campiotti", age: 28, bio: 'My bio');

//With class

class A
{
    public function __construct($name, $age)
    {
        echo "<br>Hello $name. You are $age years old";
    }
}
new A(age: 28, name: "Pietro");
