<?php
/**
 * url https://www.hackerrank.com/challenges/almost-sorted/problem
 * desc 判断一个数组通过1次交换或者子数组reverse，是否能实现递增排序
 */
function almostSorted($arr) {
    $flag = false;
    $msg = '';
    $sortArr = $arr;
    sort($sortArr);

    //删除和排序后相同的元素，否则对比会导致内存溢出或者超时
    $length = count($arr);
    for( $i=0; $i<$length; $i++ ){
        if( $sortArr[$i]==$arr[$i] ){
            unset($sortArr[$i]);
            unset($arr[$i]);
        }
    }

    //直接reverse剩下的元素，如果和排序的一致，则成功。
    if( array_reverse($arr)===array_values($sortArr) ){
        $flag = true;
        $start = key($arr);
        end($arr);
        $end = key($arr);
        if( count($arr)==2 ){
            $msg = 'swap '.($start+1).' '.($end+1);
        } else {
            $msg = 'reverse '.($start+1).' '.($end+1);
        }
    }
    echo $flag===true ? "yes\n".$msg : 'no';
}
