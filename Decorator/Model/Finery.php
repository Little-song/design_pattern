<?php
namespace Decorator;

require_once('Person.php');

/**
 * 服饰类 Decorator
 */
class Finery extends Person
{
    protected $component;

    public function Decorate(Person $component)
    {
        $this->component = $component;
    }

    public function show()
    {
        if($this->component != '')
        {
            $this->component->show();
        }
    }
}