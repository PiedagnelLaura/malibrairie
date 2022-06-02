<?php

// librairie externe
require __DIR__ . '/../vendor/autoload.php'; 



//liste des routes

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
} else { // sinon
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '/';
}

$router->map(
    'GET',
    '/',
    'MainController::home',
    'main-home'
);
$router->map(
    'GET',
    '/livre/[i:id]',
    'BookController::detail',
    'book-detail'
);
$router->map(
    'GET',
    '/categorie/[i:id]',
    'CategoryController::list',
    'category-list'
);
$router->map(
    'GET',
    '/auteur/[i:id]',
    'AuthorController::list',
    'author-list'
);


// DISPATCHE
$match = $router->match();


$dispatcher = new Dispatcher($match, 'ErrorController::err404');


$dispatcher->setControllersNamespace('App\Controllers');


$dispatcher->dispatch();
