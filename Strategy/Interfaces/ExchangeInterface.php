<?php

interface ExchangeInterface
{
    public function currencyConversion();

    public function symbol($money);
}
