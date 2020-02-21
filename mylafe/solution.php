<?php
namespace mylafe;

class Solution
{
    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    public function getSum($a, $b)
    {
        return $a + $b;
    }

    /**
     * @param $a
     * @return float|int
     */
    public function getCash($a)
    {
        return 2 * $a;
    }

    /**
     * @param $monkeys
     * @param $m
     * @param int $current
     */
    public function killMonkey($monkeys , $m , $current = 0){
        $number = count($monkeys);
        $num = 1;
        if (count($monkeys) == 1) {
            echo $monkeys[0]."成为猴王了";
            return;
        } else  {
            while($num++ < $m){
                $current++ ;
                $current = $current%$number;
            }
            echo $monkeys[$current]."的猴子被踢掉了<br/>";
            array_splice($monkeys , $current , 1);
            $this->killMonkey($monkeys , $m , $current);
        }
    }
}
