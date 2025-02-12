<?php

/*
    Challenge 1: Sum of an array
    1. Create an array of numbers
    2. Get the sum of all of the numbers combined and put into a variable.
    3. Get the amount of numbers in the array and put into a variable.
    4. Print out 'The sum of the (amount) numbers is: {sum} '. For
    example, if the array is [1, 2, 3, 4, 5], the output should be 'The
    sum of the 5 numbers is: 15'.
*/
echo '<h3>Sum of an Array</h3>';

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = array_sum($numbers);
$amount = count($numbers);

echo "The sum of the $amount numbers is: $sum";


/*
    Challenge 2: Colors array
    1. Reverse the '$colors array.
    2. Add 'purple' and 'orange' to the end of the array.
    3. Replace the second color with 'pink'
    4. Remove the last element of the array.
    You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'orange', 'yellow'];
$colors = array_reverse($colors);
array_push($colors, 'purple', 'orange');
$colors[1] = 'pink';
array_pop($colors);
print_r($colors);

/*
    Challenge 3: Job listings array
    1. Create a multi-dimensional array of associative arrays of 3 job
     listings with the fields id, job_title, company, contact_email, and
    contact_phone. Also add an array field for skills. The skills array
    should be an array of strings with each skill a person has. For
    example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
    2. Create a new listing using the 'array_push() function. The new
    listing should have the same fields as the others.
    3. Print out the job_title of the second job listing in the array.
    4. Print out the first skill of the third job listing in the array.
*/


echo '<h3>Job listing</h3>';

$array = [
    ['id' => 12, 'job_title' => 'Web Developer', 'company' => 'Osg', 'contact_email' => 'info@osg.com', 'contact_phone' => '+44 000 000 123', 'hobbies' => ['HTML', 'CSS', 'JS', 'PHP']],
    ['id' => 11, 'job_title' => 'Mobile Developer', 'company' => 'Alif', 'contact_email' => 'info@alif.com', 'contact_phone' => '+44 000 000 456', 'hobbies' => ['HTML', 'CSS', 'JS', 'PHP']],
    ['id' => 10, 'job_title' => 'OS Developer', 'company' => 'Iman', 'contact_email' => 'info@iman.com', 'contact_phone' => '+44 000 000 789', 'hobbies' => ['HTML', 'CSS', 'JS', 'PHP']],
];

array_push($array, ['id' => 6, 'job_title' => 'Scrum Developer', 'company' => 'Uzum', 'contact_email' => 'info@uzum.com', 'contact_phone' => '+44 000 435 123', 'hobbies' => ['HTML', 'CSS', 'JS', 'PHP']]);

echo $array[1]['job_title'];
echo '</br>';
echo $array[2]['hobbies'][0];

echo '<pre>';
print_r($array);
echo '</pre>';