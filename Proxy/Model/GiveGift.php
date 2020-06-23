<?php
namespace Proxy;

/**
 * 公共接口, 定义Proxy和RealSubject的共用接口, 在任何使用RealSubject的地方都可以使用Proxy
 */
interface GiveGift
{
    public function giveFlowers();

    public function giveDolls();

    public function giveCar();

}