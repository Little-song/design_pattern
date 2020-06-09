<?php

use Strategy\Model_2\Context;

// 引入上下文类
require 'Model_v2.0/Context.php';

// 传入活动类型，实例化上下文类
$context = new Context('折扣');

// 根据收费子类所需参数，设置参数
$context->cash->money = 200;

// 打折收费子类所需要设置的参数
// $context->cash->money = 200;
// $context->cash->rebateRate = 0.9;

// 满减收费子类所需要设置的参数
// $context->cash->money = 200;
// $context->cash->moneyCondition = 500;
// $context->cash->moneyReturn = 100;

// 输出结果
echo $context->getResult();
