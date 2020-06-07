<?php
namespace Strategy;

// 现金收费抽象类
abstract class Cash
{
    // 现金收取超类的抽象方法
    abstract public function acceptCash();
}