<?php

require 'vendor/autoload.php';
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
$app = new \Slim\App();

$app->get("/hello", function() {
    echo "Home";
});

$app->get("/hello/{name}", function(Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, {$name}");
//    echo "Hello, {$name}";
    return $response;
});

$app->run();
