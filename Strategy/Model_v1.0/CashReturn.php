<?php
namespace Strategy\Model_1;

require_once 'Cash.php';

// 满减收费子类
class CashReturn extends Cash
{
    // 满减条件             
    public $moneyCondition;   
    // 满减金额
    public $moneyReturn;      

    // 构造函数
    public function __construct($moneyCondition, $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    // 重载父类accpectCash方法
    public function acceptCash($money)
    {
        $money =  $money >= $this->moneyCondition ? ($money - $this->moneyReturn) : $money;
        return $money;
    }
}