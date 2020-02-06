<?php

$car_models = [
    1 => "laravel",
    2 => "cakephp"
];

$target = $car_models[rand(1,2)];

if ($target == "laravel") {
    $model = new LaravelFactory();
} else {
    echo "error\n";
}

echo sprintf("<h1>Car Model : %s</h1>\n", $target);

$engine = $model->engine();
$engine->add();

$tire = $model->tire();
$tire->add();

$handle = $model->handle();
$handle->add();
