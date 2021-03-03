<?php
$color = ['white', 'green', 'red'];
$count = 1;
echo implode(', ', $color);

?>
<ul>
    <li><?= $color[array_search('green', $color)] ?></li>
    <li><?= $color[array_search('red', $color)] ?></li>
    <li><?= $color[array_search('white', $color)] ?></li>
</ul>