<?php

declare(strict_types=1);

#[Attribute]
class Example
{
    public function __construct(public string $description) {}
}

#[Example("This is an example class")]
class MyClass
{
    #[Example("This is an example method")]
    public function myMethod(): void {}
}


$attrClass = new ReflectionClass(MyClass::class)
            ->getAttributes(Example::class)[0]
            ->newInstance();

$attrMethod = ReflectionMethod::createFromMethodName(MyClass::class . '::myMethod')
    ->getAttributes(Example::class)[0]
    ->newInstance();

var_dump($attrClass->description);
var_dump($attrMethod->description);
