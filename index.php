<?php

$names = ['John Doe', 'Matthew Thomas', 'Jose Ramirez', 'Mary Jane'];

$users = [
    ['name' => 'John Doe', 'email' => 'johndoe@example.com'],
    ['name' => 'Otabek', 'email' => 'janedoe@bek.com'],
    ['name' => 'Aziz', 'email' => 'janedoe@aziz.com'],
    ['name' => 'Mary', 'email' => 'janedoe@mary.com'],
]
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP from scratch</title>
</head>
<body class="bg-gray-100">
<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold"><?= 'Learn PHP From Scratch' ?></h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
        <ul class="mb-6">
            <?php for ($i = 0; $i < count($names); $i++): ?>
                <li><?= $names[$i] ?></li>
            <?php endfor; ?>
        </ul>
        <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
        <ul class="mb-6">
            <?php foreach ($names as $name): ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ul>
        <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
        <ul class="mb-6">
            <?php foreach ($names as  $index => $name): ?>
                <li><?= "$index: $name" ?></li>
            <?php endforeach; ?>
        </ul>
        <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
        <ul class="mb-6">
            <?php foreach ($users as $user): ?>
                <li><?= $user['name'] ?></li>
            <?php endforeach; ?>
        </ul>
        <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
        <ul class="mb-6">
            <?php foreach ($users as $user): ?>
                <?php foreach ($user as $key => $value): ?>
                    <li><?= "$key: $value" ?></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>