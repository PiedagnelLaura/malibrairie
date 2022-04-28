<?php

// librairie externe
require __DIR__ . '/../vendor/autoload.php'; 



//liste des routes

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);



$listRoutes = [
    [
        'GET',
        '/',
        [
            'method' => 'home',
            'controller' => 'App\Controllers\MainController'
        ],
        'home'
    ], 
    [
        'GET',
        '/mentions-legales',
        [
            'method' => 'legalNotice',
            'controller' => 'App\Controllers\MainController'
        ],
        'legalNotice'
    ], 
    [
        'GET',
        '/condition-generale-de-vente',
        [
            'method' => 'generalCondition',
            'controller' => 'App\Controllers\MainController'
        ],
        'generalCondition'
    ], 
    [
        'GET',
        '/catalogue/detail/[i:id]',
        [
            'method' => 'detail',
            'controller' => 'App\Controllers\CatalogController'
        ],
        'detail'
    ], 
    [
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
    ], 

];

$router->addRoutes($listRoutes);

// DISPATCHE
$match = $router->match();


if ($match === false) {
    // normalement ce serait une 404, car on arrive dans ce bloc de code seulement si on a demandé une page non prévue
    header("HTTP/1.1 404 Not Found");
}
else {

    $controller = $match['target']['controller'];

    $method = $match['target']['method'];


    //? Instanciation dynamique
    $instanceController = new $controller();

    $instanceController->$method($match['params']);


}
