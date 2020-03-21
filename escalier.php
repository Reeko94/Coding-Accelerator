<?php

unset($argv[0]);
$argv = array_values($argv);

for($i = 1;$i<=intval($argv[0]);$i++) {
    for ($k = 1; $k <= $argv[0] - $i;$k++) {
        echo " ";
    }
    for($j=1; $j<=$i;$j++) {
        echo "#";
    }
    echo "\n";
}