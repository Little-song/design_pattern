<?php
namespace Strategy;

require 'CashNormal.php';
require 'CashRebate.php';
require 'CashReturn.php';

class Context
{
    public $cash;

    public function __construct($type)
    {
        switch ($type) {
            case '原价':
                $this->cash = new CashNormal;
            break;
            case '折扣':
                $this->cash = new CashRebate(0.8);
            break;
            case '满减':
                $this->cash = new CashReturn(300, 100);
            break;
            default:
                echo 'default';
        }
    }

    public function getResult()
    {
        return $this->cash->acceptCash();
    }
}