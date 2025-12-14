<?php

declare(strict_types=1);

//Not real async operations
$fiber = new Fiber(function (): void {
    echo "Fiber started<br/>";
    $value = Fiber::suspend("Suspending...");
    echo "Fiber resumed with value: $value<br>";
});

echo "Starting fiber ... <br>";
$value = $fiber->start();
echo "Fiber suspended, returned value: $value<br>";
$fiber->resume("Hello from resume");
echo "Fiber has completed<br><br>";

function asyncTask(): Fiber
{
    return new Fiber(function (): void {
        echo "Doing async work...<br>";
        Fiber::suspend();
        echo "Resuming work... <br><br>";
    });
}

$fiber = asyncTask();
$fiber->start();
echo 'doing another async task <br>';
$fiber->resume();

//Make API calls with rate limiting
$apiCaller = new Fiber(function (): string {
    $queries = ['products', 'users', 'orders'];
    foreach ($queries as $query) {
        echo "Fetched $query data<br>";
        Fiber::suspend();
    }

    return "All API calls done!";
});

$apiCaller->start();
while (!$apiCaller->isTerminated()) {
    echo 'other operations<br>';
    sleep(1);
    $apiCaller->resume();
}
echo $apiCaller->getReturn();
