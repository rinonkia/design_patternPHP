<?php

require_once __DIR__ . '/Director/FrameworksDirector.php';
require_once __DIR__ . '/Builder/FrameworksBuilder.php';

$builder = new FrameworksBuilder();
$json_path = __DIR__ . '/framework.json';

$director = new FrameworksDirector($builder, $json_path);

$data = $director->getFrameworks();

foreach($data as $d) {
    echo sprintf("<li>%s : %s  [%s]</li>\n", $d->getId(), $d->getName(), $d->getCategory());
}
