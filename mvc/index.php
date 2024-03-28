<?php

use App\Controllers\HomeController;
use App\Models\ProductModel;
use Phroute\Phroute\RouteCollector;

require_once "env.php";
require_once "functions.php";
require_once __DIR__ . "/vendor/autoload.php";

//Lấy đường dẫn
$url = $_GET['url'] ?? '/';

$router = new RouteCollector();

$router->get("/", [HomeController::class, 'index']);
$router->get('/product/detail/{id}', [HomeController::class, 'detail']);
$router->get("/contact", function () {
    echo "CONTACT PAGE";
});
$router->get("/user/{id}", function ($id) {
    echo "User id: $id";
});

$router->group(
    ['prefix' => 'admin'],
    function ($router) {
        $router->get('product', function () {
            echo "PRODUCT";
        });
        $router->get("categories", function () {
            echo "Categories";
        });
    }
);


try {
    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;
} catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    echo "404 FILE NOT FOUND!";
}
