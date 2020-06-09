<?php
namespace Strategy\Model_1;

require_once 'Cash.php';

// 正常收费子类
class CashNormal extends Cash
{
    // 重载父类accpectCash方法
    public function acceptCash($money)
    {
        return $money;
    }
}