<?php
namespace SimpleFactory;

require_once 'Operation.php';

/**
 * 乘法运算类，重载父类calculate方法，实现乘法运算
 */
class OperationMul extends Operation
{
    public function calculate($num1, $num2)
    {
        return $num1 * $num2;
    }
}