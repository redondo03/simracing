<?php

require 'vendor/autoload.php';

use eftec\bladeone\bladeone;

$Views = __DIR__ . '\Views';
$Cache = __DIR__ . '\Cache';

$blade = new BladeOne($Views, $Cache);

echo $blade->run('index',["hola"=>"javi"]);