<?php 
require '../helpers.php';

// Define an array of routes mapping URI paths to corresponding controller files
$routes = [
    '/' => 'controllers/home.php',
    '/listings' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];

// Retrieve the requested URI from the server environment
$uri = $_SERVER['REQUEST_URI'];

// Check if the requested URI exists as a key in the routes array
if(array_key_exists($uri, $routes)){
    require(basePath($routes[$uri]));
} else {
    require basePath($routes['404']);
}

?>