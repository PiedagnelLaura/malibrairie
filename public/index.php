<?php

// librairie externe
require __DIR__ . '/../vendor/autoload.php'; 



//liste des routes

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);



$listRoutes = [
    //? home
    [
        'GET',
        '/',
        [
            'method' => 'home',
            'controller' => 'App\Controllers\MainController'
        ],
        'home'
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
