<?php
namespace Decorator;

require_once('Finery.php');

/**
 * 具体服饰类 concreteDecorator
 */
class Suit extends Finery
{
    public function show()
    {
        echo '穿西装 ';
        parent::show();
    }
}