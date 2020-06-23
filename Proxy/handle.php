<?php

use Proxy\Schoolgirl;
use Proxy\Proxy;

require('Model/SchoolGirl.php');
require('Model/Proxy.php');

$schoolGirl = new Schoolgirl('小黄');
$proxy = new Proxy($schoolGirl);

$proxy->giveDolls();
$proxy->giveFlowers();
$proxy->giveCar();


