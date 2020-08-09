<?php 

class Solution {

    /**
     * @param Integer[][] $M
     * @return Integer
     */
    function findCircleNum($M) {
        $visitor = [];
        $count = 0;
        for ($i = 0; $i < count($M); $i++) {
            if ($visitor[$i] == 0) {
                $this->dfs($M, $visitor, $i);
                $count++;
            }
        }
        return $count;
    }

    function dfs(&$M, &$visitor, $i) {
        for ($j = 0; $j < count($M); $j++) {
            if ($M[$i][$j] == 1 && $visitor[$j] == 0) {
                $visitor[$j] = 1;
                $this->dfs($M, $visitor, $j);
            }
        }
    }
}