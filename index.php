<?php
    $output = null;

    $num1 = 10;
    $num2 = 20;

    // Basic Math
    $output = "$num1 + $num2 = " . ($num1 + $num2);
    $output = "$num1 - $num2 = " . ($num1 - $num2);
    $output = "$num1 * $num2 = " . ($num1 * $num2);
    $output = "$num1 / $num2 = " . ($num1 / $num2);
    $output = "$num1 % $num2 = " . ($num1 % $num2);

    //Assignment operator

    $num3 = 10;

//    $output = $num3 += 20;
//    $output = $num3 -= 20;
//    $output = $num3 *= 20;
    $output = $num3 /= 2;

    // Built-in php functions

    // rand()
    $output = rand();
    $output = getrandmax(); // max rand value
    $output = rand(1, 100);

    //round()
    $output = round(2.5);

    // ceil()
    $output = ceil(1.1);

    //floor
    $output = floor(1.9);

    // sqrt()
    $output = sqrt(121);

    //pi()
    $output =  pi();

    //abs()
    $output = abs(1.9);

    //max()
    $output = max(1,2,3,40,5);

    //min()
    $output = min(1,2,3,40,5);
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