<?php
namespace exercise;

require_once('Decorator.php');

class Fruit extends Decorator
{
    public function show()
    {
        echo '加点水果 ';
        parent::show();
    }
}