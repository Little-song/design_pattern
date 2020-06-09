<?php
namespace Strategy\Model_2;

require_once 'Cash.php';

// 满减收费子类
class CashReturn extends Cash
{
    // 原收取金额
    public $money; 
    // 满减条件，默认满300才减                 
    public $moneyCondition = 300;   
    // 满减金额，默认减100
    public $moneyReturn = 100;      

    // 重载父类accpectCash方法
    public function acceptCash()
    {
        $money =  $this->money >= $this->moneyCondition ? ($this->money - $this->moneyReturn) : $this->money;
        return $money;
    }
}