<?php

// Database

$host = "localhost";
$port = 3306;
$dbname = "blog";
$username = "otabek";
$password = "Otabek0925&";

$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


