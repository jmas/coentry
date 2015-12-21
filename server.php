<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App;

$app->get('/{collection}', function (Request $request, Response $response) {
    return $response;
});

$app->get('/{collection}/{entry}', function (Request $request, Response $response) {
    return $response;
});

$app->run();
