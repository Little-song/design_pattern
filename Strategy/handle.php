<?php

use Strategy\Context;

require 'Context.php';


$context = new Context('折扣');
$context->cash->money = 10;
echo $context->getResult();
