<?php

require_once __DIR__ . '/AutoMobile.php';
require_once __DIR__ . '/../Interfaces/ElectricEngineInterface.php';

class HybridCar extends AutoMobile implements ElectricEngineInterface
{
    public function electricOutput($ratio)
    {
        return sprintf('電気：%d ％', $ratio);
    }

    public function running()
    {
        echo sprintf('[出力] %s', $this->gasolineOutput(50));
        echo sprintf('[出力] %s', $this->electricOutput(50));
    }
}