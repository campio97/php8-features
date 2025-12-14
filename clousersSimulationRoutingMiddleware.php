<?php

declare(strict_types=1);

class Router
{
    protected $routes = [];
    protected Middleware $middleware;

    public function get(string $path, Closure $action): self
    {
        $this->routes[$path] = $action;
        return $this;
    }

    public function simulateRequest(string $path): void
    {
        if (isset($this->routes[$path])) {
            $action = $this->routes[$path];
            $request = ["smth" => "<h1>REQUEST</h1>"];
            if (isset($this->middleware)) {
                echo $this->middleware->handle($request, $action);
            } else {
                echo $action($request);
            }
        } else {
            echo "404 Not Found";
        }
    }

    public function middleware(Middleware $middleware): self
    {
        $this->middleware = $middleware;
        return $this;
    }
}

class Middleware
{
    public function handle($request, Closure $next): string
    {
        //Perform some operation before thr request
        $request = ["smth" => strip_tags($request['smth'])];
        $response = "Before request<br>";
        $response .= $next($request);
        $response .= "After request<br>";
        return $response;
    }
}

$router = new Router();

$router->get('/hello', fn($request) => "Hello World " . $request["smth"]);
$router->get('/middleware', fn($request) => "This route has a middleware" . $request["smth"])
->middleware(new Middleware());
$router->simulateRequest("/middleware");
