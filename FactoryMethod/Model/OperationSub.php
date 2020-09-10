<?php
namespace FactoryMethod;


/**
 * 减法运算类，重载父类calculate方法，实现减法运算
 */
class OperationSub extends Operation
{
    public function calculate($num1, $num2)
    {
        return $num1 - $num2;
    }
}