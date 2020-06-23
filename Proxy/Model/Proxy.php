<?php
namespace Proxy;

require_once('Givegift.php');
require_once('Pursuit.php');

/**
 * 代理类 Porxy实现公共接口Givegift
 */
class Proxy implements GiveGift
{
    public $pursuit;

    // 在这里与追求者真实实体产生关联
    public function __construct($SchoolGirl)
    {
        $this->pursuit = new Pursuit($SchoolGirl);
    }

    public function giveDolls()
    {
        $this->pursuit->giveDolls();
    }

    public function giveFlowers()
    {
        $this->pursuit->giveFlowers();
    }

    public function giveCar()
    {
        $this->pursuit->giveCar();
    }
}