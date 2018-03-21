<?php
function insertionSort()
{
    $disorderQueue = [3, 33, 8421, 492, 2, 401, 23];
    $size = sizeof($disorderQueue);
    for ($i = 1; $i < $size; $i++) {
        $temp = $disorderQueue[$i];
        for ($j = 1; $j <= $i; $j++) {
            if ($temp < $disorderQueue[$i - $j]) {
                $flag = $disorderQueue[$i - $j + 1];
                $disorderQueue[$i - $j + 1] = $disorderQueue[$i - $j];
                $disorderQueue[$i - $j] = $flag;
            }
        }
    }
    print_r($disorderQueue);
}
insertionSort();
