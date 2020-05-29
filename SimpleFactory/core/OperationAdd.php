<?php
namespace SimpleFactory;

require_once 'Operation.php';

/**
 * 加法运算类，重载父类calculate方法，实现加法运算
 */
class OperationAdd extends Operation
{
    public function calculate($num1, $num2)
    {
        return $num1 + $num2;
    }
}