<?php

require_once  'Singleton.php';

$obj1 = Singleton::getInstance();
sleep(2);
$obj2 = Singleton::getInstance();
echo $obj1 === $obj2 ? "obj1とobj2は同じインスタンスです。" : "obj1とobj2は同じインスタンスではありません";

$instance = clone $obj1;