<?php
    $output = null;
    $ids = [12, 56, 34, 56];
    $users = ['user2', 'user3', 'user1'];

    $output = count($ids);

    // sort
    sort($ids);
    sort($users);

    // rsort
    rsort($ids);
    rsort($users);

    // array_push
    array_push($ids, 199);
    array_push($users, 'user4');

    // array_pop
    array_pop($ids);
    array_pop($users);

    // array_shift
    array_shift($ids);
    array_shift($users);

    // array_unshift
    array_unshift($ids, 81);
    array_unshift($users, 'user6');

    // array_slice
    $ids2 = array_slice($ids, 1, 3);
    //    var_dump($ids2);

    // array_splice
    array_splice($ids, 2, 1);
    array_splice($ids, 0, 1, 64);

    // array_sum
    $output = array_sum($ids);

    // array_search
    $output = array_search('user1', $users);

    // in_array
    $output = in_array('user2', $users)

    // explode



    // implode
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
        <?=$output ?>
        <h2 class="text-xl font-semibold py-4">IDS:</h2>
        <pre>
            <?php
                print_r($ids);
            ?>
        </pre>
        <h2 class="text-xl font-semibold py-4">Users:</h2>
        <pre>
            <?php
                print_r($users);
            ?>
        </pre>
    </div>
</div>
</body>
</html>