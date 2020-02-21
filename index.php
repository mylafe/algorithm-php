<?php
require_once 'mylafe/solution.php';

//实例化
$solution = new mylafe\Solution();

$twoSum = $solution->getSum(1, 2);
echo $twoSum . PHP_EOL;
$twoSum = $solution->getCash(1);
echo $twoSum . PHP_EOL;
