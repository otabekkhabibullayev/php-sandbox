<?php

// string
$name = 'Otabek';
$name2 = 'Aziz';
var_dump($name);
echo '<br>';

// integer
$age = 22;
var_dump($age);
echo '<br>';

// float
$rating = 4.5;
var_dump($rating);
echo '<br>';

// boolean
$isLoading = true;
var_dump($isLoading);
echo '<br>';

// Array
$array = [1,2,3,4,5,6];
var_dump($array);
echo '<br>';

// Object
$person = new stdClass();
$person->name = 'Otabek';
$person->age = 20;
$person->rating = 5;
var_dump($person);
echo '<br>';

// Null
$null = null;
var_dump($null);
echo '<br>';

// Resource
//$file = fopen('data.txt', 'r');
//var_dump($file);