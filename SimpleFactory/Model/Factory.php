<?php
namespace SimpleFactory;

use Exception;

require "OperationAdd.php";
require "OperationSub.php";
require "OperationMul.php";
require "OperationDiv.php";

/**
 * 简单工厂类，根据传入参数实例化具体运算类
 * 如需扩展其他运算，需做以下操作
 * 1、新建扩展运算文件，Operation***.php
 * 2、在此文件引入新建的文件，并在switch语句里增加一个运算符
 */
class Factory
{
    public function createOperation($operator)
    {
        try {
            switch ($operator)
            {
                case '+':
                    $oper = new OperationAdd();
                break;
                case '-':
                    $oper = new OperationSub();
                break;
                case '*':
                    $oper = new OperationMul();
                break;
                case '/':
                    $oper = new OperationDiv();
                break;
                default:
                    throw new Exception("error operator, please enter '+', '-' ,'*', '/'", 1);
            }
        } catch(Exception $e) {
            exit($e->getMessage());
        }
        
        return $oper;
    }
}