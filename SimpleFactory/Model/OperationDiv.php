<?php
namespace SimpleFactory;

require_once 'Operation.php';

/**
 * 除法运算类，重载父类calculate方法，实现除法运算
 */
class OperationDiv extends Operation
{
    public function calculate($num1, $num2)
    {
        return $num1 / $num2;
    }
}