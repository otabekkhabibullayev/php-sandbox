<?php

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? '';
$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? '';
$serverName = $_SERVER['SERVER_NAME'] ?? '';
$serverPort = $_SERVER['SERVER_PORT'] ?? '';
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? '';
$serverAdmin = $_SERVER['SERVER_ADMIN'] ?? '';
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
$scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? '';
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$phpSelf = $_SERVER['PHP_SELF'] ?? '';
$remoteAddr = $_SERVER['REMOTE_ADDR'] ?? '';
$connection = $_SERVER['HTTP_CONNECTION'] ?? '';
$host = $_SERVER['HTTP_HOST'] ?? '';
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$queryString = $_SERVER['QUERY_STRING'] ?? '';
$requestUri = $_SERVER['REQUEST_URI'] ?? '';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
<div class="blocks flex flex-col space-y-2">
    <div class="bg-gray-200 p-4">Request Method: <?= $requestMethod ?></div>
    <div class="bg-gray-200 p-4">Request Protocol: <?= $serverProtocol ?></div>
    <div class="bg-gray-200 p-4">Server name: <?= $serverName ?></div>
    <div class="bg-gray-200 p-4">Server port: <?= $serverPort ?></div>
    <div class="bg-gray-200 p-4">Server Software: <?= $serverSoftware ?></div>
    <div class="bg-gray-200 p-4">Server Admin: <?= $serverAdmin ?></div>
    <div class="bg-gray-200 p-4">Document Root: <?= $documentRoot ?></div>
    <div class="bg-gray-200 p-4">Script filename: <?= $scriptFilename ?></div>
    <div class="bg-gray-200 p-4">Script name: <?= $scriptName ?></div>
    <div class="bg-gray-200 p-4">PHP self: <?= $phpSelf ?></div>
    <div class="bg-gray-200 p-4">Remote Addr: <?= $remoteAddr ?></div>
    <div class="bg-gray-200 p-4">Connection: <?= $connection ?></div>
    <div class="bg-gray-200 p-4">Host: <?= $host ?></div>
    <div class="bg-gray-200 p-4">Refer: <?= $referer ?></div>
    <div class="bg-gray-200 p-4">User Agent: <?= $userAgent ?></div>
    <div class="bg-gray-200 p-4">Query string: <?= $queryString ?></div>
    <div class="bg-gray-200 p-4">Request url: <?= $requestUri ?></div>
</div>
</body>
</html>