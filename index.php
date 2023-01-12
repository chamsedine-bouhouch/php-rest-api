<?php
require __DIR__ . '/vendor/autoload.php';

use Bouhouch\PhpRestApi\Controller\Home;
use Bouhouch\PhpRestApi\Lib\App;
use Bouhouch\PhpRestApi\Lib\{Router, Response, Request};
use Bouhouch\PhpRestApi\Model\Post;

Post::load();

Router::get('/', function () {
    (new Home())->indexAction();
});

Router::get('/post', function (Request $req, Response $res) {
    $res->toJSON(Post::all());
});

Router::post('/post', function (Request $req, Response $res) {
    $post = Post::add($req->getJSON());
    $res->status(201)->toJSON($post);
});

Router::get('/post/([0-9]*)', function (Request $req, Response $res) {
    $post = Post::findById($req->params[0]);
    if ($post) {
        $res->toJSON($post);
    } else {
        $res->status(404)->toJSON(['error' => "Not Found"]);
    }
});

App::run();