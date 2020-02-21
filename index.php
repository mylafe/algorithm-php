<?php
require_once 'mylafe/solution.php';

$solution = new mylafe\Solution();

$twoSum = $solution->getSum(1, 2);
echo $twoSum . PHP_EOL;

$twoSum = $solution->getCash(1);
echo $twoSum . PHP_EOL;

$monkeys = array(1 , 2 , 3 , 4 , 5 , 6 , 7, 8 , 9 , 10); //monkey的编号
$m = 4; //数到第几只的那只猴子被踢出去
$solution->killMonkey($monkeys , $m);
