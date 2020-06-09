<?php

require 'Model_v1.0/CashNormal.php';
require 'Model_v1.0/CashRebate.php';
require 'Model_v1.0/CashReturn.php';
require 'Model_v1.0/Context.php';

use Strategy\Model_1\Context;
use Strategy\Model_1\CashNormal;
use Strategy\Model_1\CashRebate;
use Strategy\Model_1\CashReturn;

// 获取参数
$type = '打折';
$money = 500;
$rebate = 0.9;
$man = 300;
$jian = 100;

// 根据活动类型，传入具体策略
switch ( $type ) 
{
    case '原价':
        $context = new Context(new CashNormal);
        break;
    case '打折':
        $context = new Context(new CashRebate($rebate));
        break;
    case '满减':
        $context = new Context(new CashReturn($man, $jian));
        break;
    default:
        break;
}

// 调用通过上下文类，调用具体策略的方法，并输出结果
echo $context->getResult($money);

