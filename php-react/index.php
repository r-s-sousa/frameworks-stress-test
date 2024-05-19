<?php

require __DIR__ . '/vendor/autoload.php';

$http = new React\Http\HttpServer(function (Psr\Http\Message\ServerRequestInterface $request) {
    $body = json_decode((string)$request->getBody());

    return React\Http\Message\Response::json(
        ['body: ' => $body]
    );
});

$socket = new React\Socket\SocketServer('127.0.0.1:8080');
$http->listen($socket);

echo 'Server running at http://127.0.0.1:8080' . PHP_EOL;
