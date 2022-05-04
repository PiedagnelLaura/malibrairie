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



$listRoutes = [
    [
        'GET',
        '/',
        [
            'method' => 'home',
            'controller' => 'MainController'
        ],
        'main-home'
    ], 
    [
        'GET',
        '/livre/[i:id]',
        'BookController::detail',
        'book-detail'
    ], 
    /*[
        'GET',
        '/catalogue/categorie/[i:id]',
        [
            'method' => 'category',
            'controller' => 'App\Controllers\CatalogController'
        ],
        'category'
    ], 
    [
        'GET',
        '/catalogue/auteur/[i:id]',
        [
            'method' => 'author',
            'controller' => 'App\Controllers\CatalogController'
        ],
        'author'
    ], 
    [
        'GET',
        '/catalogue/edition/[i:id]',
        [
            'method' => 'edition',
            'controller' => 'App\Controllers\CatalogController'
        ],
        'edition'
    ], */

];

$router->addRoutes($listRoutes);

// DISPATCHE
$match = $router->match();


$dispatcher = new Dispatcher($match, 'ErrorController::err404');


$dispatcher->setControllersNamespace('App\Controllers');


$dispatcher->dispatch();
