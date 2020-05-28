<?php

require "OperationAdd.php";

use SimpleFactory\OperationAdd;

$num1= $_POST['num1'];
$num2= $_POST['num2'];
$operator= $_POST['operator'];

$add = new OperationAdd(1, 2);
echo $add->calculate();
