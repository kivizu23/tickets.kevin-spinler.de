<?php

use Kst\Router;
use Kst\Controllers\UserController;
use Kst\Controllers\PageController;

$router = new Router();

$pageController = new PageController();

foreach ($pageController->getPages() as $page) {
    $router->addRoute($page->getSlug(), PageController::class, 'index', $page->getSlug());
}

$uri = $_SERVER['REQUEST_URI'];

$router->dispatch($uri);
