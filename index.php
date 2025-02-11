<?php
$output = null;
$user = [
    'name' => 'John Doe',
    'email' => 'john@doe.com',
    'password' => 12345678,
    'hobbies' => ['soccer', 'basketball', 'football']
];
$output = $user['name'];
$output = $user['email'];
$output = $user['hobbies'][0];
$user['address'] = 'Tashkent'
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
        <h2 class="text-xl font-semibold py-4">Associative arrays:</h2>
        <pre>
            <?php
            print_r($user);
            ?>
        </pre>
    </div>
</div>
</body>
</html>