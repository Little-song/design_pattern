<?php
/**
 * Created by PhpStorm.
 * User: song
 * Email: <879499473@qq.com>
 * Date: 2020/9/7
 * Time: 09:49
 */

namespace FactoryMethod;

/**
 * 具体工厂
 * Class FactoryAdd
 */
class FactoryAdd implements IFactory
{

    public function createOperation()
    {
        return new OperationAdd();
    }
}