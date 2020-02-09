<?php

require_once __DIR__ . '/Invoker/Queue.php';
require_once __DIR__ . '/Receiver/Ramen.php';
require_once __DIR__ . '/Commands/ShoyuCommand.php';
require_once __DIR__ . '/Commands/MisoCommand.php';
require_once __DIR__ . '/Commands/ShioCommand.php';
require_once __DIR__ . '/Commands/TonkotsuCommand.php';

$queue = new Queue();

// 4人分のオーダーです
$queue->addCommand(new ShoyuCommand(new Ramen()));
$queue->addCommand(new MisoCommand(new Ramen()));
$queue->addCommand(new ShioCommand(new Ramen()));
$queue->addCommand(new TonkotsuCommand(new Ramen()));

$queue->run();

echo "-------------\n";

$queue->addCommand(new ShioCommand(new Ramen()));
$queue->addCommand(new ShoyuCommand(new Ramen()));
$queue->addCommand(new MisoCommand(new Ramen()));
$queue->addCommand(new ShioCommand(new Ramen()));
$queue->addCommand(new TonkotsuCommand(new Ramen()));

$queue->run();
