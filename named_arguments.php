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

person(name: "Pietro", lastName: "Campiotti", age: 28);
