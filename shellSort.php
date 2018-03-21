<?php
function shellSort()
{
    $disorderQueue = [3, 33, 8421, 492, 2, 401, 23];
    $size = sizeof($disorderQueue);
    $increment = floor($size/2);
    while ($increment >= 1) {
        for ($i = 0; $i < $size - $increment; $i++) {
            if ($disorderQueue[$i] > $disorderQueue[$i + $increment]) {
                $temp = $disorderQueue[$i];
                $disorderQueue[$i] = $disorderQueue[$i + $increment];
                $disorderQueue[$i + $increment] = $temp;
            }
        }
        $increment = (floor($increment/2) == 1 && ($increment%2 != 0)) ? 2 : floor($increment/2);
    }
    print_r($disorderQueue);
}
shellSort();
