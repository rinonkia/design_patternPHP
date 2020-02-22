<?php

require_once __DIR__ . '/../Interfaces/ExchangeInterface.php';

class DollarExchange implements ExchangeInterface
{
    private $yen = 0;

    private $rate = 1.10;

    private $symbol = 'USD';

    public function __construct($yen)
    {
        $this->yen = $yen;
    }

    public function currencyConversion()
    {
        return $this->yen * $this->rate;
    }

    public function symbol($money)
    {
        return sprintf("%s %.2f", $this->symbol, $money);
    }
}
