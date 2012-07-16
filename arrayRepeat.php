<?php

function array_repeat_elements(Array $array)
{
    $total = count($array);
    if ($total == 0) {
        return $array;
    }
    $processed = array();
    $result = array();
    for ($i = 0; $i < $total; $i++) {
        $item = array_shift($array);
        $count = 0;
        if (!in_array($item, $processed)) {
            $total = count($array);
            for ($j = 0; $j < count($array); $j++) {
                if ($array[$j] == $item) {
                    $count++;
                }
            }
            $result[$item] = $count + 1;
            $processed[] = $item;
        }
    }
    return $result;
}

$test = array("1", "1", "1", "2", "2", "2");
print_r(array_repeat_elements($test));