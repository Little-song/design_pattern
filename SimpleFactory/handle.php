<?php
/**
 * 客户端，控制器
 */

require "Model/Factory.php";

use SimpleFactory\Factory;

// 获取参数和操作符
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
// 实例化工厂
$factory = new Factory();
// 传入操作符，创建对应计算类
$operation = $factory->createOperation($operator);
// 输出结果
echo $operation->calculate($num1, $num2);