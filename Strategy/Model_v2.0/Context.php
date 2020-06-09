<?php
namespace Strategy\Model_2;

require 'CashNormal.php';
require 'CashRebate.php';
require 'CashReturn.php';

/**
 * 上下文类，与简单工厂模式相结合
 */
class Context
{
    // 现金收费抽象类，类型是Cash对象
    public $cash;

    // 构造函数，自动创建收费子类对象，并保存在$cash变量
    public function __construct($type)
    {
        switch ($type) {
            case '原价':
                $this->cash = new CashNormal;
            break;
            case '折扣':
                $this->cash = new CashRebate;
            break;
            case '满减':
                $this->cash = new CashReturn;
            break;
            default:
                echo 'default';
        }
    }

    // 调取收费子类中的acceptCash方法
    public function getResult()
    {
        return $this->cash->acceptCash();
    }
}