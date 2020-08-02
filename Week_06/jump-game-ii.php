<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums) {
        $count = $end = $max_pos = 0;
        for ($i = 0; $i < $count($nums) - ; $i++) {
            $max_pos = max($max_pos, $nums[$i] + $i);
            if ($end == $i) {
                $end = $max_pos;
                $count++;
            }
        }
        return $count;
    }
}