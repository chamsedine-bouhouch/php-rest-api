<?php
require __DIR__ . '/vendor/autoload.php';

use Bouhouch\PhpRestApi\Controller\Home;
use Bouhouch\PhpRestApi\Lib\App;
use Bouhouch\PhpRestApi\Lib\{Router, Response, Request};


Router::get('/', function () {
    (new Home())->indexAction();
 });

Router::get('/post/([0-9]*)', function (Request $req, Response $res) {
    $res->toJSON([
        'post' =>  ['id' => $req->params[0]],
        'status' => 'ok'
    ]);
});

App::run();
