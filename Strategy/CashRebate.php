<?php
namespace Strategy;

require_once 'Cash.php';

// 打折收费子类
class CashRebate extends Cash
{
    // 原收取金额
    public $money;   
    // 折扣率，默认8折         
    public $rebateRate = 0.8; 
    
    // 重载父类accpectCash方法
    public function acceptCash()
    {
        return $this->money * $this->rebateRate;
    }
}