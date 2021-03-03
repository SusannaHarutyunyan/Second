<?php

$color = ['white', 'green', 'red', 'blue', 'black'];
$str = <<<HERE
"The memory of that scene for me is like a frame of film forever frozen at that moment:
 the {$color[array_search('red', $color)]} carpet, the {$color[array_search('green', $color)]} lawn, 
 the  {$color[array_search('white', $color)]}  house, the leaden sky. 
 The new president and his first lady. - Richard M. Nixon"

HERE;
echo $str;
