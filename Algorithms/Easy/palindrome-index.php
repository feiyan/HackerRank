<?php

/**
 * @desc https://www.hackerrank.com/challenges/palindrome-index/
 */

// Complete the palindromeIndex function below.
function palindromeIndex($s) {
    $i = 0;
    $j = strlen($s) - 1;
    for (; $i<=$j; $i++,$j--) {
        if ($s[$i] != $s[$j]) {
            $s1 = substr($s, $i+1, $j-$i);
            $s2 = substr($s, $i, $j-$i);
            if (empty($s1)) {
                return -1;
            }
            $x = 0;
            $y = strlen($s1) - 1;
            for (; $x<=$y; $x++,$y--) {
                if ($s1[$x] != $s1[$y]) {
                    for (; $x<=$y; $x++,$y--) {
                        if ($s2[$x] != $s2[$y]) {
                            return -2;
                        }
                    }
                    return $j;
                }
            }
            return $i;
        }
    }
    return -1;
}