<?php

require_once __DIR__ . '/Db.php';
require_once __DIR__ . '/View.php';
require_once __DIR__ . '/ArticlesController.php';

$route = $_GET['route'] ?? 'articles/1';
$routes = require __DIR__ . '/routes.php';

$isRouteFound = false;
foreach ($routes as $pattern => $controllerAndAction) {
    preg_match($pattern, $route, $matches);
    if (!empty($matches)) {
        $isRouteFound = true;
        break;
    }
}

if (!$isRouteFound) {
    echo 'Страница не найдена!';
    return;
}

array_shift($matches);

list($controllerName, $actionName) = $controllerAndAction;

$controller = new $controllerName();
$controller->$actionName(...$matches);
