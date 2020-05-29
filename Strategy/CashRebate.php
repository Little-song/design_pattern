<?php
namespace Strategy;

require_once 'Cash.php';

class CashRebate extends Cash
{
    public $money;
    public $rebateRate; // 折扣率

    public function __construct($rebateRate)
    {
        $this->rebateRate = $rebateRate;
    }

    public function acceptCash()
    {
        return $this->money * $this->rebateRate;
    }
}