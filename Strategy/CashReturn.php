<?php
namespace Strategy;

require_once 'Cash.php';

class CashReturn extends Cash
{
    public $money;
    public $moneyCondition;
    public $moneyReturn;

    public function __construct($moneyCondition, $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash()
    {
        
    }
}