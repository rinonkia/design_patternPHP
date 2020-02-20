<?php

require_once __DIR__ . '/Exchanges/MoneyExchange.php';

$jp_yen = 100;

$money = new MoneyExchange($jp_yen);

echo sprintf("JPY %d\n", $jp_yen);
echo "\n";
echo $money->symbol($money->currencyConversion('usa'), 'usa');
echo "\n";
echo $money->symbol($money->currencyConversion('euro'), 'euro');
echo "\n";
echo $money->symbol($money->currencyConversion('england'), 'england');
echo "\n";
