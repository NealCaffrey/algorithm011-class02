<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $len = count($digits);
        $digits[$len - 1]++;
        for($i = $len - 1; $i > 0; $i --) {
            if($digits[$i] == 10) {
                $digits[$i] = 0;
                $digits[$i - 1]++;
            }
        }
        if($digits[0] == 10) {
            $digits[0] = 0;
            array_unshift($digits, 1);
        }
        return $digits;
    }
}