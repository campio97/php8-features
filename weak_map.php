<?php

declare(strict_types=1);
// Create a Weak Map
$metadata = new WeakMap();
// Create an object
$user = new class ('John') {
    public function __construct(public string $name) {}
};
//Store metadata about the object
$metadata[$user] = ['created_at' => date("Y-m-d"), "access_count" => 0];
//Access metadata
echo "User created at: " . $metadata[$user]["created_at"] . "<br/>";
//Increment access count
$metadata[$user]["access_count"]++;
echo "User access count: " . $metadata[$user]["access_count"] . "<br/>";
echo "Metadata entries: " . count($metadata) . "<br/>";
//When the object is destroyed...
unset($user);
//The metadata is automatically cleaned up
echo "Metadata entries: " . count($metadata) . "<br/>";
