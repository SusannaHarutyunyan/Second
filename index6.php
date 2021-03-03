<?php
$temp = [
    78, 60, 62
    , 68, 71, 68
    , 73, 85, 66
    , 64, 76, 63
    , 75, 76, 73
    , 68, 62, 73
    , 72, 65, 74
    , 62, 62, 65
    , 64, 68, 73
    , 75, 79, 73
];
$average = 0;

foreach ($temp as $value) {
    $average += $value;
}
$average /= count($temp);
echo "Average Temperature is : $average";

$temp = array_unique($temp);
$temp = array_values($temp);
sort($temp);
echo '<br> List of five lowest temperatures: ';
for ($i = 0; $i < 5; $i++) {
    echo $temp[$i];
    if ($i != 4) {
        echo ', ';
    }
}
rsort($temp);
echo '<br> List of five highest temperatures: ';
for ($i = 0; $i < 5; $i++) {
    echo $temp[$i];
    if ($i != 4) {
        echo ', ';
    }
}