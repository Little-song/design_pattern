<?php
namespace Proxy;

require_once('Givegift.php');

/**
 * 追求者 真实实体RealSubject 
 */
class Pursuit implements GiveGift
{
    public $SchoolGirl;

    public function __construct($SchoolGirl)
    {
        $this->SchoolGirl = $SchoolGirl;
    }

    public function giveDolls()
    {
        echo $this->SchoolGirl->name . '送你洋娃娃</br>';        
    }

    public function giveFlowers()
    {
        echo $this->SchoolGirl->name . '送你花花</br>';
    }

    public function giveCar()
    {
        echo $this->SchoolGirl->name . '送你车车</br>';
    }
}