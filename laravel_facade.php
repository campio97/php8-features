<?php

declare(strict_types=1);

class Service
{
    public function doSomething()
    {
        return "Service is doin something.";
    }
}

class FacadeForService
{
    protected static $serviceInstance;
    //This magic function is called when we call a static method that is not present in the class (FacadeForService)
    public static function __callStatic(string $method, array $arguments): mixed
    {
        /*echo $method;
        print_r($arguments);*/
        $calledClass = get_called_class();
        $serviceName = str_replace("FacadeFor", "", $calledClass);
        $instance = self::getServiceInstance($serviceName);
        return $instance->$method(...$arguments);
        //echo $serviceName;
    }

    public static function getServiceInstance($serviceName)
    {
        if (self::$serviceInstance === null) {
            self::$serviceInstance = new $serviceName();
            //Real code; locate service in service container
        }
        return self::$serviceInstance;
    }
}

echo FacadeForService::doSomething();
