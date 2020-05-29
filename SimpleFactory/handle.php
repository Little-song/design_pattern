<?php
/**
 * 客户端，控制器
 */

require "core/Factory.php";

use SimpleFactory\Factory;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$factory = new Factory();
$operation = $factory->createOperation($operator);

echo $operation->calculate($num1, $num2);