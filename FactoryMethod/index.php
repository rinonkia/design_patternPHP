<?php

require_once __DIR__ . '/Factories/ReaderFactory.php';

$factory = new ReaderFactory();

// パターンA 1つのjsonファイルを処理する
$json = __DIR__ . '/json_files/japan.json';
$pattern_a = $factory->create($json); 
$pattern_a->show();

echo "-----------------";

// パターンB 2つのjsonファイルを処理する
$json_array[] = __DIR__ . '/json_files/regions.json';
$json_array[] = __DIR__ . '/json_files/prefectures.json';
$pattern_b = $factory->create($json_array);
$pattern_b->show();
