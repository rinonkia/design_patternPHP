<?php

require_once __DIR__ . '/Exchanges/DollarExchange.php';
require_once __DIR__ . '/Exchanges/EuroExchange.php';
require_once __DIR__ . '/Exchanges/PondExchange.php';

$jp_yen = 100;

$dollar = new DollarExchange($jp_yen);
$euro   = new EuroExchange($jp_yen);
$pond   = new PondExchange($jp_yen);
echo sprintf("JPY %d↓\n", $jp_yen);
echo "\n";
echo $dollar->symbol($dollar->currencyConversion());
echo "\n";
echo $euro->symbol($euro->currencyConversion());
echo "\n";
echo $pond->symbol($pond->currencyConversion());
echo "\n";
