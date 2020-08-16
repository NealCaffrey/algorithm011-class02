<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $lengthS = strlen($s);
        $lengthT = strlen($t);
        if ($lengthS != $lengthT) {
            return false;
        }
        $map = [];
        for ($i = 0; $i < $lengthS; $i++) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
            $map[$t[$i]] = ($map[$t[$i]] ?? 0) - 1;
        }
        foreach ($map as $m) {
            if ($m != 0) {
                return false;
            }
        }
        return true;
    }
}