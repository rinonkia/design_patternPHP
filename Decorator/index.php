<?php

require_once __DIR__ . '/Components/TravelPlan.php';
require_once __DIR__ . '/Decorators/Packs/AirplanePack.php';
require_once __DIR__ . '/Decorators/Packs/HotelPack.php';

$plan_base = new TravelPlan();
$plan_base->setPlan('沖縄');
$plan_base->setDuration('9/20 - 9/25');
echo "<h2>旅行プラン（ベース）</h2>\n";
echo sprintf("%s  %s\n", $plan_base->getDuration(), $plan_base->getPlan());

echo "\n------\n";

$pack_plan_1 = new AirplanePack($plan_base, 'Laravel航空', 50000);
echo "<h2>旅行プラン1 飛行機パック</h2>\n";
echo $pack_plan_1->getPlan();
echo number_format($pack_plan_1->getCost());

echo "\n------\n";

$pack_plan_2 = new HotelPack($plan_base, 'PHPホテル', 67000);
echo "<h2>旅行プラン2 ホテルパック</h2>\n";
echo $pack_plan_2->getPlan();
echo number_format($pack_plan_2->getCost());

echo "\n------\n";

echo "<h2>旅行プラン3 飛行機+ホテルパック</h2>\n";
$pack_plan_3 = new HotelPack(
    new AirplanePack($plan_base, 'Laravel航空', 50000),
    'PHPホテル',
    67000
);

echo $pack_plan_3->getPlan();
echo number_format($pack_plan_3->getCost());
