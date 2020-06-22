<?php
namespace exercise;

class Cake
{
    public $name;

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function show()
    {
        echo $this->name . '做了一个蛋糕';
    }
}