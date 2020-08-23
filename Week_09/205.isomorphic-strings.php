<?php 

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $n = strlen($s);
        if ($n != strlen($t)) return false;
        for ($i = 0; $i < $n; $i++) {
            if (strpos($s, $s[$i]) != strpos($t, $t[$i])) return false;
        }
        return true;
    }
}