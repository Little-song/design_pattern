<?php
namespace Strategy;

require_once 'Cash.php';

class CashNormal extends Cash
{
    public $money;

    public function acceptCash()
    {
        return $this->money;
    }
}