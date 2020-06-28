<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hash = [];
        foreach($nums as $k => $v) {
            $diff = $target - $v;
            if(!isset($hash[$diff])) {
                $hash[$v] = $k;
                continue;
            }

            return [$hash[$diff], $k];
        }
    }
}