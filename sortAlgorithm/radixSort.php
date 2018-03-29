<?php
function radixSort()
{
	$disorderQueue = [3,2,38,5,15,36,26,23,4,25,65,21,42,34,7];
    $mod = 10;
    $dev = 1;
    $length = 0;
    while ($length < sizeof($disorderQueue)) {
        for ($i = 0; $i <= 10; $i++) { 
            $list[$i] = [];
        }
        for ($j = 0; $j < sizeof($disorderQueue); $j++) {
            $digital = floor($disorderQueue[$j]%$mod/$dev);
            array_push($list[$digital], $disorderQueue[$j]);
        }
        $k = 0;
        foreach ($list as $key => $value) {
            foreach ($value as $keys => $val) {
                $disorderQueue[$k++] = $val;
            }
        }
        $mod *= 10;
        $dev *= 10;
        $length = sizeof($list[0]);
    }
	print_r($disorderQueue);
}
radixSort();