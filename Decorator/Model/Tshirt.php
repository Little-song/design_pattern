<?php
namespace Decorator;

require_once('Finery.php');

/**
 * 具体服饰类 concreteDecorator
 */
class Tshirt extends Finery
{
    public function show()
    {
        echo '穿T恤 ';
        parent::show();
    }
}