<?php

$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];

for ($i = 0; $i < count($names); $i++) {
    if ($names[$i][0] === 'A') {
        continue;
    }
    echo strtolower(strrev($names[$i]));

    echo '<br>';
}