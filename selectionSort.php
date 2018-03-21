<?php
function selectionSort()
{
    $disorderQueue = [3, 33, 8421, 492, 2, 401, 23];
    $size = sizeof($disorderQueue);
    for ($i = 0; $i < $size; $i++) {
        $flag = $i;
        for ($j = $i + 1; $j < $size; $j++) { 
            if ($disorderQueue[$j] < $disorderQueue[$flag]) {
                $flag = $j;
            }
        }
        $temp = $disorderQueue[$i];
        $disorderQueue[$i] = $disorderQueue[$flag];
        $disorderQueue[$flag] = $temp;
    }
    print_r($disorderQueue);
}
selectionSort();
