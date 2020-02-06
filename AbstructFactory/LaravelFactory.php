<?php

require_once __DIR__ . '/interfaces/FactoryInterface.php';
require_once __DIR__ . '/Products/Laravel/LaravelEngine.php';
require_once __DIR__ . '/Products/Laravel/LaravelHandle.php';
require_once __DIR__ . '/Products/Laravel/LaravelTire.php';

class LaravelFactory implements FactoryInterface
{
    public function engine()
    {
        return new LaravelEngine();
    }

    public function tire()
    {
        return new LaravelTire();
    }

    public function handle()
    {
        return new LaravelHandle();
    }
}
