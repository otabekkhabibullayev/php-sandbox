<?php

require 'database.php';

$stmt = $pdo->prepare('SELECT * FROM posts');

$stmt->execute();

$posts = $stmt->fetchAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>
<body class="bg-gray-100">
<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">My blog</h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4 space-y-4">
    <?php foreach ($posts as $post) : ?>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $post['title'] ?></h2>
            <p><?= $post['body'] ?></p>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>