<?php

declare(strict_types=1);

// Magic methods
class Greeter
{
    public function __invoke($name): void
    {
        echo "Hello, $name!";
    }
}
$greet = new Greeter();
$greet('John');

class Math
{
    public function __call($name, $arguments)
    {
        if ($name === 'sum') {
            return array_sum($arguments);
        }
        throw new Exception("Method $name doesn't exist");
    }

    public static function __callStatic($name, $arguments)
    {
        if ($name === 'product') {
            return array_product($arguments);
        }
        throw new Exception("Static method $name doesn't exist");
    }
}

$math = new Math();
echo $math->sum(1, 2, 3);
echo Math::product(2, 3, 4);

class DynamicProperties
{
    private $data = [];
    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
    public function __set($name, $value): void
    {
        echo "<br>$name,$value";
        $this->data[$name] = $value;
    }
}
$obj = new DynamicProperties();
$obj->email = 'test@example.com'; // Calls __set()
echo "<br>$obj->email"; // Calls __get(), outputs: test@example.com
