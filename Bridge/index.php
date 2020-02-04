<?php

$json_path = 'json///////';

$manual = new Output(new FileDataManage($json_path));
$auto = new OutputAuto(new FileDataManage($json_path));

$manual->read();
$auto->read();

echo '<h2>1つずつ表示</h2>';
$manual->display();
$manual->display();
$manual->display();

echo '<h2>すべてを表示</h2>';
$auto->autoDisplay();
