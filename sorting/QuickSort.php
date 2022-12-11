<?php

/**
 * Worst O(n^2)
 * Average O(n logn)
 * Best  O(n logn)
 */
function quickSort(array $arr) : array {
    if (count($arr) < 2) {
        return $arr;
    }

    $pivot = (int)(count($arr) / 2); // самый тупой выбор опорника

    $less_arr = [];
    $more_arr = [];

    for ($i = 0; $i <count($arr); $i++) {
        if ($i == $pivot) {
            continue;
        }
        if ($arr[$i] < $arr[$pivot]) {
            $less_arr[] = $arr[$i];
        } else {
            $more_arr[] = $arr[$i];
        }
    }

    return array_merge(quick($less_arr), [$arr[$pivot]], quick($more_arr));
}

$array = [3, 4, 1, 2, 5, 9, 6, 7, 8];
$array = quickSort($array);
print_r($array);