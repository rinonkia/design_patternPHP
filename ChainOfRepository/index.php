<?php

require_once __DIR__ . '/Handlers/RyuBattleHandler.php';
require_once __DIR__ . '/Handlers/KenBattleHandler.php';
require_once __DIR__ . '/Handlers/HondaBattleHandler.php';

$ryu = new RyuBattleHandler();
$ken = new KenBattleHandler();
$honda = new HondaBattleHandler();

$handler = $ryu->setHandler($ken->setHandler($honda));

for ($i = 1; $i <= 10; $i++) {
    $player_level = rand(1, 30);
    echo sprintf("プレイ：%d回目　あなたのプレイヤーレベル：%d\n", $i, $player_level);
    echo $handler->battle($player_level);
    echo "\n\n";
}

