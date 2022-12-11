<?php

/**
 * Worst O(n^2)
 * Average O(n^2)
 * Best O(n)
 */
function insertSort(array $arr): array {
    $count = count($arr);
    for ($i = 1; $i < $count; $i++) {
        for ($j = $i; $j >= 1 && $arr[$j] < $arr[$j-1]; $j--) {
            list($arr[$j], $arr[$j-1]) = array($arr[$j-1], $arr[$j]);
        }
    }

    return $arr;
}

$array = [3,4,1,2,5,9,6,7,8];
$array = insertSort($array);
print_r($array);