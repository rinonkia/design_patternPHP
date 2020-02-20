<?php

class MoneyExchange
{
    private $yen;

    private $doll_rate = 1.10;
    private $euro_rate = 1.29;
    private $pond_rate = 1.46;

    private $doll_symbol = 'USD';
    private $euro_symbol = 'EUR';
    private $pond_symbol = 'GBP';

    public function __construct($yen)
    {
        $this->yen = $yen;
    }

    public function currencyConversion($country)
    {
        $ret = 0;

        if ($country === 'usa') {
            $ret = $this->yen * $this->doll_rate;
        } else if ( $country === 'euro' ) {
            $ret = $this->yen * $this->euro_rate;
        } else if ( $country === 'england' ) {
            $ret = $this->yen * $this->pond_rate;
        } else {
            $ret = false;
        }
        return $ret;
    }

    public function symbol($money, $country)
    {
        $ret = '';

        if ($country === 'usa') {
            $ret = sprintf('%s %.2f', $this->doll_symbol, $money);
        } else if ($country === 'euro') {
            $ret = sprintf('%s %.2f', $this->euro_symbol, $money);
        } else if ($country === 'england') {
            $ret = sprintf('%s %.2f', $this->pond_symbol, $money);
        } else {
            $ret = false;
        }
        return $ret;
    }
}
