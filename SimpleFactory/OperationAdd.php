<?php
namespace SimpleFactory;

require 'Operation.php';

use SimpleFactory\Operation;

class OperationAdd extends Operation
{
    public $num1;
    public $num2;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;   
        $this->num2 = $num2;   
    }

    public function calculate()
    {
        return $this->num1 + $this->num2;
    }
}