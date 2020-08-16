<?php

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        $result = 0;
        for ($i = 0; $i < 32; ++$i) {
            $result = ($result << 1) + ($n & 1);
            $n = $n >> 1;
        }
        return $result;
    }
}