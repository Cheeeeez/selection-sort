<?php
$array = [1, 9, 4.5, 6.6, 5.7, -4.5,];

function selectionSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] > $list[$max]) {
                $max = $j;
            }
        }
        $temp = $list[$i];
        $list[$i] = $list[$max];
        $list[$max] = $temp;
    }
    return $list;
}

echo "Original Array:<br>";
echo implode(", ", $array);
echo "<br>Sorted Array: <br>";
echo implode(", ", selectionSort($array));