<?php
$disorderQueue = [3,2,38,5,15,36,26,23,4,25,65,21,42,34,7];
function splitSort($array, $left, $right)
{
    if ($left >= $right) {
        if (!is_array($array[$left])) {
            return [0 => $array[$left]];
        }
        return $array[$left];
    }
    $mid = floor(($left + $right)/2);
    $arrayLeft = splitSort($array, $left, $mid);
    $arrayRight = splitSort($array, $mid + 1, $right);

    return mergeSort($arrayLeft, $arrayRight);
}
function mergeSort($arrayLeft, $arrayRight)
{
    $i = $j = $k = 0;
    $list = array();
    while (($i < sizeof($arrayLeft)) && ($j < sizeof($arrayRight))) {
        $list[$k++] =  ($arrayLeft[$i] < $arrayRight[$j]) ? $arrayLeft[$i++] : $arrayRight[$j++];
    }
    while ($i < sizeof($arrayLeft)) {
        $list[$k++] = $arrayLeft[$i++];
    }
    while ($j < sizeof($arrayRight)) {
        $list[$k++] = $arrayRight[$j++];
    }

    return $list;
}
print_r(splitSort($GLOBALS['disorderQueue'], 0, sizeof($GLOBALS['disorderQueue']) - 1));
