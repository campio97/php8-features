<?php

declare(strict_types=1);
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

echo $user?->address()?->country() ?? 'homeless';

class User
{
    public function address()
    {
        return new Address();
    }
}

class Address
{
    public function country()
    {
        return 'USA';
    }
}
echo '<br>';
$user = new User();
echo $user?->address()?->country() ?? 'homeless';
