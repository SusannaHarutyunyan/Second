<?php
//4rd
$x = [1, 2, 3, 4, 5];
array_splice($x, $x[array_rand($x)] - 1, 1);
echo '<pre>';
print_r($x);
echo '</pre>';

//5rd
$color = [4 => 'white', 6 => 'green', 11 => 'red'];
echo $color[array_key_first($color)] . '<br>';
//or
$first = array_shift($color);
echo $first;

