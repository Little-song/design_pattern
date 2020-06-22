<?php

require_once('Model/Person.php');
require_once('Model/Tshirt.php');
require_once('Model/Shoes.php');
require_once('Model/Suit.php');

use Decorator\Person;
use Decorator\Shoes;
use Decorator\Suit;
use Decorator\Tshirt;

$p = new Person('小宋');
$tshirt = new Tshirt();
$shoes = new Shoes();
$suit = new Suit();

echo '第一种装扮：</br>';
// 装饰过程
$tshirt->Decorate($p);
$shoes->Decorate($tshirt);
$shoes->show();

echo '</br>第二种装扮：</br>';
// 装饰过程
$suit->Decorate($p);
$shoes->Decorate($suit);
$shoes->show();