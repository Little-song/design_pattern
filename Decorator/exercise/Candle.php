<?php
namespace exercise;

require_once('Decorator.php');

class Candle extends Decorator
{
    public function show()
    {
        echo '加点蜡烛 ';
        parent::show();
    }
}