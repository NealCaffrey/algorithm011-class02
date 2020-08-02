<?php 

class Solution {

    /**
     * @param String[][] $matrix
     * @return Integer
     */
    function maximalSquare($matrix) {
        $m = count($matrix);
        $n = count($matrix[0]);

        if ($matrix == null || $m == 0 || $n == 0) {
            return 0;
        }

        $dp = array_fill(0, $m, array_fill(0, $n, 0));
        $max = 0;

        for ($i = 0; $i < $m; $i++) {
            $dp[$i][0] = ($matrix[$i][0] == 1) ? 1 : 0;
            $max = max($max, $dp[$i][0]);
        }

        for ($j = 0; $j < $n; $j++) {
            $dp[0][$j] = ($matrix[0][$j] == 1) ? 1 : 0;
            $max = max($max, $dp[0][$i]);
        }

        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                if ($matrix[$i][$j] == 1) {
                    $dp[$i][$j] = min($dp[$i - 1][$j], $dp[$i][$j - 1], $dp[$i - 1][$j - 1]) + 1; 
                    $max = max($max, $dp[$i][$j]);
                }
            }
        }

        return $max * $max;
    }
}