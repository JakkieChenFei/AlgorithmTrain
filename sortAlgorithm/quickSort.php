<?php
$disorderQueue = [3,2,38,5,15,36,26,23,4,25,65,21,42,34];
function quickSort($left, $right)
{
    $i = $left;
    $j = $right;
    if ($left >= $right) {
        return;
    }
    $temp = $GLOBALS['disorderQueue'][$left];
    while ($i < $j) {
        if ($temp > $GLOBALS['disorderQueue'][$j]) {
            $GLOBALS['disorderQueue'][$i] = $GLOBALS['disorderQueue'][$j];
            $GLOBALS['disorderQueue'][$j] = $temp;
            while ($i < $j) {
                if ($temp < $GLOBALS['disorderQueue'][$i]) {
                    $GLOBALS['disorderQueue'][$j] = $GLOBALS['disorderQueue'][$i];
                    $GLOBALS['disorderQueue'][$i] = $temp;
                    break;
                }
                $i++;
            }
        }
        $j--;
    }
    quickSort($left, $i);
    quickSort($i + 1, $right);
}
quickSort(0, sizeof($GLOBALS['disorderQueue']) - 1);
print_r($GLOBALS['disorderQueue']);
