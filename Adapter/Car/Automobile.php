<?php

require_once __DIR__ . '/../Interfaces/GasolineEngineInterface.php';

class Automobile implements GasolineEngineInterface
{
    public function gasolineOutput($ratio)
    {
        return sprintf('ガソリン：%d ％', $ratio);
    }

    public function running()
    {
        echo sprintf('[出力] %s', $this->gasolineOutput(100));
    }
}