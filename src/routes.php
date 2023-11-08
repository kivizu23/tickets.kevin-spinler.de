<?php

use Kst\Router;
use Kst\Controllers\UserController;
use Kst\Controllers\PageController;

$router = new Router();

$pageController = new PageController();

foreach ($pageController->getPages() as $page) {
    $router->addRoute($page->getSlug(), PageController::class, 'index', $page->getSlug());
}

$router->dispatch($_SERVER['REQUEST_URI']);
