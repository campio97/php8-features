<?php

declare(strict_types=1);

class Logger
{
    public function log($message): void
    {
        echo "Logging: $message";
    }
}

class UserService
{
    public function __construct(private readonly Logger $logger) {}

    public function createUser(): void
    {
        echo $this->logger->log("Creating user");
    }
}

$logger = new Logger();
$userService = new UserService($logger);

$userService->createUser();
