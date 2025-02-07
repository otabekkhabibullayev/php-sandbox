<?php
/*
- 'Y' - The year
- 'm' - The month
- 'd' - The day
- 'D' - The day of the week short name
- 'l' - The full day of the week name
- 'h' - The hour
- 'i' - The minute
- 's' - The second
- 'a' - AM/PM
*/

    // Get Year
    $output = date('Y');

    // Get year with timestamp
    $output = date('Y', 936345600);

    // Get year with strtotime
    $output = date('Y', strtotime('1998-03-17'));

    // Get Month
    $output = date('m');

    // Get Day short day
    $output = date('D');

    // Get Day full day
    $output = date('l');

    // Get month, day and year
    $output = date('Y-m-d');

    // Get hour
    $output = date('h');

    // Get min
    $output = date('i');

    // Get seconds
    $output = date('s');

    // Get am/pm
    $output = date('a');

    // Put it all together
    $output = date('Y-m-d h:i:s a');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>
<body class="bg-gray-100">
<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
         <!-- output -->
        <?= $output  ?>
    </div>
</div>
</body>
</html>