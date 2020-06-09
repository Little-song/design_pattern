<?php
namespace Strategy\Model_2;

require_once 'Cash.php';

// 正常收费子类
class CashNormal extends Cash
{
    // 原收取金额
    public $money;  

    // 重载父类accpectCash方法
    public function acceptCash()
    {
        return $this->money;
    }
}