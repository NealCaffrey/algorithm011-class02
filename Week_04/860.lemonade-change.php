<?php 

class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $money = [5 => 0, 10 => 0];
        foreach($bills as $k => $v) {
            if ($v == 5) {
                $money[5] += 1;
            } else if ($v == 10) {
                $money[10] += 1;
                $money[5] -= 1;
                if ($money[5] < 0) {
                    return false;
                }
            } else if ($v == 20) {
                $money[10] -= 1;
                if ($money[10] < 0) {
                    $money[5] -= 3;
                    $money[10] = 0;
                    if ($money[5] < 0) {
                        return false;
                    }
                } else {
                    $money[5] -= 1;
                    if ($money[5] < 0) {
                        return false;
                    }
                }
            }
        }
        return true;
    }
}