<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write('Hello world!');
    return $response;
});

$app->post('/', function (Request $request, Response $response, $args) {
    $body = json_decode($request->getBody(), true);
    $response->getBody()->write(json_encode(['body' => $body]));
    return $response;
});

$app->run();
