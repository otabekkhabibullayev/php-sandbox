<?php
$output = null;
$fruits = [
    ['Apple', 'Red',],
    ['Orange', 'Orange',],
    ['Banana', 'Yellow',],
];

$output = $fruits[0][0];
$fruits[] = ['Kiwi', 'Green',];

$users = [
    ['name' => 'John', 'email' => 'john@example.com', 'password' => 123456],
    ['name' => 'Jane', 'email' => 'jane@example.com', 'password' => 123456],
    ['name' => 'Jack', 'email' => 'jack@example.com', 'password' => 123456],
];

array_push($users, ['name' => 'Nick', 'email' => 'nick@example.com', 'password' => 123456]);

$output = $users[0]['name'];

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
        <?= $output ?>
        <pre>
            <?php print_r($users) ?>
        </pre>
    </div>
</div>
</body>
</html>