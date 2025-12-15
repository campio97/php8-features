<?php

declare(strict_types=1);

class ImageProcessor
{
    public function __construct(
        public string $processorName = 'DefaultProcessor',
        public int $quality = 85
    ) {
        echo "Constructor called (expensive init)" . "<br>";
    }

    public function process(string $image): string
    {
        echo "Processing $image with {$this->quality}" . "<br>";
        return "processed_$image" . "<br>";
    }

    public function metadata(string $path): array|string
    {
        return "im not touching class properties" . "<br>";
    }
}

$reflector = new ReflectionClass(ImageProcessor::class);
$lazyService = $reflector->newLazyGhost(
    fn(ImageProcessor $instance) => $instance->__construct()
);

echo $lazyService->metadata("photo.jpg"); //Doesn't trigger initialization


echo $lazyService->process("photo.jpg"); //The process method touch a property of the class, so it will init the construct
