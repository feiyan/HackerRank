<?php
/**
 * url https://www.hackerrank.com/challenges/mars-exploration/problem
 * desc 最最最基础的字符串比对
 */
function marsExploration($s) {
    $len = strlen($s);
    if (!$len) {
        return 0;
    }
    $diff = 0;
    for ($i=0; $i<$len; $i++) {
        $n = $i % 3;
        if (($n == 0 || $n == 2) && $s[$i] != 'S') {
            $diff ++;
        }
        if ($n == 1 && $s[$i] != 'O') {
            $diff ++;
        }
    }
    return $diff;
}
