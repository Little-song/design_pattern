<?php
namespace Strategy\Model_1;

/**
 * 上下文类
 */
class Context
{
    // 现金收费抽象类，类型是Cash对象
    public $cash;

    // 构造函数，传入Cash类对象实例
    public function __construct(Cash $cash)
    {
        $this->cash = $cash;
    }

    // 调取收费子类中的acceptCash方法
    public function getResult($money)
    {
        return $this->cash->acceptCash($money);
    }
}