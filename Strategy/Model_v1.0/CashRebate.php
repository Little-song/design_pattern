<?php
namespace Strategy\Model_1;

require_once 'Cash.php';

// 打折收费子类
class CashRebate extends Cash
{
    // 折扣率       
    public $rebateRate; 
    
    // 构造函数
    public function __construct($rebateRate)
    {
        $this->rebateRate = $rebateRate;
    }

    // 重载父类accpectCash方法
    public function acceptCash($money)
    {
        return $money * $this->rebateRate;
    }
}