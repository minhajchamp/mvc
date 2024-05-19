<?php

use app\src\Router;
$route = new Router();

$route->get('/users', function () {
    return 2;
});
echo '<pre>';
print_r($route->getRoutes());