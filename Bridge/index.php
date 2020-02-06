<?php

require_once __DIR__ . '/Output.php';
require_once __DIR__ . '/OutputAuto.php';

$json_path = __DIR__ . '/test.json';

$manual = new Output(new FileDataManage($json_path));
$auto = new OutputAuto(new FileDataManage($json_path));

$manual->read();
$auto->read();

echo "\n";
echo '<h2>1つずつ表示</h2>';
echo "\n";
$manual->display();
$manual->display();
$manual->display();

echo "\n";
echo '<h2>すべてを表示</h2>';
echo "\n";
$auto->autoDisplay();
