<?php

use exercise\Cake;
use exercise\Candle;
use exercise\Fruit;
use exercise\Decorator;

require_once('Cake.php');
require_once('Candle.php');
require_once('Fruit.php');
require_once('Decorator.php');

$cake = new Cake('小宋');

// $cake->show();

$decorator = new Decorator;
$candle = new Candle;
$fruit = new Fruit;

// 装饰过程
$candle->setComponent($cake);   // 加点蜡烛
$fruit->setComponent($candle);  // 加点水果
$fruit->show();