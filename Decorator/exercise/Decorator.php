<?php
namespace exercise;

require_once('Cake.php');

class Decorator extends Cake
{
    protected $component;

    public function setComponent(Cake $component)
    {
        $this->component = $component;
    }

    public function show()
    {
        $this->component->show();
    }
}