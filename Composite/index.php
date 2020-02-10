<?php

require_once __DIR__ . '/Dir.php';
require_once __DIR__ . '/Leaf/File.php';

$root_dir = new Dir('/');

$file_1 = new File('file_01.txt');
$root_dir->add($file_1);
// = /file_01.txt
var_dump($root_dir);

$file_2 = new File('file_02.txt');
$root_dir->add($file_2);

$root_dir->display();
