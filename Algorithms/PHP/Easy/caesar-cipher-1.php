<?php
/**
 * url https://www.hackerrank.com/challenges/caesar-cipher-1/problem
 * desc 字符串转换，转为ascii后进行计算
 */
function caesarCipher($s, $k) {
    $arr = [];
    $len = strlen($s);
    for ($i=0; $i<$len; $i++) {
        $c = substr($s, $i, 1);
        $o = ord($c);
        if ($o>=65 && $o<=90) {
            $arr[] = chr(($o+$k-65)%26+65);
        } else if ($o>=97 && $o<=122) {
            $arr[] = chr(($o+$k-97)%26+97);
        } else {
            $arr[] = $c;
        }
    }
    return implode('', $arr);
}
