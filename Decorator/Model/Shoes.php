<?php
 namespace Decorator;

 require_once('Finery.php');

 /**
 * 具体服饰类 concreteDecorator
 */
 class Shoes extends Finery
 {
    public function show()
    {
        echo '穿鞋子 ';
        parent::show();
    }
 }