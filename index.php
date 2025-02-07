<?php

$names = Array('John', 'Jack', 'Jill');
$numbers = [1,2,3,4,5,6,7,8,9];

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
};

inspect($names);
inspect($numbers);
