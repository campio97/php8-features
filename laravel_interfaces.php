<?php

declare(strict_types=1);

interface NotificationService
{
    public function send($to, $message);
}

class EmailNotificationService implements NotificationService
{
    public function send($to, $message): void
    {
        echo " Sending email $to: $message";
    }
}

class SMSNotificationService implements NotificationService
{
    public function send($to, $message): void
    {
        echo " Sending SMS $to: $message";
    }
}

class OrderProcessor
{
    public function __construct(private NotificationService $notifier) {}

    public function processOrder($order): void
    {
        $this->notifier->send($order["email"], $order["message"]);
    }
}

$order = ["email" => "me@me.it","message" => "My email message"];
$emailProcessor = new OrderProcessor(new EmailNotificationService());

$emailProcessor->processOrder($order);
$smsProcessor = new OrderProcessor(new SMSNotificationService());

$smsProcessor->processOrder($order);
