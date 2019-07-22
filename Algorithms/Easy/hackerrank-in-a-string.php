<?php
/**
 * url https://www.hackerrank.com/challenges/hackerrank-in-a-string/problem
 * desc 依次对比每个字符串
 */
function hackerrankInString($s) {
    $target = "hackerrank";
    $len = strlen($s);
    if ($len < 10) {
        return "NO";
    }
    $matched = 0;
    for ($i=0; $i<$len; $i++) {
        if ($s[$i]==$target[$matched]) {
            $matched ++;
        }
    }
    return $matched==10 ? "YES" : "NO";
}
